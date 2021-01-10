<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Reply;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    public function index(Question $question)
    {
        return $question->replies;
        // return Reply::latest()->get();
    }

    public function show(Question $question, Reply $reply)
    {
        return $reply;
    }
}
