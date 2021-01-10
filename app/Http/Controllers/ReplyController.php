<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Reply;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
    public function store(Question $question, Request $request)
    {
        $question->replies()->create($request->all());
        return response('Сэтгэгдлийг амжилттай үүсгэлээ.', Response::HTTP_CREATED);
    }

    public function destroy(Question $question, Reply $reply)
    {
        $reply->delete();
        return response(null, Response::HTTP_NOT_FOUND);
    }
}
