<?php

namespace App\Filament\Resources\Generuses\Pages;

use App\Filament\Resources\Generuses\GenerusResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditGenerus extends EditRecord
{
    protected static string $resource = GenerusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
