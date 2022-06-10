<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Timekeeping extends Model
{
    use HasFactory;

    static function getUsers(){
        $users = DB::table('users')
        ->join('departments', 'users.department', '=', 'departments.id')
        ->join('timekeepings', 'users.id', '=', 'timekeepings.user_id')
        ->select('users.*', 'departments.room_name', 'timekeepings.total_days')
        ->orderBy('users.id')
        ->get();
    return $users;
    }
}
