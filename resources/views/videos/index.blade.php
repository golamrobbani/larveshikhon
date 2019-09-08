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
        <h1>Video List</h1>
        <p>{{ request()->session()->get('user_name') }}</p>
        <p>{{ session()->get('user_name', "this is the value") }}</p>
        <p>{{ session()->exists('user_name') ? 'yer' : 'no' }} </p>
        <p>{{ session()->has('user_name') ? 'yer' : 'no' }} </p>

        <table class="table">
            <tr>
                <th>@id</th>
                <th>Video Url</th>
                <th>Video Path</th>
                <th>Action</th>
            </tr>
            @foreach ($videos as $video)    
                <tr>
                    <td>{{ $video->id }}</td>
                    <td>{{ $video->url }}</td>
                    <td>{{ $video->file_path }}</td>
                    <td>
                        <a href="/videos/{{$video->id}}">Show</a> |
                        <a href="/videos/{{$video->id}}/edit">Edit</a> 
                    </td>
                </tr>
            @endforeach
        </table>

    </div>
</body>
</html>