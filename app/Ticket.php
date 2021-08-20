<?php

namespace App;

use App\Counter;
use App\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ticket extends Model
{
    use SoftDeletes;
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
