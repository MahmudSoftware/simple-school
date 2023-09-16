
<!DOCTYPE html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Mahmud Software : Login</title>
        <link href="{{url('public/Admin/css/')}}/bootstrap.min.css" rel="stylesheet" media="screen">
            <link href="{{url('public/Admin/css/')}}/bootstrap-theme.min.css" rel="stylesheet" media="screen">
                <link rel="stylesheet" href="{{url('public/Admin/css/')}}/style.css" type="text/css"  />
                </head>
                <body>

                    <div class="signin-form">

                        <div class="container">


                          
                        <form method="POST" class="form-signin" action="{{ route('login') }}">
                        @csrf
                                <h2 class="form-signin-heading">Login to Mahmud Software</h2><hr />


                                <div class="form-group">

                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">
                                      @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                   

                                </div>

                                <div class="form-group">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="PassWord" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div>

                                <hr />

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-block">
                                    {{ __('Login') }}
                                </button>
                                </div>  
                               
                                <label align="right">Powerd by &nbsp; &nbsp; <i style="color: #46BEF0"><a href="http://www.mahmudsoftware.com" target="blank">Mahmud Software</a></i></label>
                            </form>

                        </div>

                    </div>

                </body>
                </html>