@extends('layout.main')

@section('title', 'Categories')

@section('content')
    <h2>Most famous programming langugaes</h2>
    <ol>
        @foreach ($categories as $category)
            <li>{{ $category }}</li>
        @endforeach
    </ol>
@endsection
