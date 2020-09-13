@extends('layouts.app2')

                    @section('content2')
                    <div class="row page-titles mx-0">
                        <div class="col p-md-0">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                                <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                            </ol>
                        </div>
                    </div>
                    <!-- row -->

                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-validation">
                                            <form class="form-valide" action="/customers/update" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$customer->id}}">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="name">Username <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter a username..">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="email">Email <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="email" name="email" placeholder="Your valid email..">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="password">Password <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="password" class="form-control" id="password" name="password" placeholder="Choose a safe one..">
                                                    </div>
                                                </div>
                                                <button type="submit">Submit</button>


                    {{-- <div class="row page-titles mx-0">
                        <div class="col p-md-0">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{asset('javascript:void(0)')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active"><a href="{{asset('javascript:void(0)')}}">Home</a></li>
                            </ol>
                        </div>
                    </div>
                    <!-- row -->

                    <div class="container-fluid">
                        <h1>Customer Update</h1>
                        <form action="/customers/update" method="POST">
                            @csrf
                        <label for="name">Name</label>
                        <input type="hidden" name="id" value="{{$customer->id}}">
                        <input type="name" id="name" name='name' value="{{$customer->name}}"><p></p>
                        <label for="email">Email</label>
                        <input type="email" id="email" name='email' value="{{$customer->email}}"><p></p>
                        <label for="pwd">Password</label>
                        <input type="password" id="pwd" name='password' value="{{$customer->password}}"><p></p>
                        <button type="submit">Submit</button>
                        </form>
                    </div> --}}
                    @endsection

                    <!-- #/ container -->






