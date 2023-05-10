@extends('layout.main')

@section('title', 'About')

@section('content')
    <h2>{{ $page_name }}</h2>
    <p>{{ $page_description }}</p>
@endsection

@section('sidebar')
    @parent
    <br>This is an extend to the sidebar from the about page
@endsection
