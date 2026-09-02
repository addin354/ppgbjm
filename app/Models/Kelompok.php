<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kelompok extends Model
{
    protected $fillable = [
        'desa_id',
        'kode',
        'nama',
        'pengajar_aktif_id',
        'deskripsi',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }

    public function desa(): BelongsTo
    {
        return $this->belongsTo(Desa::class);
    }

    public function pengajarAktif(): BelongsTo
    {
        return $this->belongsTo(Pengajar::class, 'pengajar_aktif_id');
    }

    public function generuses(): HasMany
    {
        return $this->hasMany(Generus::class);
    }

    public function pembinaans(): HasMany
    {
        return $this->hasMany(Pembinaan::class);
    }
}
