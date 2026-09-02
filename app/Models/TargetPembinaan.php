<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TargetPembinaan extends Model
{
    protected $fillable = [
        'nama',
        'deskripsi',
        'kategori',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }

    public function generusTargets(): HasMany
    {
        return $this->hasMany(GenerusTarget::class, 'target_pembinaan_id');
    }

    public function pembinaans(): HasMany
    {
        return $this->hasMany(Pembinaan::class, 'target_pembinaan_id');
    }
}
