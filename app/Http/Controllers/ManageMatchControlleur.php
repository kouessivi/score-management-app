<?php

namespace App\Http\Controllers;
use App\Models\Matche;
use Illuminate\Http\Request;

class ManageMatchControlleur extends Controller
{
    //

    public function index()
{
    $matches = Matche::all();
    return view('matches.index', ['matches' => $matches]);
}
public function show($id)
{
    $match = Matche::find($id);
    return view('matches.show', ['match' => $match]);
}
public function create()
{
   
    $teams = Team::all();
    return view('matches.create', ['teams' => $teams]);
}

public function store(Request $request)
{
    

    Matche::create([
        'id_t1' => $request->team1_id,
        'id_t2' => $request->team2_id,
        'date_m' => $request->date_m,
        'city' => $request->city,
      
    ]);


}
public function edit($id)
{
    $match = Matche::find($id);
    $teams = Team::all(); 
    return view('matches.edit', ['match' => $match, 'teams' => $teams]);
}

public function update(Request $request, $id)
{
   

    $match = Matche::find($id);
    $match->update([
        'id_t1' => $request->team1_id,
        'id_t2' => $request->team2_id,
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
