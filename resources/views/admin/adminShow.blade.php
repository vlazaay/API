@extends('admin.adminLayout')

@section('content')
    <div class="container">
        <h1 class="title" style="margin-top: 2em"></h1>
        <h2>{{$posts->title}}</h2>
        <h3>{{$posts->body}}</h3>
        <h3>{{$posts->conclusion}}</h3>
        <p>
            <a href="/admin/{{$posts->id}}/edit">Edit</a>
        </p>
    </div>
    @endsection