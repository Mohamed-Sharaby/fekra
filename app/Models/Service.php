<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function setImageAttribute($image)
    {
        if (!empty($image)) {
            $this->attributes['image'] = uploadImage('uploads', $image);
        }
    }

}
