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

    <form action="{{ url('/register') }}" method="POST">
        @csrf

        <label for="name">Name</label><br>
        <input type="text" id="name" name="name" required><br>

        <label for="email">Email</label><br>
        <input type="text" id="email" name="email" required><br>

        <label for="password">Password</label><br>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>
