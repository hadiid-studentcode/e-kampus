<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignments extends Model
{
    /** @use HasFactory<\Database\Factories\AssignmentsFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function submissions()
    {
        return $this->hasMany(Submissions::class, 'assignment_id');
    }
}
