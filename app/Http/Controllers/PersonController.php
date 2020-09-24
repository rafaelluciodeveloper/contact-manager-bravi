<?php

namespace App\Http\Controllers;


use App\Model\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        $persons = Person::paginate(5);
        return view('index', compact('persons'));
    }

    public function addPerson()
    {
        return view('person.add-person');
    }

    public function editPerson(Person $person)
    {
        return view('person.edit-person',compact('person'));
    }

    public function storePerson(Request $request)
    {
        $person = new Person();
        $person->name = $request->name;
        $person->save();

        return redirect()->route('index.person')->with('status','Person created.');
    }

    public function updatePerson(Request $request)
    {
        $person = Person::FindOrFail($request->id);
        $person->name = $request->name;
        $person->save();
        return redirect()->route('index.person')->with('status','Person updated.');
    }

    public function destroyPerson(Person $person)
    {
        $person->delete();
        return redirect()->route('index.person')->with('status','Person deleted.');
    }
}
