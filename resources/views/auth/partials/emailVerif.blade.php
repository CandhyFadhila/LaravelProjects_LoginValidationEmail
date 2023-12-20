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

	.left-box {
		display: flex;
	}

	.fw-bold {
		font-weight: 560 !important;
	}

	@media only screen and (max-width: 768px) {
		.box-area {
			margin: 0 10px;
		}

		.left-box,
		.featured-image {
			display: none;
		}
	}
</style>

<div class="col-md-6 right-box">

	<div class="row align-items-center">

		<form action="/email/verify/resend-email-verification" method="POST">
			@csrf
			<div class="card">
				<div class="card-header">
					<div class="header-text">
						<figure class="text-center">
							<blockquote class="blockquote">
								<h2><strong>Verify Your Email</strong></h2>
							</blockquote>
							<figcaption class="blockquote-footer">
								<cite title="Source Title"><a href="{{ url('/') }}">www.socialmedia.co.id</a></cite>
							</figcaption>
						</figure>

						<hr class="border border-primary border-1 opacity-75">

					</div>
				</div>
				<div class="card-body">
					<div class="mb-4">
						<p>We have detected that your email <em><strong class="text-danger">has not been verified by the
									system</strong></em>. We have sent an email to <strong>{{ Auth::user()->email
								}}</strong>.
							Please follow a link to verify your email.
						</p>
					</div>
				</div>

				<div class="card-footer">
					<small>Don`t receive an email ?</small>
					<a href="#">
						<button type="submit" class="btn btn-outline-warning fw-bold w-100">
							Resend Email Verification
						</button>
					</a>
				</div>
			</div>

			{{-- <figure class="text-end">
				<blockquote class="blockquote">
					<small>Did`t receive an email?</small>
				</blockquote>
				<figcaption class="blockquote-footer">
					<a href="#">
						<button type="submit" class="btn btn-sm btn-outline-primary fw-bold">
							Resend Email Verification</button>
					</a>
				</figcaption>
			</figure> --}}
		</form>

	</div>
</div>

