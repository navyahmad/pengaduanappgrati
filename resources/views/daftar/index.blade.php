@extends('navbar')
@section('content')

                <div class="card">
                    <div class="card-header">
                        <h2>Data Pendaftaran</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/daftar/create') }}" class="btn btn-success btn-sm" title="Tambah Siswa Baru">
                            <i class="fa fa-plus" aria-hidden="true"></i> Tambah Baru
                        </a>
                        <a href="{{ url('daftar/export/excel') }}" class="btn btn-dark btn-sm" title="Tambah Siswa Baru">
                            <i class="fa fa-plus" aria-hidden="true"></i> Export Excel
                        </a>
                        <form class="form-inline" method="get" action="/search">
                            <input class="form-control mr-sm-2" name="search" aria-label="Search" placeholder="Cari..." value="{{ isset($serach) ? $search : ''}}">
                            <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                          </form>   
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            @include('daftar.table', $daftar)
                        </div>
 
                    </div>
                </div>
@endsection