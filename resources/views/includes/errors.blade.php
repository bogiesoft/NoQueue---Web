@if(count($errors)>0)
    <div class="row">
        <div class="alert alert-warning alert-dismissable has-error" style="color: #d62728;">
            <ul>
                @foreach($errors->all() as $error)
                    <li><button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button>
                        <strong>Error!</strong>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
@if(Session::has('message'))
    <div class="row">
        <div class="alert col-md-offset-4 alert-success" style="color: #1b38d6;">
            {{Session::get('message')}}
        </div>
    </div>
@endif
@if(Session::has('signinerror'))
    <div class="row">
        <div class="alert col-md-offset-4 alert-success" style="color: #1b38d6;">
            {{Session::get('signinerror')}}
        </div>
    </div>
@endif