<?php

namespace App\Models;

use Exception;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name', 'email', 'code', 'birthday', 'hometown', 'phone', 'position', 'department', 'datestart','password'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    static function getUsers(){
        $users = DB::table('users')
            ->join('departments', 'users.department', '=', 'departments.id')
            ->select('users.*', 'departments.room_name')
            ->where('users.isadmin','=',null) //không hiện admin
            ->get();
        return $users;
    }

    static function store($input){
        $input['password'] = Hash::make($input['password']);
        User::create($input);
    }

    static function dlt($id){
        try{
            $user = User::find($id);
            $user->delete();
            return true;
        } catch(Exception $ex){
            throw $ex;
            return false;
        }
        
    }
}
