<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Salary extends Model
{
    use HasFactory;

    static function getUsers(){
        $users = DB::table('users')
        ->join('departments', 'users.department', '=', 'departments.id')
        ->join('bonuss', 'users.id', '=', 'bonuss.user_id')
        ->join('fines', 'users.id', '=', 'fines.user_id')
        ->join('timekeepings', 'users.id', '=', 'timekeepings.user_id')
        ->join('salarys', 'users.id', '=', 'salarys.user_id')
        ->select('users.*','departments.room_name', 'bonuss.total_bonus', 'fines.total_fines', 'timekeepings.total_days', 'salarys.*')
        ->where('users.isadmin','=',null)
        ->orderBy('users.id')
        ->get();
        return $users;
    }
}
