<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lugar extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function personaje(): BelongsTo
    {
        return $this->belongsTo(Personaje::class, 'lugar_id','id');
    }
}
