<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nomor Agenda</th>
            <th>Nomor Pelanggan</th>
            <th>Nama Pelopor</th>
            <th>Alamat</th>
            <th>Tarif</th>
            <th>Daya</th>
            <th>No Telepon</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    @foreach($data as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->nopel }}</td>
            <td>{{ $item->nama_pl }}</td>
            <td>{{ $item->alamat }}</td>
            <td>{{ $item->tarif }}</td>
            <td>{{ $item->daya }}</td>
            <td>{{ $item->tlp }}</td>

            <td>
                <a href="{{ url('/data/' . $item->id) }}" title="View Daftar"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                <a href="{{ url('/data/' . $item->id . '/data') }}" title="Edit Guru"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                <form method="POST" action="{{ url('/data' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Dafatr" onclick="return confirm(&quot;Yakin akan menghapus data?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                </form> 
            </td>
        </tr>
    @endforeach
    </tbody>
</table>