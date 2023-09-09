<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot><br><br><br>
<div class="container">
    <h2>The score</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Match</th>
                <th>Team</th>
                <th>Score</th>
              
            </tr>
        </thead>
        <tbody>
            @foreach($scores as $score)
                <tr><td>
                @if($score->match)
                {{ $score->match->teamOne->name }} vs {{ $score->match->teamTwo->name }}
            @else
                Aucun match associé
            @endif</td>
                    <td>{{ $score->team->name}}</td>
                    <td>{{ $score->score }}</td>
                   
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
 
</x-app-layout>