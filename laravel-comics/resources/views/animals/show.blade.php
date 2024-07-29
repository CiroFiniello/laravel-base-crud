@extends('layouts.app')

@section('page-title', 'show-Animal')

@section('style')
<style>

    .animal-img {
        height: 400px;
        object-fit: contain;
    }
    *{
        background-color: black;
        color: white
    }
    body {
        background-color: black;
    }
    .container {
        border: 3px solid yellow;
        justify-content: center;
        display: flex;
        align-items: center;
        gap: 1rem;
    }
</style>
@endsection

@section('main-content')
<h1>Sono una Show!</h1>
<div class="container">
    <h1 class="my-5 ">{{ $animals->title }}</h1>
    <img src="{{ $animals->image_url }}" class="animal-img" alt="{{ $animals->title }}">
    <h2 class="mt-3">{{ $animals->category }}</h2>
</div>
@endsection
