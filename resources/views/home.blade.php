@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @for($i = 0; $i < 10; $i++)
        <div class="col-md-6 col-md-offset-3" style="padding-left: 100px;padding-right: 100px">
            <div class="panel panel-default">
                <img src="https://ss-imager-prod.global.ssl.fastly.net/www-images/480/product_images/2f64682baa56d5ba1ed6e6ec9e9d46b8.jpg" class="img-responsive" alt="Image" width="100%">
                <div class="panel-heading">
                    <p style="margin:0">Ghensia Batik Tunic Muslim Blouse</p>
                    <p style="font-weight: 700">Rp 89.0000</p>
                </div>
                <div class="panel-body">
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="padding:0">
                        <span class="glyphicon glyphicon-heart" style="color: #808080; font-weight: 900; line-height: 2.4rem; padding-right: 10px" aria-hidden="true"></span><span>Naksir</span>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="padding:0">
                        <span class="glyphicon glyphicon-share" style="color: #808080; font-weight: 900; line-height: 2.4rem; padding-right: 10px" aria-hidden="true"></span><span>Bagikan</span>
                    </div>
                    <a type="button" class="btn btn-sm btn-warning pull-right btn-beli">Beli</a>
                </div>
            </div>
        </div>
        @endfor
</div>
@endsection
