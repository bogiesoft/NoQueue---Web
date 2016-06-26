<!DOCTYPE html>
@include('includes.doctype')
<head>
    <!-- Meta -->
    @include('includes.meta')
            <!-- Title -->
    <title>Sign Up to NoQueue</title>

    <!-- Templates core CSS -->
    @include('includes.head')
</head>
<body class="sign-in-up" id="to-top">
<!-- Sign In/Sign Up section -->
<section class="sign-in-up-section">
    <div class="container"><!-- /.row -->
        <section class="sign-in-up-content">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-center">Create an account (Simplified)</h4>
                    @include('includes.errors')
                    <form class="sign-in-up-form" action="{{ url('/register') }}" method="POST" role="form">
                        {!! csrf_field() !!}
                        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                            <input class="form-control" name="name" type="text"
                                   placeholder="Your Full Name" value="{{Request::old('name')}}">
                        </div>
                        <div class="form-group {{ $errors->has('business_name') ? ' has-error' : '' }}">
                            <input class="form-control" name="business_name" type="text"
                                   placeholder="Your Business Name" value="{{Request::old('business_name')}}">
                        </div> <!-- /.form-group -->
                        <div class="form-group {{ $errors->has('type_of_business') ? ' has-error' : '' }}">
                            <select class="form-control" name="type_of_business">
                                <option value="">Type of Business</option>
                                <option value="bar">Bar</option>
                                <option value="restaurant">Restaurant</option>
                            </select>
                        </div>
                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <input class="form-control" name="email" type="email"
                                   placeholder="Enter email address" value="{{Request::old('email')}}">
                        </div> <!-- /.form-group -->
                        <div class="form-group {{ $errors->has('email_confirmation') ? ' has-error' : '' }}">
                            <input class="form-control" name="email_confirmation" type="email"
                                   placeholder="Comfirm email address" value="{{Request::old('email_confirmation')}}">
                        </div>
                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            <input class="form-control" name="password" type="password"
                                   placeholder="Password" value="{{Request::old('password')}}">
                        </div> <!-- /.form-group -->
                        <div class="form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <input class="form-control" name="password_confirmation"
                                   type="password" placeholder="Comfirm Password"
                                   value="{{Request::old('confirm_password')}}">
                        </div>
                        <div class="form-group {{ $errors->has('address') ? ' has-error' : '' }}">
                            <textarea class="form-control" rows="5" name="address" placeholder="Business Address"
                                      value="{{Request::old('address')}}"></textarea>
                        </div>
                        <div class="form-group {{ $errors->has('location') ? ' has-error' : '' }}">
                            <select class="form-control" name="location">
                                <option value="">Select your Location</option>
                                <option value="LagosM">Lagos - Mainland</option>
                                <option value="LagosI">Lagos - Island</option>
                                <option value="Abuja">Abuja</option>
                                <option value="PortHarcourt">PortHarcourt</option>
                                <option value="Owerri">Owerri</option>
                                <option value="Enugu">Enugu</option>
                                <option value="Aba">Aba</option>
                                <option value="Onitsha">Onitsha</option>
                                <option value="Umuahia">Umuahia</option>
                                <option value="Ibadan">Ibadan</option>
                                <option value="Minna">Minna</option>
                                <option value="Jos">Jos</option>
                                <option value="Calabar">Calabar</option>
                                <option value="Uyo">Uyo</option>
                                <option value="Benin">Benin</option>
                                <option value="Asaba">Asaba</option>
                                <option value="Warri">Warri</option>
                                <option value="Okene">Okene</option>
                                <option value="Kano">Kano</option>
                                <option value="Kaduna">Kaduna</option>
                                <option value="Maiduguru">Maiduguri</option>
                            </select>
                        </div>
                        <section class="text-center">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="terms"> I agree to <a href="#fakelinks">Terms</a> and
                                    <a href="#fakelinks">Privacy Policy</a>
                                </label>
                            </div> <!-- /.checkbox -->
                        </section>
                        <!-- Button -->
                        <button class="btn btn-success btn-block" type="submit">Sign Up</button>
                        <input type="hidden" name="_token" value="{{Session::token()}}">
                        <!-- Checkbox -->
                        <p><br></p>
                        <!-- /.text-center -->
                        <!-- Sign In/Sign Up links -->
                        <p><br></p>
                        <section class="sign-in-up-links text-center">
                            <p>Already have an account? <a href="{{ url('/login') }}">Sign In here</a></p>
                        </section> <!-- /.sign-in-up-links -->
                    </form> <!-- /.sign-in-up-form -->
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
        </section> <!-- /.sign-in-up-content -->
        <div class="row">
            <div class="col-md-12">
                <section class="footer-copyright text-center">
                    <p>Made with <i class="fa fa-heart"></i> by <a href="https://www.facebook.com">Joel Eze</a></p>
                </section> <!-- /.footer-section -->
            </div> <!-- /.col-md-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section> <!-- /.sign-in-up-section -->
<!-- Placed at the end of the document so the pages load faster -->
@include('includes.script')
</body>
</html>