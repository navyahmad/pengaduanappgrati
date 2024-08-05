@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">Tampilan Kumpulan</div>
        <div class="card-body">
            <div class="card-body">
                <h5 clasq="card-title">Nama : {{ $kumpul->nama }}</h5>
                <p class="card-text">Nama Kursus : {{ $kumpul->kursus->nama }}</p>
                <p class="card-text">Tanggal : {{ $kumpul->tgl }}</p>
            </div>
            <hr>
        </div>
    </div>
@endsection