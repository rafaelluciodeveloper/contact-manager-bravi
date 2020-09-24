<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PersonCollectionResource;
use App\Http\Resources\PersonResource;
use App\Model\Contact;
use App\Model\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{

    public function index()
    {
        return new PersonCollectionResource(Person::all());
    }

    public function store(Request $request)
    {
        $person = new Person();
        $person->name = $request->json()->get('name');
        $person->save();

        foreach ($request->json()->get('contacts') as $c ){
            $contact = new Contact();
            $contact->person_id = $person->id;
            $contact->type = $c["type"];
            $contact->contact = $c["contact"];
            $contact->save();
        }
        return response()->json('successful created person.');
    }

    public function show($id)
    {
        return new PersonResource(Person::FindOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $person = Person::FindOrFail($id);
        $person->name = $request->name;
        $person->save();
        return response()->json('successful updated person.');
    }

    public function destroy($id)
    {
        $person = Person::findOrFail($id);
        $person->delete();
        return response()->json('successful deleted person.');
    }
}
