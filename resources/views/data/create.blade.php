@extends('partials.navbar')
@section('content')

<div class="card">
    <div class="card-header">Halaman Tambah Data Pengaduan</div>
    <div class="card-body">
        <form action="{{ url('data') }}" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <label>Nomor Agenda</label><br>
            <input type="text" name="no_agenda" id="no_agenda" class="form-control @error('no_agenda') is-invalid @enderror" required value="{{ old('no_agenda') }}">
            @error('no_agenda')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
            <br>
            <label>Id Pelanggan/Nomor Meter</label><br>
            <input type="text" name="nopel" id="nopel" class="form-control @error('nopel') is-invalid @enderror" required value="{{ old('nopel') }}">
            @error('nopel')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
            <br>
            <label>Nama Pelopor</label><br>
            <input type="text" name="nama_pl" id="nama_pl" class="form-control @error('nama_pl') is-invalid @enderror" required value="{{ old('nama_pl') }}">
            @error('nama_pl')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
            <br>
            <label>Alamat</label><br>
            <input type="text" name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror" required value="{{ old('alamat') }}">
            @error('alamat')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
            <br>
            <label>Tarif</label><br>
            <input type="text" name="tarif" id="tarif" class="form-control @error('tarif') is-invalid @enderror" required value="{{ old('tarif') }}">
            @error('tarif')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
            <br>
            <label>Daya</label><br>
            <input type="text" name="daya" id="daya" class="form-control @error('daya') is-invalid @enderror" required value="{{ old('daya') }}">
            @error('daya')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
            <br>
            <label> No Telepon</label><br>
            <input type="text" name="tlp" id="tlp" class="form-control @error('tlp') is-invalid @enderror" required value="{{ old('tlp') }}">
            @error('tlp')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
            <br>
            <label>Jenis Gangguan</label><br>
            <input type="text" name="jns" id="jns" class="form-control @error('jns') is-invalid @enderror" required value="{{ old('jns') }}">
            @error('jns')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
            <br>
            <label>Nama Petugas</label><br>
            <input type="text" name="nm_petugas" id="nm_petugas" class="form-control @error('nm_petugas') is-invalid @enderror" required value="{{ old('nm_petugas') }}">
            @error('nm_petugas')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
            <br>
            
            <label>Tanggal</label><br>
            <input type="date" name="tgl" id="tgl" class="form-control @error('tgl') is-invalid @enderror" required value="{{ old('tgl') }}">
            @error('tgl')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
            <br>

            <label>Dokumentasi</label><br>

            <div id="foto-preview">
              <img id="img-preview" src="#" alt="Foto Preview" style="display:none; max-width: 200px;">
          </div>

            <input type="file" name="foto" id="foto" class="form-control @error('foto') is-invalid @enderror" onchange="previewImage()">
            @error('foto')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
            <br>
            
            <input type="submit" value="Simpan" class="btn btn-success"><br>
        </form>
    </div>
</div>
<br>



        <script>
            function previewImage(){
          const image= document.querySelector('#foto');
          const imgPreview = document.querySelector('.img-preview');

          imgPreview.style.display= 'block';

          const oFReader = new FileReader();
          oFReader.readAsDataURL(image.files[0]);

          oFReader.onload = function(OFREvent) {
            imgPreview.src = OFREvent.target.result;
          }
        }               

        </script>


@endsection 