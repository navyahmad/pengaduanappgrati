<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    {{-- my style --}}
    <link rel="stylesheet" href="/css/style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Pengaduan PLN</title>

    <style>
        
        /* .footer-copyright {
            display: flex;
            flex-direction: column;
            width: 100%;
            background-color: #f8f9fa;
            color: #6c757d;
            text-align: center;
            padding: 10px 0;
            position: relative;
            margin-top: auto;
            
        } */
        

    </style>
</head>
<body>
    
    <div class="row justify-content-center mt-5">
        <div class="col-lg-5 ml-3">
            
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="close">&times;</button>
            </div>
            @endif

            @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button>
            </div>
            @endif

            <div class="card">
                <div class="card-body">

                    <main class="form-signin">
                        <form action="/login" method="post">
                            @csrf

                            <div class="d-flex justify-content-center">
                                <img class="mb-4" src="/img/logopln.jpg" alt="" width="72" height="72"><br>
                            </div>
                            <p class="text-center">Silahkan Login terlebih Dahulu!!</p>
                            <h1 class="h3 lg-3 fw-normal text-center">Login</h1><br>
                                            
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" autofocus required value="{{ old('username') }}">
                                @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password" class="mt-2">Password</label>
                                <div class="input-group">
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text mb-auto mt-0" id="togglePassword" style="cursor: pointer;">
                                            <i class="bi bi-eye-slash" id="eyeIcon"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                                            
                            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button><br>
                                            
                        </form>
                        <small class="d-block text-center mt-3 text-decoration-none">Not registered? <a href="/register">Register Now!</a></small>
                    </main>
                </div>
            </div>
        </div>
    </div>

    


<br>
    <footer class="footer-copyright">
        <div class=" text-center">
            <span class="text-muted">&copy; 2024 Navy Ahmad. All rights reserved.</span>
        </div>
      </footer>


    <script>
        document.getElementById('togglePassword').addEventListener('click', function () {
            const password = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');
            if (password.type === 'password') {
                password.type = 'text';
                eyeIcon.classList.remove('bi-eye-slash');
                eyeIcon.classList.add('bi-eye');
            } else {
                password.type = 'password';
                eyeIcon.classList.remove('bi-eye');
                eyeIcon.classList.add('bi-eye-slash');
            }
        });
    </script>

  


</body>
</html>
