<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/p2/css/mdb.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>Login</title>
    
</head>
<body>
    
    <div class="card card-login">
        @if(session()->has('success'))
        {{-- <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> --}}
        <div class="alert alert-success d-flex align-items-center" role="alert">
            🤗
            <div>
                {{ session('success') }}
            </div>
          </div>
          
        @endif

        @if(session()->has('loginError'))
        {{-- <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> --}}
        <div class="alert alert-danger d-flex align-items-center" role="alert">
            🤗
            <div>
                {{ session('loginError') }}
            </div>
          </div>
          
        @endif

        <div class="card-title">
            <h2>LOG IN</h2>
        </div>
        <div class="card-body">
            <form action="/login" method="post">
                @csrf
                <!-- Email input -->
                <label class="form-label" for="email">Email:</label>
                <div class="form-outline mb-4">
                <input type="email" id="email" name="email" class="form-control" placeholder="masukkan email.." value={{ old('email') }}>
                </div>
            
                <!-- Password input -->
                <label class="form-label" for="password">Password:</label>
                <div class="form-outline mb-4">
                <input type="password" id="password" name="password" class="form-control"  placeholder="masukkan password.." value={{ old('password') }}>
                </div>
            
                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
               
                <!-- Submit button -->
                <div class="row d-flex justify-content-between m-auto">
                    <div class="col">
                        <button type="submit" class="btn btn-block">LOG IN</button>
                        <p class="mt-3">Belum memiliki akun? <a href="/registration">Daftar disini</a></p>
                    </div>
                </div>
<!--         
                </div> -->
            
            </form>
        </div>
    </div>

    <!-- script js -->
    <script src="p2/js/mdb.min.js"></script>
</body>
</html>