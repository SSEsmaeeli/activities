<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Activities</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.1/css/bootstrap.min.css" integrity="sha512-6KY5s6UI5J7SVYuZB4S/CZMyPylqyyNZco376NM2Z8Sb8OxEdp02e1jkKk/wZxIEmjQ6DRCEBhni+gpr9c4tvA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body>
    <div class="container pt-4">
        <div class="alert alert-success mt-4">
            <h3>{{ $activity->name }} Activity <span class="badge bg-dark float-right">ID: {{ $activity->id }}</span></h3>
            <hr>
            <h4>List of registered users in current activity:</h4>

            @foreach($activity->users as $counter => $user)
                <span class="badge bg-primary fs-6 mt-1">{{ $counter + 1 }}-{{ $user->email }}</span>
            @endforeach
        </div>
    </div>
</body>
</html>
