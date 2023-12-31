<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HasilPerhitungan extends Model
{
    use HasFactory;

    protected $table = 'hasil_perhitungan';

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function jenisKelamin(): BelongsTo
    {
        return $this->belongsTo(JenisKelamin::class, 'jenis_kelamin', 'id');
    }

    public function tinggiBadan(): BelongsTo
    {
        return $this->belongsTo(TinggiBadan::class, 'tinggi_badan', 'id');
    }

    public function ciriFisik(): BelongsTo
    {
        return $this->belongsTo(CiriFisik::class, 'ciri_fisik', 'id');
    }

    public function hasilDiagnosa(): BelongsTo
    {
        return $this->belongsTo(HasilDiagnosa::class, 'hasil_diagnosa', 'id');
    }

    public function solusiStunting(): BelongsTo
    {
        return $this->belongsTo(SolusiStunting::class, 'solusi_stunting', 'id');
    }

    public function penginput(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user', 'id');
    }
}
