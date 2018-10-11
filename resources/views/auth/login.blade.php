@extends('layouts.auth.app')

@section('content')
  <div class="page-login-main animation-slide-right animation-duration-1">
          <div class="brand">
              <center>
            <img class="brand-img" src="/assets/images/logo.jpg" width="50px" height="50px" alt="...">
            <h2 class="brand-text font-size-20" style="color:black">LOGIN</h2>
              </center>
          </div>
          <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group">
                            <div class="">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            

                            <div class="">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group clearfix">
                                <div class="checkbox-custom checkbox-inline checkbox-primary float-left">
                                  <input type="checkbox" id="rememberMe" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                  <label for="rememberMe">Remember me</label>
                                </div>
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                </a>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">{{ __('Login') }}</button>

                       

                       
                    </form>


          <footer class="page-copyright">
           
          </footer>
        </div>





@endsection
