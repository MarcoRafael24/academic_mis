<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'nrp';
    protected $fillable = ['nrp', 'name','address' , 'email','phone','birth_date','Dosen_nik'];
    protected $keyType = 'string';
    public $incrementing = false;
    public function dosenWali(){

        return $this->belongsTo(Dosen::class,'Dosen_nik');
    }
}
