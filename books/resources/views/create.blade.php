<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    <div class="container">
        <h2>Add new book</h2>

        <form class="table-form" action= "{{route ('books.store')}}" method = "POST" enctype="multipart/form-data">
            @csrf

            <label for= "">Title</label><br>
            <input type="text" id="title" name ="title" value="{{old('title')}}">
            @error('title')
                <div>{{$message}}</div>
                
            @enderror
            <br>

            <label for= "">Author</label><br>
            <input type="text" id="author" name ="author" value="{{old('author')}}">
            @error('author')
            <div>{{$message}}</div>
            
             @enderror
            <br>

            <label for= "">ISBN</label><br>
            <input type="text" id="isbn" name ="isbn" value="{{old('isbn')}}">
            @error('isbn')
            <div>{{$message}}</div>
            
             @enderror
            <br>

            <label for= "">Published Year</label><br>
            <input type="text" id="published_year" name ="published_year" value="{{old('published_year')}}">
            @error('published_year')
            <div>{{$message}}</div>
            
            @enderror
            <br>

            <label for= "">Image</label><br>
            <input type="file" id="imageID" name ="image"> 
            @error('image')
            <div>{{$message}}</div>
            
            @enderror
            <br>

            <button type="submit" class="custom-add-button">Add new book</button>
        </form>
    </div>

</body>
</html>