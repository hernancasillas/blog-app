@extends('layouts.app')

@section('title', 'Services')

@section('content')
    <h1 class="text-center text-primary">Services</h1>
    <p>This is my services page</p>
    <p>Service with id = {{$id}} and cost = {{$cost}}</p>
    @if(count($services) > 0)
        <h2>Our Services</h2>
        <ul class="list-group">
            @foreach ($services as $service)
                <li class="list-group-item"> {{$service}} </li>
            @endforeach
        </ul>
    @endif
@endsection
