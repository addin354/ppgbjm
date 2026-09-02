<?php

namespace App\Filament\Resources\Generuses\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class GenerusForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('kelompok_id')
                    ->label('Kelompok')
                    ->relationship('kelompok', 'nama')
                    ->searchable()
                    ->preload()
                    ->required(),
                TextInput::make('nama_lengkap')
                    ->label('Nama lengkap')
                    ->required()
                    ->placeholder('Contoh: Muhammad Rizki Pratama'),
                TextInput::make('nama_panggilan')
                    ->label('Nama panggilan')
                    ->placeholder('Contoh: Rizki'),
                TextInput::make('tempat_lahir')
                    ->label('Tempat lahir')
                    ->placeholder('Contoh: Banjarmasin'),
                DatePicker::make('tanggal_lahir')
                    ->label('Tanggal lahir')
                    ->helperText('Opsional; berguna untuk pengelompokan usia.'),
                TextInput::make('jenis_kelamin')
                    ->label('Jenis kelamin')
                    ->required()
                    ->default('L')
                    ->placeholder('L atau P')
                    ->helperText('Isi L (laki-laki) atau P (perempuan).'),
                Textarea::make('alamat')
                    ->label('Alamat')
                    ->placeholder('Contoh: Jl. … RT/RW …')
                    ->columnSpanFull(),
                TextInput::make('nama_ortu')
                    ->label('Nama orang tua / wali')
                    ->placeholder('Contoh: Bapak/Ibu …'),
                TextInput::make('telepon_ortu')
                    ->label('Telepon orang tua')
                    ->tel()
                    ->placeholder('Contoh: 0812xxxxxxxx'),
                Select::make('user_ortu_id')
                    ->label('Akun orang tua (opsional)')
                    ->relationship('userOrtu', 'name')
                    ->searchable()
                    ->preload()
                    ->helperText('Jika orang tua punya akun di sistem, hubungkan di sini.'),
                TextInput::make('tahun_masuk')
                    ->label('Tahun masuk')
                    ->numeric()
                    ->placeholder((string) date('Y'))
                    ->helperText('Tahun pertama generus tercatat di kelompok.'),
                Toggle::make('is_active')
                    ->label('Aktif')
                    ->inline(false)
                    ->helperText('Nonaktifkan jika generus keluar atau pindah.')
                    ->required(),
            ]);
    }
}
