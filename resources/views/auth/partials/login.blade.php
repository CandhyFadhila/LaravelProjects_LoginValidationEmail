@extends('auth.auth')

@section('content_auth')
<style>
	/* CSS TOASTR */
	.colored-toast.swal2-icon-success {
		background-color: #0174BE !important;
	}

	.colored-toast .swal2-title {
		color: white;
	}
</style>

<div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
	style="background: #0174BE;">

	<div class="featured-image">

		<svg class="animated" id="freepik_stories-login" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500"
			version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="width: 330px;" alt="login akun">
			<style>
				svg#freepik_stories-login:not(.animated) .animable {
					opacity: 0;
				}

				svg#freepik_stories-login.animated #el5nl1pod29v8 {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0s;
				}

				svg#freepik_stories-login.animated #el9pnh0hbx3d {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.35s;
					opacity: 0
				}

				svg#freepik_stories-login.animated #freepik--background-simple--inject-125 {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0s;
				}

				svg#freepik_stories-login.animated #freepik--Floor--inject-125 {
					animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomIn;
					animation-delay: 0s;
				}

				svg#freepik_stories-login.animated #freepik--Plants--inject-125 {
					animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideRight, 3s Infinite linear wind;
					animation-delay: 0s, 1s;
				}

				svg#freepik_stories-login.animated #ela06kkxx2fvv {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideDown;
					animation-delay: 0s;
				}

				svg#freepik_stories-login.animated #el704lecgeqgk {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideDown;
					animation-delay: 0.03888888888888889s;
					opacity: 0
				}

				svg#freepik_stories-login.animated #el9wyktf08mhh {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideDown;
					animation-delay: 0.07777777777777778s;
					opacity: 0
				}

				svg#freepik_stories-login.animated #elufkk5wv351h {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideDown;
					animation-delay: 0.11666666666666667s;
					opacity: 0
				}

				svg#freepik_stories-login.animated #el4hnyetn8l2h {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideDown;
					animation-delay: 0.15555555555555556s;
					opacity: 0
				}

				svg#freepik_stories-login.animated #elvy9clgd5z2 {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideDown;
					animation-delay: 0.19444444444444445s;
					opacity: 0
				}

				svg#freepik_stories-login.animated #el95vljfvyrhg {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideDown;
					animation-delay: 0.23333333333333334s;
					opacity: 0
				}

				svg#freepik_stories-login.animated #elc2jvl9okqku {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideDown;
					animation-delay: 0.27222222222222225s;
					opacity: 0
				}

				svg#freepik_stories-login.animated #elbrr22csz4jw {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideDown;
					animation-delay: 0.3111111111111111s;
					opacity: 0
				}

				svg#freepik_stories-login.animated #elsufwvnfejat {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideDown;
					animation-delay: 0.35s;
					opacity: 0
				}

				svg#freepik_stories-login.animated #elyqbkif8z96j {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideDown;
					animation-delay: 0.3888888888888889s;
					opacity: 0
				}

				svg#freepik_stories-login.animated #elxh6jeyawl8r {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideDown;
					animation-delay: 0.4277777777777778s;
					opacity: 0
				}

				svg#freepik_stories-login.animated #el445n63k8ktb {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideDown;
					animation-delay: 0.4666666666666667s;
					opacity: 0
				}

				svg#freepik_stories-login.animated #elemdwy7mgwa5 {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideDown;
					animation-delay: 0.5055555555555555s;
					opacity: 0
				}

				svg#freepik_stories-login.animated #elkcwfoo99l4 {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideDown;
					animation-delay: 0.5444444444444445s;
					opacity: 0
				}

				svg#freepik_stories-login.animated #elwlxweak8gcd {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideDown;
					animation-delay: 0.5833333333333334s;
					opacity: 0
				}

				svg#freepik_stories-login.animated #eljpvp8yghvr {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideDown;
					animation-delay: 0.6222222222222222s;
					opacity: 0
				}

				svg#freepik_stories-login.animated #elijesjz0e7aq {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideDown;
					animation-delay: 0.6611111111111111s;
					opacity: 0
				}

				svg#freepik_stories-login.animated #freepik--Device--inject-125 {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideDown, 3s Infinite linear floating;
					animation-delay: 0s, 0.7s;
				}

				svg#freepik_stories-login.animated #freepik--Character--inject-125 {
					animation: 0.8s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideLeft;
					animation-delay: 0.0s;
				}

				@keyframes zoomOut {
					0% {
						opacity: 0;
						transform: scale(1.5);
					}

					100% {
						opacity: 1;
						transform: scale(1);
					}
				}

				@keyframes zoomIn {
					0% {
						opacity: 0;
						transform: scale(0.5);
					}

					100% {
						opacity: 1;
						transform: scale(1);
					}
				}

				@keyframes slideRight {
					0% {
						opacity: 0;
						transform: translateX(30px);
					}

					100% {
						opacity: 1;
						transform: translateX(0);
					}
				}

				@keyframes wind {
					0% {
						transform: rotate(0deg);
					}

					25% {
						transform: rotate(1deg);
					}

					75% {
						transform: rotate(-1deg);
					}
				}

				@keyframes slideDown {
					0% {
						opacity: 0;
						transform: translateY(-30px);
					}

					100% {
						opacity: 1;
						transform: translateY(0);
					}
				}

				@keyframes floating {
					0% {
						opacity: 1;
						transform: translateY(0px);
					}

					50% {
						transform: translateY(-10px);
					}

					100% {
						opacity: 1;
						transform: translateY(0px);
					}
				}

				@keyframes slideLeft {
					0% {
						opacity: 0;
						transform: translateX(-30px);
					}

					100% {
						opacity: 1;
						transform: translateX(0);
					}
				}
			</style>
			<g id="freepik--background-simple--inject-125" class="animable"
				style="transform-origin: 222.08px 234.005px;">
				<path
					d="M356.39,130.86s-40.26-44.11-104-42S134.28,133.71,89.33,167.15s-57,85.38-30.87,125.93,67.77,23.48,120.78,49.8,63.08,41.27,122.13,34.87,104-71.86,97.3-141.59S356.39,130.86,356.39,130.86Z"
					style="fill: rgb(255, 196, 54); transform-origin: 222.08px 234.005px;" id="el5nl1pod29v8"
					class="animable"></path>
				<g id="el9pnh0hbx3d">
					<path
						d="M356.39,130.86s-40.26-44.11-104-42S134.28,133.71,89.33,167.15s-57,85.38-30.87,125.93,67.77,23.48,120.78,49.8,63.08,41.27,122.13,34.87,104-71.86,97.3-141.59S356.39,130.86,356.39,130.86Z"
						style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 222.08px 234.005px;"
						class="animable"></path>
				</g>
			</g>
			<g id="freepik--Floor--inject-125" class="animable" style="transform-origin: 257.62px 392.44px;">
				<ellipse cx="257.62" cy="392.44" rx="198.52" ry="10.83"
					style="fill: rgb(255, 196, 54); transform-origin: 257.62px 392.44px;" id="elirvvxyc4v9"
					class="animable"></ellipse>
				<g id="el5qaiivkqofb">
					<ellipse cx="257.62" cy="392.44" rx="198.52" ry="10.83"
						style="fill: rgb(255, 255, 255); opacity: 0.3; transform-origin: 257.62px 392.44px;"
						class="animable"></ellipse>
				</g>
			</g>
			<g id="freepik--Plants--inject-125" class="animable" style="transform-origin: 371.97px 295.449px;">
				<path
					d="M374.94,229.2c-.06,0,.69-3.73.77-4,.86-2.66,4.1-7.3,7.23-7.29a3.71,3.71,0,0,1,3.57,4.21c-.23,2.21-2.21,4.08-4,5.17C380.41,228.6,374.94,229.2,374.94,229.2Z"
					style="fill: rgb(255, 196, 54); transform-origin: 380.74px 223.555px;" id="elhd16snj08d"
					class="animable"></path>
				<path
					d="M368.87,204.09c2.95,1.06,4.42,6.52,4.32,9.32,0,.24-.56,4-.61,4l-.06,0c.23.86.48,1.79.73,2.8.44,1.88.92,4,1.29,6.36a65.81,65.81,0,0,1,.84,7.65,48.31,48.31,0,0,1-.29,8.6.3.3,0,0,0,0,.1c.39-.83,1.54-3.13,1.65-3.3,1.54-2.34,5.88-6,8.91-5.12a3.71,3.71,0,0,1,2.32,5c-.8,2.06-3.2,3.35-5.21,3.92-2.27.65-7.33-.12-7.73-.18a64.94,64.94,0,0,1-1.86,8.56q-.7,2.46-1.52,4.92c.35-.71.68-1.34.73-1.43,1.54-2.34,5.88-6,8.91-5.13a3.7,3.7,0,0,1,2.32,5c-.8,2.07-3.2,3.35-5.21,3.93s-6.37,0-7.51-.15c-.21.62-.42,1.25-.64,1.87-1,3-2.08,6-3,8.94-.33,1-.62,2.08-.91,3.12.32-.63.59-1.16.64-1.23,1.53-2.34,5.88-6,8.9-5.13a3.72,3.72,0,0,1,2.33,5c-.8,2.06-3.21,3.35-5.22,3.92s-5.94.07-7.3-.12c-.27,1.08-.53,2.15-.74,3.2-.13.72-.3,1.41-.39,2.14s-.2,1.44-.3,2.14c-.14,1.37-.3,2.79-.4,4.13-.08.93-.14,1.82-.2,2.71.31-1,1-3.06,1.05-3.23a14.5,14.5,0,0,1,4.8-5.46,3.85,3.85,0,0,1,.41-.71,3.71,3.71,0,0,1,5.45-.86c2.38,2,1.78,7.68.69,10.26-.06.15-.95,1.72-1.52,2.7.43-.52.83-1,1.28-1.58.87-1.06,1.77-2.1,2.73-3.22l1.47-1.59c.48-.55,1.06-1.06,1.59-1.59,1.25-1.21,2.58-2.38,3.95-3.53-.94-.76-4.21-3.53-5.15-5.41s-1.61-4.51-.63-6.49a3.71,3.71,0,0,1,5.27-1.67c2.65,1.66,2.92,7.31,2.23,10,0,.17-.76,2.06-1.17,3.09.83-.68,1.65-1.37,2.51-2,2.48-1.92,5.05-3.78,7.6-5.65l2.33-1.73c-.33-.27-4.29-3.47-5.35-5.57-.93-1.87-1.61-4.51-.63-6.5a3.72,3.72,0,0,1,5.27-1.67c2.65,1.67,2.92,7.32,2.23,10-.05.21-1.08,2.93-1.38,3.61,1.71-1.28,3.4-2.56,5-3.89a64.73,64.73,0,0,0,6.2-5.78c-.15-.12-4.3-3.44-5.38-5.6-.94-1.87-1.61-4.51-.63-6.49a3.7,3.7,0,0,1,5.26-1.67c2.66,1.66,2.93,7.31,2.24,10-.05.17-.83,2.25-1.23,3.23l.16.09a47.88,47.88,0,0,0,5.09-6.84c.83-1.32,1.56-2.63,2.24-3.93-.84-.54-4.63-3-5.82-4.88s-2.09-4.3-1.34-6.38a3.71,3.71,0,0,1,5-2.24c2.83,1.36,3.71,6.95,3.32,9.72,0,.15-.4,1.66-.69,2.76.29-.59.61-1.19.88-1.76,1-2.14,1.85-4.16,2.55-6,.4-1,.73-2,1-2.83-.55-1-2.69-4.85-2.9-7s.13-4.79,1.76-6.29a3.71,3.71,0,0,1,5.51.35c1.88,2.51.09,7.87-1.53,10.16-.14.19-2.69,3-2.72,3l0-.06c-.28.85-.58,1.76-.94,2.74-.66,1.81-1.44,3.86-2.42,6a66.87,66.87,0,0,1-3.53,6.84,48.53,48.53,0,0,1-5,7l-.07.08c.78-.49,3-1.76,3.19-1.84,2.58-1.1,8.2-1.73,10.26.64a3.72,3.72,0,0,1-.82,5.46c-1.81,1.28-4.53,1-6.52.39-2.25-.71-6-4.14-6.35-4.41a64.86,64.86,0,0,1-6.27,6.11c-1.3,1.12-2.63,2.2-4,3.26.69-.39,1.31-.74,1.4-.78,2.57-1.1,8.19-1.73,10.25.64a3.71,3.71,0,0,1-.82,5.46c-1.8,1.28-4.52,1-6.51.39s-5.32-3.49-6.18-4.26l-1.57,1.21c-2.52,1.93-5,3.84-7.45,5.79-.85.69-1.66,1.4-2.48,2.1.62-.35,1.13-.64,1.22-.67,2.57-1.11,8.19-1.73,10.25.63a3.7,3.7,0,0,1-.82,5.46c-1.81,1.28-4.52,1-6.51.4s-5-3.22-6-4.13c-.81.75-1.63,1.49-2.38,2.26-.51.53-1,1-1.5,1.57s-1,1.08-1.44,1.62c-.87,1.06-1.78,2.16-2.61,3.22-.58.73-1.12,1.44-1.66,2.15.83-.69,2.51-2,2.66-2.11,2.37-1.48,7.83-2.95,10.23-.93a3.72,3.72,0,0,1,0,5.53c-1.59,1.53-4.31,1.7-6.37,1.38-2.28-.36-6.4-3-6.91-3.38-.9,1.18-1.76,2.34-2.56,3.45-2.77,3.83-4.93,7.12-6.41,9.45l-.15.23-1.92-.93c.1-.15.2-.29.3-.45,1.55-2.32,3.81-5.6,6.69-9.41.91-1.2,1.9-2.47,2.93-3.77a40,40,0,0,1-3-3.68c-2.21.86-6.8.9-7.39.9-.09,1.48-.17,2.92-.23,4.28-.2,4.73-.18,8.67-.13,11.42v.33l-2.11-1c0-2.73.11-6.44.39-10.81.09-1.51.22-3.12.37-4.76-.59-.15-5.36-1.38-7.16-2.82-1.63-1.3-3.35-3.42-3.29-5.63a3.7,3.7,0,0,1,4.08-3.72c3.11.4,5.71,5.42,6.23,8.17,0,.16.16,2,.22,3.1.07-.68.12-1.33.19-2,.14-1.37.32-2.74.51-4.21.11-.7.23-1.41.34-2.13s.3-1.46.45-2.2c.38-1.7.84-3.41,1.35-5.12-1.2-.13-5.45-.63-7.28-1.67s-3.83-2.88-4.1-5.07a3.7,3.7,0,0,1,3.47-4.3c3.13-.08,6.47,4.49,7.39,7.13.06.17.51,2.14.73,3.23.32-1,.62-2.06,1-3.08,1-3,2.13-5.94,3.23-8.91.34-.91.66-1.82,1-2.72-.43,0-5.5-.53-7.54-1.7-1.81-1-3.83-2.88-4.11-5.07a3.72,3.72,0,0,1,3.47-4.3c3.14-.08,6.48,4.49,7.4,7.13.07.2.71,3,.84,3.77.72-2,1.43-4,2-6a64.85,64.85,0,0,0,2-8.24c-.2,0-5.5-.5-7.58-1.7-1.82-1-3.84-2.88-4.11-5.07a3.72,3.72,0,0,1,3.47-4.3c3.13-.07,6.47,4.49,7.39,7.13.06.18.55,2.34.76,3.37h.18a47.86,47.86,0,0,0,.48-8.51c0-1.57-.15-3.06-.3-4.52-1,0-5.54,0-7.54-.86s-4.13-2.44-4.65-4.59a3.71,3.71,0,0,1,3-4.65c3.11-.42,6.93,3.75,8.14,6.28.06.14.58,1.61.93,2.68-.07-.65-.14-1.33-.23-1.95-.31-2.35-.75-4.49-1.15-6.37-.24-1.07-.47-2-.7-2.93-1-.5-4.92-2.56-6.27-4.23s-2.53-4.06-2-6.21A3.71,3.71,0,0,1,368.87,204.09Z"
					style="fill: rgb(255, 196, 54); transform-origin: 389.517px 255.664px;" id="el1rucm3qeqrv"
					class="animable"></path>
				<path
					d="M425.55,252.42c-2.45-.1-7.35-2.61-7.35-2.62s2.63-2.72,2.82-2.87c2.19-1.75,7.45-3.83,10.06-2.1a3.72,3.72,0,0,1,.65,5.49C430.33,252,427.64,252.5,425.55,252.42Z"
					style="fill: rgb(255, 196, 54); transform-origin: 425.426px 248.304px;" id="el1pwhwv456qg"
					class="animable"></path>
				<g id="eln17q0i926pr">
					<g style="opacity: 0.5; transform-origin: 391.986px 255.664px;" class="animable">
						<path
							d="M374.94,229.2c-.06,0,.69-3.73.77-4,.86-2.66,4.1-7.3,7.23-7.29a3.71,3.71,0,0,1,3.57,4.21c-.23,2.21-2.21,4.08-4,5.17C380.41,228.6,374.94,229.2,374.94,229.2Z"
							style="fill: rgb(255, 255, 255); transform-origin: 380.74px 223.555px;" id="el9dj0rd9l8f"
							class="animable"></path>
						<path
							d="M368.87,204.09c2.95,1.06,4.42,6.52,4.32,9.32,0,.24-.56,4-.61,4l-.06,0c.23.86.48,1.79.73,2.8.44,1.88.92,4,1.29,6.36a65.81,65.81,0,0,1,.84,7.65,48.31,48.31,0,0,1-.29,8.6.3.3,0,0,0,0,.1c.39-.83,1.54-3.13,1.65-3.3,1.54-2.34,5.88-6,8.91-5.12a3.71,3.71,0,0,1,2.32,5c-.8,2.06-3.2,3.35-5.21,3.92-2.27.65-7.33-.12-7.73-.18a64.94,64.94,0,0,1-1.86,8.56q-.7,2.46-1.52,4.92c.35-.71.68-1.34.73-1.43,1.54-2.34,5.88-6,8.91-5.13a3.7,3.7,0,0,1,2.32,5c-.8,2.07-3.2,3.35-5.21,3.93s-6.37,0-7.51-.15c-.21.62-.42,1.25-.64,1.87-1,3-2.08,6-3,8.94-.33,1-.62,2.08-.91,3.12.32-.63.59-1.16.64-1.23,1.53-2.34,5.88-6,8.9-5.13a3.72,3.72,0,0,1,2.33,5c-.8,2.06-3.21,3.35-5.22,3.92s-5.94.07-7.3-.12c-.27,1.08-.53,2.15-.74,3.2-.13.72-.3,1.41-.39,2.14s-.2,1.44-.3,2.14c-.14,1.37-.3,2.79-.4,4.13-.08.93-.14,1.82-.2,2.71.31-1,1-3.06,1.05-3.23a14.5,14.5,0,0,1,4.8-5.46,3.85,3.85,0,0,1,.41-.71,3.71,3.71,0,0,1,5.45-.86c2.38,2,1.78,7.68.69,10.26-.06.15-.95,1.72-1.52,2.7.43-.52.83-1,1.28-1.58.87-1.06,1.77-2.1,2.73-3.22l1.47-1.59c.48-.55,1.06-1.06,1.59-1.59,1.25-1.21,2.58-2.38,3.95-3.53-.94-.76-4.21-3.53-5.15-5.41s-1.61-4.51-.63-6.49a3.71,3.71,0,0,1,5.27-1.67c2.65,1.66,2.92,7.31,2.23,10,0,.17-.76,2.06-1.17,3.09.83-.68,1.65-1.37,2.51-2,2.48-1.92,5.05-3.78,7.6-5.65l2.33-1.73c-.33-.27-4.29-3.47-5.35-5.57-.93-1.87-1.61-4.51-.63-6.5a3.72,3.72,0,0,1,5.27-1.67c2.65,1.67,2.92,7.32,2.23,10-.05.21-1.08,2.93-1.38,3.61,1.71-1.28,3.4-2.56,5-3.89a64.73,64.73,0,0,0,6.2-5.78c-.15-.12-4.3-3.44-5.38-5.6-.94-1.87-1.61-4.51-.63-6.49a3.7,3.7,0,0,1,5.26-1.67c2.66,1.66,2.93,7.31,2.24,10-.05.17-.83,2.25-1.23,3.23l.16.09a47.88,47.88,0,0,0,5.09-6.84c.83-1.32,1.56-2.63,2.24-3.93-.84-.54-4.63-3-5.82-4.88s-2.09-4.3-1.34-6.38a3.71,3.71,0,0,1,5-2.24c2.83,1.36,3.71,6.95,3.32,9.72,0,.15-.4,1.66-.69,2.76.29-.59.61-1.19.88-1.76,1-2.14,1.85-4.16,2.55-6,.4-1,.73-2,1-2.83-.55-1-2.69-4.85-2.9-7s.13-4.79,1.76-6.29a3.71,3.71,0,0,1,5.51.35c1.88,2.51.09,7.87-1.53,10.16-.14.19-2.69,3-2.72,3l0-.06c-.28.85-.58,1.76-.94,2.74-.66,1.81-1.44,3.86-2.42,6a66.87,66.87,0,0,1-3.53,6.84,48.53,48.53,0,0,1-5,7l-.07.08c.78-.49,3-1.76,3.19-1.84,2.58-1.1,8.2-1.73,10.26.64a3.72,3.72,0,0,1-.82,5.46c-1.81,1.28-4.53,1-6.52.39-2.25-.71-6-4.14-6.35-4.41a64.86,64.86,0,0,1-6.27,6.11c-1.3,1.12-2.63,2.2-4,3.26.69-.39,1.31-.74,1.4-.78,2.57-1.1,8.19-1.73,10.25.64a3.71,3.71,0,0,1-.82,5.46c-1.8,1.28-4.52,1-6.51.39s-5.32-3.49-6.18-4.26l-1.57,1.21c-2.52,1.93-5,3.84-7.45,5.79-.85.69-1.66,1.4-2.48,2.1.62-.35,1.13-.64,1.22-.67,2.57-1.11,8.19-1.73,10.25.63a3.7,3.7,0,0,1-.82,5.46c-1.81,1.28-4.52,1-6.51.4s-5-3.22-6-4.13c-.81.75-1.63,1.49-2.38,2.26-.51.53-1,1-1.5,1.57s-1,1.08-1.44,1.62c-.87,1.06-1.78,2.16-2.61,3.22-.58.73-1.12,1.44-1.66,2.15.83-.69,2.51-2,2.66-2.11,2.37-1.48,7.83-2.95,10.23-.93a3.72,3.72,0,0,1,0,5.53c-1.59,1.53-4.31,1.7-6.37,1.38-2.28-.36-6.4-3-6.91-3.38-.9,1.18-1.76,2.34-2.56,3.45-2.77,3.83-4.93,7.12-6.41,9.45l-.15.23-1.92-.93c.1-.15.2-.29.3-.45,1.55-2.32,3.81-5.6,6.69-9.41.91-1.2,1.9-2.47,2.93-3.77a40,40,0,0,1-3-3.68c-2.21.86-6.8.9-7.39.9-.09,1.48-.17,2.92-.23,4.28-.2,4.73-.18,8.67-.13,11.42v.33l-2.11-1c0-2.73.11-6.44.39-10.81.09-1.51.22-3.12.37-4.76-.59-.15-5.36-1.38-7.16-2.82-1.63-1.3-3.35-3.42-3.29-5.63a3.7,3.7,0,0,1,4.08-3.72c3.11.4,5.71,5.42,6.23,8.17,0,.16.16,2,.22,3.1.07-.68.12-1.33.19-2,.14-1.37.32-2.74.51-4.21.11-.7.23-1.41.34-2.13s.3-1.46.45-2.2c.38-1.7.84-3.41,1.35-5.12-1.2-.13-5.45-.63-7.28-1.67s-3.83-2.88-4.1-5.07a3.7,3.7,0,0,1,3.47-4.3c3.13-.08,6.47,4.49,7.39,7.13.06.17.51,2.14.73,3.23.32-1,.62-2.06,1-3.08,1-3,2.13-5.94,3.23-8.91.34-.91.66-1.82,1-2.72-.43,0-5.5-.53-7.54-1.7-1.81-1-3.83-2.88-4.11-5.07a3.72,3.72,0,0,1,3.47-4.3c3.14-.08,6.48,4.49,7.4,7.13.07.2.71,3,.84,3.77.72-2,1.43-4,2-6a64.85,64.85,0,0,0,2-8.24c-.2,0-5.5-.5-7.58-1.7-1.82-1-3.84-2.88-4.11-5.07a3.72,3.72,0,0,1,3.47-4.3c3.13-.07,6.47,4.49,7.39,7.13.06.18.55,2.34.76,3.37h.18a47.86,47.86,0,0,0,.48-8.51c0-1.57-.15-3.06-.3-4.52-1,0-5.54,0-7.54-.86s-4.13-2.44-4.65-4.59a3.71,3.71,0,0,1,3-4.65c3.11-.42,6.93,3.75,8.14,6.28.06.14.58,1.61.93,2.68-.07-.65-.14-1.33-.23-1.95-.31-2.35-.75-4.49-1.15-6.37-.24-1.07-.47-2-.7-2.93-1-.5-4.92-2.56-6.27-4.23s-2.53-4.06-2-6.21A3.71,3.71,0,0,1,368.87,204.09Z"
							style="fill: rgb(255, 255, 255); transform-origin: 389.517px 255.664px;" id="elv4y1rjqf78i"
							class="animable"></path>
						<path
							d="M425.55,252.42c-2.45-.1-7.35-2.61-7.35-2.62s2.63-2.72,2.82-2.87c2.19-1.75,7.45-3.83,10.06-2.1a3.72,3.72,0,0,1,.65,5.49C430.33,252,427.64,252.5,425.55,252.42Z"
							style="fill: rgb(255, 255, 255); transform-origin: 425.426px 248.304px;" id="elr7d31cey84l"
							class="animable"></path>
					</g>
				</g>
				<path
					d="M396.94,313.78s-14.87-35.85-23.19-34.29S388,336.63,388,336.63s-26.16-49.35-44-49.35,6.54,54.55,29.13,72.73c0,0-35.67-38.44-56.48-30.13s41.62,47.27,41.62,47.27-36.27-11.43-32.11-2.6,15.46,10.39,15.46,10.39l-41,2.08H443.32l-32.11-3.12s33.3-16.62,24.38-23.37-28.54,7.79-28.54,7.79,33.89-37.4,27.35-51.43-35.68,25.46-35.68,25.46,23.79-50.39,19-59.22S396.94,313.78,396.94,313.78Z"
					style="fill: rgb(255, 196, 54); transform-origin: 371.97px 333.23px;" id="eltr1tjp60i8d"
					class="animable"></path>
				<g id="el2x7y0bin26f">
					<path
						d="M396.94,313.78s-14.87-35.85-23.19-34.29S388,336.63,388,336.63s-26.16-49.35-44-49.35,6.54,54.55,29.13,72.73c0,0-35.67-38.44-56.48-30.13s41.62,47.27,41.62,47.27-36.27-11.43-32.11-2.6,15.46,10.39,15.46,10.39l-41,2.08H443.32l-32.11-3.12s33.3-16.62,24.38-23.37-28.54,7.79-28.54,7.79,33.89-37.4,27.35-51.43-35.68,25.46-35.68,25.46,23.79-50.39,19-59.22S396.94,313.78,396.94,313.78Z"
						style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 371.97px 333.23px;"
						class="animable"></path>
				</g>
				<path d="M401.7,315.66c-13.09,38.65-13.09,66-13.09,66s15.46.59,31.52-11.3"
					style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 404.37px 348.662px;"
					id="elpd9o8o4938r" class="animable"></path>
				<path d="M395.16,336.48a232.51,232.51,0,0,0-10.71-33.9"
					style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 389.805px 319.53px;"
					id="elyb6jkcozyi" class="animable"></path>
				<path d="M356.51,313.88l33.29,49.35s22.6-19,30.33-29.73"
					style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 388.32px 338.555px;"
					id="el26e78xx1r2h" class="animable"></path>
				<path d="M389.21,375.13S354.13,358.48,339.86,349"
					style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 364.535px 362.065px;"
					id="el8ttkpxu814b" class="animable"></path>
			</g>
			<g id="freepik--Device--inject-125" class="animable" style="transform-origin: 299.675px 248.01px;">
				<rect x="242.96" y="109" width="122.68" height="278.02" rx="7.92"
					style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 304.3px 248.01px;"
					id="ela06kkxx2fvv" class="animable"></rect>
				<path
					d="M361.54,157.67a1.63,1.63,0,0,1-1.63-1.63V134.19a1.64,1.64,0,0,1,3.27,0V156A1.64,1.64,0,0,1,361.54,157.67Z"
					style="fill: rgb(38, 50, 56); transform-origin: 361.545px 145.174px;" id="el704lecgeqgk"
					class="animable"></path>
				<path
					d="M361.54,177.91a1.63,1.63,0,0,1-1.63-1.63V164.07a1.64,1.64,0,0,1,3.27,0v12.21A1.64,1.64,0,0,1,361.54,177.91Z"
					style="fill: rgb(38, 50, 56); transform-origin: 361.545px 170.234px;" id="el9wyktf08mhh"
					class="animable"></path>
				<rect x="233.71" y="109" width="122.68" height="278.02" rx="7.92"
					style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 295.05px 248.01px;"
					id="elufkk5wv351h" class="animable"></rect>
				<rect x="241.88" y="127.51" width="106.34" height="238.46"
					style="fill: rgb(255, 196, 54); transform-origin: 295.05px 246.74px;" id="el4hnyetn8l2h"
					class="animable"></rect>
				<line x1="279.26" y1="119.89" x2="307.57" y2="119.89"
					style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; stroke-width: 3px; transform-origin: 293.415px 119.89px;"
					id="elvy9clgd5z2" class="animable"></line>
				<path
					d="M291.24,374.41c0,1.95-1.22,3.53-2.73,3.53s-2.72-1.58-2.72-3.53,1.22-3.54,2.72-3.54S291.24,372.45,291.24,374.41Z"
					style="fill: rgb(255, 255, 255); transform-origin: 288.515px 374.405px;" id="el95vljfvyrhg"
					class="animable"></path>
				<ellipse cx="295.05" cy="165.35" rx="18.44" ry="21.5"
					style="fill: rgb(255, 255, 255); transform-origin: 295.05px 165.35px;" id="elc2jvl9okqku"
					class="animable"></ellipse>
				<ellipse cx="295.05" cy="156.91" rx="7" ry="8.17"
					style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 295.05px 156.91px;"
					id="elbrr22csz4jw" class="animable"></ellipse>
				<path
					d="M295.05,167.25c-7,0-12.73,5.37-12.73,12a11.14,11.14,0,0,0,.17,1.84,16.54,16.54,0,0,0,25.12,0,12.34,12.34,0,0,0,.16-1.84C307.77,172.62,302.07,167.25,295.05,167.25Z"
					style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 295.045px 177.059px;"
					id="elsufwvnfejat" class="animable"></path>
				<path
					d="M317.47,259H272.63a4.48,4.48,0,0,1-4.3-4.65V226.67c0-15.95,12-28.93,26.72-28.93s26.71,13,26.71,28.93v27.66A4.48,4.48,0,0,1,317.47,259Zm-40.55-9.3h36.25v-23c0-10.82-8.13-19.63-18.12-19.63s-18.13,8.81-18.13,19.63Z"
					style="fill: rgb(38, 50, 56); transform-origin: 295.045px 228.37px;" id="elyqbkif8z96j"
					class="animable"></path>
				<rect x="263.92" y="240.11" width="62.26" height="58.9"
					style="fill: rgb(255, 255, 255); transform-origin: 295.05px 269.56px;" id="elxh6jeyawl8r"
					class="animable"></rect>
				<path
					d="M304.12,280.66l-4.62-11.11a8.19,8.19,0,0,0,3.25-6.62c0-4.43-3.31-8-7.4-8s-7.39,3.58-7.39,8a8.18,8.18,0,0,0,3.24,6.62l-4.61,11.11Z"
					style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 295.355px 267.795px;"
					id="el445n63k8ktb" class="animable"></path>
				<path
					d="M276.08,351.94a.57.57,0,0,0,.33.11.52.52,0,0,0,.43-.23l71.38-97.09v-1.84L276,351.18A.54.54,0,0,0,276.08,351.94Z"
					style="fill: rgb(255, 255, 255); transform-origin: 312.05px 302.47px;" id="elemdwy7mgwa5"
					class="animable"></path>
				<path d="M333.86,162.49a.54.54,0,0,0,.12.76.55.55,0,0,0,.76-.12l13.48-18.33V143Z"
					style="fill: rgb(255, 255, 255); transform-origin: 340.987px 153.176px;" id="elkcwfoo99l4"
					class="animable"></path>
				<path d="M241.88,289.46,330,169.63a.54.54,0,0,0-.88-.64l-87.2,118.63Z"
					style="fill: rgb(255, 255, 255); transform-origin: 285.992px 229.113px;" id="elwlxweak8gcd"
					class="animable"></path>
				<path
					d="M267.8,363.76a.57.57,0,0,0,.44-.22l5-6.76a.54.54,0,0,0-.12-.76.55.55,0,0,0-.76.12l-5,6.75a.54.54,0,0,0,.11.76A.51.51,0,0,0,267.8,363.76Z"
					style="fill: rgb(255, 255, 255); transform-origin: 270.298px 359.839px;" id="eljpvp8yghvr"
					class="animable"></path>
				<path d="M348.22,274.17l-58.6,79.71a.54.54,0,0,0,.44.86.53.53,0,0,0,.44-.22L348.22,276Z"
					style="fill: rgb(255, 255, 255); transform-origin: 318.867px 314.455px;" id="elijesjz0e7aq"
					class="animable"></path>
			</g>
			<g id="freepik--Character--inject-125" class="animable" style="transform-origin: 146.198px 272.618px;">
				<path
					d="M142.41,162.14a15.89,15.89,0,0,0,1.4-7c0-4.47-5.41-7.06-11.77-7.77s-9.18,1.88-8.24,3.53a15.4,15.4,0,0,0,3.53,3.53s-6.36-3.53-10.6-.7,1.89,1.65.71,4.47-7.77,1.65-9.42,9.18,3.06,15.07-1.18,18.37-17-1.18-20.72,7.06,1.56,11.9-7.38,17.08-15.46,10.24-12.87,22.95S76.94,250,93.66,245.51s15.54-14.6,21-25,13.9-8.24,16.49-14.13-.71-12.95-.47-18.37,5.65-6.59,7.77-13S142.41,162.14,142.41,162.14Z"
					style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 104.557px 197.231px;"
					id="elsopcopf0e7" class="animable"></path>
				<path d="M67.82,232.6a6.26,6.26,0,0,0-.65,2.85"
					style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.5px; transform-origin: 67.4948px 234.025px;"
					id="elk2isaae4nas" class="animable"></path>
				<path
					d="M133.37,157.47s-2.94-3.4,2.72-1.82c7.13,2-1.24,10.25-4.46,11.91-6.46,3.31-15,2.25-20,8.27-4.54,5.44,1.59,11.11-1.13,15.42s-13.61,1.81-17.23,7,6.57,16.33-3.86,22.45c-7.54,4.43-15.8,6.13-19.79,9.64"
					style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.5px; transform-origin: 104.254px 192.786px;"
					id="elti1a4g87m9k" class="animable"></path>
				<path
					d="M116.46,177.59a8.17,8.17,0,0,0-.54,4.59c.9,3.85,6.12,11.11,1.36,15.19S104.35,201.22,103,206s1.36,17.91-3.17,24-13.38,5.67-18.14,9.75-4.08,6.35-4.08,6.35"
					style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.5px; transform-origin: 98.4162px 211.845px;"
					id="elghxae0rxtrg" class="animable"></path>
				<path d="M118.86,173.11a19.93,19.93,0,0,0-1.14,1.81"
					style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.5px; transform-origin: 118.29px 174.015px;"
					id="eloddri31t2yr" class="animable"></path>
				<path
					d="M145.46,232.24l1.15,9s6,6,10.41,9.71,15.71,11.56,15.71,11.56L167,264.14s-18.73-11.1-22.43-12-6.47-6.24-7.62-7.86S142.45,230.62,145.46,232.24Z"
					style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 154.774px 248.115px;"
					id="ell4u16zqd8y" class="animable"></path>
				<path
					d="M156.9,378.67s5.66,4.78,8,6.38,5.07,2.32,4.64,3.19-1.6,1.74-7.11,1-7.1-2.61-8.12-2.9-3.48.44-5.36-.72,1.1-8.07,1.1-8.07A5.38,5.38,0,0,0,156.9,378.67Z"
					style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 158.956px 383.535px;"
					id="elvebu7mwvhbr" class="animable"></path>
				<path
					d="M169.52,388.24a.74.74,0,0,0,0-.14,25.77,25.77,0,0,1-9.46-.89c-3.56-.84-4.61-2.73-8-2.73a11.62,11.62,0,0,1-3.91-.64,2.06,2.06,0,0,0,.71,1.79c1.88,1.16,4.35.43,5.36.72s2.61,2.18,8.12,2.9S169.08,389.11,169.52,388.24Z"
					style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 158.831px 386.679px;"
					id="eljpb8dimm5t" class="animable"></path>
				<path
					d="M127.27,185.4s1.09,7.34-.31,10.3-5.78,3.28-9.52,3.91-12.33,3.9-11.4,12.33,11.71,26.69,11.71,31.84-3.28,7.8-6.87,17.79-3.12,28.57-2,40.59a126.9,126.9,0,0,0,4.68,23.41s-9,14.52-13,20.76-18,33.41-18,33.41,0,.93,2.18,1.56a13.68,13.68,0,0,0,4.69.31s26.84-32.31,31.84-37.77,9.68-15,10.3-19.36-.15-31.06-.15-31.06,5.61,13.42,10,20.29a144.23,144.23,0,0,1,7.32,13,78.58,78.58,0,0,0,0,17c1.09,7.8.17,32.86,1.26,34.89s5.32,1.18,6.26.25,1.38-7,1.38-7,1.87-19,3-27.94,3-16.55,2.35-18.58-4.53-23.73-7.5-34-12-29.5-14-34.49-3.13-9.53-2.81-11.09,6.4-10.92,8-13.42a12.34,12.34,0,0,0,.31-11.08c-1.87-4.06,0-9.53-.31-12.8s-5.15-4.69-7.65-5.93-3.44-4.06-3.44-6.4A18,18,0,0,1,137,190.4S129.3,185.4,127.27,185.4Z"
					style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 122.842px 283.544px;"
					id="elvglp2fk2prm" class="animable"></path>
				<path d="M146.19,218.79a51.51,51.51,0,0,1-2.05-6.41"
					style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 145.165px 215.585px;"
					id="el2vl59thvnmg" class="animable"></path>
				<path d="M125.92,236.17s2.82.62,8.47-2.2"
					style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 130.155px 235.099px;"
					id="eltcuynvx5opr" class="animable"></path>
				<path
					d="M155.52,291.23c-2.83-9.84-11.22-27.81-13.73-33.74-12,4.5-23.22.66-28.49-1.82-.76,1.66-1.58,3.58-2.42,5.9-3.59,10-3.12,28.57-2,40.59a126.9,126.9,0,0,0,4.68,23.41s-9,14.52-13,20.76-18,33.41-18,33.41,0,.93,2.18,1.56a13.68,13.68,0,0,0,4.69.31s26.84-32.31,31.84-37.77,9.68-15,10.3-19.36-.15-31.06-.15-31.06,5.61,13.42,10,20.29a144.23,144.23,0,0,1,7.32,13,78.58,78.58,0,0,0,0,17c1.09,7.8.17,32.86,1.26,34.89s5.32,1.18,6.26.25,1.38-7,1.38-7,1.87-19,3-27.94,3-16.55,2.35-18.58S158.49,301.53,155.52,291.23Z"
					style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 122.842px 318.679px;"
					id="elpn5hvz7wcaf" class="animable"></path>
				<polygon
					points="216.66 281.32 216.66 279.28 218.37 279.28 218.37 263.26 216.66 263.26 199.78 263.26 198.07 263.26 198.07 279.28 199.78 279.28 199.78 281.32 198.06 281.32 198.06 285.04 204.65 285.04 204.65 283.79 211.79 283.79 211.79 285.04 218.38 285.04 218.38 281.32 216.66 281.32"
					style="fill: rgb(255, 196, 54); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 208.22px 274.15px;"
					id="elogi5m7tkkqc" class="animable"></polygon>
				<path
					d="M107.56,258.47H225.32a1.78,1.78,0,0,1,1.78,1.78v3.58a1.78,1.78,0,0,1-1.78,1.78H107.56a0,0,0,0,1,0,0v-7.15A0,0,0,0,1,107.56,258.47Z"
					style="fill: rgb(255, 196, 54); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 167.33px 262.035px;"
					id="el1lsea8zfkqh" class="animable"></path>
				<rect x="183.92" y="257.4" width="9.15" height="9.29" rx="0.99"
					style="fill: rgb(255, 196, 54); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 188.495px 262.045px;"
					id="elgz35m8nh0f8" class="animable"></rect>
				<g id="eliqvagun3c5">
					<circle cx="92.9" cy="262.04" r="18.59"
						style="fill: rgb(255, 196, 54); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 92.9px 262.04px; transform: rotate(-80.7deg);"
						class="animable"></circle>
				</g>
				<path
					d="M96.72,262a6.5,6.5,0,0,0,3.69-5.68c0-3.65-3.36-6.61-7.51-6.61s-7.51,3-7.51,6.61A6.48,6.48,0,0,0,89.08,262a6.51,6.51,0,0,0-3.69,5.69c0,3.65,3.36,6.61,7.51,6.61s7.51-3,7.51-6.61A6.53,6.53,0,0,0,96.72,262Z"
					style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 92.9px 262.005px;"
					id="el3ihyvwnwf7k" class="animable"></path>
				<path
					d="M169.06,265.77s5.82,2.46,7.62,2.46,3.88-1.81,4.91-4,1-3.23.39-2.71l-1.29,1s1-2.19-.13-1.93a3.16,3.16,0,0,0-1.81,1.55s-.13-1.94-1.16-1a11.84,11.84,0,0,0-1.81,2.07s-.13-2.45-.78-1.81-3.09,4.13-3.09,4.13Z"
					style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 175.734px 264.399px;"
					id="el8vpl99n5h08" class="animable"></path>
				<path d="M175.78,263.19s-.39,3.1-2.32,3.62"
					style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 174.62px 265px;"
					id="elz52ws0l1au" class="animable"></path>
				<path d="M178.75,262.16s-1,4.9-2.58,5.68"
					style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 177.46px 265px;"
					id="elsxqvyjnl2oh" class="animable"></path>
				<path d="M180.69,262.54a27.87,27.87,0,0,1-2.07,5.17"
					style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 179.655px 265.125px;"
					id="el16sieazia2m" class="animable"></path>
				<path
					d="M138.66,202.22a7.1,7.1,0,0,1-3.12-6.2A18,18,0,0,1,137,190.4s-7.65-5-9.68-5c0,0,1.09,7.34-.31,10.3a4.7,4.7,0,0,1-2.13,2.12,59.62,59.62,0,0,0,7.45,14C135.14,215.35,136.51,207.91,138.66,202.22Z"
					style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 131.77px 199.067px;"
					id="el3gulgwbm58i" class="animable"></path>
				<path
					d="M115.05,200.62a12.49,12.49,0,0,0-9,6.59c-3.08,5.94-16.54,32.9-15.39,34.51,6.54,9.2,30.33,15.82,32.75,18.24a55,55,0,0,0,7.93,6.85c2.42,1.54,7.25.88,8.13.44s1.54-2.42,0-2.42a2.57,2.57,0,0,1-2.54-2c-.22-.88,2.42.88,3.74.22s-2.95-3.07-4.27-4.17-2.42-2.63-4.18-2.63-5.07,0-5.07,0-8.1-5.87-13-10.24a74.37,74.37,0,0,0-12.41-9.06l14.85-24.43"
					style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 115.755px 234.197px;"
					id="elvecy8oj03ri" class="animable"></path>
				<path
					d="M136.39,258.89c-1.32-1.1-2.42-2.63-4.18-2.63s-5.07,0-5.07,0-8.1-5.87-13-10.24a74.37,74.37,0,0,0-12.41-9.06l5.94-9.78a19.87,19.87,0,0,0-10.06-2.87c-4,8.34-7.59,16.58-7,17.45,6.54,9.2,30.33,15.82,32.75,18.24a55,55,0,0,0,7.93,6.85c2.42,1.54,7.25.88,8.13.44s1.54-2.42,0-2.42a2.57,2.57,0,0,1-2.54-2c-.22-.88,2.42.88,3.74.22S137.71,260,136.39,258.89Z"
					style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 115.709px 246.062px;"
					id="eln7ltwnal4an" class="animable"></path>
				<path
					d="M144.44,174.63c-.78-1.56-.78-2.81-.47-5s-1.56-7.5-1.56-7.5l0,0c-1.91,3.3-7.43,5.26-9.87,6-2.69.82,1.24,2.68.82,5.17s-5.79,3.93-5.79,3.93S126,174,123.82,174s-3.73,5-2.49,7.65a3.54,3.54,0,0,0,3.91,2.05s-.15,4.69,2.81,6.09a55,55,0,0,0,9.84,3.59c1.87.31,3.74-.62,4.52-3.43a64.2,64.2,0,0,0,1.25-8.59,20.09,20.09,0,0,0,3.59-3C148,177.28,145.22,176.19,144.44,174.63Z"
					style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 134.133px 177.783px;"
					id="elxxu7azqz5s" class="animable"></path>
				<path
					d="M141.4,174.7c0,.86-.28,1.55-.62,1.55s-.62-.69-.62-1.55.28-1.55.62-1.55S141.4,173.84,141.4,174.7Z"
					style="fill: rgb(38, 50, 56); transform-origin: 140.78px 174.7px;" id="elbpu17njl40l"
					class="animable"></path>
				<path d="M138.71,172.12s1.66-1.87,2.9-1.45"
					style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 140.16px 171.364px;"
					id="elortleywvjvd" class="animable"></path>
				<path d="M141.61,184.94a4.5,4.5,0,0,1-4.35-1"
					style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 139.435px 184.536px;"
					id="eljwrpt58wszd" class="animable"></path>
				<path
					d="M82.63,379.74s-3.73,7.48-3.59,8.5,7.54,6.38,11,8.26,9.72,2.18,9.28-.43-6.38-4.35-7.83-8.27a63.38,63.38,0,0,1-2-6.19A12.82,12.82,0,0,1,82.63,379.74Z"
					style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 89.1891px 388.855px;"
					id="els57nmt5y8k" class="animable"></path>
				<path
					d="M99.34,396.11A14.61,14.61,0,0,1,91.51,395c-5.37-2.33-10.57-7.09-12-8.44a5.36,5.36,0,0,0-.48,1.71c.15,1,7.54,6.38,11,8.26S99.7,398.67,99.34,396.11Z"
					style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 89.1925px 392.273px;"
					id="elyqr3lm8o0f" class="animable"></path>
			</g>
			<defs>
				<filter id="active" height="200%">
					<feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>
					<feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>
					<feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
					<feMerge>
						<feMergeNode in="OUTLINE"></feMergeNode>
						<feMergeNode in="SourceGraphic"></feMergeNode>
					</feMerge>
				</filter>
				<filter id="hover" height="200%">
					<feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>
					<feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK"></feFlood>
					<feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
					<feMerge>
						<feMergeNode in="OUTLINE"></feMergeNode>
						<feMergeNode in="SourceGraphic"></feMergeNode>
					</feMerge>
					<feColorMatrix type="matrix"
						values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 ">
					</feColorMatrix>
				</filter>
			</defs>
		</svg>

	</div>

	<p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Be Verified</p>
	<small class="text-white text-wrap text-center"
		style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Join experienced Designers on
		this platform.
	</small>
