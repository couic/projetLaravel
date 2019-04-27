@extends('layouts/main')

@section('content')
<h1>{{ $post->post_title }}</h1>
<p>by {{ $post->author->name }}</p>
<p>{{ $post->post_content }}</p>
@endsection