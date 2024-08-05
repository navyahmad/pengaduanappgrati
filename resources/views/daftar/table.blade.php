<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nomor Daftar</th>
            <th>Nama Kumpulan</th>
            <th>Nama Siswa</th>
            <th>Tanggal Daftar</th>
            <th>Biaya</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    @foreach($daftar as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->no_daftar }}</td>
            <td>{{ $item->kumpul->nama }}</td>
            <td>{{ $item->siswa->nama }}</td>
            <td>{{ $item->tgl_join }}</td>
            <td>{{ $item->biaya }}</td>

            <td>
                <a href="{{ url('/daftar/' . $item->id) }}" title="View Daftar"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                <a href="{{ url('/daftar/' . $item->id . '/edit') }}" title="Edit Guru"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                <form method="POST" action="{{ url('/daftar' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Dafatr" onclick="return confirm(&quot;Yakin akan menghapus data?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                </form> 
            </td>
        </tr>
    @endforeach
    </tbody>
</table>