

<!DOCTYPE html>
<!-- saved from url=(0024)http://my.sendunlock.us/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Send Unlock Entrar</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="http://my.sendunlock.us/images/icons/favicon.ico">
<!--===============================================================================================-->
	<link media="all" type="text/css" rel="stylesheet" href="./css/bootstrap.min.css">

<!--===============================================================================================-->
	<link media="all" type="text/css" rel="stylesheet" href="./css/font-awesome.min.css">

<!--===============================================================================================-->
	<link media="all" type="text/css" rel="stylesheet" href="./css/animate.css">

<!--===============================================================================================-->	
	<link media="all" type="text/css" rel="stylesheet" href="./css/hamburgers.min.css">

<!--===============================================================================================-->
	<link media="all" type="text/css" rel="stylesheet" href="./css/select2.min.css">

<!--===============================================================================================-->
	<link media="all" type="text/css" rel="stylesheet" href="./css/util.css">

	<link media="all" type="text/css" rel="stylesheet" href="./css/main.css">

	<link media="all" type="text/css" rel="stylesheet" href="./css/style.css">

<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt="">
					<img src="./css/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" role="form" method="POST" action="{{ route('login') }}">
					<span class="login100-form-title">
						Acessar o Painel
					</span>
 @csrf
					<!--<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">-->
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" class="form-control @error('email') is-invalid @enderror"  placeholder="Usuário" required="" value="{{ old('email') }}" name="email">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                        <span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" placeholder="Senha">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="form-group m-t-20 m-b-20" style="text-align: center;">
                                <div class="coder-checkbox">
                                    <input type="checkbox" checked="" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <span class="co-check-ui"></span>
                                    <label>Lembrar</label>

                              
                                </div>
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                            </div>
					
					<div class="container-login100-form-btn">
						
						<input type="submit" class="login100-form-btn" value="Entrar">
					</div>

					<div class="text-center p-t-12">
						<div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
 Developed  for @hollybossdev   with love =) 
</div>

		
					</div>
					

					<!--
					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
					-->
				</form>
			
		</div>
		
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="./css/jquery-3.2.1.min.js"></script>

<!--===============================================================================================-->
	<script src="./css/popper.js"></script>

	<script src="./css/bootstrap.min.js"></script>

<!--===============================================================================================-->
	<script src="./css/select2.min.js"></script>

<!--===============================================================================================-->
	<script src="./css/tilt.jquery.min.js"></script>
	
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="./css/main.js"></script>
	


</body></html>
