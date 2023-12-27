<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JenisKelamin extends Model
{
    use HasFactory;

    protected $table = 'jenis_kelamin';

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function tinggiBadans(): HasMany
    {
        return $this->hasMany(TinggiBadan::class, 'jenis_kelamin', 'id');
    }

    public function hasilPerhitungan(): HasMany
    {
        return $this->hasMany(HasilPerhitungan::class, 'jenis_kelamin', 'id');
    }
}
