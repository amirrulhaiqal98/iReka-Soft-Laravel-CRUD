@extends('layouts.master')

@section('content')

<h1>Welcome Home</h1>
<p class="lead">This app will do CRUD for Post model with Laravel.</p>
<hr>

<a href="{{ url('posts') }}" class="btn btn-info">View Posts</a>
<a href="{{ url('posts/create') }}" class="btn btn-primary">Add New Post</a>

@endsection