<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>

	{{-- TODO | NOTIFICATIONS --}}
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css">

	<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

	{{-- TODO | SEARCHBAR SELECT2 --}}
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

	<style>
		/* CSS TOASTR */
		.colored-toast.swal2-icon-success {
			background-color: #609966 !important;
		}

		.colored-toast.swal2-icon-warning {
			background-color: #ffac2ffd !important;
		}

		.colored-toast .swal2-title {
			color: white;
		}

		.colored-toast .swal2-close {
			color: white;
		}

		.colored-toast .swal2-html-container {
			color: white;
		}
	</style>
</head>

<body>
	<h1>ini dashboard</h1>

	<h2>Haloo {{ Auth::user()->name }}</h2>

	<div>
		<a href="session_users/logout">Logout</a>
	</div>



	{{-- ! JQUERY --}}
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
		integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"
		integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.map"></script>

	{{-- TODO | SWEATALERT, TOASTR + SEARCH BAR --}}
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

	@yield('sweatalert_2')

	<script>
		$(document).ready(function() {
			@if (Session::has('success'))
				(async function() {
					const Toast = Swal.mixin({
						toast: true,
						position: 'top-right',
						iconColor: 'white',
						customClass: {
							popup: 'colored-toast'
						},
						showConfirmButton: false,
						timer: 4000,
						timerProgressBar: true
					});

					await Toast.fire({
						icon: 'success',
						title: "{{ Session::get('success') }}"
					});
				})();
			@endif
		});
	</script>
</body>

</html>