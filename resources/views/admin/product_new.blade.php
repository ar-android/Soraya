@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('layouts.sidebar')

        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span style="font-size: 1.4em; margin-right: 10px">Product</span>
                    
                </div>

                <div class="panel-body">
                    <form  method="POST" role="form">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Product Name">
                        </div>
                        
                        <div class="form-group">
                            <label for="name">Description</label>
                            <input type="text" class="form-control" id="description" placeholder="Description">
                        </div>
                        
                        <div class="form-group">
                            <label for="name">Category</label>
                            <select name="category" id="inputCategory" class="form-control" required="required">
                                <option value="1">1</option>
                                <option value="1">1</option>
                                <option value="1">1</option>
                                <option value="1">1</option>
                            </select>
                        </div>

                        
                        <label for="name">Price</label>
                        <div class="input-group">
                            <div class="input-group-addon">IDR</div>
                            <input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount" name="price">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="name">Picture</label>
                            <input type="file" class="form-control" id="picture" placeholder="Product Picture">
                        </div>

                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="/admin/product" class="btn btn-success">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
