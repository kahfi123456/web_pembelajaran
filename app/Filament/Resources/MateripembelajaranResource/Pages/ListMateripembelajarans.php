<?php

namespace App\Filament\Resources\MateripembelajaranResource\Pages;

use App\Filament\Resources\MateripembelajaranResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMateripembelajarans extends ListRecords
{
    protected static string $resource = MateripembelajaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
