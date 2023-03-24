<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bande extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'image', 'pays', 'date_creation', 'artiste_id'];

    public function artistes()
    {
        return $this->belongsToMany(Artiste::class);
    }
}
