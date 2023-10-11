@extends('layouts.app')

@section('content')
<div class="container">
   <h1>Edit Post</h1>
   <form action="/edit-post/{{$post->id}}" method="post">
      @csrf
      @method('PUT')
      <input type="text" name="title" value="{{$post->title}}">
      <textarea name="body">{{$post->body}}</textarea>
      <button>Submit</button>
   </form>
</div>
@endsection