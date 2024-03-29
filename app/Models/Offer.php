<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Offer extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded=['id','created_at','updated_at'];

    public function food_type()
    {
        return $this->belongsTo(food_type::class,'type_id');
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class,'restaurant_id');
    }

    public function deleted_by_who()
    {
        return $this->belongsTo(User::class, 'deleted_by');
    }

}
