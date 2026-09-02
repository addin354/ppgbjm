<?php

namespace App\Filament\Resources\KarakterLuhurs\Pages;

use App\Filament\Resources\KarakterLuhurs\KarakterLuhurResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKarakterLuhurs extends ListRecords
{
    protected static string $resource = KarakterLuhurResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
