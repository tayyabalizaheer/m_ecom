@extends('layouts.front')
@section('styles')
    <style>

    </style>
@endsection
@section('content')

<section class="login-signup">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <nav class="comment-log-reg-tabmenu">
            <div class="nav nav-tabs" id="nav-tab1" role="tablist">
                <a class="nav-item nav-link login active" id="nav-log-tab11" data-toggle="tab" href="#nav-log11" role="tab" aria-controls="nav-log" aria-selected="true">
                    {{ $langg->lang234 }}
                </a>
                <a class="nav-item nav-link" id="nav-reg-tab11" data-toggle="tab" href="#nav-reg11" role="tab" aria-controls="nav-reg" aria-selected="false">
                    {{ $langg->lang235 }}
                </a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-log11" role="tabpanel" aria-labelledby="nav-log-tab">
                <div class="login-area">
                  <div class="login-form signin-form">
                        @include('includes.admin.form-login')
                    <form id="vendor-phone-form" class="mloginform" action="{{ route('user.login.submit') }}" method="POST">
                      {{ csrf_field() }}
                      <div class="form-input w-100">
                        <input id="vendor-phone" type="tel" name="tel-phone" placeholder="{{ $langg->lang173 }}"
                                        required="">
                            <input id="vendor-phone-text" type="hidden" name="phone">
                      </div>
                      <div class="form-input">
                        <input type="password" class="Password" name="password" placeholder="{{ $langg->lang174 }}" required="">
                        <i class="icofont-ui-password"></i>
                      </div>
                      <div class="form-forgot-pass">
                        <div class="left">
                          <input type="checkbox" name="remember"  id="mrp1" {{ old('remember') ? 'checked' : '' }}>
                          <label for="mrp1">{{ $langg->lang175 }}</label>
                        </div>
                        <div class="right">
                          <a href="javascript:;" id="show-forgot1">
                            {{ $langg->lang176 }}
                          </a>
                        </div>
                      </div>
                      <input type="hidden" name="modal"  value="1">
                       <input type="hidden" name="vendor"  value="1">
                      <input class="mauthdata" type="hidden"  value="{{ $langg->lang177 }}">
                      <button id="vendor-phone-btn" type="button" class="submit-btn">{{ $langg->lang178 }}</button>
                          @if($socialsetting->f_check == 1 || $socialsetting->g_check == 1)
                          <div class="social-area">
                              <h3 class="title">{{ $langg->lang179 }}</h3>
                              <p class="text">{{ $langg->lang180 }}</p>
                              <ul class="social-links">
                                @if($socialsetting->f_check == 1)
                                <li>
                                  <a href="{{ route('social-provider','facebook') }}">
                                    <i class="fab fa-facebook-f"></i>
                                  </a>
                                </li>
                                @endif
                                @if($socialsetting->g_check == 1)
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
            <div class="tab-pane fade" id="nav-reg11" role="tabpanel" aria-labelledby="nav-reg-tab">
        <div class="login-area signup-area">
            <div class="login-form signup-form">
               @include('includes.admin.form-login')
                <form id="reg-vendor-phone-form" class="mregisterform" action="{{route('user-register-submit')}}" method="POST">
                  {{ csrf_field() }}

                  <div class="row">

                  <div class="col-lg-6">
                    <div class="form-input">
                        <input type="text" class="User Name" name="name" placeholder="{{ $langg->lang182 }}" required="">
                        <i class="icofont-user-alt-5"></i>
                        </div>
                   </div>

                   <div class="col-lg-6">
                        <div class="form-input">
                            <input  type="email" name="email" placeholder="email"
                            required="">
                    </div>

                       </div>
                   <div class="col-lg-6">
                    <div class="form-input">
                        <input id="reg-vendor-phone" type="tel" name="tel-phone" placeholder="{{ $langg->lang173 }}"
                        required="">
                        <input id="reg-vendor-phone-text" type="hidden" name="phone">
                    </div>

                       </div>
                   <div class="col-lg-6">

                    <div class="form-input">
                        <input type="text" class="User Name" name="address" placeholder="{{ $langg->lang185 }}" required="">
                        <i class="icofont-location-pin"></i>
                    </div>
                       </div>

                   <div class="col-lg-6">
                    <div class="form-input">
                        <input type="text" class="User Name" name="shop_name" placeholder="{{ $langg->lang238 }}" required="">
                        <i class="icofont-cart-alt"></i>
                    </div>

                       </div>
                   <div class="col-lg-6">

                    <div class="form-input">
                        <input type="text" class="User Name" name="owner_name" placeholder="{{ $langg->lang239 }}" required="">
                        <i class="icofont-cart"></i>
                    </div>
                       </div>
                   <div class="col-lg-6">

                    <div class="form-input">
                        <input type="text" class="User Name" name="shop_number" placeholder="{{ $langg->lang240 }}" required="">
                        <i class="icofont-shopping-cart"></i>
                    </div>
                       </div>
                   <div class="col-lg-6">

                    <div class="form-input">
                        <input type="text" class="User Name" name="shop_address" placeholder="{{ $langg->lang241 }}" required="">
                        <i class="icofont-opencart"></i>
                    </div>
                       </div>
                   <div class="col-lg-6">

                    <div class="form-input">
                        <input type="text" class="User Name" name="reg_number" placeholder="{{ $langg->lang242 }}" required="">
                        <i class="icofont-ui-cart"></i>
                    </div>
                       </div>
                   <div class="col-lg-6">

                    <div class="form-input">
                        <input type="text" class="User Name" name="shop_message" placeholder="{{ $langg->lang243 }}" required="">
                        <i class="icofont-envelope"></i>
                    </div>
                       </div>

                   <div class="col-lg-6">
                    <div class="form-input">
                        <input type="password" class="Password" name="password" placeholder="{{ $langg->lang186 }}" required="">
                        <i class="icofont-ui-password"></i>
                    </div>

                       </div>
                   <div class="col-lg-6">
                         <div class="form-input">
                        <input type="password" class="Password" name="password_confirmation" placeholder="{{ $langg->lang187 }}" required="">
                        <i class="icofont-ui-password"></i>
                        </div>
                       </div>

                    @if($gs->is_capcha == 1)

                    <div class="col-lg-6">


                    <ul class="captcha-area">
                        <li>
                             <p>
                                 <img class="codeimg1" src="{{asset("assets/images/capcha_code.png")}}" alt=""> <i class="fas fa-sync-alt pointer refresh_code "></i>
                             </p>

                        </li>
                    </ul>


                    </div>


                  @endif
                  <div class="col-lg-6">

                    {{-- <div class="form-input">
                        <input type="text" class="Password" name="codes" placeholder="{{ $langg->lang51 }}" required="">
                        <i class="icofont-refresh"></i>

                    </div> --}}


                    <div class="form-input" id="recaptcha-div">
                        <div id="recaptcha-container"></div>
                    </div>
                  </div>
                  <div class="col-lg-12" id="verify-div" style="display: none">
                    <label for="">Enter Verification code
                        <a class="btn btn-sm btn-primary text-white resend-otp">Resend</a>
                    </label>
                    <div class="form-input">
                        <input type="text" id="verificationCode" class="form-control" placeholder="Enter verification code">
                        <i class="icofont-verification-check"></i>
                    </div>
                    <div class="text-success" id="successRegsiter" style="display: none;"></div>
                  </div>
                    <input type="hidden" name="vendor"  value="1">
                    <input class="mprocessdata" type="hidden"  value="{{ $langg->lang188 }}">
                    <button id="reg-vendor-phone-btn" type="button" class="submit-btn">{{ $langg->lang189 }}</button>
                    <button id="verify-vendor-phone-btn" type="button" class="submit-btn" style="display:none">Verify</button>

                       </div>




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
    var VendorinputLogin = document.querySelector("#vendor-phone");
        var itilogin = window.intlTelInput(VendorinputLogin,{
            separateDialCode : true
        });
        $('#vendor-phone').on('keyup change',function () {
            $('#vendor-phone-text').val(itilogin.getNumber());
        });
        $('#vendor-phone-btn').on('click tap',function () {
            console.log(itilogin.getNumber());
            $('#vendor-phone-text').val(itilogin.getNumber());
            $('#vendor-phone-form').submit();
        })
        var VendorReginputLogin = document.querySelector("#reg-vendor-phone");
        var iti = window.intlTelInput(VendorReginputLogin,{
            separateDialCode : true
        });

        $('#reg-vendor-phone').on('keyup change',function () {
            $('#reg-vendor-phone-text').val(iti.getNumber());
            $('#verify-div').hide();
            $('#vefiry').hide();
            $('#reg-vendor-loginform-btn').show();
            $('#recaptcha-div').show();

        });

        $('#reg-vendor-phone-btn').on('click tap',function () {
        $('#reg-vendor-phone-text').val(iti.getNumber());
        if(registerValidator()){
            phoneSendAuth();
        }
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




    $('#verify-vendor-phone-btn').on('click tap',function () {
        codeverify();
    });
    $('.resend-otp').on('click tap',function () {
        var number = iti.getNumber();
        firebase.auth().signInWithPhoneNumber(number,window.recaptchaVerifier);
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
            $('#verify-vendor-phone-btn').show();
            $('#reg-vendor-phone-btn').hide();
            // $('#recaptcha-div').hide();
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
            $('#reg-vendor-phone-form').submit();
            $("#successRegsiter").text("you are register Successfully.");
            $("#successRegsiter").show();

        }).catch(function (error) {
           swal('Error',error.message,'error')
        });
    }

});

</script>
@endsection
