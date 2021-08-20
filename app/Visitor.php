<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $table ='visitors';

    protected $fillable = [

        'name','age','gender','phone','alamat'
    ];

    public function counter()
    {
        return $this->belongsTo('App\Counter');
    }
}
