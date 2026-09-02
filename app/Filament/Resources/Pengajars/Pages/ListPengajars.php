<?php

namespace App\Filament\Resources\Pengajars\Pages;

use App\Filament\Resources\Pengajars\PengajarResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPengajars extends ListRecords
{
    protected static string $resource = PengajarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
