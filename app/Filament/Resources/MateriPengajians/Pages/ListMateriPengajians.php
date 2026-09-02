<?php

namespace App\Filament\Resources\MateriPengajians\Pages;

use App\Filament\Resources\MateriPengajians\MateriPengajianResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMateriPengajians extends ListRecords
{
    protected static string $resource = MateriPengajianResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
