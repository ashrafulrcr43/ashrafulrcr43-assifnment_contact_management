<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Contact Management</title>
    <!-- Add your CSS files here -->
</head>
<body>
    <nav>
        <a href="{{ route('contacts.index') }}">Contacts</a>
        <a href="{{ route('contacts.create') }}">Create Contact</a>
    </nav>

    <div>
        @yield('content')
    </div>

    <!-- Add your JS files here -->
</body>
</html>

</body>
</html>