@extends('layouts.app')
@section('content')
<div class="container mt-4 ">
    <form method="POST" action="{{route('posts.update')}}" >
        @csrf
        @method('POST')
       
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label" >Title </label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="laravel" >
        </div>
        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="hello laravel"></textarea>
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Post Creator </label>
        <input type="text" class="form-control" id="exampleFormControlInput1"placeholder="manar" >
        </div>
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Save</button>
        </div>
</form>
@endsection