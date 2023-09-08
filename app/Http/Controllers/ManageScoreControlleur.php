<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageScoreControlleur extends Controller
{
    //

    public function index()
{
    $scores = Score::all();
    return view('scores.index', ['scores' => $scores]);
}
public function show($id)
{
    $score = Score::find($id);
    return view('scores.show', ['score' => $score]);
}
public function create()
{
     
    $matches = Matche::all();
    $teams = Team::all();
    return view('scores.create', ['matches' => $matches, 'teams' => $teams]);
}

public function store(Request $request)
{
     

    Score::create([
        'mat_id' => $request->mat_id,
        't_id' => $request->t_id,
        'score' => $request->score,
        
    ]);

    
}
public function edit($id)
{
    $score = Score::find($id);
    $matches = Matche::all();  
    $teams = Team::all();  
    return view('scores.edit', ['score' => $score, 'matches' => $matches, 'teams' => $teams]);
}

public function update(Request $request, $id)
{
   

    $score = Score::find($id);
    $score->update([
        'mat_id' => $request->mat_id,
        't_id' => $request->t_id,
        'score' => $request->score,
        
    ]);

    
}
public function destroy($id)
{
    $score = Score::find($id);
    $score->delete();

     
}

}
