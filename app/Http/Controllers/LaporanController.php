<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
// use App\Http\Controllers\LaporanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use App\Models\Bayar;

class LaporanController extends Controller{
    
    public function lapor1($pid){
        // $bayar = Bayar::find($pid);
        // $pdf = App::make('dompdf.wrapper');
        // $print = "<div style='margin:20px; padding:20px'></div>";
        // $print.= "<h1 align='center'> TANDA TERIMA PEMBAYARAN</h1>";
        // $print.= "<hr/>";
        // $print.= "<p> Nomor Penerimaan : <b>" . $pid . " </b> </p>";
        // $print.= "<p> Tanggal Pembayaran : <b>" . $bayar->tgl_bayar . " </b></p>";
        // $print.= "<p> Nomor Pendaftaran : <b>" . $bayar->daftar->no_daftar . " </b></p>";

        // $print.= "<p> Nama Siswa : <b>" . $bayar->daftar->siswa->nama . " </b></p>";

        // $print.= "<hr/>";
        // $print.= "<table style='width: 100%'>";
        
        // $print.= "<tr>";
        // $print.= "<td>Deskripsi</td>";
        // $print.= "<td>Jumlah</td>";

        // $print.= "</tr>";



        // $print.= "<tr>";
        // $print.= "<td> <h3>" . $bayar->daftar->kumpul->nama . "</h3></td>";
        // $print.= "<td> <h3>" . $bayar->jml . "</h3></td>";
        // $print.= "</tr>";


        // $print.= "</table>";
        // $print.= "<hr/>";
        // // $print.= "<span> Dicetak Oleh : <b>". Auth::user()->name . "</b> </span>";
        // $print.= "<span> Dicetak Tanggal : <b>". date('Y-m-d').  "</b> </span>";


        // $print.= "</div>";
        // $pdf->loadHTML($print);
        // return $pdf->stream();
    }

}
// </table>













?>