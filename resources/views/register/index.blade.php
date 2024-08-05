<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    {{-- my style --}}
    {{-- <link rel="stylesheet" href="/css/style.css"> --}}
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Pengaduan PLN</title>
</head>
<body>
    <div class="row justify-content-center mt-5">
        <div class="col-lg-5 ml-3">
            <div class="card">
                <div class="card-body">
            <main class="form-signin">
                <form action="/register" method="post">
                    @csrf
                    <div class="d-flex justify-content-center">
                        <img class="mb-4 " src="/img/logopln.jpg" alt="" width="72" height="72"><br>
                    </div>
                        <p class="text-center">Silahkan Registrasi terlebih Dahulu!!</p>
                        <h1 class="h3 lg-3 fw-normal text-center">Register</h1><br>
                @csrf                 
                <div class="form-floating ">
                    <label for="name">Nama</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nama" required value="{{ old('name') }}">
                    @error('name')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                    @error('username')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" required value="{{ old('email') }}">
                    @error('email')
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
            <br>
                
                <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button><br>
                
                </form>
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
