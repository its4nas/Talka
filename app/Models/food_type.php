<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class food_type extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded=['id','created_at','updated_at'];

    public function deleted_by_who()
    {
        return $this->belongsTo(User::class, 'deleted_by');
    }

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }
}
