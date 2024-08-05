@extends('partials.navbar')
@section('content')
    <div class="card">
        <div class="card-header">Tampilan Data Gangguan</div>
        <div class="card-body">
            <div class="card-body">
                <h5 clasq="card-title">Nomor Agenda : {{ $data->no_agenda }}</h5>
                <p class="card-text">Nomor Pelanggan : {{ $data->nopel }}</p>
                <p class="card-text">Nama Pelopor : {{ $data->nama_pl }}</p>
                <p class="card-text">Alamat : {{ $data->alamat }}</p>
                <p class="card-text">Tarif : {{ $data->tarif }}</p>
                <p class="card-text">Daya : {{ $data->daya }}</p>
                <p class="card-text">No Telepon : {{ $data->tlp }}</p>
                <p class="card-text">Jenis Gangguan : {{ $data->jns }}</p>
                <p class="card-text">Nama Petugas : {{ $data->nm_petugas }}</p>
                <p class="card-text">Tanggal : {{ $data->tgl }}</p>
                <!-- Menampilkan foto jika ada -->
                @if($data->foto)
                    <p class="card-text">Foto:</p>
                    <img src="{{ asset('storage/' . $data->foto) }}" alt="Foto Dokumentasi" style="max-width: 50%; height: 50%;">
                @else
                    <p class="card-text">Tidak ada foto tersedia.</p>
                @endif
            </div>
            <hr>
        </div>
    </div>
    <br>
@endsection