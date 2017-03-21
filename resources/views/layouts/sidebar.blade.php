<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <div class="panel panel-default">
        <div class="panel-heading">Menu</div>
        <div class="list-group">
            <a href="{{URL::to('admin')}}" class="list-group-item {{ Request::is('admin') ? 'active' : '' }}"><span class="glyphicon glyphicon-home" style="padding-right: 10px" aria-hidden="true"></span>Dashboard</a>
            <a href="{{URL::to('admin/users')}}" class="list-group-item {{ Request::is('admin/users') ? 'active' : '' }}"><span class="glyphicon glyphicon-user" style="padding-right: 10px" aria-hidden="true"></span>Users</a>
            <a href="{{URL::to('admin/product')}}" class="list-group-item {{ Request::is('admin/product') ? 'active' : '' }}"><span class="glyphicon glyphicon-gift" style="padding-right: 10px" aria-hidden="true"></span>Product</a>
            <a href="#" class="list-group-item"><span class="glyphicon glyphicon-shopping-cart" style="padding-right: 10px" aria-hidden="true"></span>Cart</a>
            <a href="#" class="list-group-item"><span class="glyphicon glyphicon-comment" style="padding-right: 10px" aria-hidden="true"></span>Message</a>
            <a href="#" class="list-group-item"><span class="glyphicon glyphicon-tasks" style="padding-right: 10px" aria-hidden="true"></span>Report</a>
        </div>
    </div>
</div>