<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MateriPengajian extends Model
{
    protected $fillable = [
        'judul',
        'ringkasan',
        'kategori',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }

    public function pembinaans(): HasMany
    {
        return $this->hasMany(Pembinaan::class, 'materi_id');
    }
}
