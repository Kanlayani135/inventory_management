<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable =['code','fname','lname','address','sex','dob','age','tel','civilstatus','position','department_id','division_id','workstatus','hireddate'];
    
    function departments() {
        return $this->belongto(Department::class);

