<?php

namespace App\Filament\Resources\Pembinaans\Pages;

use App\Filament\Resources\Pembinaans\PembinaanResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPembinaan extends EditRecord
{
    protected static string $resource = PembinaanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
