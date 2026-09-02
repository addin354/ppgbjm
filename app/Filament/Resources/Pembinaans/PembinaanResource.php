<?php

namespace App\Filament\Resources\Pembinaans;

use App\Filament\Resources\Pembinaans\Pages\CreatePembinaan;
use App\Filament\Resources\Pembinaans\Pages\EditPembinaan;
use App\Filament\Resources\Pembinaans\Pages\ListPembinaans;
use App\Filament\Resources\Pembinaans\RelationManagers\AbsensiGenerusRelationManager;
use App\Filament\Resources\Pembinaans\Schemas\PembinaanForm;
use App\Filament\Resources\Pembinaans\Tables\PembinaansTable;
use App\Models\Pembinaan;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PembinaanResource extends Resource
{
    protected static ?string $model = Pembinaan::class;

    protected static string | \UnitEnum | null $navigationGroup = 'Pembinaan';

    protected static ?int $navigationSort = 1;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCalendarDays;

    public static function form(Schema $schema): Schema
    {
        return PembinaanForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PembinaansTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            AbsensiGenerusRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPembinaans::route('/'),
            'create' => CreatePembinaan::route('/create'),
            'edit' => EditPembinaan::route('/{record}/edit'),
        ];
    }
}
