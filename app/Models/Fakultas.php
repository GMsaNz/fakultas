<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Fakultas extends Model
{
    protected $fillable = ['nama', 'kode'];

    public function prodis(): HasMany
    {
        return $this->hasMany(Prodi::class);
    }
}
