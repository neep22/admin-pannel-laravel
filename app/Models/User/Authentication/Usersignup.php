<?php

namespace App\Models\User\Authentication;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

 class usersignup extends Authenticatable
{
        use HasFactory;

        protected $fillable = [
                'name',
                'email',
                'password',
                ];
        protected $hidden = [
                'password',
                'remember_token',
                ];
}
