<?php

namespace App\Filament\Resources\Generuses;

use App\Filament\Resources\Generuses\Pages\CreateGenerus;
use App\Filament\Resources\Generuses\Pages\EditGenerus;
use App\Filament\Resources\Generuses\Pages\ListGeneruses;
use App\Filament\Resources\Generuses\Schemas\GenerusForm;
use App\Filament\Resources\Generuses\Tables\GenerusesTable;
use App\Models\Generus;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class GenerusResource extends Resource
{
    protected static ?string $model = Generus::class;

    protected static string | \UnitEnum | null $navigationGroup = 'Data master';

    protected static ?int $navigationSort = 3;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedUsers;

    public static function form(Schema $schema): Schema
    {
        return GenerusForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return GenerusesTable::configure($table);
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
            'index' => ListGeneruses::route('/'),
            'create' => CreateGenerus::route('/create'),
            'edit' => EditGenerus::route('/{record}/edit'),
        ];
    }
}
