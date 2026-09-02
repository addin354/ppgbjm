<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KarakterLuhur extends Model
{
    protected $fillable = [
        'urutan',
        'nama',
        'deskripsi',
    ];

    protected function casts(): array
    {
        return [
            'urutan' => 'integer',
        ];
    }
}
