<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reply;

class LikeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('JWT', ['except' => ['login', 'signup']]);
    // }
    public function like(Reply $reply)
    {
        $reply->likes()->create([
            // 'user_id' => auth()->id
            'user_id' => 1
        ]);
    }

    public function unLike(Reply $reply)
    {
        // $reply->likes()->where(['user_id', auth()->id()])->first()->delete();
        $reply->likes()->where('user_id', '1')->first()->delete();
    }
}
