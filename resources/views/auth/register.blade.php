<!-- 

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!DOCTYPE html>
<html lang="en" class="bg-dark">
<head>
    <meta charset="utf-8" />
    <title>Register | LaravelOMS</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="{{ asset ('css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset ('css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset ('css/font-awesome.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset ('css/font.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset ('css/app.css') }}" type="text/css" />
    <!--[if lt IE 9]>
    <script src="{{ asset ('js/ie/html5shiv.js') }}"></script>
    <script src="{{ asset ('js/ie/respond.min.js') }}"></script>
    <script src="{{ asset ('js/ie/excanvas.js') }}"></script>
    <![endif]-->
</head>
<body>
<section id="content" class="m-t-lg wrapper-md animated fadeInUp">
    <div class="container aside-xxl">
        <a class="text-center block" href="index.html" style="font-size: 25px; color: rgb(101, 189, 119); font-weight: 900; margin-top: 20px;line-height: 1.5;" data-toggle="fullscreen">Order <br><span style="font-size: 25px; color: rgb(101, 189, 119); font-weight: 900">Management</span> <br><span style="font-size: 25px; color: rgb(101, 189, 119); font-weight: 900">System</span></a>
        <section class="panel panel-default bg-white m-t-lg">
            <header class="panel-heading text-center">
                <strong>Welcome to Order Management System</strong>
            </header>

            {!! Form::open(array('class' => 'panel-body wrapper-lg')) !!}

            @if($errors)
                @foreach ($errors->all() as $message)
                    <div class="alert alert-danger alert-dismissible fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Error!</strong> {{ $message }}
                    </div>
                @endforeach
            @endif

            <div class="form-group">
                <label class="control-label">Name</label>
                {!! Form::text('name','',[ 'placeholder'=>"Your Name", 'class'=>"form-control input-lg"]) !!}
            </div>
            <div class="form-group">
                <label class="control-label">Email</label>
                {!! Form::email('email','',[ 'placeholder'=>"test@example.com", 'class'=>"form-control input-lg"]) !!}
            </div>
            <div class="form-group">
                <label class="control-label">Password</label>
                {!! Form::password('password',[ 'placeholder'=>"password", 'class'=>"form-control input-lg"]) !!}
            </div>
            <div class="form-group">
                <label class="control-label">Confirm Password</label>
                {!! Form::password('password_confirmation',[ 'placeholder'=>"confirm password", 'class'=>"form-control input-lg"]) !!}
            </div>
            {!! Form::submit('Register',[ 'class'=>"btn btn-success"]) !!} 
            {!! Form::close() !!}
        </section>
    </div>
</section>
<!-- footer -->
<footer id="footer">
    <div class="text-center padder">
        <p>
            <small>By Hamza Safdar</small>
        </p>
    </div>
</footer>
<!-- / footer -->

<script src="{{ asset ('js/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset ('js/bootstrap.js') }}"></script>
<!-- App -->
<script src="{{ asset ('js/app.js') }}"></script>
<script src="{{ asset ('js/app.plugin.js') }}"></script>
<script src="{{ asset ('js/slimscroll/jquery.slimscroll.min.js') }}"></script>

</body>
</html>

