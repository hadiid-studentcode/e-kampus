<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submissions extends Model
{
    /** @use HasFactory<\Database\Factories\SubmissionsFactory> */
    use HasFactory;
    protected $guarded = ['id'];

    public function assignment()
    {
        return $this->belongsTo(Assignments::class);
    }

    public function student()
    {
        return $this->belongsTo(User::class);
    }
}
