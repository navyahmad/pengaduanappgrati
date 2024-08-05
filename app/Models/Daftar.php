<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    use HasFactory;
    protected $guarded = 'id';
    protected $fillable = ['no_daftar', 'kumpul_id', 'siswa_id', 'tgl_join', 'biaya'];


    public function siswa(){
        return $this->belongsTo(Siswa::class);
    }

    public function kumpul(){
        return $this->belongsTo(Kumpul::class);
    }
}
