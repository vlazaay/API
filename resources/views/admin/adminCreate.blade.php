@extends('admin.adminLayout')

@section('content')
    <h1>CREATE new Blog</h1>
    <form method="post" action="/admin">

        {{ csrf_field() }}
        <div class="container">
            <div>
                <input type="text" name="title" placeholder="title">
            </div>

            <div>
                <input type="text" name="body" placeholder="body">
            </div>

            <div>
                <input type="text" name="conclusion" placeholder="conclusion">
            </div>

            <div>
                <input type="submit" name="Create blog" value="Create">
            </div>

        </div>
    </form>
@endsection