@extends('layouts.app')
@section('title1')
    Welcome to NoQueue
@endsection
@section('header')
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <!-- Logo -->
                {{-- <figure class="text-center">
                     <a href="./index.html">
                         <img class="img-logo" src="images/logo.png" alt="">
                     </a>
                 </figure> --}}<!-- /.text-center -->
                <!-- Title -->
                <h1>With NoQueue, just Relax and Get Served</h1>
                <!-- Sub title -->
                <p>NoQueue helps you eliminate incessant queue in Restaurants and Bar around you! Feel free to download
                    from your favorite App Stores</p>

                <!-- Button -->
                <p class="btn-app-store">
                    <a class="btn btn-primary btn-lg" href="#fakelinks">
                        <img src="{{URL::to('src/images/btn-app-store.png')}}" alt="">
                    </a>
                </p> <!-- /.btn-app-store -->
                <!-- Button -->
                <p class="btn-app-store">
                    <a class="btn btn-danger btn-lg" href="#fakelinks">
                        <img src="{{URL::to('src/images/btn-app-store.png')}}" alt="">
                    </a>
                </p> <!-- /.btn-app-store --><!-- Button -->
                <p class="btn-app-store">
                    <a class="btn btn-danger btn-lg" href="#fakelinks">
                        <img src="{{URL::to('src/images/btn-app-store.png')}}" alt="">
                    </a>
                </p> <!-- /.btn-app-store -->

            </div> <!-- /.col-md-7 -->

            <div class="col-md-5">

                <!-- Images showcase -->
                <figure>
                    <img class="img-iPhone" src="{{URL::to('src/images/iphone/2.png')}}" alt="">
                </figure>

            </div> <!-- /.col-md-5 -->

        </div> <!-- /.row -->

    </div> <!-- /.container -->
@endsection