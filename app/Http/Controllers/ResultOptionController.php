<?php

namespace App\Http\Controllers;

use App\Discussion;
use App\Http\Resources\ResultOptionResource;
use App\ResultOption;
use Illuminate\Http\Request;

class ResultOptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Discussion $discussion)
    {
        //
        return ResultOptionResource::collection($discussion->result_option);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Discussion $discussion, ResultOption $resultOption)
    {
        //
        {
        $resultOption = new ResultOption($request->all());

        $discussion->result_option()->save($resultOption);
            return response([
                'data' => new ResultOptionResource($resultOption)
            ],Response::HTTP_CREATED);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ResultOption  $resultOption
     * @return \Illuminate\Http\Response
     */
    public function show(ResultOption $resultOption)
    {
        //
        return new ResultOption($resultOption);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ResultOption  $resultOption
     * @return \Illuminate\Http\Response
     */
    public function edit(ResultOption $resultOption)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ResultOption  $resultOption
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ResultOption $resultOption)
    {
        //
        $resultOption->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ResultOption  $resultOption
     * @return \Illuminate\Http\Response
     */
    public function destroy(ResultOption $resultOption, Discussion $discussion)
    {
        //
        $resultOption->delete();
        return response(null,Response::HTTP_NO_CONTENT);

    }
}
