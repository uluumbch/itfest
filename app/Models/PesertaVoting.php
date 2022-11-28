<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesertaVoting extends Model
{
    use HasFactory;
    protected $table = 'peserta_voting';

    protected $fillable = ['nama','nama_gambar','desc','gambar', 'jumlah_vote',];
}
