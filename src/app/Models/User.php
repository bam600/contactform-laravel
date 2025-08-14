<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    //usersテーブルに名前、メールアドレス、パスワードを追加
    protected $fillable = [
        'name', 
        'email', 
        'password'
    ];
}
