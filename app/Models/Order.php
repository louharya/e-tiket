<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_tiket',
        'id_user',
        'nama',
        'no_telp',
        'email',
        'jumlah_kursi',
        'total_harga',
        'status',
    ];

    public function tiket()
    {
        return $this->belongsTo(Tiket::class, 'id_tiket');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
