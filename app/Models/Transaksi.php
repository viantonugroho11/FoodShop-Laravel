<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = [
        'orderid',
        'transaksiid',
        'id_user',
        'tipe',
        'status',
        'total',
    ];
    public function getTransaksiDetail()
    {
        return $this->HasMany(TransaksiDetail::class,'id_transaksi','orderid');
    }
}
