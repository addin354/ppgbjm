<?php

namespace App\Filament\Resources\Pembinaans\Pages;

use App\Filament\Resources\Pembinaans\PembinaanResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPembinaans extends ListRecords
{
    protected static string $resource = PembinaanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
