@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">Tampilan Pendaftaran</div>
        <div class="card-body">
            <div class="card-body">
                <h5 clasq="card-title">Nomor Daftar : {{ $daftar->no_daftar }}</h5>
                <p class="card-text">Nama Kumpulan : {{ $daftar->kumpul_id }}</p>
                <p class="card-text">Nama Kumpulan : {{ $daftar->siswa_id }}</p>
                <p class="card-text">Tanggal Join : {{ $daftar->tgl_join }}</p>
                <p class="card-text">Biaya : {{ $daftar->biaya }}</p>
            </div>
            <hr>
        </div>
    </div>
@endsection