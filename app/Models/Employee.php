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

        function divisions() {
            return $this->belongto(Department::class);
    }
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 9f77cca10bf2301497a9a6cd226b0730e297690a
    function divisions() {
        return $this->belongto(Division::class);
    }
}
=======
    }}
>>>>>>> 656cc329fed098b2dcd0c3e15d2e44db5e7f524a
