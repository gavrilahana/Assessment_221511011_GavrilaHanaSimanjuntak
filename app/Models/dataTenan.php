<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataTenan extends Model
{
    protected $table = 'data_tenans';
    protected $primaryKey = 'KodeTenan';
    protected $fillable = [
        'KodeTenan',
        'NamaTenan',
        'HP',
    ];
    use HasFactory;
    public $timestamps = true;
}
