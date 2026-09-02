<?php

namespace App\Filament\Resources\Desas\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class DesaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('kode')
                    ->label('Kode')
                    ->placeholder('Contoh: BJM-01 atau 01')
                    ->helperText('Kode singkat unik untuk wilayah (opsional).'),
                TextInput::make('nama')
                    ->label('Nama')
                    ->required()
                    ->placeholder('Contoh: PPG Wilayah Banjarmasin Utara')
                    ->helperText('Nama resmi atau julukan wilayah/desain penamaan desa.'),
                TextInput::make('kecamatan')
                    ->label('Kecamatan')
                    ->placeholder('Contoh: Banjarmasin Utara')
                    ->helperText('Satu kecamatan utama, atau daftar dipisahkan koma.'),
                Textarea::make('alamat')
                    ->label('Alamat')
                    ->placeholder('Contoh: Jl. Brigjen H. Hasan Basri No. 1, Banjarmasin')
                    ->helperText('Alamat korespondensi atau kantor wilayah.')
                    ->columnSpanFull(),
                Toggle::make('is_active')
                    ->label('Aktif')
                    ->inline(false)
                    ->helperText('Nonaktifkan jika wilayah tidak digunakan sementara.')
                    ->required(),
            ]);
    }
}
