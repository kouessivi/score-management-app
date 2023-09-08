 
<div class="container">
    <h2>Créer une équipe</h2>
    <form method="POST" action="{{ route('teams.store') }}">
        @csrf 
        

        <div class="form-group">
            <label for="name">Nom de l'équipe :</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

      
        
        <button type="submit" class="btn btn-primary">Créer l'équipe</button>
    </form>
</div>
<div class="container">
    <h2>Liste des équipes</h2>
    <ul>
        @foreach($teams as $team)
            <li>{{ $team->name }}</li>
        @endforeach
    </ul>
</div>