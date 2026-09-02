<?php

namespace App\Filament\Resources\KarakterLuhurs\Pages;

use App\Filament\Resources\KarakterLuhurs\KarakterLuhurResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditKarakterLuhur extends EditRecord
{
    protected static string $resource = KarakterLuhurResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
