<?php

namespace App;

use App\Counter;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */


    // relasi ke satu conter
    public function counter()
    {
        return $this->belongsTo(Counter::class);
    }

     // relasi ke satu category
    // public function category()
    // {
    //     return $this->belongsTo(Category::class);
    // }
}
