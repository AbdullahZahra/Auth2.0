<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <a href="{{ url('/') }}">Home</a>

    <form action="/register" method="POST">
        <label for="name">Name</label>
        <input type="text">
    </form>
</body>
</html>