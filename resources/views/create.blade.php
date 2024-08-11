<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Data</title>
</head>
<body>
    <!-- resources/views/contacts/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Contact</h1>

    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required>
        <label>Email:</label>
        <input type="email" name="email" required>
        <label>Phone:</label>
        <input type="text" name="phone">
        <label>Address:</label>
        <input type="text" name="address">
        <button type="submit">Save</button>
    </form>
</div>
@endsection

</body>
</html>