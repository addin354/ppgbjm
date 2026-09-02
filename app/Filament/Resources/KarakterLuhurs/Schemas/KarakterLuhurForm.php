<?php

namespace App\Filament\Resources\KarakterLuhurs\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class KarakterLuhurForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('urutan')
                    ->label('Urutan')
                    ->required()
                    ->numeric()
                    ->placeholder('1–29')
                    ->helperText('Nomor urut tampil dalam daftar karakter (biasanya 1–29).'),
                TextInput::make('nama')
                    ->label('Nama karakter')
                    ->required()
                    ->placeholder('Contoh: Jujur')
                    ->helperText('Nama karakter luhur sesuai referensi lembaga.'),
                Textarea::make('deskripsi')
                    ->label('Deskripsi')
                    ->placeholder('Contoh: Berkata benar dan konsisten antara perkataan dan perbuatan.')
                    ->columnSpanFull(),
            ]);
    }
}
