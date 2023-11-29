<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataKasir extends Model
{
    protected $table = 'data_kasirs';
    protected $primaryKey = 'KodeKasir';
    protected $fillable = [
        'KodeKasir',
        'Nama',
        'HP',
    ];
    use HasFactory;
    public $timestamps = true;
}
