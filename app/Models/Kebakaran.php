<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kebakaran extends Model
{
    protected $fillable = ['lokasi', 'penyebab', 'tanggal', 'kerugian'];
    protected $table = 'kebakaran';

}

