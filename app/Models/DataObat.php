<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataObat extends Model
{
    protected $table="data_obat";
    protected $primaryKey = 'id';
    protected $fillable = array('id','nama_obat','stock','satuan');
//public $timestamps = false;
}
