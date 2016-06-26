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
<br><br><br>
<div class="container">
    <div class="panel-body pan">
        <form action="{{route('add-items')}}" method="POST">
            <div class="form-body pal">

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inputName" class="control-label">Item</label>
                            <div class="input-icon right">
                                <input type="text" name="item" placeholder="Name of Item" class="form-control"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inputEmail" class="control-label">Price</label>
                            <div class="input-icon right">
                                <input type="number" name="price" placeholder="Price of Item" class="form-control"></div>
                        </div>
                    </div>
                </div>
                <div class="form-group {{ $errors->has('category') ? ' has-error' : '' }}">
                    <label for="inputSubject" class="control-label">Item Category</label>
                    <div class="input-icon right">

                        <select class="form-control" name="category">
                            <option value="">Select Item Category</option>
                            @foreach($categories as $cat)
                                <option value="{{$cat->cat_id}}">{{$cat->category}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputMessage" class="control-label">Description of Item</label>
                    <textarea rows="5" name="description" class="form-control" placeholder="Write a short description of the item"></textarea>
                </div>
            </div>
            <div class="form-actions text-right pal">
                <button type="submit" class="btn btn-primary">Save</button>
                <input type="hidden" name="_token" value="{{Session::token()}}">
            </div>
            <div class="col-md-6">
                @include('includes.errors')
            </div>
        </form>
    </div>
</div>
@include('includes.script')
</body>
</html>