@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-8">
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

         <!-- all posts -->
         <div>
            <h2>All post</h2>
            <div class="row">
               @foreach($posts as $post)
               <div class="card col-6">
                  <div class="card-header">
                     <h3>{{$post['title']}}</h3>
                  </div>
                  <div class="card-body">
                     <h3>{{$post['body']}}</h3>
                  </div>
                  <div class="card-footer">
                     <a href="/edit-post/{{$post->id}}" class="btn btn-primary">Edit</a>
                     <form action="/delete-post/{{$post}}" method="post">
                        @csrf
                        @method('DELETE')
                        <a href="" class="btn btn-danger">Delete</a>
                     </form>
                  </div>
               </div>
               @endforeach
            </div>
         </div>

      </div>
   </div>
</div>
@endsection