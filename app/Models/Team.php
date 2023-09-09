<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 


class Team extends Model
{
    use   HasFactory ;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */

     // Relationship with scores (a team has many scores)
    public function scores()
    {
        return $this->hasMany(Score::class);
    }

    //Relationship to matches (a team can participate in many matches)
    public function matches() 
    {
        return $this->belongsToMany(Matche::class);
    }
}
