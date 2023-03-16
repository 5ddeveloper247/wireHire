<?php

namespace App\Models\candidatemodel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class candidate extends Model
{
    use HasFactory;
    protected $fillable =[
        'firstname',
        'middlename',
        'lastname',
        'date',
        'gender',
        'email',
        'phoneno',
        'passportno',
        'nationality',
        'location',
        'password',
        'confirm_password',
    ];

}

?>
