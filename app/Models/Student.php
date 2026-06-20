<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'gender', 'email','gender', 'district','photo' ];
    //table name r modell name differtent hole,----->
    //protected $table = 'table_namee'';
}
