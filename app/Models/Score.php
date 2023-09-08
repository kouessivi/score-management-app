<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;
    protected $fillable = [
        'match_id', 
        'team_id',
         'score'];

         public function team()
    {
        return $this->belongsTo(Team::class);
    }

    // Relationship with matches (a score belongs to a match)
    public function match()
    {
        return $this->belongsTo(Matche::class);
    }
}
