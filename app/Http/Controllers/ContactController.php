<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Resources\ContactResource;
use App\User;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        //
        return ContactResource::collection($user->contact);
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
         */
        public
        function store(Request $request, User $user, Contact $contact)
        {
            //
            {
                $contact = new Contact($request->all());

                $user->contact()->save($contact);

                return response([
                    'data' => new ContactResource($contact)
                ], Response::HTTP_CREATED);
            }
        }

        /**
         * Display the specified resource.
         *
         * @param  \App\Contact $contact
         * @return \Illuminate\Http\Response
         */
        public
        function show(Contact $contact)
        {
            //
            return new Contact($contact);
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Contact $contact
         * @return \Illuminate\Http\Response
         */
        public
        function edit(Contact $contact)
        {
            //
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request $request
         * @param  \App\Contact $contact
         * @return \Illuminate\Http\Response
         */
        public
        function update(Request $request, Contact $contact)
        {
            //
            $contact->update($request->all());
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Contact $contact
         * @return \Illuminate\Http\Response
         */
        public
        function destroy(Contact $contact)
        {
            //
            $contact->delete();
            return response(null, Response::HTTP_NO_CONTENT);
        }

}