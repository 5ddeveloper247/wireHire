<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCriteria extends Model
{
    use HasFactory;
    protected $fillable = [
        'year_of_experience','university_ranking','number_of_certificate', 'no_of_skill','field_experience','jobposition_id',
    ];
}
