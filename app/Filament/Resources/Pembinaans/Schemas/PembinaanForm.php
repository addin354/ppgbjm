<?php

namespace App\Filament\Resources\Pembinaans\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PembinaanForm
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
                Select::make('pengajar_id')
                    ->label('Pengajar')
                    ->relationship('pengajar', 'nama_lengkap')
                    ->searchable()
                    ->preload()
                    ->required(),
                Select::make('materi_id')
                    ->label('Materi')
                    ->relationship('materi', 'judul')
                    ->searchable()
                    ->preload(),
                Select::make('target_pembinaan_id')
                    ->label('Target pembinaan')
                    ->relationship('targetPembinaan', 'nama')
                    ->searchable()
                    ->preload(),
                DatePicker::make('tanggal')
                    ->label('Tanggal')
                    ->required()
                    ->helperText('Tanggal pelaksanaan sesi.'),
                TextInput::make('judul')
                    ->label('Judul / tema')
                    ->placeholder('Contoh: Adab kepada orang tua')
                    ->columnSpanFull(),
                TextInput::make('dokumentasi_path')
                    ->label('Berkas dokumentasi')
                    ->placeholder('Contoh: pembinaan/dok-2026-01.pdf')
                    ->helperText('Path relatif setelah unggah, atau isi manual jika disimpan di disk.'),
                Textarea::make('catatan')
                    ->label('Catatan')
                    ->placeholder('Ringkasan kegiatan atau hal khusus sesi ini.')
                    ->columnSpanFull(),
                Toggle::make('pengajar_hadir')
                    ->label('Pengajar hadir')
                    ->inline(false)
                    ->helperText('Matikan jika pengajar tidak hadir (situasi pengganti, dll.).')
                    ->required(),
                TextInput::make('catatan_absensi_pengajar')
                    ->label('Catatan absensi pengajar')
                    ->placeholder('Contoh: Ijin sakit, digantikan oleh …'),
            ]);
    }
}
