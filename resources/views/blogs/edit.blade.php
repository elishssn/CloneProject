@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show {{$blog->title}}</div>

                <div class="card-body">
                <form action="{{route('blog:update',$blog)}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $blog->title}}">
                        </div>
                        <div class="form-group">
                            <label for="body">Description</label>
                            <textarea name="body" id="body" rows="3" class="form-control">{{ $blog->body }} </textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save Edit</button>
                            <a href="{{ route('blog:index')}}" class="btn btn-link">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 