<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    use HasFactory;

    protected $fillable = ['name','email','code','birthday','hometown','phone','position','department','datestart'];

    static function store($input){
        Personnel::create($input);
    }
    
}
