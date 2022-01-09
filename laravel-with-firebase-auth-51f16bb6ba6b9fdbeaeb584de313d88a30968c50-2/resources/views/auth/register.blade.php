
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Kayıt Ol</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{URL::asset('/images/ogrenci.jpg')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('/css/btmin.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('/css/font.css')}}s">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('/css/main.css')}}">

<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100 p-t-85 p-b-20">

          @csrf
          <span class="login100-form-title p-b-70">
         Kullanıcı Kayıt
          </span>
          <span class="login100-form-avatar">
            <img src="images/ogrenci.jpg" alt="AVATAR">
          </span>
          <br/>
          <br/>

        @if(Session::has('error'))
               <div class="alert alert-danger alert-dismissible fade show">
                 {{ Session::get('error') }}
                 <button type="button" class="close" data-dismiss="alert">&times;</button>
               </div>
             @endif

             <form method="POST"  class="login100-form validate-form" action="{{ route('register') }}">
               @csrf

               <div class="form-group row">
                 <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                 <div class="col-md-6">
                   <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                     @error('name')
                       <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                       </span>
                     @enderror
                   </div>
                 </div>




                 <div class="form-group row">
                   <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                   <div class="col-md-6">
                     <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                       @error('email')
                         <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                         </span>
                       @enderror
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                     <div class="col-md-6">
                       <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                         @error('password')
                           <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                           </span>
                         @enderror
                       </div>
                     </div>

                     <div class="form-group row">
                       <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                       <div class="col-md-6">
                         <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                       </div>
                     </div>
	<div class="container-login100-form-btn">
                         <button type="submit" class="login100-form-btn">
                           {{ __('Kayıt Ol') }}
                         </button>
                       </div>

                   </form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

      <script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-app.js"></script>
      <script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-auth.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
      <script>
      // Initialize Firebase
      var firebaseConfig = {
        apiKey: "AIzaSyCoROKp7nbcXqPP0YtA4fO3sPiVYVyi9pI",
        authDomain: "laravel-auth-9a60c.firebaseapp.com",
        projectId: "laravel-auth-9a60c",
        storageBucket: "laravel-auth-9a60c.appspot.com",
        messagingSenderId: "969104073456",
        appId: "1:969104073456:web:5a843163dbf96cb9fd1835"
      };
      firebase.initializeApp(config);
      var facebookProvider = new firebase.auth.FacebookAuthProvider();
      var googleProvider = new firebase.auth.GoogleAuthProvider();
      var facebookCallbackLink = '/login/facebook/callback';
      var googleCallbackLink = '/login/google/callback';
      async function socialSignin(provider) {
        var socialProvider = null;
        if (provider == "facebook") {
          socialProvider = facebookProvider;
          document.getElementById('social-login-form').action = facebookCallbackLink;
        } else if (provider == "google") {
          socialProvider = googleProvider;
          document.getElementById('social-login-form').action = googleCallbackLink;
        } else {
          return;
        }
        firebase.auth().signInWithPopup(socialProvider).then(function(result) {
          result.user.getIdToken().then(function(result) {
            document.getElementById('social-login-tokenId').value = result;
            document.getElementById('social-login-form').submit();
          });
        }).catch(function(error) {
          // do error handling
          console.log(error);
        });
      }
      </script>

</body>
  </html>
