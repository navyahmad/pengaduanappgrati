<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/logopln.jpg') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> --}}
    <title>Aplikasi Pengaduan PLN</title>

    <style>


@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animated {
    animation-fill-mode: both;
    animation-duration: 1s;
    opacity: 0; /* Start with hidden elements */
}

.fadeIn {
    animation-name: fadeIn;
}








        /* The side navigation menu */

        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        link{
          display: none;
        }

        .logo-title {
            display: flex;
            align-items: center;
        }

        .logo-title img {
            width: 50px; /* Sesuaikan ukuran logo sesuai kebutuhan Anda */
            height: auto;
            margin-right: 10px; /* Ruang antara logo dan title */
        }


  .navbar{
    font-family: poppins;
    background-color: #185D66;
  }

  .navbar-brand{
    color: white;
  }


.navbar-nav {
  margin-left: auto;
}


ul li a:hover{
  color: white;
  transition: 0.5s, transform 0.2s;
}

.nav-link {
 color: #7D7D7D;
}

.nav-link.active {
 color: white;
}

.footer-copyright {
    width: 100%;
    background-color: #f8f9fa;
    color: #6c757d;
    text-align: center;
    padding: 10px 0;
    position: relative;
    margin-top: auto;
}




/* Beranda */

.text{
  position: absolute;
  left: 180px;
  top: 230px;
  width: 700px;
  height: 216px;
  color: #185d66;
  font-family: Poppins;
  font-weight: 400;
}

.text span{
  font-size: 48px;
  font-weight: 600;
  color: red;
}


.btn{
  width: 330px;
  height: 50px;
  border-radius: 8px;
  font-size: 23px;
  font-weight: 500;
  margin-top: 10px;
}

.text a:hover{
  transition: 0.5s, transform 0.2s;
}

.ltf{
  margin-left: 750px;
  margin-top: 20px;
  margin-bottom: 20px;
}










@media (max-width: 1276px) {
    .text {
        position: static;
        margin-top: 5px;
        width: 100%;
        padding: 20px;
        text-align: center;
    }

    .text span {
        font-size: 36px;
    }

    .text .ap,
    .text .pt,
    .text .up {
        font-size: 28px;
    }

    .btn {
        width: 100%;
        font-size: 20px;
    }

    .ltf {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        margin: 75px 0;
    }
}

@media (max-width: 1000px) {
    .text {
        position: static;
        width: 100%;
        padding: 20px;
    }

    .text span {
        font-size: 36px;
    }

    .text .ap,
    .text .pt,
    .text .up {
        font-size: 27x;
    }

    .btn {
        width: 100%;
        font-size: 20px;
    }

    .ltf {
        display: flex;
        
        justify-content: center;
        align-items: center;
        width: 100%;
        margin: 75px 0;
    }
}

@media (max-width: 767px) {
    .text {
        position: static;
        width: 100%;
        padding: 20px;
        text-align: center;
    }

    .text span {
        font-size: 36px;
    }

    .text .ap,
    .text .pt,
    .text .up {
        font-size: 23px;
    }

    .btn {
        width: 100%;
        font-size: 20px;
    }

    .ltf {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        margin: 20% 0;
    }
}

@media (max-width: 500px) {
    .text span {
        font-size: 28px;
    }

    .text .ap,
    .text .pt,
    .text .up {
        font-size: 18px;
    }
    .ltf {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        margin-top: 20px;
    }
}







/* End Beranda */


/* data */


.card{
  width: 100%;
  font-family: poppins;
  
}

.cari{
    height: 50%;
    width: 50%;
}



.card-body .btn{
  width: 40%;
  height: 20%;
  font-size: 17px;
  font-weight: 400;
  text-align: center;
}

.container{
  justify-content: flex;
  align-content: center;
  
}

.btn .btn-light{
  background-color: #185D66;
}

.btn-group {
    display: flex;
    gap: 5px; /* Jarak antara tombol-tombol */
}


.btn-group .btn {
    flex: 1;
    width: 100%;
    height: 70%;
    font-size: 13px;
    font-weight: 400;
    text-align: center;
}



.card-body {
    padding: 20px;
}


.btn {
    margin-bottom: 10px; 
}


.action-buttons-container {
    display: flex;
    flex-wrap: nowrap; 
    gap: 10px; 
    justify-content: space-between;
}


.search-container {
    display: flex;
    flex-direction: row; 
    width: 100%;
    margin-top: 10px; 
}
.search-container .btn{
  margin-bottom: 3px;
  
}



/* @media (max-height: 1500px) {
    .action-buttons-container {
        flex-wrap: wrap; 
        justify-content: center;
        font-size: 12px;
    }
    .action-buttons-container a{
      font-size: 12px;
    }

    .btn {
        flex: 1 1 auto; 
        width: 100%; 
        text-align: center; 
    }

    .search-container {
        align-items: center; 
    }
} */

@media (max-width: 1000px) {
    .card{
      
    }

    .action-buttons-container {
        flex-wrap: wrap; 
        justify-content: center;
        font-size: 12px;
    }
    .action-buttons-container a{
      font-size: 12px;
    }

    .btn {
        flex: 1 1 auto; 
        width: 100%; 
        text-align: center; 
    }

    .search-container {
        align-items: center; 
    }
}


@media (max-width: 767px) {

  .action-buttons-container{

    font-size: 5px;
  }

    .btn {
        /* font-size: 12px;  */
        padding: 8px 10px;
    }

    .form-control {
        margin-top: 10px; 
    }
}


/* data end */







/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width: 990px) {
  .navbar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}

    </style>



</head>
<body class="d-flex flex-column min-vh-100">


  <nav class="navbar navbar-expand-lg navbar-dark ">
    <div class="container">
    <a class="navbar-brand font-weight-bold text-white"><img src="img/{{ $image }}" width="30" height="35" class="d-inline-block align-top" alt="Logo"> PLN GRATI</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link mx-lg-2 {{ ($active === "beranda") ? 'active' : '' }}" href="/beranda">Beranda <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-lg-2 {{ ($active === "data") ? 'active' : '' }}" href="/data">Data</a>
        </li>

        @auth
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Selamat Datang, {{ auth()->user()->name }}
        </a>
        <div class="dropdown-menu">
          {{-- <a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a> --}}
          
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
            </form>
        </div>
      </li>
      @else
      <li class="nav-item">
        <a href="/login" class="nav-link {{ ($active === "login") ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right p-1"></i> Login</a>
      </li>

      @endauth
      </ul>

      
      
        
    </div>
  </div>
  </nav>

  <div class="container mt-4">
    @yield('content')
  </div>

  
  <footer class="footer-copyright">
    <div class=" text-center">
        <span class="text-muted">&copy; 2024 Navy Ahmad. All rights reserved.</span>
    </div>
  </footer>









    
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
</html>