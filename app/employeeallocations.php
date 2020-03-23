<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employeeallocations extends Model
{
        protected $fillable = ['employeeId','departmentId','created_at','id'];
        public $timestamps = false;


}
