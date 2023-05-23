<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactStoreRequest;

class ContactController extends Controller
{
    public function save(ContactStoreRequest $request)
    {

        $contact = Contact::create($request->validated());
        if ($contact) {
            session()->flash('success', 'your mail received. I will contact you soon.   ');
        } else {
            session()->flash('error', 'something went wrong');
        }
        // dd($request);
        return back();
    }


    public function index()
    {
        $contacts = Contact::get();

        return view('contact.index', compact('contacts'));

    }

    public function delete(Contact $contact)
    {
        $success = $contact->delete();
        if ($success) {
            session()->flash('success', 'contact deleted');
        } else {
            session()->flash('error', 'something went wrong');
        }
        return to_route('contact.index');
    }
}
