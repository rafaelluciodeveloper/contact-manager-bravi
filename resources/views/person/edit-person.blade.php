@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <h5 class="card-header">Edit Person</h5>
            <div class="card-body">
                <form method="POST" action="{{route('update.person')}}">
                    {{ csrf_field() }}
                    @method('PUT')
                    <input type="hidden" name="id" value="{{$person->id}}">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$person->name}}">
                    </div>
                    <div class="row pt-5">
                        <div class="col-md-12 text-center">
                            <a href="{{ route('index.person') }}" class="btn btn-warning">Back</a>
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
