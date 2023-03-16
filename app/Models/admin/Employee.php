<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
       'name',
       'position',
       'gender',
       'national_id',
       'university_id',
       'email_address',

       'depart_id',
       'college',
       'tel_number',
       'address',
       
    ];

    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }
    
    public function department(){
        return $this->hasOne(Department::class,'id','depart_id');
    }
}
