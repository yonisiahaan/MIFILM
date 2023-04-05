<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <title>{{ $title }}</title>

    <style>
      .card {
        border: 0;
      }
      body {
  font-family: "Open Sans", sans-serif;
  background: #0c0b09;
  color: #fff;
} 
    </style>
  </head>
  <body class="" style="background-color: black">
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
        <div class="container">
          <a class="navbar-brand" href="/">MIFILM</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
            </ul>
            <ul class="navbar-nav">
              <li class="nav-item dropdown ">
                @auth
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ auth()->user()->name }}
                </a>
                
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="/dashboard/films">Dashboard</a></li>
                    <li><a class="dropdown-item" href="/logout">Keluar</a></li>
                  </ul>
                @else
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav d-flex display-inline-block">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/login">Masuk</a>
                            
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/registration">Daftar</a>
                          </li>
                      </ul>
                </div>
                  
                @endauth
                
              </li>
            </ul>
          </div>
        </div>
      </nav>
    
      <div class="container">
        <div class="row">
            <h1 class="mb-3 text-center text-white">{{ $title }}</h1>
        </div>
        {{-- <div class="row justify-content-center">
          <div class="col-md-6">
            <form action="/films">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari film favorit" name="search">
                <button class="btn btn-danger" type="submit">Cari</button>
              </div>
              
            </form>
          </div>
          
        </div> --}}
        @if($films->count())
        <div class="row">
          <div class="col-lg-6">
            <div class="card mb-3">
              @if($films[0]->image)
               <a href="/films/{{ $films[0]->slug }}">   
              <img src="{{ asset('storage/' . $films[0]->image) }}" alt="{{ $films[0]->category->name }}" class="img-fluid">
              </a>   
            
              @else
              <a href="/films/{{ $films[0]->slug }}">  
                   <img src="https://source.unsplash.com/1200x400?{{ $films[0]->category->name }}" class="card-img-top img-fluid" alt="{{ $films[0]->category->name }}" class="card-img-top" alt="...">
                  </a>   
                   @endif
             
              <div class="card-body bg-dark">
                <h5 class="card-title text-center"><a class="text-decoration-none text-white " href="/films/{{ $films[0]->slug }}">{{ $films[0]->title }}</a></h5>
              
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card mb-3">
              @if($films[1]->image)
              <a href="/films/{{ $films[1]->slug }}">       
              <img src="{{ asset('storage/' . $films[1]->image) }}" alt="{{ $films[1]->category->name }}" class="img-fluid">
              </a>
              
          
              @else
              <a href="/films/{{ $films[1]->slug }}"> 
                   <img src="https://source.unsplash.com/1200x400?{{ $films[1]->category->name }}" class="card-img-top img-fluid" alt="{{ $films[1]->category->name }}" class="card-img-top" alt="...">
              </a>
              @endif
             
              <div class="card-body bg-dark">
                <h5 class="card-title text-center"><a class="text-decoration-none text-white" href="/films/{{ $films[1]->slug }}">{{ $films[1]->title }}</a></h5>
               
              </div>
            </div>
          </div>
         
        </div>
        <div class="row">
            @foreach($films->skip(2) as $film)
            <div class="col-md-3 col-6 mb-4">
                <div class="card">
                    <div class="position-absolute px-3 py-2 " style="background-color: rgba(0, 0, 0, 0.5)"
                    >
                    <a href="/categories/{{ $film->category->slug }}" class="text-white text-decoration-none">{{ $film->category->name}}</a>
                    </div>

                    @if($film->image)
                   
                        <img src="{{ asset('storage/' . $film->image) }}" alt="{{ $film->category->name }}" class="img-fluid">
                  
                    
                    @else
                    <img src="https://source.unsplash.com/500x400?{{ $film->category->name }}" class="card-img-top" alt="{{ $film->category->name }}">
                    @endif

                   
                    <div class="card-body bg-dark text-white">
                      <h5 class="card-title text-center"  >{{ $film->title }}</h5>
                      
                <small class="text-muted">
                     <p class="text-center">Published by <a  href="/publisher/{{ $film->publisher->username }}" class="text-decoration-none">{{ $film->publisher->name }}</a></p>
                </small>
                    {{-- Deskripsi singkat film --}}
                      {{-- <p class="card-text">{{ $film->excerpt }}</p> --}}
                      <a href="/films/{{ $film->slug}}" class="btn bg-light  w-100">Detail Film</a>
                    </div>
                  </div>
                  
            </div>
            @endforeach
        </div>
        @endif

        
    </div>

    <!-- Footer -->
<footer class="bg-dark text-center text-white">
  

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-white" href="/">mifilm.com - Kelompok 8</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

  
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>