<div class="col-md-6 left-box rounded-4 justify-content-center align-items-center flex-column"
	style="background: #0174BE;">

	<div class="featured-image">

		<svg class="animated" id="freepik_stories-email-campaign" xmlns="http://www.w3.org/2000/svg"
			viewBox="0 0 500 500" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
			xmlns:svgjs="http://svgjs.com/svgjs" style="width: 330px;" alt="Email Verification">
			<style>
				svg#freepik_stories-email-campaign:not(.animated) .animable {
					opacity: 0;
				}

				svg#freepik_stories-email-campaign.animated #freepik--Shadows--inject-8 {
					animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomIn;
					animation-delay: 0s;
				}

				svg#freepik_stories-email-campaign.animated #freepik--Clouds--inject-8 {
					animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut, 3s Infinite linear wind;
					animation-delay: 0s, 1s;
				}

				svg#freepik_stories-email-campaign.animated #freepik--Plant--inject-8 {
					animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideDown;
					animation-delay: 0s;
				}

				svg#freepik_stories-email-campaign.animated #freepik--Device--inject-8 {
					animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) lightSpeedLeft;
					animation-delay: 0s;
				}

				svg#freepik_stories-email-campaign.animated #freepik--Character--inject-8 {
					animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0s;
				}

				svg#freepik_stories-email-campaign.animated #freepik--paper-planes--inject-8 {
					animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomIn, 3s Infinite linear wind;
					animation-delay: 0s, 1s;
				}

				svg#freepik_stories-email-campaign.animated #freepik--Icon--inject-8 {
					animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) lightSpeedLeft, 6s Infinite linear heartbeat;
					animation-delay: 0s, 1s;
				}

				svg#freepik_stories-email-campaign.animated #freepik--Envelope--inject-8 {
					animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideLeft, 6s Infinite linear heartbeat;
					animation-delay: 0s, -1s;
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

				@keyframes lightSpeedLeft {
					from {
						transform: translate3d(-50%, 0, 0) skewX(20deg);
						opacity: 0;
					}

					60% {
						transform: skewX(-10deg);
						opacity: 1;
					}

					80% {
						transform: skewX(2deg);
					}

					to {
						opacity: 1;
						transform: translate3d(0, 0, 0);
					}
				}

				@keyframes heartbeat {
					0% {
						transform: scale(1);
					}

					10% {
						transform: scale(1.1);
					}

					30% {
						transform: scale(1);
					}

					40% {
						transform: scale(1);
					}

					50% {
						transform: scale(1.1);
					}

					60% {
						transform: scale(1);
					}

					100% {
						transform: scale(1);
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

				.animator-hidden {
					display: none;
				}
			</style>
			<g id="freepik--Floor--inject-8" class="animable animator-hidden animator-active"
				style="transform-origin: 254.06px 347.94px;">
				<ellipse id="freepik--floor--inject-8" cx="254.06" cy="347.94" rx="223.87" ry="137"
					style="fill: rgb(245, 245, 245); transform-origin: 254.06px 347.94px;" class="animable"></ellipse>
			</g>
			<g id="freepik--Shadows--inject-8" class="animable" style="transform-origin: 238.009px 329.887px;">
				<path id="freepik--Shadow--inject-8"
					d="M367.34,404.79A6.69,6.69,0,0,1,364,404L324.42,381.1a4.1,4.1,0,0,1,0-7.33L390,335.93a7.08,7.08,0,0,1,6.69,0l39.58,22.85a4.1,4.1,0,0,1,0,7.33L370.69,404A6.73,6.73,0,0,1,367.34,404.79Z"
					style="fill: rgb(224, 224, 224); transform-origin: 380.345px 369.941px;" class="animable"></path>
				<path id="freepik--shadow--inject-8"
					d="M284.16,454.89a64,64,0,0,1-14.83-1.69,54.61,54.61,0,0,1-13.09-4.83l-.09-.05c-.8-.45-1.82-1.06-3.14-1.88s-2.5-1.59-3.8-2.44-2.54-1.68-3.68-2.47-2.11-1.47-2.79-2a26.65,26.65,0,0,1-7.62-9,17.83,17.83,0,0,1-1.6-11.56,23.85,23.85,0,0,1,6-11.2c3.08-3.45,7.4-6.62,13.2-9.69a87,87,0,0,1,18.49-7.43A68.51,68.51,0,0,1,288,388.24h.5a54.73,54.73,0,0,1,14.56,1.89,63,63,0,0,1,12.87,5.14q2.35,1.31,5.07,3.09c1.84,1.2,3.38,2.28,4.7,3.3a15.31,15.31,0,0,1,5.15,6,11.39,11.39,0,0,1,.89,6.37l.44,0h.28a8.3,8.3,0,0,1,5,1.59,6,6,0,0,1,2.51,5.88,35,35,0,0,1-1.22,5.11,20.72,20.72,0,0,1-3.64,6.54,39.68,39.68,0,0,1-6.63,6.39,79.86,79.86,0,0,1-27.63,13.27,71.36,71.36,0,0,1-16.33,2.07ZM280.65,421c.18.13.38.27.61.41a11.94,11.94,0,0,0,5.21,2c.32,0,.63.05.92.05a6.32,6.32,0,0,0,2.14-.35c-.16-.12-.34-.24-.54-.37a12.67,12.67,0,0,0-5.27-2.09,7.22,7.22,0,0,0-.92-.06A6.31,6.31,0,0,0,280.65,421Z"
					style="fill: rgb(224, 224, 224); transform-origin: 286.612px 421.565px;" class="animable"></path>
				<path id="freepik--shadow--inject-8"
					d="M166.83,436.66,38.1,362.5c-2.71-1.56-2.71-4.1,0-5.67L299.35,206.06a10.85,10.85,0,0,1,9.83,0l128.73,74.15c2.72,1.56,2.72,4.11,0,5.67L176.66,436.66A10.91,10.91,0,0,1,166.83,436.66Z"
					style="fill: rgb(224, 224, 224); transform-origin: 238.009px 321.356px;" class="animable"></path>
			</g>
			<g id="freepik--Clouds--inject-8" class="animable" style="transform-origin: 115.31px 58.1075px;">
				<g id="freepik--clouds--inject-8" class="animable" style="transform-origin: 115.31px 58.1075px;">
					<path
						d="M158.2,59.36l-6.55,3.78a8.48,8.48,0,0,0,.06-.86v-1.9c0-3.38-2.37-4.75-5.3-3.06a10.34,10.34,0,0,0-3.16,3c-.48-4.25-3.81-5.83-7.86-3.5a17.53,17.53,0,0,0-7.92,13.73v2.84a7.46,7.46,0,0,0,.67,3.29l-5.44,3.14A6.5,6.5,0,0,0,119.76,85c0,1.87,1.32,2.63,2.94,1.69l35.5-20.49a6.49,6.49,0,0,0,2.94-5.09C161.14,59.18,159.83,58.42,158.2,59.36Z"
						style="fill: rgb(235, 235, 235); transform-origin: 140.45px 71.4183px;" id="elhbrqfnx0jbf"
						class="animable"></path>
					<path
						d="M114.89,42l-3.61,1.39v-8c0-6.32-5-7.83-10.5-4.67h0c-5.47,3.15-9.9,10.83-9.9,17.14V49a5.32,5.32,0,0,0-4.59.71h0a15.76,15.76,0,0,0-7.12,12.34v.52l-5,2.91a10.39,10.39,0,0,0-4.69,8.13c0,3,2.1,4.2,4.69,2.7l40.76-23.53a10.37,10.37,0,0,0,4.69-8.13C119.58,41.67,117.48,40.46,114.89,42Z"
						style="fill: rgb(235, 235, 235); transform-origin: 94.55px 53.0387px;" id="elevofygajd9"
						class="animable"></path>
				</g>
			</g>
			<g id="freepik--Plant--inject-8" class="animable" style="transform-origin: 50.0007px 308.404px;">
				<g id="freepik--Plants--inject-8" class="animable" style="transform-origin: 50.0007px 308.404px;">
					<path
						d="M60.93,333.55l6.81-3.93s4.05-16.83,2.44-32c-2.27-21.29-16.29-29.3-21.62-27.47s-6.87,8,1.95,20.72C55.71,298.37,62.1,314,60.93,333.55Z"
						style="fill: rgb(255, 196, 54); transform-origin: 57.393px 301.724px;" id="el3q0m3pu1452"
						class="animable"></path>
					<g id="elrcrqlsoiiy">
						<g style="opacity: 0.15; transform-origin: 57.393px 301.724px;" class="animable">
							<path
								d="M60.93,333.55l6.81-3.93s4.05-16.83,2.44-32c-2.27-21.29-16.29-29.3-21.62-27.47s-6.87,8,1.95,20.72C55.71,298.37,62.1,314,60.93,333.55Z"
								id="elmi1jg13vgir" class="animable" style="transform-origin: 57.393px 301.724px;">
							</path>
						</g>
					</g>
					<path
						d="M63.75,325.28h-.06a.47.47,0,0,1-.38-.55C67,305.08,60.18,283,51.69,273.83a.47.47,0,0,1,0-.67.48.48,0,0,1,.67,0C61,282.54,68,305,64.24,324.9A.45.45,0,0,1,63.75,325.28Z"
						style="fill: rgb(255, 255, 255); transform-origin: 58.415px 299.153px;" id="elb0jf991wu45"
						class="animable"></path>
					<path
						d="M42.13,346.83c-1.08.55-3.94-1.9-4.73-2.49a9.92,9.92,0,0,1-3.13-4,9.42,9.42,0,0,1-.55-5.65,23.17,23.17,0,0,1,.86-2.95c.33-.95.66-1.9,1-2.86a7.29,7.29,0,0,0,.58-2.9c-.16-2-1.85-3.47-3.39-4.75-1.7-1.41-3.45-3.25-3.32-5.63a8.43,8.43,0,0,1,2.35-4.89c1.22-1.39,2.64-2.6,3.74-4.07A5.88,5.88,0,0,0,36.91,303a6,6,0,0,0-.69-2.35,34.26,34.26,0,0,1-2.3-4.77c-.5-1.7-.31-3.77,1-4.9a5.51,5.51,0,0,1,4.16-.82,9.54,9.54,0,0,1,3.75,1.54c3.68,2.3,5.61,6.89,9.55,8.71a39.59,39.59,0,0,0,4.8,1.44,6,6,0,0,1,3.88,2.95c1.32,3-1.6,6.51-.72,9.69.78,2.82,3.42,4,4.8,6.58a5.82,5.82,0,0,1,.52,3.66,17.24,17.24,0,0,1-1.83,6,53.28,53.28,0,0,1-3.64,5.59S42.29,346.75,42.13,346.83Z"
						style="fill: rgb(255, 196, 54); transform-origin: 47.5997px 318.48px;" id="el6yk1f4gu33"
						class="animable"></path>
					<path
						d="M52.55,341.4h0a.47.47,0,0,1-.43-.51c1.72-18.68-6.06-39.8-12.17-46.12a.48.48,0,0,1,0-.67.47.47,0,0,1,.67,0C46.85,300.57,54.79,322,53,341A.46.46,0,0,1,52.55,341.4Z"
						style="fill: rgb(255, 255, 255); transform-origin: 46.5352px 317.68px;" id="elo4b372uvan"
						class="animable"></path>
					<path
						d="M50.69,318.37a.35.35,0,0,1-.14,0,63,63,0,0,0-13.47-2.87.49.49,0,0,1-.43-.52.46.46,0,0,1,.51-.43,65.09,65.09,0,0,1,13.72,2.93.48.48,0,0,1-.19.92Z"
						style="fill: rgb(255, 255, 255); transform-origin: 43.9085px 316.474px;" id="elhler1y8zp7"
						class="animable"></path>
				</g>
			</g>
			<g id="freepik--Device--inject-8" class="animable" style="transform-origin: 233.18px 312.089px;">
				<g id="freepik--device--inject-8" class="animable" style="transform-origin: 233.18px 312.089px;">
					<g id="freepik--Mobile--inject-8" class="animable" style="transform-origin: 233.18px 312.089px;">
						<path
							d="M46.62,357.77,166.3,426.86a12.9,12.9,0,0,0,12.49.23L419.74,288c3.8-2.19,6.87-7.1,6.88-11s-3.08-8.76-6.88-10.95L300.5,197.23a15.19,15.19,0,0,0-13.74,0L46.62,335.87c-3.8,2.2-6.88,7.1-6.88,10.95S42.82,355.58,46.62,357.77Z"
							style="fill: rgb(55, 71, 79); transform-origin: 233.18px 312.089px;" id="elh502fcf35wb"
							class="animable"></path>
						<path
							d="M166.3,426.86,46.62,357.77c-3.8-2.19-6.88-7.09-6.88-10.95s3.08-8.75,6.88-10.95L172.81,263V428.57A12.69,12.69,0,0,1,166.3,426.86Z"
							style="fill: rgb(38, 50, 56); transform-origin: 106.275px 345.785px;" id="eludh3j0kr0lc"
							class="animable"></path>
						<path
							d="M169.15,414.55a13.47,13.47,0,0,0,12.12,0l238.5-137.7c5.13-3,5.13-7.81,0-10.77L300.51,197.23a15.19,15.19,0,0,0-13.74,0L46.63,335.87c-3.78,2.19-3.78,5.76,0,7.94Z"
							style="fill: rgb(69, 90, 100); transform-origin: 233.706px 305.789px;" id="el4y9nouclmjk"
							class="animable"></path>
						<path
							d="M180.73,400.68a14.39,14.39,0,0,0,13.06,0L399,282.19c3.61-2.08,3.61-5.46,0-7.54L286.83,209.89a14.45,14.45,0,0,0-13.06,0L68.54,328.37c-3.59,2.08-3.59,5.47,0,7.55Z"
							style="fill: rgb(55, 71, 79); transform-origin: 233.777px 305.289px;" id="el8zkw58b1cwd"
							class="animable"></path>
						<path
							d="M280.69,208.35a13.22,13.22,0,0,1,6.14,1.54L399,274.65c3.61,2.08,3.61,5.46,0,7.54L376.78,295l-96.09-61.36Z"
							style="fill: rgb(38, 50, 56); transform-origin: 341.199px 251.675px;" id="eleihwuguphue"
							class="animable"></path>
						<path
							d="M273.69,214.79a14.45,14.45,0,0,1,13.06,0l112.19,64.76a6.8,6.8,0,0,1,1.71,1.37,6.59,6.59,0,0,1-1.63,1.27L193.79,400.68a14.39,14.39,0,0,1-13.06,0L68.54,335.92a6.68,6.68,0,0,1-1.7-1.36,6.55,6.55,0,0,1,1.62-1.28Z"
							style="fill: rgb(250, 250, 250); transform-origin: 233.745px 307.739px;" id="el6idavkuojs"
							class="animable"></path>
						<path
							d="M358,244.36l-19.88-11.48c-1.19-.69-1.25-1.76-.14-2.4a4.61,4.61,0,0,1,4.17.07L362,242c1.19.69,1.25,1.76.13,2.41A4.62,4.62,0,0,1,358,244.36Z"
							style="fill: rgb(38, 50, 56); transform-origin: 350.059px 237.444px;" id="el24kzec8i2dt"
							class="animable"></path>
						<path
							d="M323.87,224.68a1.23,1.23,0,0,1,0-2.33,4.47,4.47,0,0,1,4,0,1.23,1.23,0,0,1,0,2.33A4.47,4.47,0,0,1,323.87,224.68Z"
							style="fill: rgb(38, 50, 56); transform-origin: 325.87px 223.515px;" id="elguknwwt7imm"
							class="animable"></path>
						<path
							d="M315.81,220a1.23,1.23,0,0,1,0-2.33,4.47,4.47,0,0,1,4,0,1.23,1.23,0,0,1,0,2.33A4.47,4.47,0,0,1,315.81,220Z"
							style="fill: rgb(38, 50, 56); transform-origin: 317.81px 218.835px;" id="el4miv2xtfwe3"
							class="animable"></path>
						<path
							d="M380.29,257.25a1.23,1.23,0,0,1,0-2.33,4.47,4.47,0,0,1,4,0,1.23,1.23,0,0,1,0,2.33A4.47,4.47,0,0,1,380.29,257.25Z"
							style="fill: rgb(38, 50, 56); transform-origin: 382.29px 256.085px;" id="elf71oohgu8uc"
							class="animable"></path>
						<path
							d="M372.23,252.59a1.23,1.23,0,0,1,0-2.33,4.47,4.47,0,0,1,4,0,1.23,1.23,0,0,1,0,2.33A4.47,4.47,0,0,1,372.23,252.59Z"
							style="fill: rgb(38, 50, 56); transform-origin: 374.23px 251.425px;" id="elob2zpiu275b"
							class="animable"></path>
					</g>
					<g id="freepik--mail-notification--inject-8" class="animable"
						style="transform-origin: 208.9px 361.382px;">
						<path
							d="M175.72,367.59V368a2.4,2.4,0,0,0,1.08,1.89l23.35,13.48a2.46,2.46,0,0,0,2.18,0L241,361.07a2.42,2.42,0,0,0,1.08-1.89v-.43a2.4,2.4,0,0,0-1.08-1.89l-23.35-13.48a2.46,2.46,0,0,0-2.18,0L176.8,365.7A2.4,2.4,0,0,0,175.72,367.59Z"
							style="fill: rgb(255, 196, 54); transform-origin: 208.9px 363.375px;" id="elaqv97f93nll"
							class="animable"></path>
						<path
							d="M175.72,367.59V368a2.4,2.4,0,0,0,1.08,1.89l23.35,13.48a2.46,2.46,0,0,0,2.18,0L241,361.07a2.42,2.42,0,0,0,1.08-1.89v-.43a2.4,2.4,0,0,0-1.08-1.89l-23.35-13.48a2.46,2.46,0,0,0-2.18,0L176.8,365.7A2.4,2.4,0,0,0,175.72,367.59Z"
							style="fill: rgb(255, 196, 54); transform-origin: 208.9px 363.375px;" id="elzk0vvc5cpc"
							class="animable"></path>
						<g id="elc9i0xnsbuow">
							<path
								d="M241,356.86l-23.35-13.48a2.46,2.46,0,0,0-2.18,0l-14.22,8.22v32h0a2.28,2.28,0,0,0,1.09-.26L241,361.07a2.42,2.42,0,0,0,1.08-1.89v-.43A2.4,2.4,0,0,0,241,356.86Z"
								style="fill: rgb(255, 255, 255); opacity: 0.3; transform-origin: 221.665px 363.363px;"
								class="animable"></path>
						</g>
						<g id="el331jnvcks0k">
							<path
								d="M241,356.86l-23.35-13.48a2.46,2.46,0,0,0-2.18,0l-14.22,8.22v32h0a2.28,2.28,0,0,0,1.09-.26L241,361.07a2.42,2.42,0,0,0,1.08-1.89v-.43A2.4,2.4,0,0,0,241,356.86Z"
								style="opacity: 0.15; transform-origin: 221.665px 363.363px;" class="animable"></path>
						</g>
						<g id="elf6f65gumfyg">
							<path
								d="M201.24,351.6,176.8,365.7a2.4,2.4,0,0,0-1.08,1.89V368a2.4,2.4,0,0,0,1.08,1.89l23.35,13.48a2.25,2.25,0,0,0,1.09.26h0Z"
								style="fill: rgb(255, 255, 255); opacity: 0.3; transform-origin: 188.48px 367.615px;"
								class="animable"></path>
						</g>
						<g id="elnaf6bdq4kfl">
							<path
								d="M201.24,351.6,176.8,365.7a2.4,2.4,0,0,0-1.08,1.89V368a2.4,2.4,0,0,0,1.08,1.89l23.35,13.48a2.25,2.25,0,0,0,1.09.26h0Z"
								style="opacity: 0.2; transform-origin: 188.48px 367.615px;" class="animable"></path>
						</g>
						<path
							d="M196.41,378.28,176.8,367a.67.67,0,0,1,0-1.26l38.66-22.32a2.46,2.46,0,0,1,2.18,0L241,356.86a.67.67,0,0,1,0,1.26l-6.42,3.7-2.24,1.3-30,17.32a2.39,2.39,0,0,1-2.18,0l-1.9-1.1Z"
							style="fill: rgb(255, 196, 54); transform-origin: 208.9px 361.934px;" id="elfmj46yzqgn6"
							class="animable"></path>
						<g id="elreupbfeh4zk">
							<path
								d="M196.41,378.28,176.8,367a.67.67,0,0,1,0-1.26l38.66-22.32a2.46,2.46,0,0,1,2.18,0L241,356.86a.67.67,0,0,1,0,1.26l-6.42,3.7-2.24,1.3-30,17.32a2.39,2.39,0,0,1-2.18,0l-1.9-1.1Z"
								style="fill: rgb(255, 255, 255); opacity: 0.3; transform-origin: 208.9px 361.934px;"
								class="animable"></path>
						</g>
						<g id="elegqfqbadp7b">
							<path
								d="M214.21,359.47,241,356.86l-26.54,1.5,3.19-15a2.42,2.42,0,0,0-1.19-.25l-5,20.25-35.09,2.9a.75.75,0,0,0,.44.68l28.34-1.64-3.9,15.38,5-15.45h0l4.84-.28a2.57,2.57,0,0,0,1.59-.67h0a2.65,2.65,0,0,0,.81-1.4Z"
								style="opacity: 0.15; transform-origin: 208.685px 361.894px;" class="animable"></path>
						</g>
						<g id="elg2nmelu4omw">
							<path
								d="M184.73,365.59l26.72-2.21,1-3.82.53-2.13,3.53-14.3a2.31,2.31,0,0,0-1,.25l-19.33,11.16L176.8,365.7a.8.8,0,0,0-.44.58l5.36-.44Z"
								style="fill: rgb(255, 255, 255); opacity: 0.3; transform-origin: 196.435px 354.705px;"
								class="animable"></path>
						</g>
						<path
							d="M212.13,340.19a9.77,9.77,0,0,1,8.84,0c2.44,1.41,2.44,3.69,0,5.1a9.77,9.77,0,0,1-8.84,0C209.69,343.88,209.69,341.6,212.13,340.19Z"
							style="fill: rgb(242, 143, 143); transform-origin: 216.55px 342.74px;" id="el8p81a29pbd5"
							class="animable"></path>
						<path
							d="M213.46,343.58a.42.42,0,0,1-.18-.06.14.14,0,0,1-.05-.13l.37-1.6s0-.09,0-.15a.25.25,0,0,1,.13-.14l.9-.52a.38.38,0,0,1,.19-.05.39.39,0,0,1,.2.05l4.74,2.73a.12.12,0,0,1,0,.23l-1,.56a.42.42,0,0,1-.2,0,.4.4,0,0,1-.2,0l-3.2-1.85-.21.88c0,.05-.05.08-.11.11a.36.36,0,0,1-.21,0Z"
							style="fill: rgb(250, 250, 250); transform-origin: 216.537px 342.721px;" id="elzcy78y35en"
							class="animable"></path>
					</g>
					<g id="freepik--Notification--inject-8" class="animable"
						style="transform-origin: 292.615px 314.851px;">
						<path
							d="M257,350.55l-26.26-15.16c-.6-.35-.6-.91,0-1.25l95.32-55a2.41,2.41,0,0,1,2.16,0l26.27,15.17c.6.34.6.9,0,1.25l-95.32,55A2.37,2.37,0,0,1,257,350.55Z"
							style="fill: rgb(255, 196, 54); transform-origin: 292.615px 314.851px;" id="elon7sjvqrvxk"
							class="animable"></path>
						<path
							d="M252,333.42a.52.52,0,0,1-.27.07h-.21l-5.46-.62,3.23,1.87a.13.13,0,0,1,0,.24l-.64.37a.35.35,0,0,1-.21,0,.36.36,0,0,1-.21,0l-5.07-2.92c-.06,0-.09-.08-.09-.13a.15.15,0,0,1,.09-.12l.55-.32a.54.54,0,0,1,.27-.07h.22l5.46.62-3.24-1.87a.13.13,0,0,1,0-.24l.64-.37a.46.46,0,0,1,.21-.05.41.41,0,0,1,.21.05l5.07,2.93a.12.12,0,0,1,0,.24Z"
							style="fill: rgb(250, 250, 250); transform-origin: 247.87px 332.623px;" id="elmtxwg4nkdi"
							class="animable"></path>
						<path
							d="M251.65,331.25a2.65,2.65,0,0,1-.69-.55,1.14,1.14,0,0,1-.29-.61,1,1,0,0,1,.16-.62,1.66,1.66,0,0,1,.63-.55,3.42,3.42,0,0,1,.95-.37,4.67,4.67,0,0,1,1.05-.1,5,5,0,0,1,1,.14,3.62,3.62,0,0,1,.9.37l.35.2a.13.13,0,0,1,0,.24l-2.62,1.52a1.26,1.26,0,0,0,.4.14,2,2,0,0,0,.43,0,3.29,3.29,0,0,0,.43-.09,1.9,1.9,0,0,0,.38-.17,1.52,1.52,0,0,0,.36-.26.5.5,0,0,0,.13-.23.32.32,0,0,1,.06-.13.44.44,0,0,1,.12-.1l.63-.36a.46.46,0,0,1,.21-.05.33.33,0,0,1,.21.05.37.37,0,0,1,.16.23.65.65,0,0,1,0,.39,1.25,1.25,0,0,1-.28.49,2.46,2.46,0,0,1-.65.52,3.91,3.91,0,0,1-.95.37,4.56,4.56,0,0,1-1.05.1,4.7,4.7,0,0,1-1-.17A4.61,4.61,0,0,1,251.65,331.25Zm.75-1.79a1.14,1.14,0,0,0-.32.26.5.5,0,0,0-.1.26.39.39,0,0,0,.07.23.52.52,0,0,0,.17.19l1.77-1a2.09,2.09,0,0,0-.3-.11,1.51,1.51,0,0,0-.38-.06,2.18,2.18,0,0,0-.43.05A2.34,2.34,0,0,0,252.4,329.46Z"
							style="fill: rgb(250, 250, 250); transform-origin: 253.654px 330.135px;" id="el5n3i3o7kfx"
							class="animable"></path>
						<path
							d="M260.62,326.53l-1.53-1.71a.24.24,0,0,1-.06-.11s0-.08.09-.12l.59-.35a.48.48,0,0,1,.22-.05.46.46,0,0,1,.21.05l0,0,2.44,2.77a.34.34,0,0,1,.06.12s0,.08-.09.13l-.6.34a.36.36,0,0,1-.22.05l-.21,0-2.85-.77,1.33,1.65a.34.34,0,0,1,.06.12s0,.08-.09.12l-.59.35a.37.37,0,0,1-.22.05.71.71,0,0,1-.21,0l-4.8-1.4s0,0-.06,0a.12.12,0,0,1,0-.24l.59-.35a.37.37,0,0,1,.22-.05l.19,0,2.95.88-1.49-1.73a.14.14,0,0,1,0-.11.12.12,0,0,1,.08-.12l.6-.35a.44.44,0,0,1,.21,0,.6.6,0,0,1,.2,0Z"
							style="fill: rgb(250, 250, 250); transform-origin: 258.305px 326.684px;" id="elknnbtwjhod"
							class="animable"></path>
						<path
							d="M264.17,324a2.67,2.67,0,0,1-.69-.56,1.11,1.11,0,0,1-.29-.61.86.86,0,0,1,.15-.61,1.85,1.85,0,0,1,.63-.56,3.61,3.61,0,0,1,1-.37,5.24,5.24,0,0,1,1-.1,4.5,4.5,0,0,1,1,.15,3.26,3.26,0,0,1,.9.36l.35.2q.09.06.09.12c0,.05,0,.09-.09.13l-2.62,1.51a1.07,1.07,0,0,0,.39.14,2.07,2.07,0,0,0,.43,0,1.72,1.72,0,0,0,.44-.09,1.46,1.46,0,0,0,.38-.17,1.28,1.28,0,0,0,.36-.26.57.57,0,0,0,.13-.22.38.38,0,0,1,.05-.14.29.29,0,0,1,.13-.09l.63-.37a.47.47,0,0,1,.42,0,.48.48,0,0,1,.16.24.65.65,0,0,1,0,.39,1.68,1.68,0,0,1-.28.49,2.52,2.52,0,0,1-.66.51,3.42,3.42,0,0,1-.95.37,4,4,0,0,1-1,.1,4.26,4.26,0,0,1-1.06-.17A4.06,4.06,0,0,1,264.17,324Zm.75-1.79a.88.88,0,0,0-.32.26.41.41,0,0,0-.1.26.38.38,0,0,0,.06.23,1,1,0,0,0,.17.18l1.78-1a1.85,1.85,0,0,0-.31-.11,1.44,1.44,0,0,0-.37-.05,1.3,1.3,0,0,0-.43.05A1.4,1.4,0,0,0,264.92,322.24Z"
							style="fill: rgb(250, 250, 250); transform-origin: 266.166px 322.876px;" id="elapr0uspu22j"
							class="animable"></path>
						<path
							d="M268.25,319.77a.67.67,0,0,1,.11-.47,1.17,1.17,0,0,1,.43-.39,2.81,2.81,0,0,1,1-.36,3.51,3.51,0,0,1,1,0,.77.77,0,0,1,0-.3.89.89,0,0,1,.11-.31,1.13,1.13,0,0,1,.22-.28,1.92,1.92,0,0,1,.31-.23,2.86,2.86,0,0,1,.89-.34,3.28,3.28,0,0,1,.88-.05,3.49,3.49,0,0,1,.85.19,4.93,4.93,0,0,1,.77.36l2.12,1.22a.14.14,0,0,1,0,.25l-.6.34a.46.46,0,0,1-.21.05.48.48,0,0,1-.22-.05l-2.07-1.2a2.11,2.11,0,0,0-.95-.31,1.55,1.55,0,0,0-.78.21.55.55,0,0,0-.33.43c0,.16.14.35.47.55l2.11,1.22a.12.12,0,0,1,0,.24l-.6.35a.41.41,0,0,1-.21.05.46.46,0,0,1-.21-.05l-2.07-1.2a1.92,1.92,0,0,0-.95-.31,1.35,1.35,0,0,0-.78.21.55.55,0,0,0-.34.44c0,.17.16.36.52.56l2.07,1.19a.17.17,0,0,1,.08.13.15.15,0,0,1-.08.12l-.6.34a.47.47,0,0,1-.42,0l-3.66-2.11a.12.12,0,0,1,0-.24l.6-.35a.41.41,0,0,1,.21-.05.46.46,0,0,1,.21.05Z"
							style="fill: rgb(250, 250, 250); transform-origin: 272.003px 319.725px;" id="elpiqxfzoqwre"
							class="animable"></path>
						<path
							d="M275.06,316.55a.86.86,0,0,1-.21-.29.64.64,0,0,1,0-.39,1,1,0,0,1,.23-.45,2.05,2.05,0,0,1,.6-.47,4.34,4.34,0,0,1,.83-.36,4.17,4.17,0,0,1,.86-.14,2.88,2.88,0,0,1,.87.1,3.34,3.34,0,0,1,.84.33l2.31,1.33a.17.17,0,0,1,.08.13.14.14,0,0,1-.08.12l-.6.34a.36.36,0,0,1-.21.05.33.33,0,0,1-.21-.05l-.26-.15a.67.67,0,0,1-.09.5,1.6,1.6,0,0,1-.63.55,3,3,0,0,1-.69.3,2.91,2.91,0,0,1-.7.11,3.63,3.63,0,0,1-.67-.06,2.2,2.2,0,0,1-.59-.23c-.36-.21-.51-.45-.46-.71a1.52,1.52,0,0,1,.61-.84l1.06-.86a1,1,0,0,0-.67-.14,1.78,1.78,0,0,0-.66.22.81.81,0,0,0-.25.21.56.56,0,0,0-.06.21.5.5,0,0,1,0,.13.31.31,0,0,1-.11.08l-.73.43a.34.34,0,0,1-.18,0A.2.2,0,0,1,275.06,316.55Zm3.52.52a1.55,1.55,0,0,0,.4-.32.59.59,0,0,0,.15-.32.45.45,0,0,0-.07-.28.7.7,0,0,0-.25-.23l-.08-.05-.88.73a.78.78,0,0,0-.3.36c0,.09,0,.18.14.25a.61.61,0,0,0,.41,0A1.64,1.64,0,0,0,278.58,317.07Z"
							style="fill: rgb(250, 250, 250); transform-origin: 278.145px 316.279px;" id="elm5unbjmnrs"
							class="animable"></path>
						<path
							d="M277.89,312a.47.47,0,0,1,.42,0l.61.35a.15.15,0,0,1,.09.12c0,.05,0,.09-.09.13l-.67.39a.46.46,0,0,1-.21.05.48.48,0,0,1-.22-.05l-.61-.36a.13.13,0,0,1,0-.24Zm5.53,3c.06,0,.09.08.09.13s0,.08-.09.12l-.6.34a.43.43,0,0,1-.21.05.36.36,0,0,1-.21-.05l-3.66-2.11a.14.14,0,0,1-.08-.12.12.12,0,0,1,.08-.12l.6-.35a.46.46,0,0,1,.21-.05.41.41,0,0,1,.21.05Z"
							style="fill: rgb(250, 250, 250); transform-origin: 280.32px 313.796px;" id="el8r6mbwvvkj5"
							class="animable"></path>
						<path
							d="M285.52,313.81a.13.13,0,0,1,0,.24l-.59.35a.46.46,0,0,1-.21.05.48.48,0,0,1-.22-.05l-5.15-3a.17.17,0,0,1-.08-.13.15.15,0,0,1,.08-.12l.6-.34a.36.36,0,0,1,.21,0,.38.38,0,0,1,.22,0Z"
							style="fill: rgb(250, 250, 250); transform-origin: 282.435px 312.622px;" id="elhx9yzps9q5k"
							class="animable"></path>
						<path
							d="M254.39,337.64l77.78-44.9a3.47,3.47,0,0,1,3.12-.19c.77.44.62,1.25-.33,1.8l-77.78,44.91a3.5,3.5,0,0,1-3.13.19C253.28,339,253.44,338.2,254.39,337.64Z"
							style="fill: rgb(250, 250, 250); transform-origin: 294.672px 315.999px;" id="el9brjlloyvdn"
							class="animable"></path>
						<path
							d="M259.85,340.8l77.78-44.9a3.48,3.48,0,0,1,3.12-.2c.78.45.62,1.25-.33,1.81l-77.78,44.9a3.5,3.5,0,0,1-3.13.2C258.75,342.16,258.9,341.35,259.85,340.8Z"
							style="fill: rgb(250, 250, 250); transform-origin: 300.136px 319.155px;" id="elv7rnmb05ofd"
							class="animable"></path>
					</g>
				</g>
			</g>
			<g id="freepik--Character--inject-8" class="animable" style="transform-origin: 258.98px 216.098px;">
				<g id="freepik--character-envelope--inject-8" class="animable"
					style="transform-origin: 258.98px 216.098px;">
					<polygon id="freepik--shadow--inject-8"
						points="144.38 369.94 103.76 346.49 285.72 241.43 327.17 264.41 144.38 369.94"
						style="fill: rgb(224, 224, 224); transform-origin: 215.465px 305.685px;" class="animable">
					</polygon>
					<g id="freepik--Back--inject-8" class="animable" style="transform-origin: 225.01px 222.744px;">
						<path
							d="M133.39,223.73l173.06-99.92,6.92,4a7.24,7.24,0,0,1,3.26,5.64V261.11a7.22,7.22,0,0,1-3.26,5.64L146.83,362.91a7.24,7.24,0,0,1-6.51,0l-3.67-2.12a7.24,7.24,0,0,1-3.26-5.64Z"
							style="fill: rgb(255, 196, 54); transform-origin: 225.01px 243.746px;" id="elelgkh2kqjxh"
							class="animable"></path>
						<g id="el0f4rv3xehxk">
							<path
								d="M133.39,223.73l173.06-99.92,6.92,4a7.24,7.24,0,0,1,3.26,5.64V261.11a7.22,7.22,0,0,1-3.26,5.64L146.83,362.91a7.24,7.24,0,0,1-6.51,0l-3.67-2.12a7.24,7.24,0,0,1-3.26-5.64Z"
								style="opacity: 0.2; transform-origin: 225.01px 243.746px;" class="animable"></path>
						</g>
						<path
							d="M305.49,112.59l.71-.38-2.69-1.57h0a5.19,5.19,0,0,0-.71-.35L226.64,82.08a5.26,5.26,0,0,0-5.85,1.86l-85.2,124.42a14.76,14.76,0,0,0-2.2,7.1v8.27l2.64,1.53L306.45,123.81v-8.26A5.56,5.56,0,0,0,305.49,112.59Z"
							style="fill: rgb(255, 196, 54); transform-origin: 219.92px 153.54px;" id="elfq728emwfn"
							class="animable"></path>
						<g id="elb30eh2e0k29">
							<path
								d="M224.31,84.54a4.63,4.63,0,0,0-.88.94l-85.2,124.41a13,13,0,0,0-1.58,3.56L134,211.92a15.49,15.49,0,0,1,.69-1.88.42.42,0,0,1,0-.06c.12-.26.24-.5.37-.75a.67.67,0,0,1,.06-.12,7.43,7.43,0,0,1,.45-.75L220.79,84a4.33,4.33,0,0,1,.42-.52c.15-.14.3-.29.46-.42Z"
								style="opacity: 0.1; transform-origin: 179.155px 148.255px;" class="animable"></path>
						</g>
						<g id="el9fxek4dm7ga">
							<path
								d="M306.17,112.19a4.08,4.08,0,0,0-.73-.35L229.27,83.61a5.23,5.23,0,0,0-5,.93L221.67,83a5.28,5.28,0,0,1,5-.93L302.8,110.3a4.25,4.25,0,0,1,.71.35Z"
								style="fill: rgb(255, 255, 255); opacity: 0.35; transform-origin: 263.92px 96.9972px;"
								class="animable"></path>
						</g>
						<path d="M135.14,209.11a6.76,6.76,0,0,1,.45-.75A6.76,6.76,0,0,0,135.14,209.11Z"
							style="fill: rgb(255, 196, 54); transform-origin: 135.365px 208.735px;" id="elsex6znmsj7m"
							class="animable"></path>
						<path d="M221.22,83.43a4.47,4.47,0,0,1,.45-.42A4.47,4.47,0,0,0,221.22,83.43Z"
							style="fill: rgb(255, 196, 54); transform-origin: 221.445px 83.22px;" id="elbmabskbfp68"
							class="animable"></path>
						<path d="M134,211.92a16.33,16.33,0,0,1,.7-1.89A16.33,16.33,0,0,0,134,211.92Z"
							style="fill: rgb(255, 196, 54); transform-origin: 134.35px 210.975px;" id="elreg8zsx7jh"
							class="animable"></path>
						<path d="M134.71,210c.11-.26.24-.51.36-.75C135,209.47,134.82,209.72,134.71,210Z"
							style="fill: rgb(255, 196, 54); transform-origin: 134.89px 209.625px;" id="el1dhluxyq49r"
							class="animable"></path>
						<g id="el86wk240d8ms">
							<path d="M134.69,210s0,0,0-.05S134.69,210,134.69,210Z"
								style="opacity: 0.2; transform-origin: 134.69px 209.968px;" class="animable"></path>
						</g>
						<g id="elr8wdzxo0vtl">
							<polygon points="133.99 211.92 133.99 211.92 133.99 211.92 133.99 211.92"
								style="opacity: 0.2; transform-origin: 133.99px 211.92px;" class="animable"></polygon>
						</g>
						<g id="ely508oivq0nm">
							<polygon points="221.67 83.01 221.67 83.01 221.67 83.01 221.67 83.01"
								style="opacity: 0.2; transform-origin: 221.67px 83.01px;" class="animable"></polygon>
						</g>
						<g id="el1kz44jzq38i">
							<path d="M135.07,209.23a.75.75,0,0,1,.07-.12A.75.75,0,0,0,135.07,209.23Z"
								style="opacity: 0.2; transform-origin: 135.105px 209.17px;" class="animable"></path>
						</g>
						<g id="el1j48k28lw5v">
							<path d="M220.79,83.94a3.42,3.42,0,0,1,.43-.51A3.42,3.42,0,0,0,220.79,83.94Z"
								style="opacity: 0.2; transform-origin: 221.005px 83.685px;" class="animable"></path>
						</g>
						<path
							d="M223.43,85.48l-85.2,124.41A14.83,14.83,0,0,0,136,217v8.26l173.06-99.92v-8.26a6,6,0,0,0-3.65-5.24L229.28,83.62A5.23,5.23,0,0,0,223.43,85.48Z"
							style="fill: rgb(255, 196, 54); transform-origin: 222.53px 154.308px;" id="elcz9fvtiukyv"
							class="animable"></path>
						<g id="el81c6f5s1pbx">
							<path
								d="M309.09,117.08a5.59,5.59,0,0,0-.93-2.91L136.65,213.45l0,0A12.86,12.86,0,0,0,136,217v8.26l173.06-99.92Z"
								style="opacity: 0.05; transform-origin: 222.545px 169.715px;" class="animable"></path>
						</g>
					</g>
					<g id="freepik--Paper--inject-8" class="animable" style="transform-origin: 225.245px 208.137px;">
						<path
							d="M301.7,82a2,2,0,0,0-.81-1.81l-5.29-3a2,2,0,0,0-2,.2l-142,82a6.22,6.22,0,0,0-2.81,4.87v170a2,2,0,0,0,.82,1.82l5.27,3a2,2,0,0,0,2-.19l142-81.95A6.23,6.23,0,0,0,301.7,252Z"
							style="fill: rgb(255, 196, 54); transform-origin: 225.245px 208.137px;" id="elvcu272zolpc"
							class="animable"></path>
						<g id="elc0tgsw9x5xh">
							<path
								d="M301.7,82a2,2,0,0,0-.81-1.81l-5.29-3a2,2,0,0,0-2,.2l-142,82a6.22,6.22,0,0,0-2.81,4.87v170a2,2,0,0,0,.82,1.82l5.27,3a2,2,0,0,0,2-.19l142-81.95A6.23,6.23,0,0,0,301.7,252Z"
								style="fill: rgb(255, 255, 255); opacity: 0.95; transform-origin: 225.245px 208.137px;"
								class="animable"></path>
						</g>
						<path
							d="M156.94,338.83l142-81.95A6.23,6.23,0,0,0,301.7,252V82c0-1.79-1.26-2.51-2.81-1.62l-141.95,82a6.23,6.23,0,0,0-2.81,4.87v170C154.13,339,155.39,339.72,156.94,338.83Z"
							style="fill: rgb(255, 196, 54); transform-origin: 227.915px 209.605px;" id="el0o3uqzvt4yxo"
							class="animable"></path>
						<g id="eltp4397gedr8">
							<path
								d="M156.94,338.83l142-81.95A6.23,6.23,0,0,0,301.7,252V82c0-1.79-1.26-2.51-2.81-1.62l-141.95,82a6.23,6.23,0,0,0-2.81,4.87v170C154.13,339,155.39,339.72,156.94,338.83Z"
								style="fill: rgb(255, 255, 255); opacity: 0.8; transform-origin: 227.915px 209.605px;"
								class="animable"></path>
						</g>
						<path
							d="M154.13,337.2a2.11,2.11,0,0,0,.66,1.72c-.95-.54-4.63-2.68-5.1-2.94a1.94,1.94,0,0,1-.83-1.81v-170a5.62,5.62,0,0,1,.83-2.76l5.27,3a5.72,5.72,0,0,0-.83,2.78Z"
							style="fill: rgb(255, 196, 54); transform-origin: 151.904px 250.165px;" id="elvna1cxecjc9"
							class="animable"></path>
						<g id="elac4ln9pzxl">
							<path
								d="M154.13,337.2a2.11,2.11,0,0,0,.66,1.72c-.95-.54-4.63-2.68-5.1-2.94a1.94,1.94,0,0,1-.83-1.81v-170a5.62,5.62,0,0,1,.83-2.76l5.27,3a5.72,5.72,0,0,0-.83,2.78Z"
								style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 151.904px 250.165px;"
								class="animable"></path>
						</g>
						<g id="elfbssc1qzlng">
							<path
								d="M154.13,337.2a2.11,2.11,0,0,0,.66,1.72c-.95-.54-4.63-2.68-5.1-2.94a1.94,1.94,0,0,1-.83-1.81v-170a5.62,5.62,0,0,1,.83-2.76l5.27,3a5.72,5.72,0,0,0-.83,2.78Z"
								style="opacity: 0.05; transform-origin: 151.904px 250.165px;" class="animable"></path>
						</g>
					</g>
					<g id="freepik--character--inject-8" class="animable" style="transform-origin: 243.16px 162.142px;">
						<path
							d="M205.93,208.72c-.62,15.82.44,49.71.44,49.71s16.77,5.06,28.16,3.18,35.77-19.16,35.77-19.16l-4.06-36.67Z"
							style="fill: rgb(55, 71, 79); transform-origin: 238.018px 233.904px;" id="eltw0mfmkoiga"
							class="animable"></path>
						<path
							d="M244.85,257.85,247.57,232c10.69-6.37,14.16-15.19,14.16-15.19-9.72,12.73-19.86,10.67-19.86,10.67v31.72C242.84,258.8,243.84,258.34,244.85,257.85Z"
							style="fill: rgb(38, 50, 56); transform-origin: 251.8px 238.005px;" id="el9070a15p2jf"
							class="animable"></path>
						<path
							d="M272.93,161.08c2.72-13.77,3.95-32.06-8-35.42-3.12-.87-11.06-.26-11.06-.26l-12.91.64c-7.19.91-17.27,2.34-19.91,3-6.94,1.71-9,13-12.11,38.14-1.94,15.72-3.6,28-3.6,43.3,12.68,11.37,52.33,6.89,61.35-.51C267,192.62,268,186.19,272.93,161.08Z"
							style="fill: rgb(69, 90, 100); transform-origin: 240.043px 171.288px;" id="elefdtyr4nxbo"
							class="animable"></path>
						<path
							d="M238.74,121.35c-.12,2.51,2.77,6.75,7.2,9.73s8.24,4.19,8.72,5.43c-2.1.39-4,1.43-5.56,5-1.49,3.44-1.48,3.55-6.59,0s-9.68-11.71-9.66-14.43,4-8,6-7.53Z"
							style="fill: rgb(55, 71, 79); transform-origin: 243.755px 131.826px;" id="eleu1cb84cw7t"
							class="animable"></path>
						<path
							d="M254.66,136.51c1.5-1.64,2.92-5.75,3.1-7.52l.65-6.45a3.44,3.44,0,0,1,1.77,1.15c.55.84,3.27,6.46,3.18,9.59s-.82,7.38-1.88,9.17-1.77-1.36-2.47-2.59C258.11,138.28,256.88,136.55,254.66,136.51Z"
							style="fill: rgb(55, 71, 79); transform-origin: 259.011px 132.764px;" id="eld9atci7tm88"
							class="animable"></path>
						<path
							d="M252.64,140.11s.25,11.33-.8,17.36a18.34,18.34,0,0,0,6.75-.18s-1.73,2.13-8.07,1.15C250.52,158.44,252.47,146.61,252.64,140.11Z"
							style="fill: rgb(55, 71, 79); transform-origin: 254.555px 149.404px;" id="elb1o4kwvdccf"
							class="animable"></path>
						<path
							d="M279.47,87.77a18,18,0,0,0-35.89-1.36l-8.17-5.81a6.38,6.38,0,0,0-5.26,1.93c-2.24,2.36-.86,9.61,2.07,16.69,0,0,2.95,12.91,4.09,15a5.87,5.87,0,0,0,3.43,2.68l-.28-7.86,32.67-2.35-3.23-2.3A18,18,0,0,0,279.47,87.77Z"
							style="fill: rgb(38, 50, 56); transform-origin: 254.255px 93.6099px;" id="el7bu7afffjz"
							class="animable"></path>
						<path
							d="M239,99.72c-1,.63-2-1.55-3.85-2.67-1.6-1-5.19-2.63-7.55,1.34-2.55,4.27,2.08,10.17,5.32,11.39,4.8,1.8,6.51-2,6.51-2l-1,20C245,139.72,264.35,139,257.76,129l.79-7.71s5.17.7,7.68.28c4.17-.71,6.76-4,8-8.6,1.93-7.31,2.62-13.2.68-27.48-2.13-15.66-20.38-15.55-30.14-9.21S239,99.72,239,99.72Z"
							style="fill: rgb(255, 168, 167); transform-origin: 251.464px 104.445px;" id="elbifgm7v2kst"
							class="animable"></path>
						<path
							d="M278.85,70.86a6.74,6.74,0,0,0-4.41-.51,5.34,5.34,0,0,0-3.2-5.37,6.18,6.18,0,0,0-6.76.91c.44-1.59-1-3.21-2.62-3.57a8.62,8.62,0,0,0-4.81.8c-2.29.87-4.55,1.85-6.88,2.63-4.11,1.37-8.48,2.15-12.19,4.38a7.36,7.36,0,0,0-2.32,2,6.39,6.39,0,0,0-1,4.07,8.14,8.14,0,0,0,.2,1.4,3.68,3.68,0,0,0-1-.76,3.46,3.46,0,0,0-4.74,1.65l6.18,3.2c-.15,1.25-.31,2.5-.43,3.75-.34,3.29-1,7.14-.23,10.42a2.4,2.4,0,0,0,.4,1.1,19.54,19.54,0,0,1,3.22,3.13c.48.58,1.06,1.52,1.83,1.75a1.86,1.86,0,0,0,2.14-1,3.41,3.41,0,0,0,.07-1.46l-.6-6.1a3.49,3.49,0,0,1,.1-1.61,4.61,4.61,0,0,1,1.49-1.59,7,7,0,0,0,2.43-4.88,7.27,7.27,0,0,1,.16-1.75c.13-.43.47-1.1,1-1.1.95,0,6.13,1.12,7.43,1.3,6.78.93,14.06,1.11,20-2.22,2.33-1.29,6.25-4,6.66-6.86A3.84,3.84,0,0,0,278.85,70.86Z"
							style="fill: rgb(38, 50, 56); transform-origin: 255.05px 82.0771px;" id="elss8gmk1h8cb"
							class="animable"></path>
						<path
							d="M258.55,121.28s-9.37-1.75-12.66-3.44a10.7,10.7,0,0,1-4.58-4.4,14.61,14.61,0,0,0,2.64,5.23c2.43,3,14.35,5.09,14.35,5.09Z"
							style="fill: rgb(242, 143, 143); transform-origin: 249.93px 118.6px;" id="elr0dgtijbw8"
							class="animable"></path>
						<path d="M258.15,98a1.76,1.76,0,1,1-1.78-1.8A1.78,1.78,0,0,1,258.15,98Z"
							style="fill: rgb(38, 50, 56); transform-origin: 256.39px 97.9599px;" id="el1ta6fbwdkmt"
							class="animable"></path>
						<path d="M254.74,91.49l-4.12,2a2.41,2.41,0,0,1,1.1-3.14A2.24,2.24,0,0,1,254.74,91.49Z"
							style="fill: rgb(38, 50, 56); transform-origin: 252.573px 91.8116px;" id="elrw58e9ebya"
							class="animable"></path>
						<path d="M254.79,109l7.43,2.66a3.89,3.89,0,0,1-5,2.53A4.13,4.13,0,0,1,254.79,109Z"
							style="fill: rgb(177, 102, 104); transform-origin: 258.394px 111.704px;" id="elzfxc3llvwx8"
							class="animable"></path>
						<path
							d="M259.48,114.28a3.88,3.88,0,0,0-4.34-3.31,3.72,3.72,0,0,0-.48.11,4.06,4.06,0,0,0,2.57,3.11A3.77,3.77,0,0,0,259.48,114.28Z"
							style="fill: rgb(242, 143, 143); transform-origin: 257.07px 112.674px;" id="elz63dmvoetkb"
							class="animable"></path>
						<path d="M274.24,92.85l-4-2.07a2.17,2.17,0,0,1,3-.94A2.28,2.28,0,0,1,274.24,92.85Z"
							style="fill: rgb(38, 50, 56); transform-origin: 272.353px 91.2088px;" id="elc04v4nhuigp"
							class="animable"></path>
						<path d="M272.22,97.74a1.78,1.78,0,0,1-1.72,1.84,1.8,1.8,0,0,1-1.79-1.8,1.76,1.76,0,1,1,3.51,0Z"
							style="fill: rgb(38, 50, 56); transform-origin: 270.465px 97.7337px;" id="eltslejeuwuni"
							class="animable"></path>
						<polygon points="263.27 96.65 263.62 108 270.31 106.44 263.27 96.65"
							style="fill: rgb(242, 143, 143); transform-origin: 266.79px 102.325px;" id="elyokbqzymqxe"
							class="animable"></polygon>
					</g>
					<g id="freepik--Front--inject-8" class="animable" style="transform-origin: 224.99px 244.511px;">
						<path
							d="M312.24,262.81a1.35,1.35,0,0,1-.18.26L239.94,240.2a12.43,12.43,0,0,0-15.58,4.8l-77.1,114.59-2.85,1.65h0a2.3,2.3,0,0,1-2.2.24l79.29-118.11a12.46,12.46,0,0,1,15.59-4.81Z"
							style="fill: rgb(255, 196, 54); transform-origin: 227.225px 299.58px;" id="elge02ab4e9b"
							class="animable"></path>
						<g id="els3p09zmj978">
							<path
								d="M217.26,256.25l.18-.16-70.18,103.5-2.86,1.65h0a2.36,2.36,0,0,1-2.21.25l72.31-106.91Z"
								style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 179.815px 308.118px;"
								class="animable"></path>
						</g>
						<g id="el0fed8w7t9lw6">
							<path
								d="M312.24,262.82a1.75,1.75,0,0,1-.18.26L239.94,240.2a12.42,12.42,0,0,0-15.59,4.8l-2.85-1.66a12.45,12.45,0,0,1,15.57-4.78Z"
								style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 266.87px 250.291px;"
								class="animable"></path>
						</g>
						<path
							d="M316.57,132.63h0c-.16-.93-.65-1.19-1.29-.75a3.81,3.81,0,0,0-.83.86l-.36.5-71.17,108.2-10.62,14.8a6.06,6.06,0,0,1-5.86,2.19l-9.17-2.18-70-25.77a3.68,3.68,0,0,0-1.43-.06,3.27,3.27,0,0,0-.53.17l2.64-1.52,67.13,24.6,8.84,3.16a6,6,0,0,0,5.85-2.2l10.63-14.79,71.51-108.7a3,3,0,0,1,.81-.74l-6.19-3.57,2.6-1.49,4.28,2.47A7.46,7.46,0,0,1,316.57,132.63Z"
							style="fill: rgb(255, 196, 54); transform-origin: 230.94px 191.937px;" id="el2a2mj8ysz4n"
							class="animable"></path>
						<g id="elqitv8lk0rvr">
							<path
								d="M242.91,241.43l-10.63,14.81a6.06,6.06,0,0,1-5.85,2.19l-9.17-2.18.18-.16.44-.7,6,1.43a6,6,0,0,0,5.85-2.19L240.26,240Z"
								style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 230.085px 249.266px;"
								class="animable"></path>
						</g>
						<g id="eln0wd1bubcm9">
							<path
								d="M313.37,127.8l-4.28-2.46-2.59,1.49,6.18,3.57h0a3,3,0,0,0-.81.74l-71.52,108.7-.1.14h0l2.65,1.44,71.16-108.19.37-.51a3.36,3.36,0,0,1,.83-.85c.63-.44,1.13-.19,1.28.75h0A7.41,7.41,0,0,0,313.37,127.8Z"
								style="opacity: 0.1; transform-origin: 278.395px 183.38px;" class="animable"></path>
						</g>
						<path
							d="M148.66,232.55l-15.27-8.82V355.15a7.24,7.24,0,0,0,3.26,5.64l3.67,2.12a7.24,7.24,0,0,0,6.51,0l1.83-1.06Z"
							style="fill: rgb(255, 196, 54); transform-origin: 141.025px 293.706px;" id="elzixhtrc5xmi"
							class="animable"></path>
						<g id="elyfb6vbo5ag">
							<path
								d="M148.66,232.55l-15.27-8.82V355.15a7.24,7.24,0,0,0,3.26,5.64l3.67,2.12a7.24,7.24,0,0,0,6.51,0l1.83-1.06Z"
								style="opacity: 0.15; transform-origin: 141.025px 293.706px;" class="animable"></path>
						</g>
						<path
							d="M316.63,133.45V261.11a6.61,6.61,0,0,1-1,3.29,7.13,7.13,0,0,1-1.91,2.15l-.13.06-.2.14L146.83,362.9h0a2.33,2.33,0,0,1-2.22.26,2,2,0,0,1-1-1.56,3.6,3.6,0,0,1,0-.58V233.36a2.83,2.83,0,0,1,3.66-2.88l70,25.77,9.17,2.18a6.06,6.06,0,0,0,5.86-2.19l10.62-14.8,71.17-108.2.36-.5C315.65,131.06,316.63,131.38,316.63,133.45Z"
							style="fill: rgb(255, 196, 54); transform-origin: 230.114px 247.496px;" id="elq9l2btcmgr"
							class="animable"></path>
						<path
							d="M313.38,266.75a1.73,1.73,0,0,0,.21-.13l.12-.08a7,7,0,0,0,1.91-2.13,6.7,6.7,0,0,0,1-3.24l-73.71-19.73,49.36,37.49Z"
							style="fill: rgb(255, 196, 54); transform-origin: 279.765px 260.185px;" id="elfogb3pohz6e"
							class="animable"></path>
						<g id="elt1phrga2vn">
							<path
								d="M313.38,266.75a1.73,1.73,0,0,0,.21-.13l.12-.08a7,7,0,0,0,1.91-2.13,6.7,6.7,0,0,0,1-3.24l-73.71-19.73,49.36,37.49Z"
								style="opacity: 0.2; transform-origin: 279.765px 260.185px;" class="animable"></path>
						</g>
						<path
							d="M143.57,361a2.23,2.23,0,0,0,1,2.14,2.32,2.32,0,0,0,2.22-.25h0l57.34-33.1,13.1-73.55L143.58,358.9Z"
							style="fill: rgb(255, 196, 54); transform-origin: 180.392px 309.777px;" id="el43yimfixdva"
							class="animable"></path>
						<g id="elm9ltshv8d2h">
							<path d="M224.33,245,144.59,363.16a2.23,2.23,0,0,1-1-2.14V358.9l77.89-115.52,0,0Z"
								style="opacity: 0.15; transform-origin: 183.952px 303.27px;" class="animable"></path>
						</g>
						<path
							d="M315.62,264.41a7,7,0,0,1-1.91,2.13l-.12.08L146.83,362.9h0a2.32,2.32,0,0,1-2.22.25L224.34,245A12.52,12.52,0,0,1,240,240.16Z"
							style="fill: rgb(255, 196, 54); transform-origin: 230.115px 301.214px;" id="elt86p2iuz3m"
							class="animable"></path>
						<g id="el22wokhwo227">
							<path
								d="M134,211.92l2.65,1.53A12.72,12.72,0,0,0,136,217v8.25l-2.65-1.53v-8.26A12.72,12.72,0,0,1,134,211.92Z"
								style="opacity: 0.15; transform-origin: 135px 218.585px;" class="animable"></path>
						</g>
						<polygon
							points="147.92 229.07 145.28 230.59 142.6 229.05 136.03 225.26 138.58 223.74 147.92 229.07"
							style="fill: rgb(255, 196, 54); transform-origin: 141.975px 227.165px;" id="elg4bnez21n4h"
							class="animable"></polygon>
						<g id="elqm0l3zevs5">
							<path
								d="M148,229.12l-9.45-5.38L136,225.26l6.57,3.79,2.68,1.54h0a2.09,2.09,0,0,1,.5-.16,3.44,3.44,0,0,1,1.42.05l5.32,2,61.13,22.51,1-1.42Z"
								style="opacity: 0.1; transform-origin: 175.31px 239.365px;" class="animable"></path>
						</g>
					</g>
					<g id="freepik--Arm--inject-8" class="animable" style="transform-origin: 201.706px 195.435px;">
						<path
							d="M221,129c-8.49.61-14.31,2.63-19.77,15.77-3.54,8.49-17.4,39-18.74,44.06-1.57,5.92-5.12,50.95-5.12,50.95l8.1,3s-2.77,9.69-5.12,15.22c-2.7,6.39,10.49,5.05,14.73-.75s7.12-13.57,4.8-16.3a38,38,0,0,0-6.42-5.94l8.86-40.17,18.59-39.52S230.26,136,221,129Z"
							style="fill: rgb(255, 168, 167); transform-origin: 201.231px 195.615px;" id="elws049vo9j2i"
							class="animable"></path>
						<path d="M193.48,235.08a17.48,17.48,0,0,0-8.22-2.35,15.87,15.87,0,0,1,8.6,0Z"
							style="fill: rgb(242, 143, 143); transform-origin: 189.56px 233.608px;" id="eljbsb0uggj5i"
							class="animable"></path>
						<path
							d="M222.94,128.64c-4.76,0-13.65-.25-19.41,10.15S189.63,169,189.63,169s3.38,8.32,21.5,10.06L225,149.49S228.39,135.94,222.94,128.64Z"
							style="fill: rgb(55, 71, 79); transform-origin: 207.836px 153.85px;" id="elzr5ezkch2t"
							class="animable"></path>
					</g>
					<g id="freepik--arm--inject-8" class="animable" style="transform-origin: 337.89px 121.688px;">
						<path
							d="M284.42,135.46c7.16,5.65,18.78,14.52,24.43,18.07,4.27-5.16,12.13-15.62,14-17.91C325.31,132.71,333,128,333,128l2.89,11.59s-14.52,26.78-19.78,31.73c-5.54,5.22-9.55,3.06-20.38-1.9-10.23-4.69-21.34-10.51-21.34-10.51,2.2-19.46.71-30-8.59-33.28C272,126.36,278.41,130.73,284.42,135.46Z"
							style="fill: rgb(255, 168, 167); transform-origin: 300.845px 149.983px;" id="elh6yek01uahk"
							class="animable"></path>
						<path
							d="M303.11,149.62c-3.74,1-11.47,12-10.06,19l-19.7-9.74c2.38-13.43,2.9-30-8.45-33.21a15.78,15.78,0,0,0-3.32-.42h0c5.65-.56,9.34-.39,15.26,4.06S303.11,149.62,303.11,149.62Z"
							style="fill: rgb(55, 71, 79); transform-origin: 282.345px 146.821px;" id="elh4te0l4v4xg"
							class="animable"></path>
						<path d="M308.85,153.53c-2.82,2.48-3.73,6.94-4.28,8.71a15.54,15.54,0,0,1,2.65-9.77Z"
							style="fill: rgb(242, 143, 143); transform-origin: 306.693px 157.355px;" id="elyvmekppljri"
							class="animable"></path>
						<path
							d="M336.28,115l6.76-4.1s.77,36.45.8,37.63a4,4,0,0,0,1.42,2.34L338.5,155a4.05,4.05,0,0,1-1.42-2.34C337.06,151.42,336.28,115,336.28,115Z"
							style="fill: rgb(55, 71, 79); transform-origin: 340.77px 132.95px;" id="eltzvwke654ik"
							class="animable"></path>
						<path
							d="M343.36,126.07s1.94.46,2.68,3.47,1.12,8.76-.61,10.65-4.09,2.72-5.66,2c-2.93-1.27-2-7.22.31-8.6,3.76-2.19,3.31-4.61,3.31-4.61Z"
							style="fill: rgb(255, 168, 167); transform-origin: 342.298px 134.259px;" id="elo1yboyzup8i"
							class="animable"></path>
						<path d="M328,115.09l3,3.61.53,25.7-3,5,10,5.52a3.68,3.68,0,0,1-1.42-2.34l-.7-32.9Z"
							style="fill: rgb(69, 90, 100); transform-origin: 333.265px 135.005px;" id="elieovgz4vxhd"
							class="animable"></path>
						<polygon points="328.46 149.43 328.49 151 338.54 156.53 338.5 154.95 328.46 149.43"
							style="fill: rgb(255, 196, 54); transform-origin: 333.5px 152.98px;" id="eluu7ptkl0kk"
							class="animable"></polygon>
						<polygon points="338.54 156.53 345.29 152.43 345.25 150.85 338.5 154.95 338.54 156.53"
							style="fill: rgb(255, 196, 54); transform-origin: 341.895px 153.69px;" id="eltv2sdr9tzer"
							class="animable"></polygon>
						<g id="elas0x8occ4dk">
							<polygon points="338.54 156.53 345.29 152.43 345.25 150.85 338.5 154.95 338.54 156.53"
								style="opacity: 0.1; transform-origin: 341.895px 153.69px;" class="animable"></polygon>
						</g>
						<path
							d="M329.94,97.26h0c-1.32-.33-2.84.22-4.25,1.73l-.05.06a14.14,14.14,0,0,0-2.89,12.47l0,.07c.62,2,1.78,3.2,3.15,3.45h0l5.84,1.4,3.57-17.88Z"
							style="fill: rgb(255, 196, 54); transform-origin: 328.824px 106.804px;" id="elbw026jsjhuo"
							class="animable"></path>
						<g id="elnaxofzfmv5">
							<path
								d="M329.94,97.26h0c-1.32-.33-2.84.22-4.25,1.73l-.05.06a14.14,14.14,0,0,0-2.89,12.47l0,.07c.62,2,1.78,3.2,3.15,3.45h0l5.84,1.4,3.57-17.88Z"
								style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 328.824px 106.804px;"
								class="animable"></path>
						</g>
						<g id="el3vrh2ujyb2b">
							<path
								d="M325.92,115h0l5.84,1.4,1.18-5.93-10.62-2.46a11.17,11.17,0,0,0,.43,3.47l0,.07C323.39,113.61,324.55,114.79,325.92,115Z"
								style="opacity: 0.05; transform-origin: 327.627px 112.205px;" class="animable"></path>
						</g>
						<path
							d="M341.77,97.76h0a5.31,5.31,0,0,0-4.75,1.7c-.17.15-.34.32-.51.5s-.38.42-.56.65a11.94,11.94,0,0,0-.86,1.21,16,16,0,0,0-1.3,2.51,19.4,19.4,0,0,0-1.45,7.64,13.65,13.65,0,0,0,.55,3.63c.73,2.39,2.06,3.83,3.65,4.25L331,118.57h0a6.43,6.43,0,0,1-4.4-4.42,13.84,13.84,0,0,1-.54-3.47,19.24,19.24,0,0,1,1.45-7.81,16.34,16.34,0,0,1,1.29-2.5,13.76,13.76,0,0,1,.86-1.21q.27-.34.57-.66a5.9,5.9,0,0,1,.51-.49,6.32,6.32,0,0,1,5.38-1.54h0l.16,0,.2,0Z"
							style="fill: rgb(255, 196, 54); transform-origin: 333.912px 108.109px;" id="el71h27wm4k0o"
							class="animable"></path>
						<g id="elhjddrdpghd">
							<path
								d="M331,118.57h0a6.43,6.43,0,0,1-4.4-4.42,13.84,13.84,0,0,1-.54-3.47l6.3,1.3a13.65,13.65,0,0,0,.55,3.63c.73,2.39,2.06,3.83,3.65,4.25Z"
								style="opacity: 0.1; transform-origin: 331.31px 115.27px;" class="animable"></path>
						</g>
						<path
							d="M345.55,102.05c1.49,4.9-.13,11.9-3.63,15.64-1.75,1.88-3.65,2.58-5.29,2.19l-.09,0c-1.59-.42-2.92-1.86-3.65-4.25-1.49-4.9.13-11.9,3.62-15.64,1.75-1.87,3.63-2.57,5.26-2.2S344.8,99.59,345.55,102.05Z"
							style="fill: rgb(255, 196, 54); transform-origin: 339.22px 108.839px;" id="elovdmecw73en"
							class="animable"></path>
						<g id="el7s5cwbjhzj7">
							<path
								d="M345.55,102.05c1.49,4.9-.13,11.9-3.63,15.64-1.75,1.88-3.65,2.58-5.29,2.19l-.09,0c-1.59-.42-2.92-1.86-3.65-4.25-1.49-4.9.13-11.9,3.62-15.64,1.75-1.87,3.63-2.57,5.26-2.2S344.8,99.59,345.55,102.05Z"
								style="opacity: 0.2; transform-origin: 339.22px 108.839px;" class="animable"></path>
						</g>
						<path
							d="M368.71,93.6s-6.54,6.34-9.66,19.82a52.88,52.88,0,0,0-1.19,7.35c-.84,9.16,1.15,14.69,1.15,14.69-4-5-8.69-9.93-14.85-13a76.77,76.77,0,0,0-7.39-3.13h0c-1.49-.35-2.72-1.72-3.39-3.92a13.79,13.79,0,0,1-.5-4.78,17.72,17.72,0,0,1,.45-3.21,15.78,15.78,0,0,1,3.56-7.15c1.57-1.68,3.28-2.38,4.77-2h0a77.92,77.92,0,0,0,8,.44C356.53,98.7,362.91,96.27,368.71,93.6Z"
							style="fill: rgb(255, 196, 54); transform-origin: 350.778px 114.53px;" id="elgjwk1f9uzmq"
							class="animable"></path>
						<g id="elg06c1we27ec">
							<path
								d="M368.71,93.6s-6.54,6.34-9.66,19.82a52.88,52.88,0,0,0-1.19,7.35c-.84,9.16,1.15,14.69,1.15,14.69-4-5-8.69-9.93-14.85-13a76.77,76.77,0,0,0-7.39-3.13h0c-1.49-.35-2.72-1.72-3.39-3.92a13.79,13.79,0,0,1-.5-4.78,17.72,17.72,0,0,1,.45-3.21,15.78,15.78,0,0,1,3.56-7.15c1.57-1.68,3.28-2.38,4.77-2h0a77.92,77.92,0,0,0,8,.44C356.53,98.7,362.91,96.27,368.71,93.6Z"
								style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 350.778px 114.53px;"
								class="animable"></path>
						</g>
						<g id="elzjfgdeulw8s">
							<path
								d="M357.86,120.77c-.84,9.16,1.15,14.69,1.15,14.69-4-5-8.69-9.93-14.85-13a76.77,76.77,0,0,0-7.39-3.13h0c-1.49-.35-2.72-1.72-3.39-3.92a13.79,13.79,0,0,1-.5-4.78C339.64,111.82,350.79,114.35,357.86,120.77Z"
								style="opacity: 0.05; transform-origin: 345.928px 123.045px;" class="animable"></path>
						</g>
						<path
							d="M386.67,100.21a37.74,37.74,0,0,1,.65,17.14h0C386,125,382.71,132.43,378,137.43c-8.31,8.91-17.93,6.67-21.49-5a32.74,32.74,0,0,1-1.31-8.63,45.63,45.63,0,0,1,5.35-22.14c.51-.92,1-1.8,1.6-2.65l.72-1h0c.35-.49.7-.95,1.07-1.4s.78-.93,1.19-1.36C373.5,86.33,383.12,88.55,386.67,100.21Z"
							style="fill: rgb(255, 196, 54); transform-origin: 371.602px 116.332px;" id="elrlbdm5u5el"
							class="animable"></path>
						<g id="elf8h5e15vma">
							<path
								d="M387.32,117.35C386,125,382.71,132.43,378,137.43c-8.31,8.91-17.93,6.67-21.49-5a32.74,32.74,0,0,1-1.31-8.63h0c1.14,1.3,4.25,2.7,4.89.86a29.46,29.46,0,0,0,1.17,7.65c1,3.35,2.59,5.83,4.54,7.16a6.26,6.26,0,0,0,5.61.78,14.65,14.65,0,0,0,6.08-4.17c4-4.25,6.88-10.61,8.3-17.23C385.84,118.87,386.63,119.21,387.32,117.35Z"
								style="opacity: 0.1; transform-origin: 371.26px 130.118px;" class="animable"></path>
						</g>
						<path
							d="M385.62,101.24c1.57,5.15,1.53,11.51.22,17.63-1.42,6.62-4.32,13-8.3,17.23a14.65,14.65,0,0,1-6.08,4.17,6.26,6.26,0,0,1-5.61-.78c-2-1.33-3.52-3.81-4.54-7.16a29.46,29.46,0,0,1-1.17-7.65c0-1,0-2.07,0-3.12a40.75,40.75,0,0,1,.66-5.55c.07-.38.14-.76.22-1.13.13-.63.27-1.26.43-1.88a43.23,43.23,0,0,1,2.06-6.16l0-.07a38.57,38.57,0,0,1,1.84-3.76c.48-.86,1-1.68,1.52-2.46l.69-1c.29-.37.58-.74.87-1.09s.59-.68.89-1a14.55,14.55,0,0,1,6.08-4.17C379.9,92,383.7,94.93,385.62,101.24Z"
							style="fill: rgb(255, 196, 54); transform-origin: 373.476px 116.801px;" id="eldg3omb41xt5"
							class="animable"></path>
						<g id="ell9n5w3dmce">
							<path
								d="M385.62,101.24c1.57,5.15,1.53,11.51.22,17.63-1.42,6.62-4.32,13-8.3,17.23a14.65,14.65,0,0,1-6.08,4.17,6.26,6.26,0,0,1-5.61-.78c-2-1.33-3.52-3.81-4.54-7.16a29.46,29.46,0,0,1-1.17-7.65c0-1,0-2.07,0-3.12a40.75,40.75,0,0,1,.66-5.55c.07-.38.14-.76.22-1.13.13-.63.27-1.26.43-1.88a43.23,43.23,0,0,1,2.06-6.16l0-.07a38.57,38.57,0,0,1,1.84-3.76c.48-.86,1-1.68,1.52-2.46l.69-1c.29-.37.58-.74.87-1.09s.59-.68.89-1a14.55,14.55,0,0,1,6.08-4.17C379.9,92,383.7,94.93,385.62,101.24Z"
								style="opacity: 0.3; transform-origin: 373.476px 116.801px;" class="animable"></path>
						</g>
						<path
							d="M371,108.84l-2.76,13.92c-2-.12-5.39-.28-8.06-.15,0-.35,0-.7,0-1a42.39,42.39,0,0,1,.66-5.55c.07-.38.15-.75.22-1.13.13-.63.28-1.26.44-1.87a43.33,43.33,0,0,1,2.05-6.17.21.21,0,0,0,0-.07c.13-.29.25-.58.38-.86A43.29,43.29,0,0,0,371,108.84Z"
							style="fill: rgb(255, 196, 54); transform-origin: 365.59px 114.36px;" id="elnfasczwx4u"
							class="animable"></path>
						<g id="el9qyub740j3i">
							<g style="opacity: 0.4; transform-origin: 365.59px 114.36px;" class="animable">
								<path
									d="M371,108.84l-2.76,13.92c-2-.12-5.39-.28-8.06-.15,0-.35,0-.7,0-1a42.39,42.39,0,0,1,.66-5.55c.07-.38.15-.75.22-1.13.13-.63.28-1.26.44-1.87a43.33,43.33,0,0,1,2.05-6.17.21.21,0,0,0,0-.07c.13-.29.25-.58.38-.86A43.29,43.29,0,0,0,371,108.84Z"
									style="fill: rgb(255, 255, 255); transform-origin: 365.59px 114.36px;"
									id="el2lz4jzyrkv" class="animable"></path>
							</g>
						</g>
						<path
							d="M368.73,122.57c-1.45.44-2.68-.46-3.27-2.43l0-.06a11.2,11.2,0,0,1,2.28-9.86l0,0a4.35,4.35,0,0,1,1.83-1.25c1.45-.44,2.67.47,3.27,2.43v.06a11.19,11.19,0,0,1-2.28,9.86l0,0a4.48,4.48,0,0,1-1.83,1.24Z"
							style="fill: rgb(255, 196, 54); transform-origin: 369.15px 115.77px;" id="ela9a2esj54ei"
							class="animable"></path>
						<g id="elq1o3zuybfce">
							<g style="opacity: 0.7; transform-origin: 369.15px 115.77px;" class="animable">
								<path
									d="M368.73,122.57c-1.45.44-2.68-.46-3.27-2.43l0-.06a11.2,11.2,0,0,1,2.28-9.86l0,0a4.35,4.35,0,0,1,1.83-1.25c1.45-.44,2.67.47,3.27,2.43v.06a11.19,11.19,0,0,1-2.28,9.86l0,0a4.48,4.48,0,0,1-1.83,1.24Z"
									style="fill: rgb(255, 255, 255); transform-origin: 369.15px 115.77px;"
									id="elxvb83q7p4q" class="animable"></path>
							</g>
						</g>
						<path
							d="M365.36,86.74a1.49,1.49,0,0,1-1.88-1L359.23,71.8a1.51,1.51,0,0,1,2.88-.88l4.25,13.94A1.49,1.49,0,0,1,365.36,86.74Z"
							style="fill: rgb(224, 224, 224); transform-origin: 362.811px 78.3842px;" id="elea5itv5675"
							class="animable"></path>
						<path
							d="M353.71,94a1.51,1.51,0,0,1-1.47-.34l-10.65-10a1.51,1.51,0,1,1,2.06-2.2l10.65,10a1.5,1.5,0,0,1,.07,2.13A1.39,1.39,0,0,1,353.71,94Z"
							style="fill: rgb(224, 224, 224); transform-origin: 347.91px 87.525px;" id="elvsit3tcmce"
							class="animable"></path>
						<path
							d="M361,165.23a1.58,1.58,0,0,1-.78,0,1.51,1.51,0,0,1-1.13-1.81l3.29-14.2a1.51,1.51,0,1,1,2.94.68L362,164.13A1.51,1.51,0,0,1,361,165.23Z"
							style="fill: rgb(224, 224, 224); transform-origin: 362.212px 156.635px;" id="el4tlzau5m7pu"
							class="animable"></path>
						<path
							d="M387.45,159.21a1.51,1.51,0,0,1-1.88-1l-4.25-13.94a1.51,1.51,0,1,1,2.88-.88l4.25,13.94A1.51,1.51,0,0,1,387.45,159.21Z"
							style="fill: rgb(224, 224, 224); transform-origin: 384.866px 150.743px;"
							id="el00ut01in4fpbo" class="animable"></path>
						<path
							d="M403.14,140.18a1.51,1.51,0,0,1-1.47-.34l-10.65-10a1.51,1.51,0,0,1,2.05-2.21l10.66,9.95a1.5,1.5,0,0,1,.07,2.13A1.55,1.55,0,0,1,403.14,140.18Z"
							style="fill: rgb(224, 224, 224); transform-origin: 397.406px 133.767px;" id="elmiuny36yu7"
							class="animable"></path>
						<path
							d="M413.14,121.4a1.57,1.57,0,0,1-.78,0l-14.2-3.29a1.52,1.52,0,0,1-1.13-1.81,1.5,1.5,0,0,1,1.81-1.13l14.2,3.29a1.51,1.51,0,0,1,.1,2.91Z"
							style="fill: rgb(224, 224, 224); transform-origin: 405.596px 118.289px;" id="elvophgf7ofqr"
							class="animable"></path>
						<path
							d="M412.42,100.13l-13.95,4.25a1.5,1.5,0,0,1-1.88-1,1.51,1.51,0,0,1,1-1.88l14-4.25a1.51,1.51,0,0,1,.88,2.88Z"
							style="fill: rgb(224, 224, 224); transform-origin: 404.978px 100.83px;" id="elo6sgg0azejo"
							class="animable"></path>
						<path
							d="M391.21,92.73a1.51,1.51,0,0,1-1.55-2.47l9.95-10.65a1.51,1.51,0,0,1,2.21,2.06l-9.95,10.65A1.5,1.5,0,0,1,391.21,92.73Z"
							style="fill: rgb(224, 224, 224); transform-origin: 395.74px 85.9642px;" id="el47lr9mkiriz"
							class="animable"></path>
						<path
							d="M379.08,86.28a1.54,1.54,0,0,1-.77,0,1.5,1.5,0,0,1-1.13-1.81l3.29-14.2a1.51,1.51,0,1,1,2.94.68l-3.29,14.2A1.54,1.54,0,0,1,379.08,86.28Z"
							style="fill: rgb(224, 224, 224); transform-origin: 380.301px 77.6852px;" id="el6yjpxlhmz3h"
							class="animable"></path>
						<path
							d="M322.89,135.62c2.87-3.64,3-5.93,5.22-7.72s4.5-1.9,7.84-.94c2.51.72,5.46.36,6.48,1.29.29.2-.16,1.81-1.34,2.39-1.42.7-3.72.53-5.41.54-3.86,0-.69,3.8-4.41,7.64C329.7,141.57,322.89,135.62,322.89,135.62Z"
							style="fill: rgb(255, 168, 167); transform-origin: 332.703px 132.953px;" id="elj5bqc38wpg"
							class="animable"></path>
					</g>
				</g>
			</g>
			<g id="freepik--paper-planes--inject-8" class="animable" style="transform-origin: 259.545px 158.365px;">
				<g id="freepik--paper-plane--inject-8" class="animable" style="transform-origin: 397.181px 116.045px;">
					<polygon points="411.2 193.49 446.58 170.83 462.16 175.83 411.2 193.49"
						style="fill: rgb(255, 196, 54); transform-origin: 436.68px 182.16px;" id="elypmdgwa4jkc"
						class="animable"></polygon>
					<polygon points="411.2 193.49 441.78 167.99 434.98 160.14 411.2 193.49"
						style="fill: rgb(255, 196, 54); transform-origin: 426.49px 176.815px;" id="el15y7eul34d2"
						class="animable"></polygon>
					<polygon points="441.78 167.99 441.78 173.9 411.2 193.49 441.78 167.99"
						style="fill: rgb(255, 196, 54); transform-origin: 426.49px 180.74px;" id="elsi86i83ptyl"
						class="animable"></polygon>
					<g id="el7eazuwwxlxf">
						<polygon points="441.78 167.99 441.78 173.9 411.2 193.49 441.78 167.99"
							style="opacity: 0.25; transform-origin: 426.49px 180.74px;" class="animable"></polygon>
					</g>
					<path
						d="M449,164.56a1,1,0,0,1-.76-.34,1,1,0,0,1,.11-1.42c.61-.53,1.22-1.08,1.81-1.64a1,1,0,0,1,1.38,1.44c-.62.59-1.24,1.16-1.89,1.72A1,1,0,0,1,449,164.56Z"
						style="fill: rgb(224, 224, 224); transform-origin: 449.896px 162.746px;" id="elx7hvpedt4l"
						class="animable"></path>
					<path
						d="M454.29,159.32a1,1,0,0,1-.66-.25,1,1,0,0,1-.09-1.41c1-1.2,2.07-2.47,3-3.78a1,1,0,1,1,1.61,1.19c-1,1.36-2.06,2.67-3.14,3.91A1,1,0,0,1,454.29,159.32Zm5.86-7.92a1,1,0,0,1-.52-.15,1,1,0,0,1-.32-1.38c.84-1.35,1.66-2.77,2.42-4.21a1,1,0,0,1,1.77.93c-.79,1.49-1.63,2.95-2.5,4.34A1,1,0,0,1,460.15,151.4Zm4.61-8.71a.93.93,0,0,1-.4-.09,1,1,0,0,1-.51-1.32c.64-1.47,1.26-3,1.81-4.51a1,1,0,0,1,1.88.68c-.57,1.57-1.2,3.13-1.87,4.64A1,1,0,0,1,464.76,142.69Zm3.38-9.27a.9.9,0,0,1-.28,0,1,1,0,0,1-.68-1.24c.45-1.54.86-3.13,1.22-4.71a1,1,0,1,1,2,.44c-.37,1.62-.79,3.25-1.25,4.83A1,1,0,0,1,468.14,133.42Zm2.17-9.62h-.16a1,1,0,0,1-.83-1.15c.25-1.59.46-3.21.61-4.83a1,1,0,0,1,2,.19c-.16,1.66-.38,3.33-.64,5A1,1,0,0,1,470.31,123.8Zm.93-9.82h0a1,1,0,0,1-1-1c0-.77,0-1.54,0-2.31s0-1.7,0-2.56a1,1,0,0,1,1-1,1,1,0,0,1,1,1c0,.88,0,1.75,0,2.63s0,1.58,0,2.37A1,1,0,0,1,471.24,114Zm-.35-9.85a1,1,0,0,1-1-.9c-.17-1.62-.39-3.24-.67-4.82a1,1,0,0,1,2-.34c.29,1.62.52,3.29.69,5a1,1,0,0,1-.89,1.1Zm-1.71-9.72a1,1,0,0,1-1-.75c-.4-1.58-.86-3.14-1.37-4.66a1,1,0,1,1,1.89-.64c.53,1.57,1,3.18,1.42,4.81a1,1,0,0,1-1,1.24ZM466,85.07a1,1,0,0,1-.92-.6c-.64-1.49-1.35-3-2.11-4.36a1,1,0,1,1,1.76-1c.79,1.46,1.52,3,2.19,4.52a1,1,0,0,1-.53,1.31A.91.91,0,0,1,466,85.07Zm-4.67-8.67a1,1,0,0,1-.84-.45A48.27,48.27,0,0,0,457.67,72a1,1,0,0,1,.16-1.41,1,1,0,0,1,1.4.16c1,1.29,2,2.66,3,4.06a1,1,0,0,1-.83,1.55Zm-6.16-7.7a1,1,0,0,1-.72-.31c-1.1-1.15-2.27-2.29-3.49-3.38a1,1,0,1,1,1.35-1.49c1.25,1.13,2.46,2.31,3.59,3.49a1,1,0,0,1-.73,1.69Zm-7.31-6.62a1.05,1.05,0,0,1-.62-.21c-1.25-1-2.57-2-3.91-2.9a1,1,0,1,1,1.13-1.64c1.39,1,2.74,2,4,3a1,1,0,0,1,.17,1.4A1,1,0,0,1,447.89,62.08Zm-8.1-5.62a1,1,0,0,1-.52-.15c-1.37-.83-2.79-1.65-4.23-2.43a1,1,0,0,1,.94-1.76c1.48.8,2.94,1.63,4.33,2.49a1,1,0,0,1-.52,1.85Zm-8.68-4.69a1,1,0,0,1-.43-.1c-1.46-.69-3-1.36-4.46-2a1,1,0,1,1,.77-1.85c1.53.64,3.06,1.33,4.55,2a1,1,0,0,1-.43,1.9Zm-101-2.48a1,1,0,0,1-.33-1.95c1.56-.56,3.14-1.09,4.7-1.59a1,1,0,1,1,.61,1.9c-1.53.49-3.09,1-4.64,1.58A1,1,0,0,1,330.13,49.29ZM422,48a.83.83,0,0,1-.34-.07c-1.5-.55-3.06-1.08-4.63-1.58a1,1,0,1,1,.6-1.9c1.6.51,3.19,1.05,4.72,1.61A1,1,0,0,1,423,47.3,1,1,0,0,1,422,48Zm-82.48-1.7a1,1,0,0,1-.28-2c1.57-.45,3.19-.88,4.8-1.29a1,1,0,0,1,.48,1.94c-1.59.4-3.18.83-4.73,1.27A.84.84,0,0,1,339.53,46.26ZM412.61,45a1.09,1.09,0,0,1-.26,0c-1.55-.42-3.14-.82-4.75-1.19a1,1,0,1,1,.44-2c1.64.38,3.26.78,4.83,1.21a1,1,0,0,1-.26,2ZM349.1,43.86a1,1,0,0,1-.21-2c1.61-.35,3.25-.67,4.86-1a1,1,0,1,1,.36,2c-1.59.29-3.21.61-4.8,1ZM403,42.78h-.19c-1.57-.3-3.2-.57-4.83-.8a1,1,0,0,1-.84-1.14,1,1,0,0,1,1.13-.84c1.66.24,3.31.51,4.91.81a1,1,0,0,1-.18,2ZM358.8,42.1a1,1,0,0,1-.15-2c1.64-.24,3.3-.45,4.93-.63a1,1,0,1,1,.22,2c-1.61.18-3.24.39-4.86.63Zm34.42-.74h-.1c-1.6-.17-3.24-.31-4.88-.42a1,1,0,0,1-.93-1.07,1,1,0,0,1,1.07-.93c1.67.12,3.33.26,4.95.44a1,1,0,0,1,.89,1.1A1,1,0,0,1,393.22,41.36ZM368.59,41a1,1,0,0,1-1-.92,1,1,0,0,1,.92-1.08c1.66-.12,3.32-.22,5-.29a1,1,0,0,1,1,1,1,1,0,0,1-1,1c-1.61.07-3.26.17-4.89.29Zm14.79-.33h0c-1.43,0-2.87-.07-4.28-.07h-.62a1,1,0,0,1,0-2h.63c1.43,0,2.89,0,4.34.07a1,1,0,0,1,0,2Z"
						style="fill: rgb(224, 224, 224); transform-origin: 400.651px 98.96px;" id="elx4x45xkjqpm"
						class="animable"></path>
					<path
						d="M323.11,52a1,1,0,0,1-.38-1.92l2.33-1a1,1,0,0,1,1.3.57,1,1,0,0,1-.57,1.3l-2.3.93A1.06,1.06,0,0,1,323.11,52Z"
						style="fill: rgb(224, 224, 224); transform-origin: 324.276px 50.5051px;" id="elcd06qmfk85f"
						class="animable"></path>
				</g>
				<g id="freepik--paper-plane--inject-8" class="animable" style="transform-origin: 96.64px 199.375px;">
					<polygon points="100.44 143.16 146.43 120.62 113.27 152.16 100.44 143.16"
						style="fill: rgb(255, 196, 54); transform-origin: 123.435px 136.39px;" id="el8b2k9lhyxd"
						class="animable"></polygon>
					<polygon points="146.43 120.62 95.72 137.3 82.91 128.3 146.43 120.62"
						style="fill: rgb(255, 196, 54); transform-origin: 114.67px 128.96px;" id="elssdu8k5fib"
						class="animable"></polygon>
					<polygon points="95.72 137.3 97.73 150.18 100.44 143.16 146.43 120.62 95.72 137.3"
						style="fill: rgb(255, 196, 54); transform-origin: 121.075px 135.4px;" id="elx237t5j3s3j"
						class="animable"></polygon>
					<g id="ellbw5zm49gq">
						<polygon points="95.72 137.3 97.73 150.18 100.44 143.16 146.43 120.62 95.72 137.3"
							style="opacity: 0.25; transform-origin: 121.075px 135.4px;" class="animable"></polygon>
					</g>
					<polygon points="97.73 150.18 104.72 146.16 100.44 143.16 97.73 150.18"
						style="fill: rgb(255, 196, 54); transform-origin: 101.225px 146.67px;" id="eltd97csj9f4p"
						class="animable"></polygon>
					<g id="elfah8hg3j61">
						<polygon points="100.44 143.16 104.72 146.16 103.6 146.8 100.44 143.16"
							style="opacity: 0.25; transform-origin: 102.58px 144.98px;" class="animable"></polygon>
					</g>
					<path
						d="M103.9,278.13a1,1,0,0,1-.34-.06c-1.62-.58-3.2-1.18-4.71-1.77a1,1,0,0,1,.74-1.86c1.48.58,3,1.17,4.65,1.75a1,1,0,0,1-.34,1.94Zm-9.29-3.69a1,1,0,0,1-.4-.08c-1.56-.69-3.09-1.4-4.57-2.12a1,1,0,1,1,.88-1.8c1.45.71,3,1.41,4.5,2.09a1,1,0,0,1-.41,1.91Zm-9-4.4a1,1,0,0,1-.48-.12c-1.49-.82-3-1.67-4.37-2.54a1,1,0,0,1,1-1.7c1.38.85,2.82,1.68,4.28,2.48a1,1,0,0,1-.48,1.88Zm-8.5-5.25a1,1,0,0,1-.57-.18c-1.4-1-2.76-2-4.06-3A1,1,0,1,1,73.77,260c1.26,1,2.59,2,4,2.94a1,1,0,0,1-.57,1.82Zm-7.81-6.22a1,1,0,0,1-.67-.26c-1.26-1.15-2.47-2.34-3.61-3.56a1,1,0,0,1,1.45-1.37c1.11,1.18,2.29,2.34,3.51,3.45a1,1,0,0,1-.68,1.74Zm-6.84-7.26a1,1,0,0,1-.78-.38c-1.06-1.31-2.07-2.68-3-4.08a1,1,0,1,1,1.66-1.12c.91,1.35,1.9,2.68,2.92,4a1,1,0,0,1-.15,1.4A1,1,0,0,1,62.5,251.31Zm-5.6-8.26a1,1,0,0,1-.87-.51c-.82-1.46-1.6-3-2.31-4.52a1,1,0,0,1,1.82-.84c.68,1.49,1.44,3,2.23,4.37a1,1,0,0,1-.38,1.37A1.05,1.05,0,0,1,56.9,243.05ZM52.72,234a1,1,0,0,1-.94-.65c-.58-1.56-1.11-3.18-1.58-4.82a1,1,0,1,1,1.92-.55c.46,1.59,1,3.16,1.53,4.68a1,1,0,0,1-.59,1.28A1,1,0,0,1,52.72,234Zm-2.79-9.59a1,1,0,0,1-1-.79c-.35-1.61-.67-3.28-.93-5a1,1,0,0,1,.83-1.14,1,1,0,0,1,1.15.83c.25,1.65.56,3.28.9,4.86a1,1,0,0,1-.76,1.19A.82.82,0,0,1,49.93,224.39Zm-1.56-9.87a1,1,0,0,1-1-.9c-.17-1.61-.31-3.3-.41-5a1,1,0,0,1,.94-1.05,1,1,0,0,1,1.06.94c.1,1.69.23,3.35.4,4.94a1,1,0,0,1-.89,1.09Zm-.52-10h0a1,1,0,0,1-1-1c0-1.68.13-3.39.3-5.07a1,1,0,0,1,1.1-.9,1,1,0,0,1,.89,1.1c-.16,1.63-.26,3.28-.29,4.91A1,1,0,0,1,47.85,204.54Zm1-9.94-.18,0a1,1,0,0,1-.8-1.16c.3-1.66.68-3.32,1.11-5a1,1,0,0,1,1.23-.7,1,1,0,0,1,.7,1.22c-.42,1.58-.78,3.2-1.08,4.8A1,1,0,0,1,48.85,194.6ZM51.43,185a1,1,0,0,1-.33-.06,1,1,0,0,1-.61-1.28c.56-1.58,1.19-3.17,1.88-4.72a1,1,0,1,1,1.82.82c-.66,1.49-1.28,3-1.82,4.57A1,1,0,0,1,51.43,185Zm4.06-9.13a1,1,0,0,1-.87-1.48c.8-1.48,1.68-3,2.6-4.36a1,1,0,0,1,1.67,1.09c-.89,1.37-1.74,2.79-2.52,4.23A1,1,0,0,1,55.49,175.82ZM61,167.45a1,1,0,0,1-.79-1.61c1-1.34,2.13-2.65,3.26-3.89a1,1,0,1,1,1.48,1.35c-1.09,1.2-2.16,2.47-3.16,3.76A1,1,0,0,1,61,167.45Zm6.73-7.38a1,1,0,0,1-.68-1.73c1.23-1.16,2.53-2.27,3.85-3.31a1,1,0,0,1,1.4.16,1,1,0,0,1-.16,1.41c-1.28,1-2.53,2.08-3.73,3.2A1,1,0,0,1,67.68,160.07Zm7.84-6.19A1,1,0,0,1,75,152c1.4-.93,2.86-1.81,4.34-2.63a1,1,0,1,1,1,1.75c-1.43.79-2.85,1.65-4.2,2.55A1,1,0,0,1,75.52,153.88ZM84.25,149a1,1,0,0,1-.41-1.91c1.53-.69,3.11-1.34,4.7-1.91a1,1,0,0,1,.68,1.88c-1.54.56-3.07,1.18-4.56,1.85A1,1,0,0,1,84.25,149Z"
						style="fill: rgb(224, 224, 224); transform-origin: 75.8744px 211.63px;" id="el7ssmr6qhhv8"
						class="animable"></path>
				</g>
			</g>
			<g id="freepik--Icon--inject-8" class="animable" style="transform-origin: 286.589px 419.394px;">
				<g id="freepik--At--inject-8" class="animable" style="transform-origin: 286.589px 419.394px;">
					<path
						d="M335,415.38a1,1,0,0,0-.52-.89,3.26,3.26,0,0,0-2.2-.65,5.13,5.13,0,0,0-2.32.56l-4,2.13a7.14,7.14,0,0,0,.73-1.83,6.27,6.27,0,0,0,.16-1.5c0-.84,0-5.5,0-5.94a7,7,0,0,0-.6-2.76,10.64,10.64,0,0,0-3.58-4.05c-1.23-.94-2.7-2-4.43-3.11s-3.29-2.08-4.7-2.87a57.82,57.82,0,0,0-11.84-4.72A49.3,49.3,0,0,0,288,388a63.64,63.64,0,0,0-15.56,2.22,81,81,0,0,0-17.41,7q-7.83,4.14-11.81,8.61a18.84,18.84,0,0,0-4.83,8.81,12.74,12.74,0,0,0-.25,2.66c0,1,0,5.19,0,6a13,13,0,0,0,1.42,5.83,21.53,21.53,0,0,0,6.2,7.3c.59.46,1.44,1.07,2.56,1.84s2.31,1.57,3.59,2.4,2.5,1.63,3.71,2.38,2.18,1.34,2.94,1.77a49.79,49.79,0,0,0,11.89,4.38,58.89,58.89,0,0,0,14,1.54,65.9,65.9,0,0,0,15.18-1.92,74.85,74.85,0,0,0,25.7-12.34,34.89,34.89,0,0,0,5.81-5.57,15.72,15.72,0,0,0,2.79-4.93,30.15,30.15,0,0,0,1.05-4.37,1.37,1.37,0,0,0,0-.19C335,421.14,335,415.44,335,415.38Zm-15,7.18a16.74,16.74,0,0,1-2.3,2.6,33,33,0,0,1-3.89,3,67.26,67.26,0,0,1-6.09,3.57,47.68,47.68,0,0,1-10.58,4.15,47.11,47.11,0,0,1-10.54,1.51,42.91,42.91,0,0,1-10-.89,36.56,36.56,0,0,1-8.92-3.07,29.49,29.49,0,0,1-2.92-1.65c-1.13-.7-2.28-1.43-3.45-2.2s-2.28-1.51-3.32-2.23a21.61,21.61,0,0,1-2.36-1.81,15.76,15.76,0,0,1-4.33-5.6c-.09-.23-.18-.45-.26-.68a14.49,14.49,0,0,1,3.41-5.18,32.4,32.4,0,0,1,8.1-5.77,68.57,68.57,0,0,1,11.79-5,47.73,47.73,0,0,1,6-1.44l-1,.55a1.85,1.85,0,0,0-1.11,1.3,1.3,1.3,0,0,0,.7,1.31l.68.44a21.63,21.63,0,0,0-5.33,0,19.12,19.12,0,0,0-6.41,2.29,13.5,13.5,0,0,0-4.85,3.9,6.5,6.5,0,0,0-1.34,3.85c0,.19,0,5.12,0,6.14a5.24,5.24,0,0,0,0,.56,9.18,9.18,0,0,0,2,4.64,21.21,21.21,0,0,0,5.27,4.61,31.26,31.26,0,0,0,7.28,3.55,31.92,31.92,0,0,0,7.79,1.59,29.29,29.29,0,0,0,7.73-.42,25,25,0,0,0,7.11-2.48,26.47,26.47,0,0,0,4.3-2.72,10.17,10.17,0,0,0,2.17-2.3,4.46,4.46,0,0,0,.71-2c.05-.61.05-1.21,0-1.79a26.91,26.91,0,0,0,6.09-.43,27.57,27.57,0,0,0,8-3l.46-.27Q320.46,421.92,320,422.56Zm-35.69-5.89a17.39,17.39,0,0,1,7.39,2.86,17.19,17.19,0,0,1,2.23,1.72,11.29,11.29,0,0,1-1.17.72,11.59,11.59,0,0,1-6.87,1.25,16.91,16.91,0,0,1-7.4-2.82,14.72,14.72,0,0,1-2.28-1.78,7.91,7.91,0,0,1,1.05-.66A11.6,11.6,0,0,1,284.34,416.67Zm27.87-5.93a9.85,9.85,0,0,1-3.58.8,6.94,6.94,0,0,1-4.16-1.08l-13.54-8.87a34.62,34.62,0,0,1,4.05.7,41.92,41.92,0,0,1,9.51,3.56,50.57,50.57,0,0,1,4.42,2.58C310.1,409.21,311.18,410,312.21,410.74Z"
						style="fill: rgb(255, 196, 54); transform-origin: 286.57px 419.369px;" id="eldtawkevz66h"
						class="animable"></path>
					<g id="elo6k4bi9t72p">
						<path
							d="M335,415.38a1,1,0,0,0-.52-.89,3.26,3.26,0,0,0-2.2-.65,5.13,5.13,0,0,0-2.32.56l-4,2.13a7.14,7.14,0,0,0,.73-1.83,6.27,6.27,0,0,0,.16-1.5c0-.84,0-5.5,0-5.94a7,7,0,0,0-.6-2.76,10.64,10.64,0,0,0-3.58-4.05c-1.23-.94-2.7-2-4.43-3.11s-3.29-2.08-4.7-2.87a57.82,57.82,0,0,0-11.84-4.72A49.3,49.3,0,0,0,288,388a63.64,63.64,0,0,0-15.56,2.22,81,81,0,0,0-17.41,7q-7.83,4.14-11.81,8.61a18.84,18.84,0,0,0-4.83,8.81,12.74,12.74,0,0,0-.25,2.66c0,1,0,5.19,0,6a13,13,0,0,0,1.42,5.83,21.53,21.53,0,0,0,6.2,7.3c.59.46,1.44,1.07,2.56,1.84s2.31,1.57,3.59,2.4,2.5,1.63,3.71,2.38,2.18,1.34,2.94,1.77a49.79,49.79,0,0,0,11.89,4.38,58.89,58.89,0,0,0,14,1.54,65.9,65.9,0,0,0,15.18-1.92,74.85,74.85,0,0,0,25.7-12.34,34.89,34.89,0,0,0,5.81-5.57,15.72,15.72,0,0,0,2.79-4.93,30.15,30.15,0,0,0,1.05-4.37,1.37,1.37,0,0,0,0-.19C335,421.14,335,415.44,335,415.38Zm-15,7.18a16.74,16.74,0,0,1-2.3,2.6,33,33,0,0,1-3.89,3,67.26,67.26,0,0,1-6.09,3.57,47.68,47.68,0,0,1-10.58,4.15,47.11,47.11,0,0,1-10.54,1.51,42.91,42.91,0,0,1-10-.89,36.56,36.56,0,0,1-8.92-3.07,29.49,29.49,0,0,1-2.92-1.65c-1.13-.7-2.28-1.43-3.45-2.2s-2.28-1.51-3.32-2.23a21.61,21.61,0,0,1-2.36-1.81,15.76,15.76,0,0,1-4.33-5.6c-.09-.23-.18-.45-.26-.68a14.49,14.49,0,0,1,3.41-5.18,32.4,32.4,0,0,1,8.1-5.77,68.57,68.57,0,0,1,11.79-5,47.73,47.73,0,0,1,6-1.44l-1,.55a1.85,1.85,0,0,0-1.11,1.3,1.3,1.3,0,0,0,.7,1.31l.68.44a21.63,21.63,0,0,0-5.33,0,19.12,19.12,0,0,0-6.41,2.29,13.5,13.5,0,0,0-4.85,3.9,6.5,6.5,0,0,0-1.34,3.85c0,.19,0,5.12,0,6.14a5.24,5.24,0,0,0,0,.56,9.18,9.18,0,0,0,2,4.64,21.21,21.21,0,0,0,5.27,4.61,31.26,31.26,0,0,0,7.28,3.55,31.92,31.92,0,0,0,7.79,1.59,29.29,29.29,0,0,0,7.73-.42,25,25,0,0,0,7.11-2.48,26.47,26.47,0,0,0,4.3-2.72,10.17,10.17,0,0,0,2.17-2.3,4.46,4.46,0,0,0,.71-2c.05-.61.05-1.21,0-1.79a26.91,26.91,0,0,0,6.09-.43,27.57,27.57,0,0,0,8-3l.46-.27Q320.46,421.92,320,422.56Zm-35.69-5.89a17.39,17.39,0,0,1,7.39,2.86,17.19,17.19,0,0,1,2.23,1.72,11.29,11.29,0,0,1-1.17.72,11.59,11.59,0,0,1-6.87,1.25,16.91,16.91,0,0,1-7.4-2.82,14.72,14.72,0,0,1-2.28-1.78,7.91,7.91,0,0,1,1.05-.66A11.6,11.6,0,0,1,284.34,416.67Zm27.87-5.93a9.85,9.85,0,0,1-3.58.8,6.94,6.94,0,0,1-4.16-1.08l-13.54-8.87a34.62,34.62,0,0,1,4.05.7,41.92,41.92,0,0,1,9.51,3.56,50.57,50.57,0,0,1,4.42,2.58C310.1,409.21,311.18,410,312.21,410.74Z"
							style="opacity: 0.2; transform-origin: 286.57px 419.369px;" class="animable"></path>
					</g>
					<g id="el49ac161olne">
						<path
							d="M251.11,419.3a14.49,14.49,0,0,1,3.41-5.18,32.4,32.4,0,0,1,8.1-5.77,68.57,68.57,0,0,1,11.79-5,47.73,47.73,0,0,1,6-1.44l3.64-1.93a4.74,4.74,0,0,1,2.31-.51,3.94,3.94,0,0,1,2.14.55l2.4,1.57a34.62,34.62,0,0,1,4.05.7,41.92,41.92,0,0,1,9.51,3.56,50.57,50.57,0,0,1,4.42,2.58c1.19.78,2.27,1.55,3.3,2.31a5.1,5.1,0,0,0,.58-.26,3.6,3.6,0,0,0,2.09-2.3c.2-.9-.44-1.91-1.92-3-1.23-.94-2.58-1.9-4-2.86a46,46,0,0,0-4.42-2.58,41,41,0,0,0-9.51-3.56,35,35,0,0,0-9.92-.91,43.44,43.44,0,0,0-10.65,2,68.66,68.66,0,0,0-11.79,5,32.14,32.14,0,0,0-8.1,5.76,13.63,13.63,0,0,0-3.66,6,9.16,9.16,0,0,0,.51,6,13.7,13.7,0,0,0,1.72,2.88,13.7,13.7,0,0,1-1.72-2.88C251.28,419.75,251.19,419.53,251.11,419.3Z"
							style="opacity: 0.1; transform-origin: 282.74px 409.067px;" class="animable"></path>
					</g>
					<g id="el9nrvc88hr3p">
						<path
							d="M291.73,413.4a17.41,17.41,0,0,0-7.39-2.87,11.61,11.61,0,0,0-7,1.3c-2.1,1.11-3,2.41-2.79,3.91a5.3,5.3,0,0,0,1.75,2.89h0a8.62,8.62,0,0,1,1.05-.66,11.6,11.6,0,0,1,7-1.29,17.39,17.39,0,0,1,7.39,2.86,17.19,17.19,0,0,1,2.23,1.72l-.53.35q2.64-1.62,2.36-3.57C295.57,416.58,294.23,415,291.73,413.4Z"
							style="opacity: 0.1; transform-origin: 285.174px 416.022px;" class="animable"></path>
					</g>
					<g id="eliyy2njuvp1o">
						<path
							d="M284.16,430.54a32.18,32.18,0,0,1-15.07-5.14,21,21,0,0,1-5.27-4.62,9.15,9.15,0,0,1-2-4.63,6.61,6.61,0,0,1,0-.89c0,.11,0,.21,0,.32s0,5.12,0,6.14a5.24,5.24,0,0,0,0,.56,9.18,9.18,0,0,0,2,4.64,21.21,21.21,0,0,0,5.27,4.61,31.26,31.26,0,0,0,7.28,3.55,31.92,31.92,0,0,0,7.79,1.59Z"
							style="opacity: 0.1; transform-origin: 272.983px 425.965px;" class="animable"></path>
					</g>
					<g id="el1uxo7bj7f9z">
						<path
							d="M306.22,418.84c0,.59,0,1.18,0,1.79l0,4.35a26.91,26.91,0,0,0,6.09-.43v-6.14A26.34,26.34,0,0,1,306.22,418.84Z"
							style="opacity: 0.1; transform-origin: 309.265px 421.708px;" class="animable"></path>
					</g>
					<g id="elg6fykgljni">
						<path
							d="M270.49,443.14a49.36,49.36,0,0,1-11.89-4.38c-.76-.42-1.74-1-2.94-1.76s-2.44-1.55-3.71-2.38-2.47-1.64-3.59-2.4-2-1.38-2.56-1.84a21.56,21.56,0,0,1-6.2-7.31,13,13,0,0,1-1.41-5.86c0,.05,0,.09,0,.14,0,1,0,5.19,0,6a13,13,0,0,0,1.42,5.83,21.53,21.53,0,0,0,6.2,7.3c.59.46,1.44,1.07,2.56,1.84s2.31,1.57,3.59,2.4,2.5,1.63,3.71,2.38,2.18,1.34,2.94,1.77a49.79,49.79,0,0,0,11.89,4.38,58.89,58.89,0,0,0,14,1.54v-6.13A58.88,58.88,0,0,1,270.49,443.14Z"
							style="opacity: 0.1; transform-origin: 261.345px 434.002px;" class="animable"></path>
					</g>
					<path
						d="M322.68,400.45a10.64,10.64,0,0,1,3.58,4.05,6.39,6.39,0,0,1,.44,4.07,8.37,8.37,0,0,1-2.15,3.75,15.94,15.94,0,0,1-4.2,3.11,27.29,27.29,0,0,1-8,3,26.34,26.34,0,0,1-6.09.43c0,.59,0,1.18,0,1.79a4.38,4.38,0,0,1-.71,2,10,10,0,0,1-2.17,2.3,26.42,26.42,0,0,1-4.3,2.73,25.33,25.33,0,0,1-7.11,2.48,29.29,29.29,0,0,1-7.73.42,32.18,32.18,0,0,1-15.07-5.14,21,21,0,0,1-5.27-4.62,9.15,9.15,0,0,1-2-4.63,6.38,6.38,0,0,1,1.31-4.42,13.5,13.5,0,0,1,4.85-3.9,19.12,19.12,0,0,1,6.41-2.29,21.63,21.63,0,0,1,5.33,0l-.68-.44a1.3,1.3,0,0,1-.7-1.31,1.85,1.85,0,0,1,1.11-1.3l4.67-2.48a4.74,4.74,0,0,1,2.31-.51,3.94,3.94,0,0,1,2.14.55l15.94,10.44a6.92,6.92,0,0,0,4.16,1.08,9.58,9.58,0,0,0,4.16-1.06,3.6,3.6,0,0,0,2.09-2.3c.2-.9-.44-1.91-1.92-3-1.23-.94-2.58-1.9-4-2.86a46,46,0,0,0-4.42-2.58,41,41,0,0,0-9.51-3.56,35,35,0,0,0-9.91-.91,43.43,43.43,0,0,0-10.66,2,68.66,68.66,0,0,0-11.79,5,32.14,32.14,0,0,0-8.1,5.76,13.63,13.63,0,0,0-3.66,6,9.16,9.16,0,0,0,.51,6,15.76,15.76,0,0,0,4.33,5.6,21.61,21.61,0,0,0,2.36,1.81c1,.72,2.15,1.46,3.32,2.23s2.32,1.5,3.45,2.2a29.49,29.49,0,0,0,2.92,1.65,36.56,36.56,0,0,0,8.92,3.07,42.91,42.91,0,0,0,10,.89,47.11,47.11,0,0,0,10.54-1.51,47.68,47.68,0,0,0,10.58-4.15,67.26,67.26,0,0,0,6.09-3.57,33,33,0,0,0,3.89-3,15.16,15.16,0,0,0,3.59-4.83,9.22,9.22,0,0,1,.72-1.4,3.58,3.58,0,0,1,1.31-1L330,414.4a5.13,5.13,0,0,1,2.32-.56,3.26,3.26,0,0,1,2.2.65,1,1,0,0,1,.5,1.07,30.15,30.15,0,0,1-1.05,4.37,15.83,15.83,0,0,1-2.79,4.93,35.29,35.29,0,0,1-5.81,5.56,67.8,67.8,0,0,1-10.05,6.31,67,67,0,0,1-15.65,6,65.93,65.93,0,0,1-15.18,1.93,58.88,58.88,0,0,1-14-1.55,49.36,49.36,0,0,1-11.89-4.38c-.76-.42-1.74-1-2.94-1.76s-2.44-1.55-3.71-2.38-2.47-1.64-3.59-2.4-2-1.38-2.56-1.84a21.56,21.56,0,0,1-6.2-7.31,12.85,12.85,0,0,1-1.17-8.38,18.84,18.84,0,0,1,4.83-8.81q4-4.47,11.81-8.61a81,81,0,0,1,17.41-7A63.64,63.64,0,0,1,288,388a49.3,49.3,0,0,1,13.67,1.71,57.82,57.82,0,0,1,11.84,4.72q2.11,1.18,4.7,2.87C320,398.47,321.45,399.51,322.68,400.45ZM278.52,420.4a16.91,16.91,0,0,0,7.4,2.82,11.59,11.59,0,0,0,6.87-1.25c2.21-1.17,3.21-2.49,3-3.94s-1.56-3-4.06-4.63a17.41,17.41,0,0,0-7.39-2.87,11.61,11.61,0,0,0-7,1.3c-2.1,1.11-3,2.41-2.79,3.91S276.08,418.8,278.52,420.4Z"
						style="fill: rgb(255, 196, 54); transform-origin: 286.61px 416.328px;" id="elh1xbljf5xp"
						class="animable"></path>
				</g>
			</g>
			<g id="freepik--Envelope--inject-8" class="animable" style="transform-origin: 380.325px 366.075px;">
				<g id="freepik--Mail--inject-8" class="animable" style="transform-origin: 380.325px 366.075px;">
					<path
						d="M324.08,373.21v.73a4.08,4.08,0,0,0,1.84,3.2L365.5,400a4.07,4.07,0,0,0,3.69,0l65.54-37.84a4.08,4.08,0,0,0,1.84-3.2v-.73a4.08,4.08,0,0,0-1.84-3.2l-39.58-22.85a4.07,4.07,0,0,0-3.69,0L325.92,370A4.08,4.08,0,0,0,324.08,373.21Z"
						style="fill: rgb(255, 196, 54); transform-origin: 380.325px 366.09px;" id="elioquhdzkt8q"
						class="animable"></path>
					<path
						d="M324.08,373.21v.73a4.08,4.08,0,0,0,1.84,3.2L365.5,400a4.07,4.07,0,0,0,3.69,0l65.54-37.84a4.08,4.08,0,0,0,1.84-3.2v-.73a4.08,4.08,0,0,0-1.84-3.2l-39.58-22.85a4.07,4.07,0,0,0-3.69,0L325.92,370A4.08,4.08,0,0,0,324.08,373.21Z"
						style="fill: rgb(255, 196, 54); transform-origin: 380.325px 366.09px;" id="el22pfl9l5pp"
						class="animable"></path>
					<g id="el930lkfzjz9n">
						<path
							d="M367.34,346.09,325.92,370a4.08,4.08,0,0,0-1.84,3.2v.73a4.08,4.08,0,0,0,1.84,3.2L365.5,400a3.82,3.82,0,0,0,1.84.44h0Z"
							style="opacity: 0.2; transform-origin: 345.71px 373.265px;" class="animable"></path>
					</g>
					<g id="elk7jw8hpbqk">
						<path
							d="M367.34,346.09,325.92,370a4.08,4.08,0,0,0-1.84,3.2v.73a4.08,4.08,0,0,0,1.84,3.2L365.5,400a3.82,3.82,0,0,0,1.84.44h0Z"
							style="opacity: 0.15; transform-origin: 345.71px 373.265px;" class="animable"></path>
					</g>
					<g id="elyemo6q3tks">
						<path
							d="M434.73,355l-39.58-22.85a4.07,4.07,0,0,0-3.69,0l-24.12,13.92v54.34h0a3.83,3.83,0,0,0,1.85-.44l65.54-37.84a4.08,4.08,0,0,0,1.84-3.2v-.73A4.08,4.08,0,0,0,434.73,355Z"
							style="opacity: 0.2; transform-origin: 401.955px 366.059px;" class="animable"></path>
					</g>
					<path
						d="M359.16,391.33l-33.24-19.19a1.12,1.12,0,0,1,0-2.13l65.54-37.84a4.07,4.07,0,0,1,3.69,0L434.73,355a1.12,1.12,0,0,1,0,2.13l-10.88,6.28-3.8,2.2L369.19,395a4.07,4.07,0,0,1-3.69,0l-3.23-1.86Z"
						style="fill: rgb(255, 196, 54); transform-origin: 380.325px 363.585px;" id="elodwjfa8ufg8"
						class="animable"></path>
					<g id="elyat9w77a1va">
						<path
							d="M389.34,359.45,434.73,355l-45,2.55,5.41-25.4a3.79,3.79,0,0,0-2-.42l-8.49,34.33L325.17,371a1.24,1.24,0,0,0,.75,1.15l48-2.79-6.62,26.08,8.46-26.18h0l8.2-.48a4.48,4.48,0,0,0,2.71-1.13h0a4.42,4.42,0,0,0,1.38-2.38Z"
							style="opacity: 0.15; transform-origin: 379.95px 363.581px;" class="animable"></path>
					</g>
					<g id="elc457j5a3xr5">
						<path
							d="M339.36,369.81l45.29-3.73,1.62-6.49.9-3.61,6-24.23a3.66,3.66,0,0,0-1.68.42l-32.77,18.92L325.92,370a1.34,1.34,0,0,0-.75,1l9.09-.75Z"
							style="fill: rgb(255, 255, 255); opacity: 0.3; transform-origin: 359.17px 351.375px;"
							class="animable"></path>
					</g>
				</g>
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
</div>

@endsection


@section('notification_verify_email')
<script>
	$(document).ready(function() {
			@if (Session::has('berhasil_kirim'))
				Swal.fire({
					icon: 'success',
					title: '<strong>Email verification resent successfully</strong>',
					html: 'Email verification resent <b>successfully</b>.<br> Please <b>check your inbox</b> again.',
					showConfirmButton: false,
					timer: 6800,
					timerProgressBar: true
				});
			@endif

			@if (Session::has('gagal_kirim'))
				Swal.fire({
					icon: 'question',
					title: '<strong>Oops..</strong>',
					html: 'Resending verification email <b>failed</b>. Please try again and <b>check your internet connection</b>.',
					showConfirmButton: true,
					confirmButtonColor: '#D80032',
					focusConfirm: false,
					confirmButtonText: 'Yes, confirm!'
				});
			@endif
		});
		
</script>
@endsection