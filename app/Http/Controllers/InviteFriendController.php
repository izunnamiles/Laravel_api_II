<?php

namespace App\Http\Controllers;

use App\Http\Resources\InviteFriendResource;
use App\InviteFriend;
use App\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class InviteFriendController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        //
        return InviteFriendResource::collection($user->invite_friend);
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request, User $user, InviteFriend $inviteFriend)
    {
        //
        $this->validate($request, [
            'email'=>'required',

        ]);
        {
            $inviteFriend = new InviteFriend($request->all());
            $user->invite_friend()->save($inviteFriend);

            return response([
                'data' => new InviteFriendResource($inviteFriend)
            ],Response::HTTP_CREATED);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(InviteFriend $inviteFriend)
    {
        //
        return new InviteFriend($inviteFriend);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(InviteFriend $inviteFriend)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InviteFriend $inviteFriend)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(InviteFriend $inviteFriend, User $user)
    {
        //
        $inviteFriend->delete();

        return response(null,Response::HTTP_NO_CONTENT);
    }
}
