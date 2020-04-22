@extends('layouts.Head')

<title>Posts</title>
@yield('content')

<h1>Posts<h3>
  
    @if(count($posts) >1)
@foreach($posts as $post)

<div class="well">
<h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
<small>Written on {{$post->created_at}}</small>
<small>Content {{$post->body}}</small>

</div>
@endforeach
    @else
    <p>No posts found</p>
    @endif

