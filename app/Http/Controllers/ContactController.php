<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;

class ContactController extends Controller
{

    public function all_contact()
    {
        $contacts = Contact::all();
        return view('backend.contact.all_contact' , compact('contacts'));
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

    public function destroy($id)
    {
        $contacts = Contact::find($id);
        $contacts->delete();
        return redirect()->back()->with('message' , 'the contact is deleted success');
    }
}
