<?php

namespace App\Filament\Resources\Pengajars;

use App\Filament\Resources\Pengajars\Pages\CreatePengajar;
use App\Filament\Resources\Pengajars\Pages\EditPengajar;
use App\Filament\Resources\Pengajars\Pages\ListPengajars;
use App\Filament\Resources\Pengajars\Schemas\PengajarForm;
use App\Filament\Resources\Pengajars\Tables\PengajarsTable;
use App\Models\Pengajar;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PengajarResource extends Resource
{
    protected static ?string $model = Pengajar::class;

    protected static string | \UnitEnum | null $navigationGroup = 'Data master';

    protected static ?int $navigationSort = 4;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedAcademicCap;

    public static function form(Schema $schema): Schema
    {
        return PengajarForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PengajarsTable::configure($table);
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
            'index' => ListPengajars::route('/'),
            'create' => CreatePengajar::route('/create'),
            'edit' => EditPengajar::route('/{record}/edit'),
        ];
    }
}
