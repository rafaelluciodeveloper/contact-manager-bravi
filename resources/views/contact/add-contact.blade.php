@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <h5 class="card-header">Add Contact</h5>
            <div class="card-body">
                Name : {{ $person->name }}
                <form action="{{route('store.contact')}}" method="POST" class="form-inline justify-content-center">
                    {{csrf_field()}}
                    <input type="hidden" name="person_id" value="{{$person->id}}">
                    <label class="my-1 mr-2" for="type">Type</label>
                    <select class="custom-select my-1 mr-sm-2" id="type" name="type">
                        <option selected>Choose...</option>
                        <option value="phone">Phone</option>
                        <option value="whatsapp">WhatsApp</option>
                        <option value="email">E-mail</option>
                    </select>
                    <label class="my-1 mr-2" for="contact">Contact</label>
                    <input type="text" class="form-control col-md-3" id="contact" name="contact">
                    <button type="submit" class="btn btn-success ml-2">Save</button>
                    <a href="{{route('view.contact',$person->id)}}" class="btn btn-warning ml-2">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
