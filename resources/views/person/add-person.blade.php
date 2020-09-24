@extends('layouts.app')
@section('content')
    <div class="container">
        <form method="POST" action="{{route('store.person')}}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="row pt-5">
                <div class="col-md-12 text-center">
                    <a href="{{ route('index.person') }}" class="btn btn-warning">Back</a>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </form>
    </div>
@endsection
