@extends('admin.adminLayout')

@section('content')
    <div class="container">
        <h1>Admin Panel</h1>
        <a href="/admin/create" class="btn btn-secondary">Create</a>
        <br>
    <table class="table">
        <thead>
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>Action</td>
            </tr>
        </thead>

        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>

                    <td>
                        <a href="/admin/{{$post->id}}/edit" style="border: 2px solid #00BFFF">Edit</a>
                        <a href="/admin/{{$post->id}}/delete" style="border: 2px solid #00BFFF">Delete</a>
                        <a href="/admin/{{$post->id}}" style="border: 2px solid #00BFFF">Show details</a>
                    </td>

                {{--href="/admin/{{$id}}/edit"--}}
                </tr>
                @endforeach
        </tbody>
    </table>
    </div>
    @endsection