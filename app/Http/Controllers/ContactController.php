<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;

class ContactController extends Controller
{

    public function index()
    {
        //
    }

    public function store(StoreContactRequest $request)
    {
        $name     = $request->name;
        $email    = $request->email;
        $subject  = $request->subject;
        $message  = $request->message;

        $contacts = Contact::create([
            'name'      => $name,
            'email'     => $email,
            'subject'   => $subject,
            'message'   => $message,
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactRequest $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
