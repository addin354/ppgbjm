<?php

namespace App\Filament\Resources\GenerusTargets;

use App\Filament\Resources\GenerusTargets\Pages\CreateGenerusTarget;
use App\Filament\Resources\GenerusTargets\Pages\EditGenerusTarget;
use App\Filament\Resources\GenerusTargets\Pages\ListGenerusTargets;
use App\Filament\Resources\GenerusTargets\Schemas\GenerusTargetForm;
use App\Filament\Resources\GenerusTargets\Tables\GenerusTargetsTable;
use App\Models\GenerusTarget;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class GenerusTargetResource extends Resource
{
    protected static ?string $model = GenerusTarget::class;

    protected static string | \UnitEnum | null $navigationGroup = 'Pembinaan';

    protected static ?int $navigationSort = 2;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedChartBarSquare;

    public static function form(Schema $schema): Schema
    {
        return GenerusTargetForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return GenerusTargetsTable::configure($table);
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
            'index' => ListGenerusTargets::route('/'),
            'create' => CreateGenerusTarget::route('/create'),
            'edit' => EditGenerusTarget::route('/{record}/edit'),
        ];
    }
}
