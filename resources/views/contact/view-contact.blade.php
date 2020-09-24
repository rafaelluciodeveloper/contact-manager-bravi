@extends('layouts.app')
@section('content')
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="row">
            <div class="col-lg-12 text-right" style="margin-bottom: 20px;">
                <a href="{{route('add.contact',$person->id)}}" class="btn btn-sm btn-primary">Add Contact</a>
            </div>
        </div>
        <div class="card">
            <h5 class="card-header">Contacts</h5>
            <div class="card-body">
                <b>Name :</b> {{ $person->name }}
                <table class="table table-bordered mt-2">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Type</th>
                        <th scope="col">Contact</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($person->contacts as $contact)
                        <tr>
                            <th class="id-col" scope="row">{{$contact->id}}</th>
                            <td>{{$contact->type}}</td>
                            <td>{{$contact->contact}}</td>
                            <td class="action">
                                <form action="{{route('destroy.contact',$contact->id)}}" method="POST">
                                    <a href="{{route('edit.contact',$contact->id)}}"
                                       class="btn btn-sm btn-warning">Edit</a>
                                    @method('DELETE')
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-sm btn-danger delete">Destroy</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="text-center">
                    <a href="{{route('index.person')}}" class="btn btn-warning">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
