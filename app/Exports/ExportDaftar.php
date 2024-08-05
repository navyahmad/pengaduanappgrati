<?php

namespace App\Exports;
use App\Models\Daftar;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class ExportDaftar implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view():View
    {
        $daftar = Daftar::all();
        return view('daftar.table', ['daftar' => $daftar]);
    }
}
