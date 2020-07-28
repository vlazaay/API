@extends('admin.adminLayout')

@section('content')

    <div class="container">
        <h1 class="title">Edit blog</h1>

        <form method="POST" action="/admin/{{$posts->id}}" style="margin-bottom: 1em;">
            {{method_field('PATCH')}}
            {{ csrf_field() }}

            <div class="field">
                <label for="title">Title</label>

                <div class="control">
                    <input type="text" class="input" name="title" placeholder="title" value="{{$posts->title}}">
                </div>
            </div>

            <div class="field">
                <label for="price">Body</label>

                <div class="control">
                    <input type="text" class="input" name="body"  placeholder="body" value="{{$posts->body}}" >
                </div>
            </div>

            <div class="field">
                <label for="duration">Conclusion</label>

                <div class="control">
                    <input type="text" class="input" name="conclusion"  placeholder="conclusion" value="{{$posts->conclusion}}">
                </div>
            </div>

            <div class="field">

                <div class="control">
                    <button type="submit" class="btn btn-primary">Update project</button>
                </div>
            </div>


        </form>

        {{--delete form--}}

        <form method="get" action="/admin/{{$posts->id}}/delete">
            {{method_field('DELETE')}}
            {{ csrf_field() }}


            <div class="field">

                <div class="control">
                    <button type="submit" class="btn btn-primary">Delete project</button>
                </div>
            </div>
        </form>

    </div>
    @endsection