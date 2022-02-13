<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_transaksi',
        'id_product',
        'jumlah_qty',
        'total_harga',
    ];
    public function getProduct()
    {
        return $this->HasMany(Product::class,'id','id_product');
    }
}
