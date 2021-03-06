<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table='admins';

    protected $fillable = [
        'user_id','category_id','name','phone','address'
    ];

    public function counter(){

        return $this->hasOne(Counter::class);
    }
}
