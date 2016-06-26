<!DOCTYPE html>
@include('includes.doctype')
<html lang="en">
<head>
    @include('includes.meta')

    <title>@yield('title1')</title>
    @include('includes.head')
</head>
<body class="index" id="to-top">
<!-- Side Menu-->
@include('includes.nav')
<header class="jumbotron" role="banner">
    @yield('header')
</header>
<section class="services-section" id="section-1">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-services">
                <!-- Icons -->
                <a href="#fakelink"><figure>
                        <img class="img-services" src="{{URL::to('src/images/icons/flag.png')}}" alt="">
                    </figure></a>
                <!-- Title -->
                <a href=""><h4>Register your Business.</h4></a>
                <!-- Description -->
                <p>Register your business, reduce incessant queue in your Restaurant and Bar</p>
            </div> <!-- /.col-md-4 -->
            <div class="col-md-4 col-services">
                <!-- Icons -->
                <a href=""><figure>
                        <img class="img-services" src="{{URL::to('src/images/icons/search.png')}}" alt="">
                    </figure></a>
                <!-- Title -->
                <h4>Register your Business.</h4>
                <!-- Description -->
                <p>Register your business, reduce incessant queue in your Restaurant and Bar.</p>
            </div> <!-- /.col-md-4 -->
            <div class="col-md-4 col-services">
                <!-- Icons -->
                <a href="#fakelink"><figure>
                        <img class="img-services img-margin" src="{{URL::to('src/images/icons/world-map.png')}}" alt="">
                    </figure></a>
                <!-- Title -->
                <h4>Register your Business.</h4>
                <!-- Description -->
                <p>Register your business, reduce incessant queue in your Restaurant and Bar..</p>
            </div> <!-- /.col-md-4 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section> <!-- /.services-section -->
<!-- Features -->
<section class="features-section" id="section-2">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-features text-center">
                <!-- Images showcase -->
                <figure>
                    <img class="img-iPhone" src="{{URL::to('src/images/iphone/1.png')}}" alt="">
                </figure>
            </div> <!-- /.col-md-5 -->
            <div class="col-md-7 col-features features-content">
                <!-- Title -->
                <h3 id="title-1">How it works.</h3>
                <!-- Description -->
                <p>NoQueue can help eliminate incessant queue in your bar and restaurants.</p>
                <p>
                    <a class="btn btn-danger" href="#title-2">Learn more</a>
                </p>
            </div> <!-- /.col-md-7 -->
        </div> <!-- /.row -->
        <div class="row media-screen-800">
            <div class="col-md-7 col-features features-content">
                <!-- Title -->
                <h3 id="title-2">Sign in </h3>
                <!-- Description -->
                <p>You can register your Bar or Restaurant here to start using NoQueue!</p>
                <p>
                    <a class="btn btn-danger" href="{{ url('/login') }}">Sign In</a> &nbsp;
                    <a class="btn btn-danger-border" href="{{ url('/register') }}">Sign Up</a>
                </p>
            </div> <!-- /.col-md-7 -->
            <div class="col-md-5 col-features text-center">
                <!-- Images showcase -->
                <figure>
                    <img class="img-iPhone margin-top margin-screen-800" src="{{URL::to('src/images/iphone/4.png')}}" alt="">
                </figure>
            </div> <!-- /.col-md-5 -->
        </div> <!-- /.row -->
        <div class="row">
            <div class="col-md-5 col-features text-center">
                <!-- Images showcase -->
                <figure>
                    <img class="img-iPhone margin-top margin-top-1" src="{{URL::to('src/images/iphone/3.png')}}" alt="">
                </figure>
            </div> <!-- /.col-md-5 -->
            <div class="col-md-7 col-features features-content">
                <!-- Title -->
                <h3 id="title-3">Features</h3>
                <!-- Description -->
                <p>Some unique features of the App!</p>
                <!-- Button -->
                <p class="btn-app-store">
                    <a class="btn btn-danger btn-lg" href="#fakelinks">
                        <img src="{{URL::to('src/images/btn-app-store.png')}}" alt="">
                    </a>
                </p> <!-- /.btn-app-store -->
            </div> <!-- /.col-md-7 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section> <!-- /.features-section -->
<!-- Footer -->
@include('includes.footer')
        <!-- /.footer-section -->
<!-- Placed at the end of the document so the pages load faster -->
@include('includes.script')

    @yield('content')

</body>
</html>
