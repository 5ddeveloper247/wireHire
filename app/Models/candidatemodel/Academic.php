<?php

namespace App\Models\candidatemodel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academic extends Model
{
    use HasFactory;
    protected $fillable=[
        'academic_degre',
        'major',
        'year_of_graduate',
        'uni_name',
        'uni_rank',
        'uni_location',
        'cumulative_gpa',
        'gpa_out_of',
        'resume',
        'transcript',
        'certificate',
        'teaching_prep',
        'candidate_id',
    ];
}
