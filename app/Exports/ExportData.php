<?php

namespace App\Exports;

use App\Models\Bayar;
use App\Models\Data;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ExportData implements FromCollection,WithHeadings,WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // $data = Data::all();
        // return view('data.table', ['data' => $data]);
        $data = Data::select('no_agenda', 'nopel', 'nama_pl', 'alamat', 'tarif', 'daya', 'tlp', 'jns', 'nm_petugas', 'tgl')->get();
        
        $data = $data->map(function ($item, $key) {
            return [
                'no' => $key + 1,
                'no_agenda' => $item->no_agenda,
                'nopel' => $item->nopel,
                'nama_pl' => $item->nama_pl,
                'alamat' => $item->alamat,
                'tarif' => $item->tarif,
                'daya' => $item->daya,
                'tlp' => $item->tlp,
                'jns' => $item->jns,
                'nm_petugas' => $item->nm_petugas,
                'tgl' => $item->tgl
            ];
        });

        return $data;

    }

    public function headings(): array
    {
        return [
            'No',
            'Nomor Agenda',
            'ID Pelanggan/No Meter',
            'Nama Pelapor',
            'Alamat',
            'Tarif',
            'Daya',
            'No Telepon',
            'Jenis Gangguan',
            'Nama Petugas',
            'Tanggal'
        ];
    }

    public function styles(Worksheet $sheet)
    {
        // Contoh styling untuk header
        $sheet->getStyle('A1:K1')->applyFromArray([
            'font' => [
                'bold' => true,
                'color' => ['argb' => 'FFFFFF'],
            ],
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => ['argb' => '000000']
            ],   
        ]);

        // Contoh styling untuk baris ganjil dan genap
        // $rows = $sheet->getHighestRow();
        // for ($i = 2; $i <= $rows; $i++) {
        //     if ($i % 2 == 0) {
        //         $sheet->getStyle("A$i:J$i")->applyFromArray([
        //             'fill' => [
        //                 'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
        //                 'startColor' => ['argb' => 'ffffff']
        //             ],
        //         ]);
        //     } else {
        //         $sheet->getStyle("A$i:J$i")->applyFromArray([
        //             'fill' => [
        //                 'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
        //                 'startColor' => ['argb' => 'ffffff']
        //             ],
        //         ]);
        //     }
        // }
    }

}
