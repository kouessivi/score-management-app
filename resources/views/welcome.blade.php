<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">
        <!-- Styles -->
        
    </head>
    <body class="antialiased">

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        @if (Route::has('login'))
     
     @auth
     <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a></li>
      
     @else
     <li class="nav-item"><a class="nav-link" href="{{ url('/login') }}">login</a></li>
         

         @if (Route::has('register'))
         <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
           
         @endif
     @endauth
  
@endif
         
       
   
       
      </ul>
     
    </div>
  </div>
</nav>
         <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Welcome</h1><h2>The score</h2>
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
                
            </div>
         </div>
    </body>
</html>
