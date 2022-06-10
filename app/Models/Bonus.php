<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Bonus extends Model
{
    use HasFactory;

    static function getUsers(){
        $users = DB::table('users')
        ->join('bonuss', 'users.id', '=', 'bonuss.user_id')
        ->join('departments', 'users.department', '=', 'departments.id')
        ->select('users.*', 'bonuss.*','departments.room_name')
        ->where('users.isadmin','=',null)
        ->orderBy('users.id')
        ->get();
        return $users;
    }
}
