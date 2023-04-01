@extends('layouts.app')
@section('content')
<div class="text-center">
<a href="{{route('posts.create')}}" class="btn  mt-4 btn-success">Create</a>
</div>
<table class="table mt-4 ">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Posted_by</th>
      <th scope="col">Created_at</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr>
      <th scope="row">{{$post['id']}}</th>
      <td>{{$post['title']}}</td>
      <td>{{$post['description']}}</td>
      <td>{{$post['posted_by']}}</td>
      <td>{{$post['created_at']}}</td>
      <td>
        <a href="{{route('posts.show',$post['id'])}}" class="btn btn-info">View</a>
        <a href="{{route('posts.edit',$post['id'])}}" class="btn btn-primary">Edit</a>
        <a href="/posts" onclick="return confirm('Are you sure you want to delete this post?')" class="btn btn-danger">Delete</a>
        <!-- <a href="{{route('posts.destroy',$post['id'])}}" class="btn btn-danger">Delete</a> -->
      </td>

    </tr>
   @endforeach
  </tbody>
</table>
 @endsection