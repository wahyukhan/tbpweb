<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    public function proposal()
    {
        return $this->belongsTo(InternshipProposal::class, 'internship_proposal_id', 'id');
    }

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }

    const validation_rules = [
        'internship_proposal_id'=> 'required',
        'student_id' => 'required',
  
    ];

    protected $table = 'internships';

    protected $guarded = [];
}
