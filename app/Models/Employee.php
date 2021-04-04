<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable =['code','fname','lname','address','sex','dob','age','tel','civilstatus','position','department','division','workstatus','hireddate','department_id','division_id'];
    
    function departments() {
        return $this->belongto(Department::class);
    }

    function division() {
        return $this->belongto(Division::class);
    }
}
