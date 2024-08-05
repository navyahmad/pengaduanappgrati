@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">Tampilan Edit</div>
        <div class="card-body">

            <form action="{{ url('daftar/' .$daftar->id) }}" method="post">
            {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{ $daftar->id }}" id="id">
        <label for="">Nomor Daftar</label><br>
        <input type="text" name="no_daftar" id="no_daftar" value="{{ $daftar->no_daftar }}" class="form-control"><br>

        <label for="">Nama Kumpulan</label><br>
        <select name="kumpul_id" id="kumpul_id" class="form-control">
            @foreach($kumpul as $id => $nama)
                <option value="{{ $id }}" {{ $daftar->kumpul_id == $id ? 'selected' : '' }}>
                    {{ $nama }}
                </option>
            @endforeach
        </select><br>
        {{-- <input type="text" name="kumpul_id" id="kumpul_id" value="{{ $daftar->kumpul_id }}" class="form-control"><br> --}}

        <label for="">Nama Siswa</label><br>
        <select name="siswa_id" id="siswa_id" class="form-control">
            @foreach($siswa as $id => $nama)
                <option value="{{ $id }}" {{ $daftar->siswa_id == $id ? 'selected' : '' }}>
                    {{ $nama }}
                </option>
            @endforeach
        </select><br>

        {{-- <input type="text" name="siswa_id" id="siswa_id" value="{{ $daftar->siswa_id }}" class="form-control"><br> --}}
        <label for="">Tanggal Daftar</label>
        <input type="date" name="tgl_join" id="tgl_join" value="{{ $daftar->tgl_join }}" class="form-control"><br>
        <label for="">Biaya</label><br>
        <input type="text" name="biaya" id="biaya" value="{{ $daftar->biaya }}" class="form-control"><br>
        <input type="submit" value="Update" class="btn btn-success"><br>
        </form>
        </div>
    </div>
@endsection


