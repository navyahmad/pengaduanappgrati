@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">Tampilan Edit</div>
        <div class="card-body">

            <form action="{{ url('kumpul/' .$kumpul->id) }}" method="post">
            {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{ $kumpul->id }}" id="id">
        <label for="">Nama</label><br>
        <input type="text" name="nama" id="nama" value="{{ $kumpul->nama }}" class="form-control"><br>

        <label>Nama Kursus</label><br>
        <select name="kursus_id" id="kursus_id" class="form-control">
            @foreach($kursus as $id => $nama)
                <option value="{{ $id }}" {{ $kumpul->kursus_id == $id ? 'selected' : '' }}>
                    {{ $nama }}
                </option>
            @endforeach
        </select><br>




        {{-- <input type="text" name="kursus_id" id="kursus_id" value="{{ $kumpul->kursus_id }}" class="form-control"><br> --}}
        {{-- <select class="form-select" name="kursus_id">
            @foreach ($kumpul as $kursus)
            @if(old('kursus_id', $kumpul->kursus_id) == $kursus)
            <option value="{{ $kursus }}" selected>{{ $kumpul->kursus->nama }}</option>  
            @else
            <option value="{{ $kursus }}">{{ $kumpul->kursus->nama }}</option>  
            @endif
            @endforeach
          </select> --}}


            {{-- <select name="kursus_id" id="kursus_id" class="form-control">
                @foreach($kumpul as $kursus)
                @if (old('kursus_id', $kumpul->kursus_id)== $kursus->id )
                    <option value="{{ $kursus->id }}" selected>{{ $kursus->nama }}</option>
                @else
                    <option value="{{ $kategori->id }}">{{ $kategori->name }}</option>  
                    <option value="{{ $kursus->id }}">{{ $kursus->nama }}</option>
                @endif
                @endforeach
            </select><br> --}}

        <label for="">Tanggal</label>
        <input type="date" name="tgl" id="tgl" value="{{ $kumpul->tgl }}" class="form-control"><br>
        <input type="submit" value="Update" class="btn btn-success"><br>
        </form>
        </div>
    </div>
@endsection


