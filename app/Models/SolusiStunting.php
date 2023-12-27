<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SolusiStunting extends Model
{
    use HasFactory;

    protected $table = 'solusi_stunting';

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function hasilPerhitungan(): HasMany
    {
        return $this->hasMany(HasilPerhitungan::class, 'solusi_stunting', 'id');
    }
}
