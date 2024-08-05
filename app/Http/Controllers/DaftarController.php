<?php

namespace App\Http\Controllers;

use App\Exports\ExportDaftar;
use App\Models\Daftar;
use App\Models\Kumpul;
use App\Models\Kursus;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $daftar = Daftar::all();
        return view('daftar.index')->with('daftar', $daftar);
    }

    // function export_excel(){
    //     return Excel::download(new ExportDaftar, "daftar.xlsx");
    // }


    public function search(Request $request){
        
        $search = $request->search;

        $daftar = Daftar::where(function($query) use ($search){

            $query->where('no_daftar', 'like', "%$search%")
            ->orWhere('biaya', 'like', "%$search%");
        })
        ->orWhereHas('kumpul', function($query) use($search){
            $query->where('nama', 'like', "%$search%");
        })
        ->orWhereHas('siswa', function($query) use($search){
            $query->where('nama', 'like', "%$search%");
        })
        ->get();

        dd($daftar);
        return view('daftar.index', compact('daftar', 'search'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $siswa = Siswa::all()->pluck('nama', 'id');
        // $kumpul = Kumpul::all()->pluck('nama', 'id');
        // return view('daftar.create', compact('kumpul','siswa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Daftar::create($input);
        return redirect('daftar')->with('flash_message', 'Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $daftar = Daftar::find($id);
        return view('daftar.show')->with('daftar', $daftar);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $daftar = Daftar::find($id);
        // $kumpul = Kumpul::all()->pluck('nama', 'id');
        // $siswa = Siswa::all()->pluck('nama', 'id');
        // return view('daftar.edit', compact('daftar', 'kumpul', 'siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $daftar = Daftar::find($id);
        $input = $request->all();
        $daftar->update($input);
        return redirect('daftar')->with('flash_message', 'Berhasil Mengubah Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Daftar::destroy($id);
        return redirect('daftar')->with('fllash_message', 'Berhasil Menghapus Data');
    }
}
