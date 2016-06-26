<nav class="navbar navbar-default navbar-fixed-top" style="background-color: #34495E; color: #ffffff">
    <div class="container">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="navbar-header pull-left">
            <a href="home" class="navbar-brand" style="color: #ffffff"><strong>{{Auth::user()->busnx_name}}</strong></a>
        </div>
        <div class="collapse navbar-collapse pull-right" id="app-navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{url('/view-items')}}" style="color: #ffffff"><span class="subFont"><strong>View Items</strong></span></a></li>
            </ul>
            <ul class="nav navbar-nav">
                <li><a href="{{url('/add-items')}}" style="color: #ffffff"><span class="subFont"><strong>Add Items</strong></span></a></li>
            </ul>
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/logout') }}" style="color: #ffffff"><span class="subFont"><strong>Logout</strong></span></a></li>
            </ul>
        </div>
    </div> <!-- end of container -->
</nav>