<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hasilpemeriksaan extends Model
{
    use HasFactory;

    protected $table = 'hasilpemeriksaan';
    protected $fillable = [
        'id',
        'hasil_pemeriksaan_1',
        'hasil_pemeriksaan_2',
        'hasil_pemeriksaan_3',
        'hasil_pemeriksaan_4'
        
    ];
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
}

