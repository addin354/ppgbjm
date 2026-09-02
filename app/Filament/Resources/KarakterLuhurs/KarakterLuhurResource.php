<?php

namespace App\Filament\Resources\KarakterLuhurs;

use App\Filament\Resources\KarakterLuhurs\Pages\CreateKarakterLuhur;
use App\Filament\Resources\KarakterLuhurs\Pages\EditKarakterLuhur;
use App\Filament\Resources\KarakterLuhurs\Pages\ListKarakterLuhurs;
use App\Filament\Resources\KarakterLuhurs\Schemas\KarakterLuhurForm;
use App\Filament\Resources\KarakterLuhurs\Tables\KarakterLuhursTable;
use App\Models\KarakterLuhur;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KarakterLuhurResource extends Resource
{
    protected static ?string $model = KarakterLuhur::class;

    protected static string | \UnitEnum | null $navigationGroup = 'Referensi pembinaan';

    protected static ?int $navigationSort = 1;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedSparkles;

    public static function form(Schema $schema): Schema
    {
        return KarakterLuhurForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KarakterLuhursTable::configure($table);
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
            'index' => ListKarakterLuhurs::route('/'),
            'create' => CreateKarakterLuhur::route('/create'),
            'edit' => EditKarakterLuhur::route('/{record}/edit'),
        ];
    }
}
