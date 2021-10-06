<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    public $timestamps =false;
    
    protected $fillable =[
'first_name','last_name','dob','google_id','email','role_id', 'timestamp_lastlogin'
    ];
    
}
