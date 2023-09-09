<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<br>
<div class="container">
    <h2>Add a score</h2>
    <form method="POST" action="{{ route('scores.store') }}">
        @csrf  

        <div class="form-group">
            <label for="mat_id">Match :</label>
            <select class="form-control" id="mat_id" name="mat_id" required>
                @foreach($matches as $match)
                    <option value="{{ $match->id }}">{{ $match->teamOne->name }}   vs {{ $match->teamTwo->name }}  </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="t_id">Team :</label>
            <select class="form-control" id="t_id" name="t_id" required>
                @foreach($teams as $team)
                    <option value="{{ $team->id }}">{{ $team->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="score">Score :</label>
            <input type="number" class="form-control" id="score" name="score" required>
        </div>

   
<br><br>
        <button type="submit" class="btn btn-primary" style="color:black">Add score</button>
    </form>
</div>
</x-app-layout>