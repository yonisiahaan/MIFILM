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
                        <li class="navigation-list-item">
                          <a class="navigation-link" href="/logout">
                              <div class="row">
                                  <div class="col-2">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-film" viewBox="0 0 16 16">
                                              <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z"/>
                                          </svg>
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
                    @can('admin')
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Administrator</span>
                    </h6>

                    <ul class="navigation-list">
                        <li class="navigation-list-item {{ Request::is('dashboard/categories*') ? 'active' : '' }}">
                            <a class="navigation-link" href="/dashboard/categories">
                                <div class="row">
                                    <div class="col-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-film" viewBox="0 0 16 16">
                                                <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z"/>
                                            </svg>
                                    </div>
                                    <div class="col-9">
                                       Kategori Film
                                    </div>
                                </div>
                            </a>
                        </li> 
                    </ul>
                    @endcan
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
                    <h4 class="mt-3 text-center">🎬 Tambah Film</h4>
                  </div>
                  <div class="row justify-content-center">
                    <div class="col-lg-10">
                      {{-- <form method="post" action="simpan">
                     
                
                        <div class="form-outline mb-4">
                          <label class="form-label" for="form7Example1">Judul Film :</label>
                          <input type="text" id="form7Example1" class="form-control" />
                        </div>
                      
                        <div class="row mb-4">
                          <div class="col">
                            <div class="form-outline">
                              <label class="form-label" for="form6Example1">Genre :</label>
                              <input type="text" id="form6Example1" class="form-control" />
                            </div>
                          </div>
                      
                          <div class="col">
                            <div class="form-outline">
                              <label class="form-label" for="form6Example2">Studio :</label>
                              <input type="text" id="form6Example2" class="form-control" />
                            </div>
                          </div>
                        </div>
                      
                        <div class="row mb-4">
                          <div class="col">
                            <div class="form-outline mb-4">
                              <label class="form-label" for="form6Example3">Penulis : </label>
                              <input type="text" id="form6Example3" class="form-control" />
                            </div>
                          </div>
                      
                          <div class="col">
                            <div class="form-outline mb-4">
                              <label class="form-label" for="form6Example4">Tahun :</label>
                              <input type="text" id="form6Example4" class="form-control" />
                            </div>
                          </div>
                        </div>
                      
                        <div class="row mb-4">
                          <div class="col">
                        <div class="form-outline mb-4">
                          <label class="form-label" for="form6Example5">Durasi :</label>
                          <input type="time" id="form6Example5" class="form-control" />
                        </div>
                      </div>
                      
                        <div class="col">
                        <div class="form-outline mb-4">
                          <label class="form-label" for="form6Example6">Negara :</label>
                          <input type="text" id="form6Example6" class="form-control" />
                        </div>
                      </div>
                      </div>
                      
                        <div class="row mb-4">
                          <div class="col">
                            <div class="form-outline mb-4">
                              <label class="form-label" for="form6Example7">Gambar : </label>
                              <input type="file" id="form6Example7" class="form-control" />
                            </div>
                          </div>
                      
                        <div class="col">
                        <div class="form-outline mb-4">
                          <label class="form-label" for="form6Example8">Sinopsis :</label>
                          <textarea class="form-control" id="form6Example8" rows="6"></textarea>
                        </div>
                        </div>
                      
                        <button type="submit" class="btn btn-primary mb-4">Tambahkan</button>
                        <button type="submit" class="btn btn-warning mb-4">Batal</button>
                      </form> --}}

                      <form action="/dashboard/films" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label for="title" class="form-label">Title</label>
                          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" autofocus required value="{{ old('title') }}" placeholder="masukkan judul film..">
                          @error('title')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                          @enderror
                        </div>
                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
                            @error('slug')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                          @enderror
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="mb-3">
                              <label for="studio" class="form-label">Studio</label>
                              <input type="text" class="form-control @error('studio') is-invalid @enderror" id="studio" name="studio" value="{{ old('studio') }}" placeholder="masukkan studio film..">
                              @error('studio')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                            @enderror
                          </div>
                          </div>
                          <div class="col-md-6">
                            <div class="mb-3">
                              <label for="author" class="form-label">Pengarang Cerita</label>
                              <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" name="author" value="{{ old('author') }}" placeholder="masukkan pengarang cerita..">
                              @error('author')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                            @enderror
                          </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="mb-3">
                              <label for="country" class="form-label">Negara</label>
                              <input type="text" class="form-control @error('country') is-invalid @enderror" id="country" name="country" value="{{ old('country') }}" placeholder="masukkan asal negara film..">
                              @error('country')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                            @enderror
                          </div>  
                          </div>  
                          <div class="col-md-6">
                            <div class="mb-3">
                              <label for="year" class="form-label">Tahun Rilis</label>
                              <input type="text" class="form-control @error('year') is-invalid @enderror" id="year" name="year" value="{{ old('year') }}" placeholder="masukkan tahun rilis film..">
                              @error('year')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                            @enderror
                            </div>  
                          </div>  
                        </div>    
                        <div class="row">
                          <div class="col-md-6">
                            <div class="mb-3">
                              <label for="duration" class="form-label">Durasi<small>(menit)</small></label>
                              <input type="number" class="form-control @error('duration') is-invalid @enderror" id="duration" name="duration" value="{{ old('duration') }}" placeholder="masukkan durasi film..">
                              @error('duration')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                            @enderror
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="mb-3">
                              <label for="slug" class="form-label">Genre</label>
                              <select class="form-select" aria-label="Default select example" name="category_id">
                                @foreach ($categories as $category)
                                  @if(old('category_id') == $category->id)
                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                 @else 
                                 <option value="{{ $category->id }}">{{ $category->name }}</option>
                                 @endif
                                @endforeach                           
                              </select>
                             </div>
                          </div>
                        </div>
                    
                   
                 
                 
                        
                         <div class="mb-3">
                          <label for="image" class="form-label">Poster Film</label>
                          <img class="img-preview img-fluid mb-3 col-sm-5">
                          <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                          @error('image')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror
                        </div>
                         <div class="mb-3">
                          <label for="synopsis" class="form-label">Sinopsis</label>
                          @error('synopsis')
                          <p class="text-danger">{{ $message }}</p>
                          @enderror
                          <input id="synopsis" type="hidden" name="synopsis" value="{{ old('synopsis') }}">
                          <trix-editor input="synopsis"></trix-editor>
                         </div>
                    
                        <button type="submit" class="btn btn-primary mb-5">Create Film</button>
                      </form>
                     
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
        });

        function previewImage(){
          const image = document.querySelector('#image');
          const imgPreview = document.querySelector('.img-preview');

          imgPreview.style.display = 'block';

          // const oFReader = new FileReader();
          // oFReader.readAsDataURL(image.files[0]);

          // oFReader.onload = function(OFREvent){
          //   imgPreview.src = oFREvent.target.result;
          const blob = URL.createObjectURL(image.files[0]);
          imgPreview.src = blob;
           

        }
        
    </script>
    </body>
</html>