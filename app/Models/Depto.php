<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Depto extends Model
{
    /** @use HasFactory<\Database\Factories\DeptoFactory> */
    use HasFactory;
    protected $fillable = ['idDepto','nombreDepto','nombreMediano','nombreCorto'];
    
    public function carreras(): HasMany{
        return $this->hasMany(Carrera::class);
    }

    
    
}
