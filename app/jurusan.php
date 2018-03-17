<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jurusan extends Model
{
    //
    protected $fillable = ['id','nama','foto'];

    public function barangs()
    {
    	return $this->hasMany('App\kelas');
    }
}
