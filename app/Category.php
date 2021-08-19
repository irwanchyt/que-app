<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable =[
        'user_id','name','initial'
    ];

    public function counter(){

        return $this->hasOne(Counter::class);
    }
}
