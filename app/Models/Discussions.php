<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discussions extends Model
{
    /** @use HasFactory<\Database\Factories\DiscussionsFactory> */
    use HasFactory;
    protected $guarded = ['id'];
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function replies()
    {
        return $this->hasMany(Replies::class, 'discussion_id');
    }
}
