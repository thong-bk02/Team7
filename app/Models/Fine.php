<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Fine extends Model
{
    use HasFactory;

    static function getUsers(){
        $users = DB::table('users')
        ->join('fines', 'users.id', '=', 'fines.user_id')
        ->join('departments', 'users.department', '=', 'departments.id')
        ->select('users.*', 'fines.*','departments.room_name')
        ->orderBy('users.id')
        ->get();
        return $users;
    }
}
