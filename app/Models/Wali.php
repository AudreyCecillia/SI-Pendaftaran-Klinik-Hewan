<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    protected $table = 'datawalis';
    protected $fillable= ['nama_wali','alamat','notelepon','nama_hewan'];
}
