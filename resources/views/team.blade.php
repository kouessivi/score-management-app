<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

   
  <br>
<div class="container">
    <h2>Add team</h2>
    <form method="POST" action="{{ route('teams.store') }}">
        @csrf 
        

        <div class="form-group">
            <label for="name">Team name :</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

      <br><br>
        
        <button  type="submit" class="btn btn-primary" style="color:black">Add a team</button>
    </form>
</div><br>
<div class="container">
    <h1>Team list</h1>
    <ul>
        @foreach($teams as $team)
            <li>{{ $team->name }}</li>
        @endforeach
    </ul>
</div>


</x-app-layout>
