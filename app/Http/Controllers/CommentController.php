<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Discussion;
use App\Http\Resources\CommentResource;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(Discussion $discussion)
    {
        return CommentResource::collection($discussion->comments);

    }

    public function store(Request $request , Discussion $discussion)
    {
        $comment = new Comment($request->all());

        $discussion->comments()->save($comment);

        return response([
            'data' => new CommentResource($comment)
        ],Response::HTTP_CREATED);
    }

    public function update(Request $request, Discussion $discussion, Comment $comment)
    {
        $comment->update($request->all());
    }

    public function destroy(Discussion $discussion, Comment $comment)
    {
        $comment->delete();
        return response(null,Response::HTTP_NO_CONTENT);
    }
}