</div>
<div class="col-md-6 right-box">

	<div class="row align-items-center">
		
		<form action="session_users/login" method="POST">
			@csrf

			<div class="card">
				<div class="card-header">
					<div class="header-text">
						<h2>Hello, Again</h2>
						<p>We are happy to have you back.</p>
					</div>
				</div>

				<div class="card-body">
					<div class="mb-3">
						<label for="email" class="form-label">Email address <strong class="text-danger">*</strong></label>
						<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
							placeholder="Email address" value="{{ Session::get('email') }}">
						<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
						@error('email')
						<small class="text-danger">
							{{ $message }}
						</small>
						@enderror
					</div>
					<div class="mb-1">
						<label for="password" class="form-label">Password <strong class="text-danger">*</strong></label>
						<input type="password" id="password" name="password" class="form-control"
							aria-describedby="passwordHelpBlock" placeholder="Password" value="{{ Session::get('password') }}">
						@error('password')
						<small class="text-danger">
							{{ $message }}
						</small>
						@enderror
					</div>
					<div class="mb-2 d-flex justify-content-between">
						<div class="form-check">
							<input type="checkbox" class="form-check-input" id="formCheck" onclick="myFunction()">
							<label for="formCheck" class="form-check-label text-secondary"><small>Show Password</small></label>
						</div>
						<div class="forgot">
							<small><a href="#">Forgot Password?</a></small>
						</div>
					</div>
				</div>

				<div class="card-footer">
					<div class="mb-3">
						<button type="submit" class="btn btn-lg btn-warning w-100 fs-6">Login</button>
					</div>
					<div class="row">
						<small>Don't have account? <a href="{{ url('session_users/registrasi') }}">Sign Up</a></small>
					</div>
				</div>
			</div>

		</form>

	</div>
