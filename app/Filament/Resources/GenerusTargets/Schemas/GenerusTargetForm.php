<?php

namespace App\Filament\Resources\GenerusTargets\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class GenerusTargetForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('generus_id')
                    ->label('Generus')
                    ->relationship('generus', 'nama_lengkap')
                    ->searchable()
                    ->preload()
                    ->required(),
                Select::make('target_pembinaan_id')
                    ->label('Target pembinaan')
                    ->relationship('targetPembinaan', 'nama')
                    ->searchable()
                    ->preload()
                    ->required(),
                TextInput::make('status')
                    ->label('Status')
                    ->required()
                    ->default('belum_dimulai')
                    ->placeholder('belum_dimulai, proses, atau selesai')
                    ->helperText('Gunakan salah satu nilai konsisten untuk laporan.'),
                Textarea::make('catatan')
                    ->label('Catatan')
                    ->placeholder('Contoh: Sudah hafal doa subuh; perlu pengulangan minggu depan.')
                    ->columnSpanFull(),
            ]);
    }
}
