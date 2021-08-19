<?php

namespace App;

use App\Ticket;
use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    // relasi ke banyak tiket
    public function ticket()
    {
        return $this->hasMany(Ticket::class);
    }
}
