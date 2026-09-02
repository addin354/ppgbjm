<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GenerusTarget extends Model
{
    protected $fillable = [
        'generus_id',
        'target_pembinaan_id',
        'status',
        'catatan',
    ];

    public function generus(): BelongsTo
    {
        return $this->belongsTo(Generus::class);
    }

    public function targetPembinaan(): BelongsTo
    {
        return $this->belongsTo(TargetPembinaan::class, 'target_pembinaan_id');
    }
}
