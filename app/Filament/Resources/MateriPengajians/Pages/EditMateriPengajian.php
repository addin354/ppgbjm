<?php

namespace App\Filament\Resources\MateriPengajians\Pages;

use App\Filament\Resources\MateriPengajians\MateriPengajianResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditMateriPengajian extends EditRecord
{
    protected static string $resource = MateriPengajianResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
