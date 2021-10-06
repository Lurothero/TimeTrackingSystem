<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SystemSetting extends Model
{public $timestamps =false;
    use HasFactory;
    protected $table ='system_setting';
}
