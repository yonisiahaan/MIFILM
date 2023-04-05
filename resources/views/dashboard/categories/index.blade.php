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
                        <li class="navigation-list-item {{ Request::is('dashboard/films') ? 'active' : '' }}">
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
                </div>
            </div>
            <div class="content">
                <div class="navigationBar">
                    <button id="sidebarToggle" class="btn sidebarToggle">
                        <i class="fas fa-bars"></i>
                    </button> &nbsp; &nbsp; &nbsp;
                    <h3>MIFILM</h3>
                </div>
                <div class="container-fluid">
                    <div class="">
                        <div class="row">
                            <div class="col-12">
                                <div class="align-items-center mt-3">
                                    <!-- <h1 class="h3 mb-1 text-gray-800 text-center">FILM</h1>
                                    <hr class="col-2 mx-auto"> -->
                                    <h4 class="text-center my-3">Halo 🤗, {{ auth()->user()->name }} </h4>
                                </div>
                            </div>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <div class="ml-auto p-4">
                                    <a href="/dashboard/categories/create" class="btn btn-secondary me-md-4" type="button"><i class="fas fa-plus"></i>
                                        <span class="fw-bold">Tambahkan Genre Baru</span>
                                    </a>
                                </div>
                            </div>
                            <form type="get" action="#">
                                <div class="row">
                                    <div class="col-md-3 bottom-6">
                                        <input value type="text" class="form-control" id="kata_kunci" name="search" placeholder="Cari...">
                                    </div>
                                    <div class="col-md-4 buttom-6">
                                        <button type="submit" class="btn btn-secondary btn-fill">
                                            <i class="bi bi-search"></i>
                                            &nbsp;Cari
                                        </button>
                                    </div>
                                </div>
                            
                            </form>
                            <div class="row">
                                @if(session()->has('success'))
                                <div class="alert alert-success mt-4" role="alert">
                                    {{ session('success') }}
                                  </div>
                                @endif
                            </div>
                        </div>
                    </div> <br>
                </div>
                <div class="container-fluid mx-auto">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold" style="color: #3D0000;">Tabel Daftar Film</h6>
                        </div>
                        <div class="card-body">
                            {{-- <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable">
                                    <thead class="">
                                        <tr align="center">
                                            <th width="3%" scope="col" class="">No</th>
                                            <th width="10%" scope="col">Judul Film</th>
                                            <th width="8%" scope="col">Genre</th>
                                            <th width="8%" scope="col">Studio</th>
                                            <th width="8%" scope="col">Penulis</th>
                                            <th width="8%" scope="col">Tahun Rilis</th>
                                            <th width="8%" scope="col">Durasi</th>
                                            <th width="8%" scope="col">Negara</th>
                                            <th width="10%" scope="col">Gambar</th>
                                          
                                            <th width="10%" scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Little Mom</td>
                                            <td>Series</td>
                                            <td>Hitmaker Studios</td>
                                            <td>Riheam Junianti</td>
                                            <td>2021</td>
                                            <td>55–56 menit</td>
                                            <td>Indonesia</td>
                                            <td>
                                                <img src="/assets/img/littlemom.jpg" alt class="img-fluid">
                                            </td>
                                            <td>
                                                <div class="d-grid">
                                                    <!-- you can use this as button delete logic -->
                                                    <a href=""
                                                        class="btn btn-danger btn-sm my-2"
                                                        onclick="return confirm('Apakah Anda yakin?')">
                                                        <i
                                                            class="fas fa-trash">
                                                        </i>
                                                        <span>Hapus</span></a>
                                                        <button href="#" class="btn btn-secondary btn-sm my-2" title="Edit">
                                                            <i class="fas fa-edit"></i>
                                                        <span>Edit</span>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> --}}
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable">
                                    <thead class="">
                                        <tr align="center">
                                            <th width="3%" scope="col" class="">No</th>
                                            <th width="10%" scope="col">Genre Film</th>
                                            <th width="2%" scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>
                                                {{-- <div class="d-grid">
                                                    <!-- you can use this as button delete logic -->
                                        
                                                        <form action="/dashboard/films/{{ $film->slug }}" method="post">
                                                            @method('delete')
                                                            @csrf
                                                            <button onclick="return confirm('Yakin mau dihapus?')" class="btn btn-danger btn-sm my-2 w-100"><i
                                                                class="fas fa-trash">
                                                            </i>Hapus</button>

                                                        </form>
                                                        <a href="/dashboard/films/{{ $film->slug }}/edit" class="btn btn-secondary btn-sm my-2" title="Edit">
                                                            <i class="fas fa-edit"></i>
                                                        <span>Edit</span>
                                                    </a>
                                                </div> --}}
                                                <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-info"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button onclick="return confirm('Yakin mau dihapus?')" class="badge bg-danger border-0 "><i class="fa fa-trash" aria-hidden="true"></i></button>

                                                </form>
                                                {{-- <a href="" class="badge bg-danger"><i class="fa fa-trash" aria-hidden="true"></i></a> --}}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
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
    <script src="https://use.fontawesome.com/3c3f9f2cc5.js"></script>
</body>
</html> 