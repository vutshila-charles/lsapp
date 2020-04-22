@extends('layouts.Head')

<title>Posts</title>
@yield('content')
<a href="/posts" class="button">Back</a>
<h1>{{$post->title}}<h1>
  
  <div>
      {{$post->body}}
  </div>
  <hr>
  <small>Written on {{$post->created_at}}</small></h1>
