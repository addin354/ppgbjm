<?php

namespace App\Filament\Resources\GenerusTargets\Pages;

use App\Filament\Resources\GenerusTargets\GenerusTargetResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditGenerusTarget extends EditRecord
{
    protected static string $resource = GenerusTargetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
