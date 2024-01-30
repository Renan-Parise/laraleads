@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Leads</h1>
    <a href="{{ route('home.create') }}">Add New Lead</a>
    <ul>
        @foreach($leads as $lead)
            <li>
                <a href="{{ route('home.show', $lead) }}">{{ $lead->name }}</a>
            </li>
        @endforeach
    </ul>
</div>
@endsection
