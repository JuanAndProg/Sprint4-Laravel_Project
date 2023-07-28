<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    public function teamA()
    {
        return $this->belongsTo(Team::class, 'teamA_id');
    }

    public function teamB()
    {
        return $this->belongsTo(Team::class, 'teamB_id');
    }
}