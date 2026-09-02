<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Generus extends Model
{
    protected $table = 'generuses';

    protected $fillable = [
        'kelompok_id',
        'nama_lengkap',
        'nama_panggilan',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'nama_ortu',
        'telepon_ortu',
        'user_ortu_id',
        'tahun_masuk',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'tanggal_lahir' => 'date',
            'tahun_masuk' => 'integer',
            'is_active' => 'boolean',
        ];
    }

    public function kelompok(): BelongsTo
    {
        return $this->belongsTo(Kelompok::class);
    }

    public function userOrtu(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_ortu_id');
    }

    public function generusTargets(): HasMany
    {
        return $this->hasMany(GenerusTarget::class);
    }
}
