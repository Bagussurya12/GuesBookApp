@extends('layouts.app')

@section('content')
<div class="body-login">
  <div class="login-box rounded">
    
    <div class="card rounded-3">
      <div class="card-body login-card-body">
        <p class="login-box-msg">
         
          <b style="color: rgb(127, 127, 243)">LOGIN</b></p>
  
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <center>
              @if ($errors->has('email'))
                                    <div style="color:red; font-size: 12px;">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </div>
                                @endif
            </center>
          <div class="input-group mb-3">
            <input class="form-control" id="email" type="email" autocomplete="off" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" required autofocus placeholder="Email">
            
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
            
          </div>
          
          <div class="input-group mb-3">
            <input id="password" type="password" autocomplete="off" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            
          </div>
          <center>
          @if ($errors->has('password'))
          <div style="color:red; font-size: 12px;">
                                        <strong>{{ $errors->first('password') }}</strong>
          </div>
                                @endif
          </center>
          <div class="row">
            
            <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">
                    {{ __('Login') }}
                </button>
            </div>
            
          </div>
        </form>


        
  
        
      </div>
      <!-- /.login-card-body -->
    </div>
</div>
  <!-- /.login-box -->

  
</div>

@endsection

