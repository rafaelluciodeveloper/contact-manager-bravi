@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="row">
            <div class="personAdd col-lg-12 text-right" style="margin-bottom: 20px;">
                <a href="{{route('add.person')}}" class="btn btn-sm btn-primary">Add Person</a>
            </div>
        </div>
        <table class="table table-bordered">
            <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($persons as $person)
                <tr>
                    <th class="id-col" scope="row">{{$person->id}}</th>
                    <td>{{$person->name}}</td>
                    <td class="action">
                        <form action="{{route('destroy.person',$person->id)}}" method="POST">
                            <a href="{{route('edit.person',$person->id)}}" class="btn btn-sm btn-warning">Edit</a>
                            <a href="{{route('view.contact',$person->id)}}" class="btn btn-sm btn-info">Contacts</a>
                            @method('DELETE')
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-sm btn-danger delete">Destroy</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <td colspan="3">
                    {{ $persons->links() }}
                </td>
            </tr>
            </tfoot>
        </table>
    </div>
@endsection
