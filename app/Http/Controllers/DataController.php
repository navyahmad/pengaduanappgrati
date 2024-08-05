<?php

namespace App\Http\Controllers;

use App\Exports\ExportData;
use App\Models\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use PhpParser\Node\Expr\Cast\String_;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Data::all();
        return view('data.index',[
                     "image" => "logopln.jpg",
                     "active" => "data"
                 ])->with('data', $data);
    }


    function export_excel(){
        return Excel::download(new ExportData, "data.xlsx");
    }

    public function deleteAll(Request $request)
    {
        // Ambil semua data dari tabel
        $dataItems = Data::all();

        foreach ($dataItems as $data) {
            if ($data->foto) {
                Storage::disk('public')->delete($data->foto);
            }
        }
        Data::truncate();

        return redirect()->back()->with('success', 'Semua data dan file terkait berhasil dihapus.');

    }

    public function search(Request $request)
    {
        $query = $request->input('search');
        $data = Data::where('nopel', 'LIKE', "%{$query}%")->get();

        return view('data.index', compact('data'),[
            "image" => "logopln.jpg",
            "active" => "data",
            'data' => $data,
            'search' => $query
        ])->with('data', $data);
        
        // return view('data.index',[
            
        //     'data' => $data,
        //     'search' => $query
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('data.create', [
            "image" => "logopln.jpg",
            "active" => "data"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // $input = $request->all();
        // Data::create($input);
        // return redirect('data')->with('flash_message', 'Berhasil');

        $request->validate([
            'no_agenda' => 'required|string|max:255',
            'nopel' => 'required|string|max:255',
            'nama_pl' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'tarif' => 'required|string|max:255',
            'daya' => 'required|string|max:255',
            'tlp' => 'required|string|max:255',
            'jns' => 'required|string|max:255',
            'nm_petugas' => 'required|string|max:255',
            'tgl' => 'required|date',
            'foto' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        $data = new Data($request->all());

            if ($request->hasFile('foto')) {
                $path = $request->file('foto')->store('foto-pln', 'public');
                $data->foto = $path;
            }

            $data->save();

            return redirect('data')->with('flash_message', 'Berhasil Menyimpan Data');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $data = Data::find($id);
        return view('data.show',[
            "image" => "logopln.jpg",
            "active" => "data"
        ])->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $data = Data::find($id);
        return view('data.edit',[
            "image" => "logopln.jpg",
            "active" => "data"
        ], compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        // $data = Data::find($id);
        // $input = $request->all();
        // $data->update($input);
        // return redirect('data')->with('flash_message', 'Berhasil Mengubah Data');
        $data = Data::find($id);

        $request->validate([
            'no_agenda' => 'required|string|max:255',
            'nopel' => 'required|string|max:255',
            'nama_pl' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'tarif' => 'required|string|max:255',
            'daya' => 'required|string|max:255',
            'tlp' => 'required|string|max:255',
            'jns' => 'required|string|max:255',
            'nm_petugas' => 'required|string|max:255',
            'tgl' => 'required|date',
            'foto' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:5120',
        ]);
    
        // Memperbarui data yang diinput
        $input = $request->except(['foto']);
    
        // Memproses file foto jika ada
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($data->foto && Storage::disk('public')->exists($data->foto)) {
                Storage::disk('public')->delete($data->foto);
            }
    
            // Simpan foto baru
            $file = $request->file('foto');
            $path = $file->store('foto-pln', 'public');
            $input['foto'] = $path;
        }
    
        // Memperbarui data di database
        $data->update($input);
    
        return redirect('data')->with('flash_message', 'Berhasil Mengubah Data');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $data = Data::find($id);

    if ($data) {
        // Hapus file jika ada
        if ($data->foto) {
            Storage::disk('public')->delete($data->foto);
        }
        $data->delete();
    }

    return redirect('data')->with('flash_message', 'Berhasil Menghapus Data');
    }
}
