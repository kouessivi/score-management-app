<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matche extends Model
{
    use HasFactory;
 /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_t1', 
        'id_t2',
         'date_m', 
         'city'
        
    ];

    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }
    public function teamOne()
    {
        return $this->belongsTo(Team::class, 'id_t1');
    }

    public function teamTwo()
    {
        return $this->belongsTo(Team::class, 'id_t2');
    }
    
    public function scores()
    {
        return $this->hasMany(Score::class);
    }
}
