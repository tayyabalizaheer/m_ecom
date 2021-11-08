@extends('layouts.front')
@section('styles')
    <style>
        .iti{
            width: 100%
        }
    </style>
@endsection
@section('content')

<section class="login-signup">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <nav class="comment-log-reg-tabmenu">
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link login active" id="nav-log-tab" data-toggle="tab" href="#nav-log" role="tab"
              aria-controls="nav-log" aria-selected="true">
              {{ $langg->lang197 }}
            </a>
            <a class="nav-item nav-link" id="nav-reg-tab" data-toggle="tab" href="#nav-reg" role="tab"
              aria-controls="nav-reg" aria-selected="false">
              {{ $langg->lang198 }}
            </a>
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-log" role="tabpanel" aria-labelledby="nav-log-tab">
            <div class="login-area">
              <div class="header-area">
                <h4 class="title">{{ $langg->lang172 }}</h4>
              </div>
              <div class="login-form signin-form">
                @include('includes.admin.form-login')
                <form id="mloginform" class="mloginform" action="{{ route('user.login.submit') }}" method="POST">
                  {{ csrf_field() }}
                  <div class="form-input">
                    <input type="tel" id="login-phone" class="User Name" name="tel-phone" placeholder="{{ $langg->lang184 }}" required="">
                    <input type="hidden" name="phone" id="login-phone-text">
                  </div>
                  <div class="form-input">
                    <input type="password" class="Password" name="password" placeholder="{{ $langg->lang174 }}"
                      required="">
                    <i class="icofont-ui-password"></i>
                  </div>
                  <div class="form-forgot-pass">
                    <div class="left">
                      <input type="checkbox" name="remember" id="mrp" {{ old('remember') ? 'checked' : '' }}>
                      <label for="mrp">{{ $langg->lang175 }}</label>
                    </div>
                    <div class="right">
                      <a href="{{ route('user-forgot') }}">
                        {{ $langg->lang176 }}
                      </a>
                    </div>
                  </div>
                  <input type="hidden" name="modal" value="1">
                  <input class="mauthdata" type="hidden" value="{{ $langg->lang177 }}">
                  <button id="mloginform-button" type="button" class="submit-btn">{{ $langg->lang178 }}</button>
                  @if(App\Models\Socialsetting::find(1)->f_check == 1 || App\Models\Socialsetting::find(1)->g_check ==
                  1)
                  <div class="social-area">
                    <h3 class="title">{{ $langg->lang179 }}</h3>
                    <p class="text">{{ $langg->lang180 }}</p>
                    <ul class="social-links">
                      @if(App\Models\Socialsetting::find(1)->f_check == 1)
                      <li>
                        <a href="{{ route('social-provider','facebook') }}">
                          <i class="fab fa-facebook-f"></i>
                        </a>
                      </li>
                      @endif
                      @if(App\Models\Socialsetting::find(1)->g_check == 1)
                      <li>
                        <a href="{{ route('social-provider','google') }}">
                          <i class="fab fa-google-plus-g"></i>
                        </a>
                      </li>
                      @endif
                    </ul>
                  </div>
                  @endif
                </form>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="nav-reg" role="tabpanel" aria-labelledby="nav-reg-tab">
            <div class="login-area signup-area">
              <div class="header-area">
                <h4 class="title">{{ $langg->lang181 }}</h4>
              </div>
              <div class="login-form signup-form">
                @include('includes.admin.form-login')

                <form id="register-form" class="mregisterform" action="{{route('user-register-submit')}}" method="POST">
                  {{ csrf_field() }}
                <div id="step-1">

                  <div class="form-input">
                    <input type="text" class="User Name" name="name" placeholder="{{ $langg->lang182 }}" required="">
                    <i class="icofont-user-alt-5"></i>
                  </div>

                  <div class="form-input">
                    <input type="email" class="User Name" name="email" placeholder="{{ $langg->lang183 }}" required="">
                    <i class="icofont-email"></i>
                  </div>

                  <div class="form-input">
                    <input type="tel" id="sign-phone" class="User Name" name="tel-phone" placeholder="{{ $langg->lang184 }}" required="">
                    <input type="hidden" name="phone" id="phone">
                  </div>

                  <div class="form-input">
                    <input type="text" class="User Name" name="address" placeholder="{{ $langg->lang185 }}" required="">
                    <i class="icofont-location-pin"></i>
                  </div>

                  <div class="form-input">
                    <input type="password" class="Password" name="password" placeholder="{{ $langg->lang186 }}"
                      required="">
                    <i class="icofont-ui-password"></i>
                  </div>

                  <div class="form-input">
                    <input type="password" class="Password" name="password_confirmation"
                      placeholder="{{ $langg->lang187 }}" required="">
                    <i class="icofont-ui-password"></i>
                  </div>

                  @if($gs->is_capcha == 1)

                  <ul class="captcha-area">
                    <li>
                      <p><img class="codeimg1" src="{{asset("assets/images/capcha_code.png")}}" alt=""> <i
                          class="fas fa-sync-alt pointer refresh_code "></i></p>
                    </li>
                  </ul>

                  <div class="form-input">
                    <input type="text" class="Password" name="codes" placeholder="{{ $langg->lang51 }}" required="">
                    <i class="icofont-refresh"></i>
                  </div>

                  @endif
                  <div class="form-input" id="recaptcha-div">
                    <div id="recaptcha-container"></div>
                  </div>
                </div>

                  <div id="verify-div" style="display: none">
                    <label for="">Enter Verification code</label>
                    <div class="form-input">
                        <input type="text" id="verificationCode" class="form-control" placeholder="Enter verification code">
                        <i class="icofont-verification-check"></i>
                    </div>
                    <div class="text-success" id="successRegsiter" style="display: none;"></div>
                  </div>
                  <input class="mprocessdata" type="hidden" value="{{ $langg->lang188 }}">

                  <button id="sendcode" type="button" class="submit-btn">{{ $langg->lang189 }}</button>
                  <button id="vefiry" type="button" class="submit-btn" style="display: none">Verify</button>

                </form>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>

