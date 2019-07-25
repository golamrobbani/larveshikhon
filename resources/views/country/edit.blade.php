<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Edit Country</h1>

        <form action="/countries/{{$country->id}}/edit" method="POST">

            @csrf
            @method('patch')

            <div class="form-group">
                <label for="">Country Name</label>
                <input type="text" name="name" class="form-control" value="{{ $country->name }}">
            </div>

            <div class="form-group">
                <label for="">Capital Name</label>
                <input type="text" name="capital" class="form-control" value="{{ $country->capital }}">
            </div>
            
            <div class="form-group">
                <label for="">Currency Name</label>
                <input type="text" name="currency" class="form-control" value="{{ $country->currency }}">
            </div>
            
            <div class="form-group">
                <label for="">Population</label>
                <input type="text" name="population" class="form-control" value="{{ $country->population }}">
            </div>

            <button type="submit" class="btn btn-primary">Updae Country</button>

        </form>

    </div>
</body>
</html>