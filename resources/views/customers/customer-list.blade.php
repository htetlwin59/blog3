@extends('layouts.app2')


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
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Table</h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Password</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customer as $customers)
                                <tr>
                                    <td><a href="/customers/detail/{{$customers->id}}">{{$customers->name}}</a></td>
                                    <td>{{$customers->email}}</td>
                                    <td>{{$customers->password}}</td>
                                </tr>
                              @endforeach

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Password</th>

                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


                    {{-- @section('content2')


                    <div class="row page-titles mx-0">
                        <div class="col p-md-0">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{asset('javascript:void(0)')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active"><a href="{{asset('javascript:void(0)')}}">Home</a></li>
                            </ol>
                        </div>
                    </div>
                    <!-- row -->

                    <div class="container-fluid">
                        <h1>Customer-list</h1>
    <table>
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
        </thead>
        <tbody>
            @foreach ($customer as $customers)
              <tr>
                  <td><a href="/customers/detail/{{$customers->id}}">{{$customers->name}}</a></td>
                  <td>{{$customers->email}}</td>
                  <td>{{$customers->password}}</td>
              </tr>
            @endforeach

        </tbody>
                    </div>
                    @endsection

                    <!-- #/ container -->
 --}}




