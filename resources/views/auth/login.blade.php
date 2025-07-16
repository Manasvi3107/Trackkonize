@extends('layouts.app')
@section('content')
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-xl-7"><img class="bg-img-cover bg-center" src="{{asset('assets')}}/images/login/d8.png" alt="looginpage"></div>
            <div class="col-xl-5 p-0">
                <div class="login-card">
                <form class="theme-form login-form" method="POST" action="{{route('login')}}">
                        @csrf
                        <h4>Login</h4>
                        <h6>Welcome back! Log in to your account.</h6>
                        <div class="form-group">
                        <label>Username</label>
                            <div class="input-group"><span class="input-group-text"><i class="icon-user"></i></span>
                            <input class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus type="text"  placeholder="username">
                            @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                            </div>
                        </div>
                        <div class="form-group">
                        <label>Password</label>
                            <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                            <input class="form-control  @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="current-password" placeholder="*************">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <div class="show-hide"><span class="show"></span></div>
                            </div>
                        </div>
               
                        <div class="form-group">
                            <button class="btn btn-primary btn-block" type="submit">Sign in</button>
                        </div> 
                        <hr> 
                        Don't have Account?<a href="https://forms.gle/xqAqu71ghxRWE11A9"><b> CONTACT US</b></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
 
@endsection