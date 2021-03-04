<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class Admin extends Authenticatable
{
    use HasFactory,HasRoles;
    protected $guarded = [];


    public function setPasswordAttribute($pass)
    {
        if (!empty($pass)) {
            $this->attributes['password'] = bcrypt($pass);
        }
    }

    public function setImageAttribute($image)
    {
        if (is_null($image)) {
            $this->attributes['image'] = 'uploads/user_logo.jpg';
        } else {
            $this->attributes['image'] = uploadImage('uploads', $image);
        }
    }

}
