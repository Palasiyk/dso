<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Team extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'teams';
    protected $guarded = [];

    public function stat()
    {
        return $this->hasOne(Statistik::class, 'namber', 'namber' );
    }
}
