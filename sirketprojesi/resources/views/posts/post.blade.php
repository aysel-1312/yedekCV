@extends('layouts.index')
@section('title')
    Post
@endsection
@section('header')
@endsection
@section('menu')
@endsection
@section('content')

    <div class="page-wrapper">

        <div class="container-fluid">

            <div class="card-group">
                <div class="card border-right">
                    <div class="card-body">
                        <div class="text-center">
                            <h2 class="text-dark mb-1 w-1000 text-truncate font-weight-medium">POSTS</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-wrapper">
                <div class="container-fluid">
                    <div class="card-group">
                        <div class="card border-right">
                            <div class="card-body">
                                <form action="" method="post">
                                    @csrf
                                    <div class="form-floating">
                                        <textarea class="form-control" name="body" placeholder="Text Something!"
                                                  id="body" style="height: 100px"></textarea>
                                        <label for="body"></label>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary m-3 ">POST</button>
                                    </div>
                                </form>


                                <div class="m-3 card-group">
                                    <div class="card" style="width: 18rem;">

                                        <div class="card-body">
                                            @if($posts->count())
                                                @foreach($posts as $post)
                                                    <h5 class="card-title text-center">
                                                        <div class="text-danger"><a href="">{{$post->user->name}}</a>
                                                            <div class="text-danger">
                                                                <span class="">  </span>
                                                            </div>
                                                            <p class="card-text">{{$post->body}}</p>
                                                        </div>
                                                    </h5>

                                                    @auth()
                                                        @if(!$post->likedBy(auth()->user()))
                                                            <form action="{{route('post.likes',$post)}}" method="post">
                                                                @csrf
                                                                <button type="submit" class="text-info">Like</button>
                                                            </form>
                                                        @else
                                                            <form action="{{route('post.dest',$post)}}"
                                                                  method="post">
                                                                @csrf
                                                                @method('DELETE')

                                                                <button type="submit" class="text-info">UnLike</button>
                                                            </form>
                                                        @endif
                                                    @endauth
                                                    <span>{{$post->likes->count()}} {{Str::plural('like',$post->likes->count())}}</span>
                                                    @can('delete',$post)
                                                        <form action="{{route('post.del',$post)}}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="text-info">Delete</button>
                                                        </form>
                                                    @endcan
                                                @endforeach
                                                {{ $posts->links('pagination::bootstrap-4') }} {{--direk yazılmıyor ancak bu şekilde çalışıyor--}}
                                            @else
                                                <p> There are no post</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection
