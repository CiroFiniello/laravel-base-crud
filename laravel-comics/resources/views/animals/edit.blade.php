@extends('layouts.app')

@section('page-title',)
{{ $animal->title }}
@endsection


@section('main-content')
<div class="container">
    <div class="row">

        <h1 class="text-center">Edit {{ $animal->title }}</h1>

        <div class="row justify-content-center">
            <div class="col-6">
                <form action="{{ route('animals.update', $animal) }}" method="POST">
                    @method("PUT")
                    @csrf

                    <div class="mb-3">
                        <label for="title">Name</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Animal name" aria-label="Animal name" id="name" name="name"
                        value="{{ $animal->title }}">
                    </div>

                    <div class="mb-3">
                        <label for="category">Category</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Animal category" aria-label="Animal category" id="animalCategory" name="animalCategory"
                        value="{{ $animal->category }}">
                    </div>

                    <div class="mb-3">
                        <label for="image_url">image url</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Animal image" aria-label="Animal image" id="animalImage" name="animalImage"
                        value="{{ $animal->image_url }}">
                    </div>

                    <input type="submit" value="Update" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
