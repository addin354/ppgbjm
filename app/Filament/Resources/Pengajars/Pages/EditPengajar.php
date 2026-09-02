<?php

namespace App\Filament\Resources\Pengajars\Pages;

use App\Filament\Resources\Pengajars\PengajarResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPengajar extends EditRecord
{
    protected static string $resource = PengajarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
