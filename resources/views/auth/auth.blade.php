<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Website ini adalah website untuk autentikasi login dan registrasi">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
		integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
	<link rel="stylesheet" href="{{ asset('login/css/auth/login.css') }}">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{ $halaman }}</title>

	{{-- TODO | NOTIFICATIONS --}}
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css">

	<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
</head>

<body>

	<!----------------------- Main Container -------------------------->

	<div class="container d-flex justify-content-center align-items-center min-vh-100">

		<!----------------------- Login Container -------------------------->

		<div class="row border rounded-4 p-3 bg-white shadow box-area">

			<!--------------------------- Left Box ----------------------------->

			{{-- @yield('content_auth') --}}

			<!-------------------- ------ Right Box ---------------------------->

			@yield('content_auth')


		</div>
	</div>

	<!----------------------- Main Container -------------------------->


	{{-- ! BOOTSTRAP --}}
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
		integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
		integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
	</script>

	{{-- ! JQUERY --}}
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
		integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"
		integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.map"></script>

	{{-- ! SWEATALERT2 + TOASTR --}}
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

	{{-- ! TOASTR CODE --}}
	@yield('sw2_toastr')

	@yield('pikaday')

	@yield('notification_register')

	@yield('notification_verify_email')

	{{-- <script>
		$(document).ready(function(){
			// NOT YET LOGIN BUT TRY ACCESS TO DASHBOARD
			@if (Session::has('error_session_admin'))
				Swal.fire({
					icon: 'question',
					title: '<strong>Oops..</strong>',
					html: 'Please login first, you have been <b>detected as not logged in</b>.',
					showConfirmButton: false,
					timer: 4000,
					timerProgressBar: true
				});
			@endif
		});
	</script> --}}
</body>

</html>