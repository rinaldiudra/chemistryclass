@extends('layouts.layout_user')

@section('content')

      <div class="content-wrap nopadding">

        <div class="section nopadding nomargin" style="width: 100%; height: 100%; position: absolute; left: 0; top: 0; background: url('users/images/parallax/home/chemistry.jpg') center center no-repeat; background-size: cover;"></div>

        <div class="section nobg full-screen nopadding nomargin">
          <div class="container vertical-middle divcenter clearfix">

            <div class="row center">
             <!--  <a href="index.html"><img src="{{ asset('users/images/logo-dark.png') }}" alt="Canvas Logo"></a> -->
            </div>

            <div class="panel panel-default divcenter noradius noborder" style="max-width: 400px; background-color: rgba(255,255,255,0.93);">
              <div class="panel-body" style="padding: 40px;">
                <form class="nobottommargin" method="POST" action="{{route('register') }}" >
                  <h3>{{ __('Register') }}</h3>
                  @csrf

                  <div class="col_full">
                    <label for="name">{{ __('Name') }}</label>

                    
                    <input type="text" id="name" name="name" value="{{old('name') }}" class="form-control not-dark{{ $errors->has('name') ? ' is-invalid' : '' }}" required autofocus>

                    @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                      <strong>
                      {{ $errors->first('name') }}
                      </strong>
                      </span>
                      @endif
                    </div>
                

                  <div class="col_full">
                    <label for="email">{{ __('E-Mail Address') }}</label>

          
                    <input type="email" id="email" name="email" value="{{old('email') }}" class="form-control not-dark{{ $errors->has('email') ? 'is-invalid' : '' }}" required>

                    @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                      <strong>
                       {{ $errors->first('email') }}
                      </strong>
                      </span>
                      @endif
                    </div>


                  <div class="col_full">
                    <label for="password">{{ __('Password') }}</label>

                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                     @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                      <strong>
                        {{ $errors->first('password') }}
                      </strong>
                      </span>
                      @endif
                    </div>

                  <div class="col_full">
                    <label for="password-confirm">{{ __('Confirm Password') }}</label>

                   <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>

                  <div class="col_full nobottommargin">
                    <button type="submit" class="button button-3d button-black nomargin">{{ __('Register') }}
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection