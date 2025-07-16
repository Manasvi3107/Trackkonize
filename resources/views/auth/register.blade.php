@extends('layouts.app')
@section('content')
<div class="container-fluid p-0"> 
        <div class="row m-0">
          <div class="col-xl-7 p-0"><img class="bg-img-cover bg-center" src="{{asset('assets')}}/images/login/d7.png" alt="looginpage"></div>
          <div class="col-xl-5 p-0"> 
            <div class="login-card">
              <form class="theme-form login-form" method="POST" enctype="multipart/form-data"action="{{route('postregister')}}">
              @csrf
                <h4>Create your account</h4>
                
                <div class="form-group">
                  <label>Your Name</label>
                  <div class="small-group">
                     <div class="input-group"><span class="input-group-text"><i class="icon-user "></i></span>
                       <input class="form-control  name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus type="text"  placeholder="Firstname">
                           
                       </div>
                  </div>
                  <div class="form-group">
                        <label>Lastname</label>
                         <div class="input-group"><span class="input-group-text"><i class="icon-user "></i></span>
                            <input class="form-control  name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus type="text"  placeholder="Lastname">
                           
                            </div>
                        </div>
                <div class="form-group">
                        <label>Username</label>
                         <div class="input-group"><span class="input-group-text"><i class="icon-user"></i></span>
                            <input class="form-control name="username" value="{{ old('username') }}" required autocomplete="username" autofocus type="text"  placeholder="username">
                           
                            </div>
                        </div>
                        <div class="form-group">
                        <label>Email Address</Address></label>
                        <div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
                                <input class="form-control  name="email" value="{{ old('email') }}" required autocomplete="email"  autofocus type="text"  placeholder="Email Address">

                            </div>
                        </div>
                        <div class="form-group">
                        <label>Password</label>
                            <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                            <input class="form-control  type="password" name="password" required autocomplete="current-password" placeholder="*********">
                           
                            <div class="show-hide"><span class="show"></span></div>
                            </div>
                        </div>
                <div class="form-group">
                  <label>Confirm Password</label>
                  <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                            <input class="form-control   type="password" name="password" required autocomplete="current-password" placeholder="*********">
                          
                            <div class="show-hide"><span class="show"></span></div>
                            </div>
                </div>
                <div class="form-group">
                  <div class="checkbox">
                    <input id="checkbox1" type="checkbox">
                    <label class="text-muted" for="checkbox1">Agree with <span>Privacy Policy                   </span></label>
                  </div>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary btn-block" href="{{route('login')}}"type="submit">Create Account</button>
                </div>
                
                
                <p>Already have an account?<a class="ms-2" href="{{route('login')}}">Sign in</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
@endsection
