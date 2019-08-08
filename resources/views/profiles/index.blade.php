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

        <table class="table">
            <tr>
                <td>Id</td>
                <td>profile pic</td>
                <td>Bio</td>
                <td>Address</td>
                <td>Profile Owner</td>
            </tr>
            @foreach ($profiles as $profile)
                <tr>
                    <td>{{$profile->id}}</td>
                    <td>{{$profile->profile_pic}}</td>
                    <td>{{$profile->bio}}</td>
                    <td>{{$profile->address}}</td>

                    <td>{{ $profile->user->firstname }}</td>
                </tr>
            @endforeach
           
        </table>

    </div>

</body>
</html>