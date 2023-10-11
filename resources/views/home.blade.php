@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col">
         <div class="card">
            <div class="card-header">{{ __('Create A New Post') }}</div>

            <div class="card-body">
               @if (session('status'))
               <div class="alert alert-success" role="alert">
                  {{ session('status') }}
               </div>
               @endif

               <form action="/create-post" method="post">
                  @csrf
                  <input type="text" name="title" placeholder="Title">
                  <textarea type="text" name="body" placeholder="Content"></textarea>
                  <button>Post</button>
               </form>
            </div>
         </div>
      </div>

      <!-- all posts -->
      <div>
         <h2>All post</h2>
         <div class="row">
            @foreach($posts as $post)
            <div class="card col-3 border-0  text-center">
               <div class="card-header">
                  <h3>{{$post['title']}}</h3>
               </div>
               <div class="card-body">
                  <h4>{{$post['body']}}</h4>
               </div>
               <div class="card-footer">
                  <a href="/edit-post/{{$post->id}}" class="btn btn-primary">Edit</a>
                  <form class="d-inline" action="/delete-post/{{$post->id}}" method="post">
                     @csrf
                     @method('DELETE')
                     <button class="btn btn-danger ">Delete</button>
                  </form>
               </div>
            </div>
            @endforeach
         </div>
      </div>
      <!-- end all posts -->


   </div>
</div>
@endsection