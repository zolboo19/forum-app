<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    // protected $guarded = [];
    protected $fillable = ['user_id', 'reply_id'];

    public function reply()
    {
        return $this->belongsTo(Reply::class);
    }
}
