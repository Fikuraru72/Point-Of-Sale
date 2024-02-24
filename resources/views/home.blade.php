@extends('layouts.core')
@section('content')
    <h1>Welcome to the Home Page</h1>

    <h2>Category</h2>
    <a href="{{ route('food-beverage') }}" class="btn btn-primary">Open food beverage</a>
    <a href="{{ route('beauty-health') }}" class="btn btn-primary">Open beauty health</a>
    <a href="{{ route('home-care') }}" class="btn btn-primary">Open home care</a>
    <a href="{{ route('baby-kid') }}" class="btn btn-primary">Open Baby Kid</a>

    <h2>User</h2>
    <a href="{{ route('user-profile', ['id' => 2, 'name' => 'Abiyyu Fiqlal']) }}" class="btn btn-info">Open Profile</a>

    <h2>Penjualan</h2>
    <a href="{{ route('penjualan') }}" class="btn btn-info">Open Penjualan</a>
@endsection