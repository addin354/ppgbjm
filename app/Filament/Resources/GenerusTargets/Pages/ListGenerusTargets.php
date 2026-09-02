<?php

namespace App\Filament\Resources\GenerusTargets\Pages;

use App\Filament\Resources\GenerusTargets\GenerusTargetResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListGenerusTargets extends ListRecords
{
    protected static string $resource = GenerusTargetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
