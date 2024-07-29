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
                <div class="buttons d-flex justify-content-between p-1 align-items-center">
                    <a href="{{route('animals.edit', $animal)}}" class="btn btn-success col-5 me-1">Edit</a>
                    <form action="{{route('animals.destroy', $animal)}}" method="POST">
                        @method('DELETE')
                        @csrf
                    <button type="submit" class="d-inline btn btn-danger">
                        Delete
                    </button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
