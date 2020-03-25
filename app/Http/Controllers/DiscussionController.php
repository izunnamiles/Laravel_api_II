<?php

namespace App\Http\Controllers;

use App\Discussion;
use App\Http\Requests\DiscussionRequest;
use App\Http\Resources\DiscussionResource;
use App\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DiscussionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:api')->except('index','show','store');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *

     */

    public function index(User $user)
    {

        return DiscussionResource::collection($user->discussion);
    }

    public function store(DiscussionRequest $request, User $user, Discussion $discussion)
    {
        //
        $discussion = new Discussion($request->all());
        $user->discussion()->save($discussion);

        return response([

            'data' => new DiscussionResource($discussion)

        ],Response::HTTP_CREATED);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Discussion  $discussion
     * @return DiscussionResource
     */
    public function show(Discussion $discussion)
    {
        //
        return new DiscussionResource($discussion);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Discussion  $discussion
     * @return \Illuminate\Http\Response
     */
    public function edit(Discussion $discussion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Discussion  $discussion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Discussion $discussion)
    {
        //
        $discussion->update($request->all());

        return response([

            'data' => new DiscussionResource($discussion)

        ],Response::HTTP_CREATED);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Discussion  $discussion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Discussion $discussion)
    {
        //

        $discussion->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function userAuthorize($discussion)

    {

        if(Auth::user()->id != $discussion->user_id){
            //throw your exception text here;



        }


    }
}
