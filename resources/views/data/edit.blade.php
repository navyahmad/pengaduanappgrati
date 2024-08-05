@extends('partials.navbar')
@section('content')
    <div class="card">
        <div class="card-header">Tampilan Edit</div>
        <div class="card-body">

            <form action="{{ url('data/' .$data->id) }}" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{ $data->id }}" id="id">
        <label for="">Nomor Agenda</label><br>
        <input type="text" name="no_agenda" id="no_agenda" value="{{ $data->no_agenda }}" class="form-control @error('no_agenda') is-invalid @enderror" required value="{{ old('no_agenda') }}">
            @error('no_agenda')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror<br>
        <label for="">Id Pelanggan/Nomor Meter</label><br>
        <input type="text" name="nopel" id="nopel" value="{{ $data->nopel }}" class="form-control @error('nopel') is-invalid @enderror" required value="{{ old('nopel') }}">
            @error('nopel')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror<br>
        <label for="">Nama Pelapor</label>
        <input type="text" name="nama_pl" id="nama_pl" value="{{ $data->nama_pl }}" class="form-control @error('nama_pl') is-invalid @enderror" required value="{{ old('nama_pl') }}">
            @error('nama_pl')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror<br>
        <label for="">Alamat</label>
        <input type="text" name="alamat" id="alamat" value="{{ $data->alamat }}" class="form-control @error('alamat') is-invalid @enderror" required value="{{ old('alamat') }}">
            @error('alamat')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror<br>
        <label for="">Tarif</label>
        <input type="text" name="tarif" id="tarif" value="{{ $data->tarif }}" class="form-control @error('tarif') is-invalid @enderror" required value="{{ old('tarif') }}">
            @error('tarif')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror<br>
        <label for="">Daya</label>
        <input type="text" name="daya" id="daya" value="{{ $data->daya }}" class="form-control @error('daya') is-invalid @enderror" required value="{{ old('daya') }}">
            @error('daya')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror<br>
        <label for="">No Telepon</label>
        <input type="text" name="tlp" id="tlp" value="{{ $data->tlp }}" class="form-control @error('tlp') is-invalid @enderror" required value="{{ old('tlp') }}">
            @error('tlp')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror<br>
        <label for="">Jenis Gangguan</label>
        <input type="text" name="jns" id="jns" value="{{ $data->jns }}" class="form-control @error('jns') is-invalid @enderror" required value="{{ old('jns') }}">
            @error('jns')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror<br>
        <label for="">Nama Petugas</label>
        <input type="text" name="nm_petugas" id="nm_petugas" value="{{ $data->nm_petugas }}" class="form-control @error('nm_petugas') is-invalid @enderror" required value="{{ old('nm_petugas') }}">
            @error('nm_petugas')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror<br>
            
        <label for="">Tanggal</label>
        <input type="date" name="tgl" id="tgl" value="{{ $data->tgl }}" class="form-control @error('tgl') is-invalid @enderror" required value="{{ old('tgl') }}">
            @error('tgl')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror<br>



            <label for="">Dokumentasi</label><br>
            @if($data->foto)
                <img src="{{ asset('storage/' . $data->foto) }}" alt="Foto" style="max-width: 150px; height: auto;"><br>
            @endif
            <br>
            <input type="file" name="foto" id="foto" class="form-control @error('foto') is-invalid @enderror" id="foto" onchange="previewImage()">
            @error('foto')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
            @enderror
            <br>


        <input type="submit" value="Edit" class="btn btn-success"><br>
        </form>
        </div>
    </div>
    <br>


      <script>

        




      </script>





@endsection


