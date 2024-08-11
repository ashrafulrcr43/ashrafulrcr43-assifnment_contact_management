<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Document</title>
</head>
<body>
    <!-- resources/views/contacts/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Contact Details</h1>

    <p><strong>Name:</strong> {{ $contact->name }}</p>
    <p><strong>Email:</strong> {{ $contact->email }}</p>
    <p><strong>Phone:</strong> {{ $contact->phone }}</p>
    <p><strong>Address:</strong> {{ $contact->address }}</p>

    <a href="{{ route('contacts.index') }}">Back to Contacts</a>
</div>
@endsection

</body>
</html>