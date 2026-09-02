<?php

namespace App\Filament\Resources\TargetPembinaans;

use App\Filament\Resources\TargetPembinaans\Pages\CreateTargetPembinaan;
use App\Filament\Resources\TargetPembinaans\Pages\EditTargetPembinaan;
use App\Filament\Resources\TargetPembinaans\Pages\ListTargetPembinaans;
use App\Filament\Resources\TargetPembinaans\Schemas\TargetPembinaanForm;
use App\Filament\Resources\TargetPembinaans\Tables\TargetPembinaansTable;
use App\Models\TargetPembinaan;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TargetPembinaanResource extends Resource
{
    protected static ?string $model = TargetPembinaan::class;

    protected static string | \UnitEnum | null $navigationGroup = 'Referensi pembinaan';

    protected static ?int $navigationSort = 3;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedFlag;

    public static function form(Schema $schema): Schema
    {
        return TargetPembinaanForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TargetPembinaansTable::configure($table);
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
            'index' => ListTargetPembinaans::route('/'),
            'create' => CreateTargetPembinaan::route('/create'),
            'edit' => EditTargetPembinaan::route('/{record}/edit'),
        ];
    }
}
