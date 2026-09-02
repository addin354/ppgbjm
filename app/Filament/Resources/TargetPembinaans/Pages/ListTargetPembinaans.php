<?php

namespace App\Filament\Resources\TargetPembinaans\Pages;

use App\Filament\Resources\TargetPembinaans\TargetPembinaanResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTargetPembinaans extends ListRecords
{
    protected static string $resource = TargetPembinaanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
