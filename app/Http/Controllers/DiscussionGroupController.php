<?php

namespace App\Http\Controllers;

use App\Discussion;
use App\Discussion_Group;
use App\Http\Resources\DiscussionGroupResource;
use Illuminate\Http\Request;

class DiscussionGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Discussion $discussion)
    {
        return DiscussionGroupResource::collection($discussion->discussion_group);

    }

    public function store(Request $request , Discussion $discussion)
    {
        $discussion_group = new Discussion_Group($request->all());

        $discussion->discussion_group()->save($discussion_group);

        return response([
            'data' => new DiscussionGroupResource($discussion_group)
        ],Response::HTTP_CREATED);
    }
    public function show(Discussion_Group $discuss)
    {
        return new DiscussionGroupResource($discuss);
    }

    public function update(Request $request, Discussion $discussion, Discussion_Group $discuss)
    {
        $discuss->update($request->all());
    }

    public function destroy(Discussion $discussion, Discussion_Group $discuss)
    {
        $discuss->delete();
        return response(null,Response::HTTP_NO_CONTENT);
    }

}
