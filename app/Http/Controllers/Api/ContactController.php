<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Model\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $contact = new Contact();
        $contact->person_id = $request->json()->get('person_id');
        $contact->type = $request->json()->get('type');
        $contact->contact = $request->json()->get('contact');
        $contact->save();
        return response()->json('successful store contact.');

    }

    public function update(Request $request,$id)
    {
        $contact = Contact::FindOrFail($id);
        $contact->type = $request->json()->get('type');
        $contact->contact = $request->json()->get('contact');
        $contact->save();
        return response()->json('successful updated contact.');

    }

    public function destroy($id)
    {
        $contact = Contact::FindOrFail($id);
        $contact->delete();
        return response()->json('successful deleted contact.');
    }
}
