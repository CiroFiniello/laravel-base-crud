@extends('layouts.app')

@section('page-title', 'index-animal')

@section('style')
<style>
    .animal-img {
        height: 200px;
        object-fit: contain;
    }
</style>
@endsection

@section('main-content')
<div class="container">
    <h1 class="text-center my-5">Animals</h1>
    <div class="row">
        @foreach ($animals as $animal)
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card">
                <img src="{{ $animal['image_url'] }}" class="card-img-top animal-img" alt="{{ $animal['title'] }}">
                <div class="card-body">
                    <h3 class="card-title">{{ $animal['title'] }}</h3>
                    <h6 class="card-subtitle text-muted">{{ $animal['category'] }}</h6>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
