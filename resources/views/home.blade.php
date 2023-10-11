@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-8">
         <div class="card">
            <div class="card-header">{{ __('Post') }}</div>

            <div class="card-body">
               @if (session('status'))
               <div class="alert alert-success" role="alert">
                  {{ session('status') }}
               </div>
               @endif

               <form action="/post" method="post">
                  @csrf
                  <input type="text" name="title" placeholder="Title">
                  <input type="text" name="Content" placeholder="Content">
                  <button>Post</button>
               </form>
            </div>
         </div>


      </div>
   </div>
</div>
@endsection