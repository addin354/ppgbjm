<?php

namespace App\Filament\Resources\MateriPengajians\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class MateriPengajianForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')
                    ->label('Judul')
                    ->required()
                    ->placeholder('Contoh: Adab kepada orang tua'),
                Textarea::make('ringkasan')
                    ->label('Ringkasan')
                    ->placeholder('Ringkasan singkat isi materi (1–3 kalimat).')
                    ->columnSpanFull(),
                TextInput::make('kategori')
                    ->label('Kategori')
                    ->placeholder('Contoh: Akhlak, Ibadah, Sosial'),
                Toggle::make('is_active')
                    ->label('Aktif')
                    ->inline(false)
                    ->helperText('Nonaktifkan materi yang tidak dipakai lagi.')
                    ->required(),
            ]);
    }
}
