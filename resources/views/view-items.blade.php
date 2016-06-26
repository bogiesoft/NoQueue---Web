<!DOCTYPE html>
@include('includes.doctype')
<head>
    <!-- Meta -->
    @include('includes.meta')
            <!-- Title -->
    <title>Add Items</title>
    <!-- Templates core CSS -->
    @include('includes.head')
</head>
<body>
<div class="container" id="my_nav">
    @include('includes.nav-admin')
</div>
<div class="container-fluid table-responsive">
    <h2><br></h2>
    <p style="text-align: center"><strong>Item sold in your business.</strong></p>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Item Name</th>
            <th>Item Price</th>
            <th>Description</th>
            <th>Created @</th>
            <th>Updated @</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($items as $item)
        <tr>
            <td>{{$item->item}}</td>
            <td class="center">{{$item->item_price}}</td>
            <td class="center">{{$item->description}}</td>
            <td class="center">{{$item->created_at}}</td>
            <td class="center">{{$item->updated_at}}</td>
            <td class="center"><span class="label label-primary"><i class="fa fa-btn fa-tags">Edit</i></span>|<span class="label label-danger"><i class="fa fa-btn fa-tags">Delete</i></span></td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div><!--/span-->
@include('includes.script')
</body>
</html>