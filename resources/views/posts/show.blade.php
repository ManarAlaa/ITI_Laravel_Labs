@extends('layouts.app')
@section('content')
<div class="container ">
    <div class="card mt-4 mx-auto">
        <div class="card-header">
        Post Info
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
            <p><b>Title</b>:-{{$post['title']}}</p>
           <p> <b>Description</b>:-{{$post['description']}}</p>
            <p>hello laravel hello laravel hello laravel hello laravel hello laravel<p>
            </blockquote>
        </div>
    </div>
    <div class="card mt-4 mx-auto">
        <div class="card-header">
        Post Info
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
            <p><b>Name</b>:{{$post['id']}}</p>
            <p><b>Email</b>:{{$post['email']}}</p>
            <p><b>Created_at</b>:{{$post['created_at']}}</p>
            <p>hello laravel hello laravel hello laravel hello laravel hello laravel<p>
            </blockquote>
        </div>
    </div>
</div>
  </tbody>
</table>
@endsection