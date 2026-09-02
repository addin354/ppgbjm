<?php

namespace App\Filament\Resources\Pembinaans\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PembinaansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kelompok.id')
                    ->searchable(),
                TextColumn::make('pengajar.id')
                    ->searchable(),
                TextColumn::make('materi.id')
                    ->searchable(),
                TextColumn::make('targetPembinaan.id')
                    ->searchable(),
                TextColumn::make('tanggal')
                    ->date()
                    ->sortable(),
                TextColumn::make('judul')
                    ->searchable(),
                TextColumn::make('dokumentasi_path')
                    ->searchable(),
                IconColumn::make('pengajar_hadir')
                    ->boolean(),
                TextColumn::make('catatan_absensi_pengajar')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
