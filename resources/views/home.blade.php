<!DOCTYPE html>
@include('includes.doctype')
<head>
    <!-- Meta -->
    @include('includes.meta')
            <!-- Title -->
    <title>Sign In to NoQueue</title>
    <!-- Templates core CSS -->
    @include('includes.head')

</head>
<body>
<div class="container" id="my_nav">
    @include('includes.nav-admin')
</div>
<div class="container-fluid table-responsive">
    <h2><br></h2>
    <p>List of item ordered by your customers presently</p>
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>Customers name</th>
            <th>Item Ordered</th>
            <th>Table</th>
            <th>total Price</th>
            <th>Time</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr id="itemOrdered" name="itemOrdered">
                <td class="center">{{$order->item_ordered}}</td>
                <td class="center"><strong>{{$order->item_ordered}}</strong></td>
                <td class="center"><strong>{{$order->table_number}}</strong></td>
                <td class="center">{{$order->total_price}}</td>
                <td class="center"><?php
                    if (strtotime($order->created_at) >= strtotime(date("Y-m-d h:i:s", time()))) {
                        echo "Just Now";
                    } else {
                        echo \Carbon\Carbon::createFromTimestamp(strtotime($order->created_at))->diffForHumans();
                    } ?></td>
                <td class="center">
                    <span class="label label-success">{{$order->status}}</span>
                </td>
                <td class="center">
                    <a class="label label-success" href="#">
                        <i class="">Approve</i>
                    </a>&nbsp;
                    <a class="label label-danger" href="#">
                        <i class="">Not Approved</i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div><!--/span-->
@include('includes.script')
</body>
</html>