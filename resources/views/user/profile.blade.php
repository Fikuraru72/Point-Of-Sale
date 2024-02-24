@extends('layouts.core')
@section('content')
    <h1>User Profile</h1>
    <p>User ID: {{ $id }}</p>
    <p>User Name: {{ $name }}</p>
    <br>
    <a href="{{ route('home') }}" class="btn btn-success">Return to Home</a>
@endsection