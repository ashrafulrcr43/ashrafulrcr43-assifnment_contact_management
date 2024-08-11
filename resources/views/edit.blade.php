<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Document</title>
</head>
<body>
    <!-- resources/views/contacts/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Contact</h1>

    <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name:</label>
        <input type="text" name="name" value="{{ $contact->name }}" required>
        <label>Email:</label>
        <input type="email" name="email" value="{{ $contact->email }}" required>
        <label>Phone:</label>
        <input type="text" name="phone" value="{{ $contact->phone }}">
        <label>Address:</label>
        <input type="text" name="address" value="{{ $contact->address }}">
        <button type="submit">Save</button>
    </form>
</div>
@endsection

</body>
</html>