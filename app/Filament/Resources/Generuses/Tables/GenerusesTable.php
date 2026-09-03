<?php

namespace App\Filament\Resources\Generuses\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

use Filament\Tables\Filters\SelectFilter;

class GenerusesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kelompok.nama')
                    ->label('Kelompok')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('nama_lengkap')
                    ->label('Nama lengkap')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('kelas')
                    ->label('Kelas')
                    ->badge()
                    ->color(fn (?string $state): string => match ($state) {
                        'CABERAWIT' => 'info',
                        'PRA REMAJA' => 'warning',
                        'REMAJA' => 'success',
                        'USMAN' => 'primary',
                        'BALITA' => 'gray',
                        default => 'secondary',
                    })
                    ->sortable()
                    ->searchable(),
                TextColumn::make('nama_panggilan')
                    ->label('Nama panggilan')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('tempat_lahir')
                    ->label('Tempat lahir')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('tanggal_lahir')
                    ->label('Tanggal lahir')
                    ->date('d M Y')
                    ->sortable(),
                TextColumn::make('jenis_kelamin')
                    ->label('JK')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('nama_ortu')
                    ->label('Nama orang tua')
                    ->searchable(),
                TextColumn::make('telepon_ortu')
                    ->label('Telepon ortu')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('userOrtu.name')
                    ->label('Akun ortu')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('tahun_masuk')
                    ->label('Tahun masuk')
                    ->numeric()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),
                IconColumn::make('is_active')
                    ->label('Aktif')
                    ->boolean(),
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
                SelectFilter::make('kelompok_id')
                    ->label('Kelompok')
                    ->relationship('kelompok', 'nama'),
                SelectFilter::make('kelas')
                    ->label('Kelas')
                    ->options([
                        'BALITA' => 'BALITA',
                        'CABERAWIT' => 'CABERAWIT',
                        'PRA REMAJA' => 'PRA REMAJA',
                        'REMAJA' => 'REMAJA',
                        'USMAN' => 'USMAN',
                    ]),
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
