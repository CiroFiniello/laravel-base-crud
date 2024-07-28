@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Create new Animal</title>
    <style>

    </style>
</head>
<body>
    <div class="container">
        <div class="row">

            <h1 class="text-center">Create new Animal</h1>

            <div class="row justify-content-center">
                <div class="col-6">
                    <form action="{{ route('animals.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="title">Name</label>
                            <input class="form-control form-control-sm" type="text" placeholder="Animal name" aria-label="Animal name" id="name" name="name">
                        </div>

                        <div class="mb-3">
                            <label for="category">Category</label>
                            <input class="form-control form-control-sm" type="text" placeholder="Animal category" aria-label="Animal category" id="animalCategory" name="animalCategory">
                        </div>

                        <div class="mb-3">
                            <label for="image_url">image url</label>
                            <input class="form-control form-control-sm" type="text" placeholder="Animal image" aria-label="Animal image" id="animalImage" name="animalImage">
                        </div>

                        <input type="submit" value="Create new animal" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
