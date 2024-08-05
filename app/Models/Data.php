<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table = 'datas';
    use HasFactory;
    protected $guarded = 'id';
    protected $fillable = [
        'no_agenda',
        'nopel', 
        'nama_pl', 
        'alamat', 
        'tarif', 
        'daya', 
        'tlp', 
        'jns', 
        'nm_petugas', 
        'tgl', 
        'foto'
    ];
}
