@extends('partials.navbar')
@section('content')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

                <div class="card col-xs-12">
                    <div class="card-header">
                        <h2>Data Pengaduan</h2>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="action-buttons-container">
                                <a href="{{ url('/data/create') }}" class="btn btn-primary btn-sm mr-2" title="Tambah Siswa Baru">
                                    <i class="bi bi-save"></i> Laporkan
                                </a>
                            
                                <a href="{{ url('data/export/excel') }}" class="btn btn-dark btn-sm mr-2" title="Export Excel">
                                    <i class="bi bi-download"></i>  Excel
                                </a>
                            
                                <a href="#" class="btn btn-danger btn-sm mr-2" onclick="event.preventDefault(); if(confirm('Apakah Kamu Yakin Ingin Menghapus Semua data?')) { document.getElementById('delete-all-form').submit(); }">
                                    <i class="bi bi-trash"></i> Hapus Semua Data
                                </a>
                            
                                <form id="delete-all-form" action="{{ route('data.deleteAll') }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                            <div class="search-container">
                                <input class="form-control mr-2 mt-2" id="search-input" name="search" aria-label="Search" placeholder="Cari id pelanggan..." value="{{ request('search', '') }}">
                                <a href="#" class="btn btn-success btn-sm" id="search-button"><i class="bi bi-search"></i> Cari</a>
                            </div>
                        </div>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            @include('data.table', $data)
                        </div>
 
                    </div>
                </div>
                <br>
                



                {{-- js search --}}
                <script>

                    

                document.getElementById('search-button').addEventListener('click', function(event) {
                        event.preventDefault();
                        const searchQuery = document.getElementById('search-input').value;
                        const searchUrl = `/search?search=${encodeURIComponent(searchQuery)}`;
                        window.location.href = searchUrl;
                    });

                

                    


                </script>

                {{-- js end --}}



                
@endsection