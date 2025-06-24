<?php

namespace App\Filament\Resources\SuratpengajuanResource\Pages;

use App\Filament\Resources\SuratpengajuanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSuratpengajuans extends ListRecords
{
    protected static string $resource = SuratpengajuanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
