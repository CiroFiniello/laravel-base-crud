<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>{{ $animals->title }}</title>
    <style>
        .animal-img {
            height: 600px;
            object-fit: cover;
            width: 100%;
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
        }
    </style>
</head>
<body>
    <h1>Sei nella Show!</h1>
    <div class="container">
        <h1 class="my-5 ">{{ $animals->title }}</h1>
        <img src="{{ $animals->image_url }}" class="animal-img" alt="{{ $animals->title }}">
        <h2 class="mt-3">{{ $animals->category }}</h2>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
