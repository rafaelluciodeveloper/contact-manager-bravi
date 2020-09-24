@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <h5 class="card-header">Edit Contact</h5>
            <div class="card-body">
                <b>Name :</b> {{ $person->name }}
                <form action="{{route('update.contact')}}" method="POST" class="form-inline justify-content-center">
                    {{csrf_field()}}
                    @method('PUT')
                    <input type="hidden" name="id" value="{{$contact->id}}">
                    <label class="my-1 mr-2" for="type">Type</label>
                    <select class="custom-select my-1 mr-sm-2" id="type" name="type">
                        <option selected>Choose...</option>
                        <option {{ ($contact->type == "phone" ) ? 'selected' : ''}} value="phone">Phone</option>
                        <option {{ ($contact->type == "whatsapp" ) ? 'selected' : ''}} value="whatsapp">WhatsApp</option>
                        <option {{ ($contact->type == "email" ) ? 'selected' : ''}} value="email">E-mail</option>
                    </select>
                    <label class="my-1 mr-2" for="contact">Contact</label>
                    <input type="text" class="form-control col-md-3" id="contact" name="contact"
                           value="{{$contact->contact}}">
                    <button type="submit" class="btn btn-success ml-2">Update</button>
                    <a href="{{route('view.contact',$person->id)}}" class="btn btn-warning ml-2">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
