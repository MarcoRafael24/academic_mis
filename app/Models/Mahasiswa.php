<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'nrp';
    protected $fillable = ['nrp', 'name','address' , 'email','phone','birth_date','dosen_nik'];
    protected $keyType = 'string';
    public $incrementing = false;

    public $timestamps = false;
    public function dosenWali(){

        return $this->belongsTo(Dosen::class,'dosen_nik');
    }
}
