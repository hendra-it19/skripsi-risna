<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TinggiBadan extends Model
{
    use HasFactory;

    protected $table = 'tinggi_badan';

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function jenisKelamin(): BelongsTo
    {
        return $this->belongsTo(JenisKelamin::class, 'jenis_kelamin', 'id');
    }
}
