<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_user', // Menambahkan id_user ke dalam properti fillable
        'no_penerbangan',
        'nama_maskapai',
        'dari_bandara',
        'tujuan_bandara',
        'tanggal_keberangkatan',
        'jam_pergi',
        'jam_sampai',
        'jumlah_kursi',
        'price',
    ];

    // ...kode lainnya
}