@endsection
@section('js')
<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>

<script>
$(function() {
    var inputLogin = document.querySelector("#login-phone");
    var itiLogin = window.intlTelInput(inputLogin,{
        separateDialCode : true
    });

    $('#login-phone').on('keyup change',function () {
        $('#login-phone-text').val(itiLogin.getNumber());

    });
    $('#mloginform-button').on('click tap',function () {
        $('#login-phone-text').val(itiLogin.getNumber());
        $(this).submit();
    });


    var input = document.querySelector("#sign-phone");
    var iti = window.intlTelInput(input,{
        separateDialCode : true
    });


  var firebaseConfig = {
    apiKey: "AIzaSyDm1Dly0HI5INvOReXPRRcbFpfvjxsshkQ",
    authDomain: "ecom-60221.firebaseapp.com",
    projectId: "ecom-60221",
    storageBucket: "ecom-60221.appspot.com",
    messagingSenderId: "1016236535235",
    appId: "1:1016236535235:web:2c27a79de2c4c91618a176",
    measurementId: "G-J97JWGMLQ6"
  };

  firebase.initializeApp(firebaseConfig);


    window.onload=function () {
      render();
    };

    function render() {
        window.recaptchaVerifier=new firebase.auth.RecaptchaVerifier('recaptcha-container');
        recaptchaVerifier.render();
    }

    $('#sendcode').on('click tap',function () {
        $('#phone').val(iti.getNumber());

        phoneSendAuth();
    });

    $('#sign-phone').on('keyup change',function () {
        $('#phone').val(iti.getNumber());
        $('#verify-div').hide();
        $('#vefiry').hide();
        $('#sendcode').show();
        $('#recaptcha-div').show();
    });
    $('#vefiry').on('click tap',function () {
        codeverify();
    });

    function phoneSendAuth() {

        var number = iti.getNumber();
        console.log(number);
        firebase.auth().signInWithPhoneNumber(number,window.recaptchaVerifier).then(function (confirmationResult) {

            window.confirmationResult=confirmationResult;
            coderesult=confirmationResult;
            console.log(coderesult);

            $("#sentSuccess").text("Message Sent Successfully.");
            $("#sentSuccess").show();
            $('#verify-div').show();
            $('#vefiry').show();
            $('#sendcode').hide();
            $('#recaptcha-div').hide();
        }).catch(function (error) {
            swal('Error',error.message,'error')
        });

    }

    function codeverify() {

        var code = $("#verificationCode").val();
        console.log(code);
        coderesult.confirm(code).then(function (result) {
            var user=result.user;
            console.log(user);
            $('#register-form').submit();
            $("#successRegsiter").text("you are register Successfully.");
            $("#successRegsiter").show();

        }).catch(function (error) {
           swal('Error',error.message,'error')
        });
    }

});

</script>
@endsection
