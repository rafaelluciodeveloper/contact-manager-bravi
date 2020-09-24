<?php

namespace App\Http\Controllers;

use App\Model\Contact;
use App\Model\Person;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function addContact(Person $person)
    {
        return view('contact.add-contact', compact('person'));
    }

    public function editContact(Contact $contact)
    {
        $person = $contact->person;
        return view('contact.edit-contact', compact('contact','person'));
    }

    public function storeContact(Request $request)
    {
        $contact = new Contact();
        $contact->person_id = $request->person_id;
        $contact->type = $request->type;
        $contact->contact = $request->contact;
        $contact->save();

        return redirect()->route('view.contact', $contact->person_id)->with('status', 'Contact added to person');
    }

    public function updateContact(Request $request)
    {
        $contact = Contact::FindOrFail($request->id);
        $contact->type = $request->type;
        $contact->contact = $request->contact;
        $contact->save();
        return redirect()->route('view.contact', $contact->person_id)->with('status', 'Contact updated.');

    }

    public function destroyContact(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('view.contact', $contact->person->id)->with('status', "person's deleted contact");
    }

    public function viewContact(Person $person)
    {
        return view('contact.view-contact', compact('person'));
    }
}
