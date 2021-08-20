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
    protected $table = 'counters';

    protected $fillable = [
        'name','category_id','admin_id'
    ];

    protected $guarded = [];

    // relasi ke banyak tiket
    public function ticket()
    {
        return $this->hasMany(Ticket::class);
    }

    public function category(){

        return $this->belongsTo(Category::class);
    }
    public function user(){

        return $this->belongsTo(User::class);
    }
}
