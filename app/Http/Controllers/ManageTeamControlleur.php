<?php

namespace App\Http\Controllers;
use App\Models\Team;
use Illuminate\Http\Request;

class ManageTeamControlleur extends Controller
{
    public function index()
{
    $teams = Team::all();
    return view('team', ['teams' => $teams]);
}

public function show($id)
{
    $team = Team::find($id);
    return view('teams.show', ['team' => $team]);
}
public function create()
{
    return view('teams.create');
}

public function store(Request $request)
{
     
    $validatedData = $request->validate([
        'name' => 'required',  
         
    ]);

 
    Team::create($validatedData);

    
    return redirect()->route('teamlist')->with('success', 'Équipe créée avec succès.');
}

public function creater()
{
    return view('teams.create');
}

public function storev(Request $request)
{
     

    Team::create([
        'name' => $request->name,
        
    ]);

    
}
public function edit($id)
{
    $team = Team::find($id);
    return view('teams.edit', ['team' => $team]);
}

public function update(Request $request, $id)
{
     

    $team = Team::find($id);
    $team->update([
        'name' => $request->name,
         
    ]);

    
}
public function destroy($id)
{
    $team = Team::find($id);
    $team->delete();

    
}

}
