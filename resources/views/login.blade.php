<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.radixtouch.in/templates/admin/lorax/source/light/pages/examples/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Feb 2020 14:56:58 GMT -->
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<title>Roxa - Bootstrap 4 Admin Dashboard Template</title>
	<!-- Favicon-->
	<link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">

	<!-- Plugins Core Css -->
	<link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet">

	<!-- Custom Css -->
	<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/css/pages/extra_pages.css') }}" rel="stylesheet" />
</head>

<body class="login-page">
	<div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
                    <meta name="csrf-token" content="{{ csrf_token() }}" />
					<span class="login100-form-logo">
						<img alt="" src="{{ asset('assets/images/loading.png') }}">
					</span>
					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>
					<div class="wrap-input100 validate-input" data-validate="Enter username">
						<input class="input100" type="text" id="username" name="username" placeholder="Username">
						<i class="material-icons focus-input1001">person</i>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" id="password" name="pass" placeholder="Password">
						<i class="material-icons focus-input1001">lock</i>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" id="login">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Plugins Js -->

	<script src="{{ asset('assets/js/app.min.js') }}"></script>

	<!-- Extra page Js -->
	<script src="{{ asset('assets/js/pages/examples/pages.js') }}"></script>

    <script>
        jQuery(function($) {
            let login = (data) => {
                $.ajax({
                    url: 'http://localhost:8000/loginapi',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    method: 'POST',
                    data: data,
                    success: function(resp) {
						if (resp.meta.code == 200) {
							localStorage.setItem("role", resp.data.role);
							location.href = 'http://localhost:8000/dashboard'
						} else {
							alert(resp.meta.message)
						}
                    },
                    error: function(e) {
                        console.log(e);
                    }
                })
            }

            login()

            $('#login').on('click', function(e) {
                e.preventDefault()
                let params = {
                    username: $('#username').val(),
                    password: $('#password').val()
                }

                console.log(params);
                login(params)
            })
        })
    </script>

</body>


<!-- Mirrored from www.radixtouch.in/templates/admin/lorax/source/light/pages/examples/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Feb 2020 14:57:00 GMT -->
</html>