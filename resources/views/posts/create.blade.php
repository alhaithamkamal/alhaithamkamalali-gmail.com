@extends('layouts.app')
@section('content')
<div class="container">
    <form class="my-3" method="POST" action="{{route('posts.store')}}">
        @csrf
        <div class="form-group">
        <label >Title</label>
        <input name="title" type="text" class="form-control" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Description</label>
        <textarea name="description" class="form-control"></textarea>
        </div>

        <div class="form-group">
        <label for="exampleInputPassword1">Users</label>
        <select name="user_id" class="form-control">
            @foreach($users as $user)  
            <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>
@endsection