@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $lead->name }}</h1>
    <p>Email: {{ $lead->email }}</p>
    <p>Telephone: {{ $lead->telephone }}</p>
    <a href="{{ route('home.edit', $lead) }}">Edit</a>
</div>
@endsection
