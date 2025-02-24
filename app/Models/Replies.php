<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Replies extends Model
{
    protected $guarded = ['id'];
    public function discussion()
    {
        return $this->belongsTo(Discussions::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
