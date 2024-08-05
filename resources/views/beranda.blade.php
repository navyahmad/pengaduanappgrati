@extends('partials.navbar')

@section('content')
    <div class="text animated">
        <span>HALO SELAMAT DATANG</span><br>
        <h4 class="ap animated">Di Aplikasi Laporan Pengaduan dan Gangguan</h4>
        <h4 class="pt animated">PT PLN UNIT INDUK DISTRIBUSI JAWA TIMUR</h4>
        <h4 class="up animated">UP 3 ULP GRATI</h4>
        <a href="{{ url('/data/create') }}" class="btn btn-warning animated">Melaporkan</a>
    </div>
    
    <div class="ltf animated">
        <dotlottie-player src="https://lottie.host/ebe1c1b7-b7c1-46a6-ab4b-d5755084401f/9TldGgugO8.json" background="transparent" speed="1" style="width: 440px; height: 440px;" loop autoplay></dotlottie-player>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const elements = document.querySelectorAll('.animated');
            elements.forEach((el, index) => {
                setTimeout(() => {
                    el.style.opacity = 1; // Make element visible
                    el.classList.add('fadeIn');
                }, index * 300); // Adjust the delay (300ms) as needed
            });
        });
    </script>
    


@endsection
