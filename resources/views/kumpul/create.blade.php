@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Halaman Kumpulan</div>
    <div class="card-body">
        <form action="{{ url('kumpul') }}" method="post">
            {!! csrf_field() !!}
            <label>Nama Kumpulan</label><br>
            <input type="text" name="nama" id="nama" class="form-control"><br>

            <label>Nama Kursus</label><br>
            <select name="kursus_id" id="kursus_id" class="form-control">
                @foreach($kursus as $id => $nama)
                    <option value="{{ $id }}">{{ $nama }}</option>
                @endforeach
            </select><br>

            <label>Tanggal</label><br>
            <input type="date" name="tgl" id="tgl" class="form-control"><br>
            <input type="submit" value="save" class="btn btn-success"><br>
        </form>
    </div>
</div>
@stop   