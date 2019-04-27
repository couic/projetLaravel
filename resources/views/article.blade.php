@extends('layouts/main')

@section('content')
<h1>{{ $post->post_title }}</h1>
<p>by {{ $post->post_author }}</p>
<p>{{ $post->post_content }}</p>
@endsection