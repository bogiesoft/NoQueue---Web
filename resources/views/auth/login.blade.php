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
<body class="sign-in-up" id="to-top">
<!-- Sign In/Sign Up section -->
<section class="sign-in-up-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Logo -->
                {{--<figure class="text-center">
                    <a href="./index.html">
                        <img class="img-logo" src="images/logo.png" alt="">
                    </a>
                </figure>--}} <!-- /.text-center -->
            </div> <!-- /.col-md-12 -->
        </div> <!-- /.row -->
        <section class="sign-in-up-content">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-center">Sign In to your account</h4>
                    @include('includes.errors')
                    <form class="sign-in-up-form" action="{{ url('/login') }}" method="POST" role="form">
                        {!! csrf_field() !!}
                        <!-- Input 1 -->
                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <input class="form-control" name="email" type="email" placeholder="Enter email address">
                        </div> <!-- /.form-group -->
                        <!-- Input 2 -->
                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            <input class="form-control" name="password" type="password" placeholder="Password">
                        </div> <!-- /.form-group -->
                        <!-- Button -->
                        <button class="btn btn-success btn-block" type="submit">Sign In</button>
                        <input type="hidden" name="_token" value="{{Session::token()}}">
                        <!-- Checkbox -->
                        <section class="text-center">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" checked> Keep me logged in
                                </label>
                            </div> <!-- /.checkbox -->
                        </section> <!-- /.text-center -->
                        <!-- Sign In/Sign Up links -->
                        <section class="sign-in-up-links text-center">
                            <p><br></p>
                            <p><a href="{{ url('/password/reset') }}">Forgot password?</a> <span class="sep">&ndash;</span> <a href="{{ url('/register') }}">Need an account?</a></p>
                        </section> <!-- /.sign-in-up-links -->
                    </form> <!-- /.sign-in-up-form -->
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
        </section> <!-- /.sign-in-up-content -->
        <div class="row">
            <div class="col-md-12">
                <section class="footer-copyright text-center">
                    <p>Made with <i class="fa fa-heart"></i> <a href="https//www.facebook.com">Joel Eze</a></p>
                </section> <!-- /.footer-section -->
            </div> <!-- /.col-md-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section> <!-- /.sign-in-up-section -->
<!-- Placed at the end of the document so the pages load faster -->
@include('includes.script')
</body>
</html>