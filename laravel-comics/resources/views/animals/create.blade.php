@extends('layouts.app')

@section('page-title', 'Create-Animal')


@section('main-content')
<div class="container">
    <div class="row">

        <h1 class="text-center">Create new Animal</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-6">
                <form action="{{ route('animals.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="title">Name</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Animal name" aria-label="Animal name" id="name" name="name"
                        value="{{ old('name') }}">
                    </div>

                    <div class="mb-3">
                        <label for="category">Category</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Animal category" aria-label="Animal category" id="animalCategory" name="animalCategory"
                        value="{{ old('animalCategory') }}">
                    </div>

                    <div class="mb-3">
                        <label for="image_url">image url</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Animal image" aria-label="Animal image" id="animalImage" name="animalImage"
                        value="{{ old('animalImage') }}">
                    </div>

                    <input type="submit" value="Create new animal" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
