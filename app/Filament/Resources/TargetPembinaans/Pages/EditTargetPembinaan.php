<?php

namespace App\Filament\Resources\TargetPembinaans\Pages;

use App\Filament\Resources\TargetPembinaans\TargetPembinaanResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTargetPembinaan extends EditRecord
{
    protected static string $resource = TargetPembinaanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
