<?php

namespace App\Filament\Resources\MateripembelajaranResource\Pages;

use App\Filament\Resources\MateripembelajaranResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMateripembelajaran extends EditRecord
{
    protected static string $resource = MateripembelajaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
