<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Admin Dashboard</title>
    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
      rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous">
    </script>
    <link href="/css/filmlist.css" rel="stylesheet" />
   
    {{-- TRIX EDITOR --}}
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>
    {{-- END OF TRIX EDITOR --}}
    <style>
      trix-toolbar [data-trix-button-group ="file-tools"]{
        display: none;
      }
    </style>
  </head>
    <body>
        <div class="page">
            <div class="sidebar">
                <div class="sidebar-header">
                    <div class="sidebar-logo-container">
                        <div class="logo-container">
                        
                        </div>
                        <div class="brand-name-container">
                            <p class="brand-name py-2">
                                {{ auth()->user()->name }}<br />
                                
                            </p>
                        </div>
                    </div>
                </div>
                <div class="sidebar-body">
                    <ul class="navigation-list">
                        <li class="navigation-list-item {{ Request::is('dashboard/films*') ? 'active' : '' }}">
                            <a class="navigation-link" href="/dashboard/films/">
                                <div class="row">
                                    <div class="col-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-film" viewBox="0 0 16 16">
                                                <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z"/>
                                            </svg>
                                    </div>
                                    <div class="col-9">
                                       Dashboard
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="navigation-list-item {{ Request::is('/films') ? 'active' : '' }}">
                            <a class="navigation-link" href="/films">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa fa-globe" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-9">
                                       Lihat Website
                                    </div>
                                </div>
                            </a>
                        </li>
        
                          <li class="navigation-list-item">
                            <a class="navigation-link" href="/logout">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-9">
                                       Keluar
                                    </div>
                                </div>
                            </a>
                        </li>
                        {{-- <li class="navigation-list-item active">
                            <a class="navigation-link" href="#">
                                <div class="row">
                                    <div class="col-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-film" viewBox="0 0 16 16">
                                                <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z"/>
                                            </svg>
                                    </div>
                                    <div class="col-9">
                                        Film Saya
                                    </div>
                                </div>
                            </a>
                        </li> --}}

                    </ul>
                </div>
            </div>
            <div class="content">
                <div class="navigationBar">
                    <button id="sidebarToggle" class="btn sidebarToggle">
                        <i class="fas fa-bars"></i>
                    </button> &nbsp; &nbsp; &nbsp;
                    <h3>MIFILM</h3>
                </div>
                
                <div class="container-fluid mx-auto">
                  <div class="row">
                    <h4 class="mt-3 text-center">🕶 Review Film</h4>
                  </div>
                  <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <h2 class="mb-3">{{ $film->title }}</h2>
                        <a href="/dashboard/films" class="btn btn-success">Kembali ke semua film</a>
                        <a href="/dashboard/films/{{ $film->slug }}/edit" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                        <form action="/dashboard/films/{{ $film->slug }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button onclick="return confirm('Yakin mau dihapus?')" class="btn btn-danger border-0"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</button>

                        </form>
                        @if($film->image)
                        <div>
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="{{ asset('storage/' . $film->image) }}" alt="{{ $film->category->name }}" class="img-fluid mt-3">
                                </div>
                                <div class="col-md-9">
                                    <ul class="mt-3">
                                        <li>Pengarang Cerita: <span>{{ $film->author }}</span></li>
                                        <li>Negara: <span>{{ $film->country }}</span></li>
                                        <li>Studio: <span>{{ $film->studio }}</span></li>
                                        <li>Durasi : <span>{{ $film->duration }} menit</span></li>
                                        <li>Genre : <span>{{ $film->category->name }}</span></li>
                                        <li>Tahun Rilis: <span>{{ $film->year }}</span></li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                        
                        @else
                        <img src="https://source.unsplash.com/1200x400?{{ $film->category->name }}" alt="{{ $film->category->name }}" class="img-fluid mt-3">
                        @endif
                        
                        
                    
                    
                        <article class="my-3 fs-5">
                        {!! $film->synopsis !!}
                    </article>
                    <a href="/dashboard/films" class="btn bg-dark text-white mt-4 text-bold">Koleksi Film</a>

                   
                     
                    </div>  
                  </div>
                  
                </div>
            </div>
        </div>
    <script>
        let sidebarToggle = document.querySelector(".sidebarToggle");
        sidebarToggle.addEventListener("click", function(){
            document.querySelector("body").classList.toggle("active");
            document.getElementById("sidebarToggle").classList.toggle("active");
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function(){
          fetch('/dashboard/films/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function(e){
          e.preventDefault();
        })
    </script>
    <script src="https://use.fontawesome.com/3c3f9f2cc5.js"></script>
    </body>
</html>