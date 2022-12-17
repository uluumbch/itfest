<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesertaVoteDraw extends Model
{
    use HasFactory;

    protected $fillable = ['nama','nama_gambar','desc','gambar', 'jumlah_vote','nomor'];
}
