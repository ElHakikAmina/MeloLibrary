<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artiste extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'image', 'pays', 'date_naissance'];

    public function bandes()
    {
        return $this->belongsToMany(Bande::class);
    }
}
