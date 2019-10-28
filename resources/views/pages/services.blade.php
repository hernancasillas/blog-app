@extends('layouts.app')

@section('title', 'Services')

@section('content')
    <h1 class="text-center text-primary">Services</h1>
    <p>This is my services page</p>
    <p>Service with id = {{$id}} and cost = {{$cost}}</p>
@endsection
