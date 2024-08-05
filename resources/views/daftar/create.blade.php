@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Halaman Kumpulan</div>
    <div class="card-body">
        <form action="{{ url('daftar') }}" method="post">
            {!! csrf_field() !!}
            <label>Nomor Daftar</label><br>
            <input type="text" name="no_daftar" id="no_daftar" class="form-control"><br>
            <label>Nama Kumpulan</label><br>
            <select name="kumpul_id" id="kumpul_id" class="form-control">
                @foreach($kumpul as $id => $nama)
                    <option value="{{ $id }}">{{ $nama }}</option>
                @endforeach
            </select><br>



            <label>Nama Siswa</label><br>
            <select name="siswa_id" id="siswa_id" class="form-control">
                @foreach($siswa as $id => $nama)
                    <option value="{{ $id }}">{{ $nama }}</option>
                @endforeach
            </select><br>

            <label>Tanggal Daftar</label><br>
            <input type="date" name="tgl_join" id="tgl_join" class="form-control"><br>
            <label>Biaya</label><br>
            <input type="text" name="biaya" id="biaya" class="form-control"><br>
            <input type="submit" value="save" class="btn btn-success"><br>
        </form>
    </div>
</div>
@stop   