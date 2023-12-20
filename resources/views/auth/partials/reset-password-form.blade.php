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

		<form action="{{ route('password.update') }}" method="POST">
			@csrf
			<div class="card">
				<div class="card-header">
					<div class="header-text">
						<figure class="text-center">
							<blockquote class="blockquote">
								<h2><strong>Reset Password</strong></h2>
							</blockquote>
							<figcaption class="blockquote-footer">
								<cite title="Source Title"><a href="{{ url('/') }}">www.socialmedia.co.id</a></cite>
							</figcaption>
						</figure>

						<hr class="border border-primary border-1 opacity-75">

					</div>
				</div>

				<div class="card-body">

					{{-- TODO || MAKE FORM IS NOT EMPTY - LARAVEL REQUEST --}}
					{{-- ! HIDDEN FORM --}}
					{{-- ? TOKEN --}}
					<input type="hidden" name="token" value="{{ request()->token }}">

					{{-- ? EMAIL --}}
					<input type="hidden" name="email" value="{{ request()->email }}">
					{{-- ! HIDDEN FORM --}}


					{{-- ! NEW PASS FORM --}}
					<div class="mb-3">
						<label for="password" class="form-label">New password <strong
								class="text-danger">*</strong></label>
						<input type="password" id="password" name="password" class="form-control"
							aria-describedby="passwordHelpBlock" placeholder="Your new password" required>
						<div id="password" class="form-text">Please enter your new password.</div>

						@error('password')
						<small class="text-danger">
							{{ $message }}
						</small>
						@enderror
					</div>
					{{-- ! NEW PASS FORM --}}


					{{-- ! CONFIRM PASS FORM --}}
					<div class="mb-1">
						<label for="password_confirmation" class="form-label">Confirm password <strong
								class="text-danger">*</strong></label>
						<input type="password" id="password_confirmation" name="password_confirmation"
							class="form-control" aria-describedby="confirm_the_password"
							placeholder="Confirm your password" required">
						<div id="password_confirmation" class="form-text">Please enter your new password again to confirm.</div>

						@error('password')
						<small class="text-danger">
							{{ $message }}
						</small>
						@enderror
					</div>
					{{-- ! CONFIRM PASS FORM --}}

					{{-- ! TOGGLE PASS --}}
					<div class="mb-2 d-flex justify-content-between">
						<div class="form-check">
							<input type="checkbox" class="form-check-input" id="formCheck" onclick="togglePasswordVisibility()">
							<label for="formCheck" class="form-check-label"><small>Show Password</small></label>
						</div>
					</div>
				</div>

				<div class="card-footer">
					{{-- <small>Don`t receive an email ?</small> --}}
					<a href="#">
						<button type="submit" class="btn btn-outline-warning fw-bold w-100">
							Reset Password
						</button>
					</a>
				</div>
			</div>
		</form>

	</div>
</div>

{{-- ! TOGGLE PASSWORD --}}
<script>
	function togglePasswordVisibility() {
		var passwordInput = document.getElementById("password");
        var confirmPasswordInput = document.getElementById("password_confirmation");

		passwordInput.type = passwordInput.type === "password" ? "text" : "password";
        confirmPasswordInput.type = confirmPasswordInput.type === "password" ? "text" : "password";
	}
</script>
@endsection

{{-- ! TOASTR SECTION --}}
@section('sw2_toastr')
<script>
	$(document).ready(function() {
			// PASSWORD NOT MATCH
			@if (Session::has('errors'))
				Swal.fire({
					icon: 'error',
					title: '<strong>Password Change Failed</strong>',
					html: 'Ensure the <b>password field is filled</b>, <b>has a minimum of 8 characters</b>, and <b>matches the field above</b>.',
					showConfirmButton: true,
					confirmButtonColor: '#0174BE',
					focusConfirm: false,
					confirmButtonText: 'Yes, confirm!'
				});
			@endif
		});
			
</script>
@endsection