</div>

<script>
	function myFunction() {
		var x = document.getElementById("password");
			if (x.type === "password") {
				x.type = "text";
			} else {
				x.type = "password";
			}
	}
</script>
@endsection

{{-- ! TOASTR SECTION --}}
@section('sw2_toastr')
<script>
	$(document).ready(function() {
			// LOGOUT TOASTR
			@if (Session::has('success'))
				(async function() {
					const Toast = Swal.mixin({
						toast: true,
						position: 'top-right',
						iconColor: '#FFC436',
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

			// PASSWORD NOT MATCH
			@if (Session::has('error_password'))
				Swal.fire({
					icon: 'error',
					title: '<strong>Login failed</strong>',
					html: 'The email or password you entered is <b>incorrect</b>. Please <b>double-check</b> and <b>try again</b>.',
					showConfirmButton: false,
					timer: 4000,
					timerProgressBar: true
				});
			@endif

			// NOT YET LOGIN BUT TRY ACCESS TO DASHBOARD
			// @if (Session::has('login'))
			// 	Swal.fire({
			// 		icon: 'question',
			// 		title: '<strong>Oops..</strong>',
			// 		html: 'Anda belum melakukan <b>Login</b>, Silahkan <b>Login</b> dahulu',
			// 		showConfirmButton: false,
			// 		timer: 4000,
			// 		timerProgressBar: true
			// 	});
			// @endif

			// VERIFICATION EMAIL NOTICE
			// @if (Session::has('error_verifcation'))
			// 	Swal.fire({
			// 		icon: 'error',
			// 		title: '<strong>Unverified Email</strong>',
			// 		html: 'Please <b>verify your email first</b> before continuing.<br> or Email verification <b>not found ?</b>',
			// 		showConfirmButton: true,
			// 		showCancelButton: true,
			// 		confirmButtonColor: '#D80032',
			// 		focusConfirm: false,
			// 		confirmButtonText: 'Please Resend Email Verification',
			// 		cancelButtonText: 'Yes, confirm!'
			// 	}).then((result) => {
			// 		if (result.isConfirmed) {

			// 			// KIRIM ULANG EMAIL LEWAT SWEATALERT
			// 			$.ajax({
			// 				type: 'POST',
								
			// 				// Change this to your actual route
			// 				url: '/email/verify/resend-email-verification',
								
			// 				// Add CSRF token if required
			// 				headers: {
			// 					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
			// 				},

			// 				success: function(response) {
			// 					Swal.fire({
			// 						icon: 'success',
			// 						title: 'Successfully Delivered!',
			// 						text: 'Email verification resent successfully.'
			// 					});
			// 				},

			// 				error: function(xhr, status, error) {
			// 					console.error(error);
			// 					Swal.fire({
			// 						icon: 'error',
			// 						title: 'Error',
			// 						text: 'Failed to resend email verification. Please try again.'
			// 					});
			// 				}
			// 			});
			// 		}
			// 	});
			// @endif
			
			// AFTER VERIFICATION AND REDIRECT INTO LOGIN PAGE
			@if (Session::has('udah_verif'))
				(async function() {
					const Toast = Swal.mixin({
						toast: true,
						position: 'top-right',
						iconColor: '#FFC436',
						customClass: {
							popup: 'colored-toast'
						},
						showConfirmButton: false,
						timer: 4500,
						timerProgressBar: true
					});

					await Toast.fire({
						icon: 'success',
						title: "{{ Session::get('udah_verif') }}"
					});
				})();
			@endif
		});
			
</script>
@endsection