@extends('layout')
@section('content')

                <div class="card">
                    <div class="card-header">
                        <h2>Data Kumpulan</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/kumpul/create') }}" class="btn btn-success btn-sm" title="Tambah Siswa Baru">
                            <i class="fa fa-plus" aria-hidden="true"></i> Tambah Baru
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Nama Kursus</th>
                                        <th>Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($kumpul as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->kursus->nama }}</td>
                                        <td>{{ $item->tgl }}</td>
 
                                        <td>
                                            <a href="{{ url('/kumpul/' . $item->id) }}" title="View Guru"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/kumpul/' . $item->id . '/edit') }}" title="Edit Guru"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/kumpul' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Guru" onclick="return confirm(&quot;Yakin akan menghapus data?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form> 
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
@endsection