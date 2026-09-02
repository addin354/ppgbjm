<?php

namespace App\Filament\Resources\TargetPembinaans\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class TargetPembinaanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                    ->label('Nama target')
                    ->required()
                    ->placeholder('Contoh: Hafal doa harian'),
                Textarea::make('deskripsi')
                    ->label('Deskripsi')
                    ->placeholder('Contoh: Mampu membaca dan memahami arti doa wajib harian.')
                    ->columnSpanFull(),
                TextInput::make('kategori')
                    ->label('Kategori')
                    ->placeholder('Contoh: Hafalan, Akhlak'),
                Toggle::make('is_active')
                    ->label('Aktif')
                    ->inline(false)
                    ->helperText('Target yang tidak dipakai dapat dinonaktifkan.')
                    ->required(),
            ]);
    }
}
