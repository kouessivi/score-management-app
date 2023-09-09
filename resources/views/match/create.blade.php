
<div class="container">
    <h2>Créer un match</h2>
    <form method="POST" action="{{ route('matches.store') }}">
        @csrf 

        <div class="form-group">
            <label for="id_t1">Équipe 1 :</label>
            <select class="form-control" id="id_t1" name="id_t1" required>
                @foreach($teams as $team)
                    <option value="{{ $team->id }}">{{ $team->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="id_t2">Équipe 2 :</label>
            <select class="form-control" id="id_t2" name="id_t2" required>
                @foreach($teams as $team)
                    <option value="{{ $team->id }}">{{ $team->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="date_m">Date du match :</label>
            <input type="date" class="form-control" id="date_m" name="date_m" required>
        </div>

        <div class="form-group">
            <label for="city">Lieu du match :</label>
            <input type="text" class="form-control" id="city" name="city" required>
        </div>

      
        <button type="submit" class="btn btn-primary">Créer le match</button>
    </form>
</div>

