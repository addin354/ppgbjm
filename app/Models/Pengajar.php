<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pengajar extends Model
{
    protected $fillable = [
        'user_id',
        'kode',
        'nama_lengkap',
        'telepon',
        'alamat',
        'tanggal_lahir',
        'status',
        'tanggal_mulai_tugas',
    ];

    protected function casts(): array
    {
        return [
            'tanggal_lahir' => 'date',
            'tanggal_mulai_tugas' => 'date',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function kelompoksAktif(): HasMany
    {
        return $this->hasMany(Kelompok::class, 'pengajar_aktif_id');
    }

    public function pembinaans(): HasMany
    {
        return $this->hasMany(Pembinaan::class);
    }
}
