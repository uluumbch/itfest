<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListTiket extends Model
{
    use HasFactory;
    protected $table = "list_tiket";
    public $timestamps = false;

    protected $fillable = [
        'nama_tiket',
        'desc_tiket',
        'gambar_tiket',
        'harga_tiket'
    ];
}