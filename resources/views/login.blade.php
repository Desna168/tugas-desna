<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- Bootstrap Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>TUGAS WEB | LOGIN</title>
  </head>
  <body>

        <div class="container mt-4">

            <div class="row mt-5 justify-content-center">
                <div class="col-5 mt-5">
    
                  @if (session()->has('success'))    
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                      {{ session('success') }}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  @endif
    
                  @if (session()->has('loginError'))    
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      {{ session('loginError') }}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  @endif
    
                    <div class="card border-1">
                        <div class="card-header text-center bg-light">
                            <strong>FORM <span class="text-primary">LOGIN</span></strong>
                        </div>
                        <div class="card-body">
                            <form action="/login" method="post">
                                @csrf
                                <div class="mb-3">
                                  <input type="text" class="form-control" id="nameinput" aria-describedby="nameHelp"
                                  name="name" placeholder="Masukkan name" autofocus value="{{ old('name') }}" required>
                                </div>
                                <div class="mb-3">
                                  <input type="password" class="form-control" id="passwordinput" 
                                  name="password" placeholder="Masukkan Password" value="{{ old('password') }}" required>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <input type="submit" name="submit" class="btn btn-primary w-100" value="Sign In">
                                    </div>
                                    <div class="col-12 mt-2">
                                        <p class="text-center">Belum Punya Akun? <a href="/register" class="text-decoration-none text-primary"><strong>Daftar</strong></a> </p>
                                    </div>
                                </div>
                              </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>