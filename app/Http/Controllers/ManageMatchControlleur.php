<?php

namespace App\Http\Controllers;
use App\Models\Matche;
use App\Models\Team;
use Illuminate\Http\Request;

class ManageMatchControlleur extends Controller
{
    //

    public function index()
{
    $matches = Matche::all();
    return view('match.index', ['matches' => $matches]);
}
public function show($id)
{
    $match = Matche::find($id);
    return view('matches.show', ['match' => $match]);
}
public function create()
{
   
    $teams = Team::all();
    return view('match.create', ['teams' => $teams]);
}

public function store(Request $request)
{
    

    Matche::create([
        'id_t1' => $request->id_t1,
        'id_t2' => $request->id_t2,
        'date_m' => $request->date_m,
        'city' => $request->city,
      
    ]);
    return redirect()->route('match.index')->with('success', 'Match add success.');

}
public function edit($id)
{
    $match = Matche::find($id);
    $teams = Team::all(); 
    return view('match.edit', ['match' => $match, 'teams' => $teams]);
}

public function update(Request $request, $id)
{
   

    $match = Matche::find($id);
    $match->update([
        'id_t1' => $request->id_t1,
        'id_t2' => $request->id_t2,
        'date_m' => $request->date_m,
        'city' => $request->city,
        
    ]);

    
}
public function destroy($id)
{
    $match = Matche::find($id);
    $match->delete();

    
}

}
