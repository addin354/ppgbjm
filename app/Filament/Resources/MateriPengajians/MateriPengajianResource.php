<?php

namespace App\Filament\Resources\MateriPengajians;

use App\Filament\Resources\MateriPengajians\Pages\CreateMateriPengajian;
use App\Filament\Resources\MateriPengajians\Pages\EditMateriPengajian;
use App\Filament\Resources\MateriPengajians\Pages\ListMateriPengajians;
use App\Filament\Resources\MateriPengajians\Schemas\MateriPengajianForm;
use App\Filament\Resources\MateriPengajians\Tables\MateriPengajiansTable;
use App\Models\MateriPengajian;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MateriPengajianResource extends Resource
{
    protected static ?string $model = MateriPengajian::class;

    protected static string | \UnitEnum | null $navigationGroup = 'Referensi pembinaan';

    protected static ?int $navigationSort = 2;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBookOpen;

    public static function form(Schema $schema): Schema
    {
        return MateriPengajianForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MateriPengajiansTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListMateriPengajians::route('/'),
            'create' => CreateMateriPengajian::route('/create'),
            'edit' => EditMateriPengajian::route('/{record}/edit'),
        ];
    }
}
