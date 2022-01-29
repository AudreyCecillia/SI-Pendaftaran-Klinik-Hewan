<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $fillable = ['namapemilik', 'namahewan', 'jenishewan', 'diagnosa'];

    public function wali(){
        return $this->belongsTo('App\Wali','wali_id','id');
    }
}
