@extends('layouts.app')

@section('content')
<section class="material-half-bg">
      <div class="cover"></div>
    </section>
<section class="login-content">
      <div class="logo">
        <h1>Vali</h1>
      </div>
      <div class="login-box">
       
                                        <form method="POST" class="login-form" action="{{ route('login') }}">
                                         @csrf                                        
<h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
                                <div class="form-floating mb-3">
                                                    <input class="form-control @error('email') is-invalid @enderror" id="inputEmail" type="email" placeholder="name@example.com" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input class="form-control " id="inputPassword" type="password" placeholder="Password" name="password">
                                                    <label for="inputPassword">Password</label>
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                </div>
                                                
                                                <div class="form-group btn-container">
                                                    <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
                                                </div>
                                            </form>
      </div>
    </section>
@endsection


