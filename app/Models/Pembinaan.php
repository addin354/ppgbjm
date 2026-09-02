<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pembinaan extends Model
{
    protected $fillable = [
        'kelompok_id',
        'pengajar_id',
        'materi_id',
        'target_pembinaan_id',
        'tanggal',
        'judul',
        'dokumentasi_path',
        'catatan',
        'pengajar_hadir',
        'catatan_absensi_pengajar',
    ];

    protected function casts(): array
    {
        return [
            'tanggal' => 'date',
            'pengajar_hadir' => 'boolean',
        ];
    }

    public function kelompok(): BelongsTo
    {
        return $this->belongsTo(Kelompok::class);
    }

    public function pengajar(): BelongsTo
    {
        return $this->belongsTo(Pengajar::class);
    }

    public function materi(): BelongsTo
    {
        return $this->belongsTo(MateriPengajian::class, 'materi_id');
    }

    public function targetPembinaan(): BelongsTo
    {
        return $this->belongsTo(TargetPembinaan::class, 'target_pembinaan_id');
    }

    public function absensiGenerus(): HasMany
    {
        return $this->hasMany(PembinaanAbsensiGenerus::class);
    }
}
