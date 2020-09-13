@extends('layouts.app2')
@section('content2')
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{asset('javascript:void(0)')}}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{asset('javascript:void(0)')}}">Home</a></li>
        </ol>
    </div>
</div>
<!-- row -->
 <div class="row">
    <div class="col-lg-2 col-xl-2"></div>
        <div class=col-lg-8 col-xl-8></div>
        <div class="card">
            <div class="card-body">
                <div class="media align-items-center mb-4">
                    <img class="mr-3" src="\storage\{{$post->image}}" width="80" height="80" alt="">
                    <div class="media-body">
                        <h3 class="mb-0">{{$post->customer->name}}</h3>
                        <p class="text-muted mb-0">{{$post->customer->email}}</p>
                    </div>
                </div>

                <div class="row mb-5">

                    <div class="col-6 text-center">
                        <a href="/posts/{{$post->id}}/edit" class="btn btn-warning px-5">Update</a>
                    </div>
                    <div class="col-6 text-center">
                        <button type="submit" form="delete-task" class="btn btn-warning px-5">Delete</button>

                    </div>
                    {{-- <div class="col-6 text-center">
                        <a href="/customers/delete/{{$customer->id}}" class="btn btn-danger px-5">Delete</a> --}}

                     {{-- <div class="col-2 text-center">
                        <button class="btn btn-danger px-5">Follow Now</button>
                    </div>
                </div> --}}

                <h4>About Me</h4>
                <p class="text-muted">Hi, I'm Pikamy, has been the industry standard dummy text ever since the 1500s.</p>
                <ul class="card-profile__info">
                    <li class="mb-1"><strong class="text-dark mr-4"il>Password</strong>{{$post->customer->password}} <span></span></li>
                    <li><strong class="text-dark mr-4">Email</strong>{{$post->customer->email}} <span></span></li>
                </ul>
            </div>
        </div>
    </div>
                    {{-- <div class="container-fluid">
                        <h1>Post detail</h1>
                        <p>Title:{{$post->title}}</p>
                        <p>Content:{{$post->content}}</p>
                        <p>Customer Name:{{$post->customer->name}}</p>
                        <p>Customer Email:{{$post->customer->email}}</p>
                    <form action="/posts/{{$post->id}}" method="post" id="delete-task">
                        @csrf
                        @method('DELETE')
                    </form>
                        <a href="/posts/{{$post->id}}/edit"><button>Update</button></a>
                            <button type="submit" form="delete-task">Delete</button>
                    </div> --}}
@endsection

                    <!-- #/ container -->





{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post Detail</title>
</head>
<body>

</html> --}}
