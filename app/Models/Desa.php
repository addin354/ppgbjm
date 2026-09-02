<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Desa extends Model
{
    protected $fillable = [
        'kode',
        'nama',
        'kecamatan',
        'alamat',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }

    public function kelompoks(): HasMany
    {
        return $this->hasMany(Kelompok::class);
    }
}
