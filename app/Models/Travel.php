<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    use HasFactory;

    protected $table = "users";
    protected $fillable = ['user_name', 'email', 'password', 'profile_img_path'];

    protected $guarded = ['id'];
    public function isLogin($email, $password)
    {
        $sql = "SELECT id "
             . "  FROM users "
             . " WHERE email = '{$email}' "
             . "   AND password = '{$password}' ";
        dd($sql);
        return DB::select($sql);
    }

    public function getUser($email)
    {
        $sql = "SELECT * "
             . "  FROM users "
             . " WHERE email = '{$email}' ";
        return DB::select($sql);
    }
}
