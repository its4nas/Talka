<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $guarded=['id','created_at','updated_at'];

    public function food_type()
    {
        return $this->belongsTo(food_type::class,'type_id');
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class,'restaurant_id');
    }
}
