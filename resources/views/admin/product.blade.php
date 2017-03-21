@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('layouts.sidebar')

        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span style="font-size: 1.6em;">Product</span>
                    <br>
                    <a href="/admin/product/new" class="btn btn-primary">Add Product</a>
                    <div class="col-sm-3 col-md-3 pull-right" style="padding: 0; margin: 0">
                        <form class="navbar-form" role="search" style="padding: 0; margin: 0">
                        <div class="input-group" >
                            <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term" >
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>

                <div class="panel-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Picture</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Category</th>
                                <th><span class="pull-right">Action</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class="pull-right">
                                        <button type="button" class="btn btn-primary">View</button>
                                        <button type="button" class="btn btn-success">Edit</button>
                                        <button type="button" class="btn btn-danger">Delete</button>
                                    </Delete>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
