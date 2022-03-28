@extends('templates.main')

@section('content')
    <h1>Users page</h1>
    @foreach ($users as $user)
        <p>{{$user}}</p>
    @endforeach
@endsection
