<?php

namespace App\Filament\Resources\Pengajars\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PengajarForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->label('Akun pengguna')
                    ->relationship('user', 'name')
                    ->searchable()
                    ->preload()
                    ->helperText('Opsional: hubungkan dengan akun login Filament.'),
                TextInput::make('kode')
                    ->label('Kode')
                    ->placeholder('Contoh: MUB-001'),
                TextInput::make('nama_lengkap')
                    ->label('Nama lengkap')
                    ->required()
                    ->placeholder('Contoh: Ahmad Fauzi, Lc.'),
                TextInput::make('telepon')
                    ->label('Telepon')
                    ->tel()
                    ->placeholder('Contoh: 0812xxxxxxxx'),
                Textarea::make('alamat')
                    ->label('Alamat')
                    ->placeholder('Contoh: Alamat tinggal atau domisili tugas.')
                    ->columnSpanFull(),
                DatePicker::make('tanggal_lahir')
                    ->label('Tanggal lahir'),
                TextInput::make('status')
                    ->label('Status')
                    ->required()
                    ->default('aktif')
                    ->placeholder('aktif')
                    ->helperText('Contoh: aktif, nonaktif, cuti.'),
                DatePicker::make('tanggal_mulai_tugas')
                    ->label('Tanggal mulai tugas')
                    ->helperText('Kapan mulai bertugas sebagai mubaligh.'),
            ]);
    }
}
