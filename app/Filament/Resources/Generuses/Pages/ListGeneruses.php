<?php

namespace App\Filament\Resources\Generuses\Pages;

use App\Filament\Resources\Generuses\GenerusResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListGeneruses extends ListRecords
{
    protected static string $resource = GenerusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
