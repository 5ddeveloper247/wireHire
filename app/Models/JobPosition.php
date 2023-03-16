<?php

namespace App\Models;

use App\Models\admin\Department;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPosition extends Model
{
    use HasFactory;
    protected $fillable = [
        'job_title','job_location','job_position', 'department','job_description','user_id',
    ];

 public function user(){
    return $this->hasOne(User::class,'id','user_id');
 }
 public function department(){
    return $this->hasOne(Department::class,'id','depart_id');
 }
}
