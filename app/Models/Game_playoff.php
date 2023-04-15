<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game_playoff extends Model
{
    use HasFactory;

    public function stat()
    {
        return $this->hasOne(Statistik::class, 'namber', 'namber' );
    }
}
