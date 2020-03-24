<?php

namespace App\Http\Controllers;

use App\Discussion;
use App\Http\Requests\DiscussionRequest;
use App\Http\Resources\DiscussionResource;
use Illuminate\Http\Request;

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
        $this->middleware('auth:api')->except('index','show');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *

     */

    public function index()
    {

        return DiscussionResource::collection(Discussion::paginate(5));
    }

    public function store(DiscussionRequest $request)
    {
        //
        $discussion = Discussion::create($request->all());

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
