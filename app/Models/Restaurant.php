<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Restaurant extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function deleted_by_who()
    {
        return $this->belongsTo(User::class, 'deleted_by');
    }
    
    protected $guarded=['id','created_at','updated_at'];
}
