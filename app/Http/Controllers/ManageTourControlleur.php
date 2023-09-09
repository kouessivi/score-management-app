<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matche;
use App\Models\Team;
use App\Models\Score;
class ManageTourControlleur extends Controller
{
    //

    public function index()
{
    $scores = Score::all();
    return view('welcome', ['scores' => $scores]);
}
public function showMatch($id)
{
    
    $match = Matche::find($id);

   
    return view('tournament.match', ['match' => $match]);
}
public function listTeams()
{
   
    $teams = Team::all();

   
    return view('tournament.teams', ['teams' => $teams]);
}
public function addScore(Request $request)
{
   

  
    Score::create([
        'mat_id' => $request->mat_id,
        't_id' => $request->t_id,
        'score' => $request->score,
    ]);

   
}
}
