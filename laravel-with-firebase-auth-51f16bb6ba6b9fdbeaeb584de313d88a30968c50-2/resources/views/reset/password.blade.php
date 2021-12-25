
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Şifre Sıfırlama</title>
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
					<span class="login100-form-avatar">
						<img src="{{asset("images/kilit.png")}}" alt="AVATAR">
					</span>
<br/>
<br/>
<br/>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
        
          <div class="card-body" >

            @if(Session::has('message'))
              <div class="alert alert-info alert-dismissible fade show">
                {{ Session::get('message') }}
                <button type="button" class="close" data-dismiss="alert">&times;</button>
              </div>
            @endif

            @if(Session::has('error'))
              <div class="alert alert-danger alert-dismissible fade show">
                {{ Session::get('error') }}
                <button type="button" class="close" data-dismiss="alert">&times;</button>
              </div>
            @endif

            @if ($errors->any())
              @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible fade show">
                  {{ $error }}
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
              @endforeach
            @endif

            {!! Form::open(['method'=>'POST', 'action'=> 'App\Http\Controllers\Auth\ResetController@store']) !!}

            <div class="form-group">
              {!! Form::label('email', 'Email:') !!}
              {!! Form::email('email', null, ['class'=>'form-control'])!!}
            </div>

<br/>
            <div class="form-group">
              {!! Form::submit('Şifreyi Sıfırla', ['class'=>'login100-form-btn']) !!}
            </div>

            {!! Form::close() !!}

          </div>

        </div>
      </div>
    </div>
  </div>
    </div>
      </div>
        </div>
      </body>
      </html>
