<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Personaje extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function lugars():HasMany
    {
        return $this->hasMany(Lugar::class, 'id', 'lugar_id');
    }
}
