<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nomor Agenda</th>
            <th>ID Pelanggan/No Meter</th>
            <th>Nama Pelapor</th>
            <th>Alamat</th>
            <th>Tarif</th>
            <th>Daya</th>
            <th>No Telepon</th>
            <th>Jenis Gangguan</th>
            <th>Nama Petugas</th>
            <th>Tanggal</th>
            <th>Dokumentasi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    @foreach($data as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->no_agenda }}</td>
            <td>{{ $item->nopel }}</td>
            <td>{{ $item->nama_pl }}</td>
            <td>{{ $item->alamat }}</td>
            <td>{{ $item->tarif }}</td>
            <td>{{ $item->daya }}</td>
            <td>{{ $item->tlp }}</td>
            <td>{{ $item->jns }}</td>
            <td>{{ $item->nm_petugas }}</td>
            <td>{{ $item->tgl }}</td>
            <td>
                @if($item->foto)
                    <img src="{{ asset('storage/' . $item->foto) }}" alt="Dokumentasi" style="width: 100px; height: auto;">
                @else
                    Tidak ada dokumentasi
                @endif
            </td>
           
            
            

            <td>
                <div class="btn-group">
                <a class="tmbl" href="{{ url('/data/' . $item->id) }}" title="View Daftar"><button class="btn btn-info "><i class="fa fa-eye" aria-hidden="true"></i> Tampil</button></a>
                <a class="tmbl" href="{{ url('/data/' . $item->id . '/edit') }}" title="Edit Guru"><button class="tmbl btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                <form method="POST" action="{{ url('/data' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger" title="Delete Data" onclick="return confirm(&quot;Yakin akan menghapus data?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</button>
                </form> 
            </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>