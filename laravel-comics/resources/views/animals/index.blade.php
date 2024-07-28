@extends('layouts.app')

@section('page-title', 'Animals')


@section('main-content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Animals</title>
    <style>
        .animal-img {
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
