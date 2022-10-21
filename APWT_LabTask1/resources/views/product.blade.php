@extends('layouts.app')
@section('content')
    <h1>Product List</h1>
    <ul><ul><h3>
    @foreach($books as $b)
        <li>{{$b}}</li>
    @endforeach
    </ul></ul></h3>
@endsection