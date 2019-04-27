@extends('layouts/main')

@section('content')
<h1>Accueil</h1>
<ul>
@foreach ( $posts as $post )
    <?php 
    $limit = sizeof($posts)-2;
    if ($post->id >= $limit) 
    {
        echo '<li><a href="/articles/' . $post->post_name . '">' . $post->post_title . '</a></li>';
    }
    ?>
@endforeach
</ul>

@endsection