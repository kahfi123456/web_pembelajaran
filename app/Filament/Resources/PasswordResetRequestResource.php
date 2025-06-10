<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PasswordResetRequestResource\Pages;
use App\Models\PasswordResetRequest;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class PasswordResetRequestResource extends Resource
{
    protected static ?string $model = PasswordResetRequest::class;

    protected static ?string $navigationLabel = 'Permintaan Reset Password';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(fn (Builder $query) => $query->with('mahasiswa'))
            ->columns([
                Tables\Columns\TextColumn::make('mahasiswa.email')
                    ->label('Email Mahasiswa')
                    ->default('Email tidak ditemukan'),
                Tables\Columns\TextColumn::make('status')->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'menunggu' => 'warning',
                        'disetujui' => 'success',
                        'selesai' => 'success',
                        'ditolak' => 'danger',
                    }),
                Tables\Columns\TextColumn::make('created_at')->label('Tanggal Permintaan')
                    ->dateTime('d M Y H:i') 
                    ->timezone('Asia/Jakarta'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('setujui')
                    ->label('Setujui')
                    ->action(function (PasswordResetRequest $record) {
                        $mahasiswa = $record->mahasiswa;
                        if (!$mahasiswa || !$mahasiswa->email) {
                            \Filament\Notifications\Notification::make()
                                ->title('Gagal mengirim email')
                                ->body('Email mahasiswa tidak ditemukan.')
                                ->danger()
                                ->send();
                            return;
                        }

                        $token = Str::random(60);
                        $record->update([
                            'status' => 'disetujui',
                            'token' => $token,
                            'expires_at' => now()->addHours(24),
                        ]);

                        Log::info('Mengirim email reset password', [
                            'mahasiswa_id' => $mahasiswa->id,
                            'email' => $mahasiswa->email,
                            'token' => $token,
                        ]);

                        try {
                            Mail::to($mahasiswa->email)->send(new \App\Mail\PasswordResetLink($mahasiswa, $token));
                            \Filament\Notifications\Notification::make()
                                ->title('Email Terkirim')
                                ->body('Link reset password telah dikirim ke ' . $mahasiswa->email)
                                ->success()
                                ->send();
                        } catch (\Exception $e) {
                            Log::error('Gagal mengirim email reset password: ' . $e->getMessage());
                            \Filament\Notifications\Notification::make()
                                ->title('Gagal Mengirim Email')
                                ->body('Terjadi kesalahan: ' . $e->getMessage())
                                ->danger()
                                ->send();
                        }
                    })
                    ->requiresConfirmation()
                    ->visible(fn (PasswordResetRequest $record) => $record->status === 'menunggu'),
                Tables\Actions\Action::make('tolak')
                    ->label('Tolak')
                    ->action(function (PasswordResetRequest $record) {
                        $record->update(['status' => 'ditolak']);
                    })
                    ->requiresConfirmation()
                    ->visible(fn (PasswordResetRequest $record) => $record->status === 'menunggu'),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPasswordResetRequests::route('/'),
        ];
    }
}