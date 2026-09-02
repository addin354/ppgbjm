<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PembinaanAbsensiGenerus extends Model
{
    protected $table = 'pembinaan_absensi_generus';

    protected $fillable = [
        'pembinaan_id',
        'generus_id',
        'status',
        'evaluasi',
        'catatan',
    ];

    public function pembinaan(): BelongsTo
    {
        return $this->belongsTo(Pembinaan::class);
    }

    public function generus(): BelongsTo
    {
        return $this->belongsTo(Generus::class);
    }
}
