<?php

namespace App\Filament\Resources\Kelompoks\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class KelompokForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('desa_id')
                    ->label('Desa')
                    ->relationship('desa', 'nama')
                    ->searchable()
                    ->preload()
                    ->required(),
                TextInput::make('kode')
                    ->label('Kode')
                    ->placeholder('Contoh: KLP-A')
                    ->helperText('Kode singkat kelompok (unik dalam satu desa bila diatur).'),
                TextInput::make('nama')
                    ->label('Nama')
                    ->required()
                    ->placeholder('Contoh: Kelompok At-Taqwa')
                    ->helperText('Nama penamaan kelompok pembinaan.'),
                Select::make('pengajar_aktif_id')
                    ->label('Pengajar aktif')
                    ->relationship('pengajarAktif', 'nama_lengkap')
                    ->searchable()
                    ->preload()
                    ->helperText('Pengajar / mubaligh yang bertanggung jawab saat ini.'),
                Textarea::make('deskripsi')
                    ->label('Deskripsi')
                    ->placeholder('Contoh: Kelompok SD kelas 4–6, pertemuan Sabtu sore.')
                    ->helperText('Ringkasan sasaran usia atau jadwal (opsional).')
                    ->columnSpanFull(),
                Toggle::make('is_active')
                    ->label('Aktif')
                    ->inline(false)
                    ->helperText('Nonaktifkan jika kelompok tidak berjalan sementara.')
                    ->required(),
            ]);
    }
}
