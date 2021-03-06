@extends('auth.authmaster')

@section('content')


    <div class="col-12 col-sm-12 col-md-8 col-lg-8 login-sidebar">

        <div class="login-container">
            <div class="col-m-6 offset-md-5"><img style="height: 150px " src="assets/landing/assets/img/Mother-PNG-Image.png" alt="Welcome"></div>
            <h2 class="text-center text-upper">Login To Hospitali Dashboard</h2>
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                    <i class="fa fa-user"></i>
                </div>
                <div class="form-group help">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    <i class="fa fa-lock"></i>
                    <a href="#" class="pass-view fa fa-eye"></a>
                </div>

                <div class="form-group">
                    <div class="flexbox align-items-center">
									<span class="custom-checkbox">
										<input type="checkbox" id="checkbox1"  name="remember" {{ old('remember') ? 'checked' : '' }} value="1">
										<label for="checkbox1">Remember me</label>
									</span>

                        <a href="{{ route('password.request') }}" data-toggle="tooltip" class="theme-cl" style="color:black " data-original-title="Forgot Password">Forgot Password?</a>
                    </div>
                </div>

                <div class="form-group">
                    <div class="flexbox align-items-center">
                        <button type="submit" class="btn gredient-bg">log in</button>
                        <p>If You Are a New User <a href="{{ route('register') }}" data-toggle="tooltip" style="color:black" class="gredient-cl" data-original-title="Sign Up" >Signup Here.</a></p>
                    </div>
                </div>


            </form>
        </>
        <!-- .login-container -->

    </div> <!-- .login-sidebar -->
    </div> <!-- .row -->
    </div>
@endsection
