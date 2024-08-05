@extends('partials.navbar')
@section('content')

                <div class="card w-100">
                    <div class="card-header">
                        <h2 class="text-center">Data Pengaduan</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('') }}" class="btn btn-success btn-sm" title="Tambah Siswa Baru">
                             Tambah Baru
                        </a>
                        <a href="{{ url('') }}" class="btn btn-dark btn-sm" title="Export Excel">
                             Export Excel
                        </a>
                        {{-- <form class="form-inline" method="get" action="/search">
                            <input class="form-control mr-sm-2" name="search" aria-label="Search" placeholder="Cari..." value="">
                            <button class="btn btn-success btn-sm my-2 my-sm-0" type="submit">Search</button>
                        </form> --}}
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            @include('data.table', $lapor)
                        </div>
                    </div>
                </div>
@endsection