<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataBarang extends Model
{
    protected $table = 'data_barangs';
    protected $primaryKey = 'KodeBarang';
    protected $fillable = [
        'KodeBarang',
        'NamaBarang',
        'Satuan',
        'HargaSatuan',
        'Stok',
    ];
    use HasFactory;
    public $timestamps = true;
}
