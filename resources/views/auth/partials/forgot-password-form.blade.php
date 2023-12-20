{{--
<!doctype html>
<html lang="en-US">

<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>{{ $halaman }}</title>
	<meta name="description" content="Reset Password Email Template.">
	<style type="text/css">
		a:hover {
			text-decoration: underline !important;
		}
	</style>
</head>

<body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #f2f3f8;" leftmargin="0">
	<!--100% body table-->
	<table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8"
		style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: 'Open Sans', sans-serif;">
		<tr>
			<td>
				<table style="background-color: #f2f3f8; max-width:670px;  margin:0 auto;" width="100%" border="0"
					align="center" cellpadding="0" cellspacing="0">
					<tr>
						<td style="height:80px;">&nbsp;</td>
					</tr>
					<tr>
						<td style="text-align:center;">
							<a href="https://rakeshmandal.com" title="logo" target="_blank">
								<img width="60" src="https://i.ibb.co/hL4XZp2/android-chrome-192x192.png" title="logo"
									alt="logo">
							</a>
						</td>
					</tr>
					<tr>
						<td style="height:20px;">&nbsp;</td>
					</tr>
					<tr>
						<td>
							<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0"
								style="max-width:670px;background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
								<tr>
									<td style="height:40px;">&nbsp;</td>
								</tr>
								<tr>
									<td style="padding:0 35px;">
										<h1
											style="color:#1e1e2d; font-weight:500; margin:0;font-size:32px;font-family:'Rubik',sans-serif;">
											You have
											requested to reset your password</h1>
										<span
											style="display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; width:100px;"></span>
										<p style="color:#455056; font-size:15px;line-height:24px; margin:0;">
											We cannot simply send you your old password. A unique link to reset your
											password has been generated for you. To reset your password, click the
											following link and follow the instructions.
										</p>
										<a href="javascript:void(0);"
											style="background:#20e277;text-decoration:none !important; font-weight:500; margin-top:35px; color:#fff;text-transform:uppercase; font-size:14px;padding:10px 24px;display:inline-block;border-radius:50px;">Reset
											Password</a>
									</td>
								</tr>
								<tr>
									<td style="height:40px;">&nbsp;</td>
								</tr>
							</table>
						</td>
					<tr>
						<td style="height:20px;">&nbsp;</td>
					</tr>
					<tr>
						<td style="text-align:center;">
							<p
								style="font-size:14px; color:rgba(69, 80, 86, 0.7411764705882353); line-height:18px; margin:0 0 0;">
								&copy; <strong>www.rakeshmandal.com</strong></p>
						</td>
					</tr>
					<tr>
						<td style="height:80px;">&nbsp;</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	<!--/100% body table-->
</body>

</html> --}}

@extends('auth.auth')

@section('content_auth')
<style>
	.card {
		font-size: 1rem;
		border: none;
	}

	.card .card-header {
		border: none;
		background: transparent;
	}

	.card .card-body {
		border: none;
		background: transparent;
	}

	.card .card-body p {
		text-align: center;
		margin-top: 0;
	}

	.card .card-footer {
		border: none;
		background: transparent;
	}

	.card .card-footer .btn {
		color: #000;
	}

	.card .card-footer small {
		color: #000;
		text-decoration: none !important;
	}

	small,
	.small {
		font-size: 90%;
		font-weight: 400;
	}

	.fw-bold {
		font-weight: 560 !important;
	}

	@media only screen and (max-width: 768px) {
		.box-area {
			margin: 0 10px;
		}
	}
</style>

<div class="col-lg right-box">

	<div class="row align-items-center">

		<form action="{{ route('password.email') }}" method="POST">
			@csrf
			<div class="card">
				<div class="card-header">
					<div class="header-text">
						<figure class="text-center">
							<blockquote class="blockquote">
								<h2><strong>Forgot Password</strong></h2>
							</blockquote>
							<figcaption class="blockquote-footer">
								<cite title="Source Title"><a href="{{ url('/') }}">www.socialmedia.co.id</a></cite>
							</figcaption>
						</figure>

						<hr class="border border-primary border-1 opacity-75">

					</div>
				</div>
				<div class="card-body">
					<div class="mb-3">
						<label for="email" class="form-label">
							Email address <strong class="text-danger">*</strong>
						</label>

						<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
							placeholder="Email address" value="{{ Session::get('email') }}">
						<div id="emailHelp" class="form-text">We are unable to retrieve your old password. Please create a new password by entering your email address and following the provided link for instructions.</div>
						@error('email')
						<small class="text-danger">
							{{ $message }}
						</small>
						@enderror
					</div>
				</div>

				<div class="card-footer">
					{{-- <small>Don`t receive an email ?</small> --}}
					<a href="#">
						<button type="submit" class="btn btn-outline-warning fw-bold w-100">
							Send Reset Password
						</button>
					</a>
				</div>
			</div>
		</form>

	</div>
</div>

@endsection

{{-- ! TOASTR SECTION --}}
@section('sw2_toastr')
<script>
	$(document).ready(function() {
			// SUCCESS
			@if (Session::has('status'))
				Swal.fire({
					icon: 'success',
					title: '<strong>Password Reset Link Success</strong>',
					html: 'A notification has been sent! Please <b>check your email inbox</b> for a <b>link to reset your password</b>.',
					showConfirmButton: true,
					confirmButtonColor: '#0174BE',
					focusConfirm: false,
					confirmButtonText: 'Yes, confirm!'
				});
			@endif

			// PASSWORD NOT MATCH
			@if (Session::has('errors'))
				Swal.fire({
					icon: 'error',
					title: '<strong>Password Reset Link Failed</strong>',
					html: 'We couldn`t send the password reset email. Please <b>make sure the email is filled in correctly</b>.',
					showConfirmButton: true,
					confirmButtonColor: '#0174BE',
					focusConfirm: false,
					confirmButtonText: 'Yes, confirm!'
				});
			@endif
		});
			
</script>
@endsection