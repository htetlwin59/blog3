

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
                        <form class="form-valide" action="/customers/customeradd" method="post">
                            @csrf
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-username">Username <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="val-username" name="name" placeholder="Enter a username..">
                                </div>
                                <div class="col-lg-4"></div>
                                <div class="text-danger">{{$errors->first('name')}}</div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-email">Email <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="val-email" name="email" placeholder="Your valid email..">
                                </div>
                                <div class="col-lg-4"></div>
                                <div class="text-danger">{{$errors->first('email')}}</div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-password">Password <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="password" class="form-control" id="val-password" name="password" placeholder="Choose a safe one..">
                                </div>
                                <div class="col-lg-4"></div>
                                <div class="text-danger">{{$errors->first('password')}}</div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-8 ml-auto">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


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
    <h1>Customer Add</h1>
    <form action="/customers/customeradd" method="POST">
        @csrf
    <label for="name">Name</label>
    <input type="name" id="name" name='name'><p></p>
    <label for="email">Email</label>
    <input type="email" id="email" name='email'><p></p>
    <label for="pwd">Password</label>
    <input type="password" id="pwd" name='password'><p></p>
    <button type="submit">Submit</button>
    </form>
</div> --}}
@endsection

<!-- #/ container -->




