<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
</head>
<body>

    <h1>
        Movies Home Page
    </h1>

    <div class="container-fluid">
        <div class="container">
            @foreach ($movies as $movie)
                <div class="card">
                    <h3>
                    {{ $movie->title }} 
                    </h3>
                    <p>
                    {{ $movie->vote }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>

</body>
</html>