<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>

    <div class="container">
    <h2>Edit</h2>

    <form class="book-form" action= "{{route ('books.update', $book ->id)}}" method = "POST">
        @csrf
        @method('PUT')

        <label for= "">Title</label><br>
        <input type="text" id="title" name ="title" value="{{ $book ->title}}">
        <br>

        <label for= "">Author</label><br>
        <textarea id="author" name ="author"> {{ $book ->author}}</textarea>
        <br>

        <label for= "">ISBN</label><br>
        <input type="text" id="isbn" name ="isbn" value="{{ $book ->isbn}}">
        <br>

        <label for= "">Published year</label><br>
        <input type="text" id="published_year" name ="published_year" value="{{ $book ->published_year}}">
        <br>

        <button type="submit" class="btn btn-custom">Update book</button>

        </form>
    </div>
</body>
</html>
