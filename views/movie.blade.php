@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Movies Masterlist</title>
</head>
<body>

    <div class="container">

        <div class="page-header">
            <br><h1>Movies Masterlist</h1><br>
        </div>

            <div class="list-group">
                    @foreach($movies as $movie)
                    <label class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="">
                    
                    <h2>{{ $movie->title }}</h2>
                    <strong>Directed by: </strong>{{ $movie->director }}<br>
                    <strong>Released on: </strong>{{ $movie->release }}<br>
                    <strong>Category: </strong>{{ $movie->category }}<br>
                    </label>
                    @endforeach         
            </div>

            <button type="submit" class="btn-lg btn-block">Add to List</button>
            
        </div>

    

</body>
</html>

@endsection