@extends('auth.auth')

@section('content_auth')

<div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
	style="background: #FFC436;">

	<div class="featured-image">
		<svg class="animated" id="freepik_stories-add-user" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500"
			version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
			style="width: 330px;" alt="regis akun">
			<style>
				svg#freepik_stories-add-user:not(.animated) .animable {
					opacity: 0;
				}

				svg#freepik_stories-add-user.animated #freepik--background-complete--inject-155 {
					animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomIn, 6s Infinite linear floating;
					animation-delay: 0s, 1s;
				}

				svg#freepik_stories-add-user.animated #freepik--Plants--inject-155 {
					animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideUp, 6s Infinite linear wind;
					animation-delay: 0s, 1s;
				}

				svg#freepik_stories-add-user.animated #el17kznrnx7xw {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0s;
				}

				svg#freepik_stories-add-user.animated #el7s257q3lnoy {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.01129032258064516s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #el1fyme8wgxijh {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.02258064516129032s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #eli75tm61gcob {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.03387096774193548s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #elk3j1enpm89i {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.04516129032258064s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #elimjq2gfn2pe {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.056451612903225805s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #elt65psuu1lh {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.06774193548387096s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #eldyuc1txgvam {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.07903225806451612s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #elfgs2t902v07 {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.09032258064516129s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #elahpcjy5pqac {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.10161290322580645s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #el8uein06xj2x {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.11290322580645161s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #elue0qw92bnu {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.12419354838709677s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #elbs9n3t88wbr {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.13548387096774192s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #elz4b1d1h574 {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.14677419354838708s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #elqs3rvi2razm {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.15806451612903225s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #elkeofva1ccnf {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.1693548387096774s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #elcjul699zqtw {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.18064516129032257s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #el4z5tgwd9bga {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.19193548387096773s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #elkb97wq4lei {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.2032258064516129s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #elkh9br2j9te {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.21451612903225806s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #elbzqmco45ws {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.22580645161290322s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #el1vemabxnesu {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.23709677419354838s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #elmpj70868v3 {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.24838709677419354s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #el5ru4wlfljj {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.2596774193548387s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #elcl0ojxygg {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.27096774193548384s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #eljdnfdcujufe {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.282258064516129s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #el80djb4a80s3 {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.29354838709677417s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #eljur0m8y0fl {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.30483870967741933s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #elmgbn6kibzyg {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.3161290322580645s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #elxoj4sf0jdxk {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.32741935483870965s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #elxa9duqt3yfk {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.3387096774193548s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #elxe749tgwk5l {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.35s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #eljv6miiy50ds {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.36129032258064514s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #eledinvje3odg {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.3725806451612903s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #el59k9umo5gqd {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.38387096774193546s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #elvyj2abm0w6 {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.3951612903225806s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #elh3xx38hqm2c {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.4064516129032258s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #el0ymxyabf4mz9 {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.41774193548387095s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #elfd6ceobmlf {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.4290322580645161s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #eles7dqorwyps {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.4403225806451613s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #ela6ium845uy {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.45161290322580644s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #elvetsczz6fuc {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.4629032258064516s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #elo1p39e3na4g {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.47419354838709676s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #eljy8t9v1ft6h {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.4854838709677419s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #el8mgifejf2xr {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.4967741935483871s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #elje2e882nbli {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.5080645161290323s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #elymzfsyzxf3n {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.5193548387096774s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #el0l1mnq3c81e {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.5306451612903226s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #elgyobjt7aw7a {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.5419354838709677s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #el740koq4a8yo {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.5532258064516129s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #el8syizz1plgm {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.564516129032258s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #el2ga59m5ze2v {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.5758064516129032s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #ela287cz1jucj {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.5870967741935483s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #elaawssnq1boh {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.5983870967741935s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #elx11l1cpmku {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.6096774193548387s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #ela0zreouqykn {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.6209677419354839s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #elnozk0oo1djk {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.632258064516129s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #elg3nntot26js {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.6435483870967742s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #el3idc2jszi4m {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.6548387096774193s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #elhgjekjpv3bi {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.6661290322580645s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #elucm8nes69ra {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.6774193548387096s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #ely91l8t69vzd {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0.6887096774193548s;
					opacity: 0
				}

				svg#freepik_stories-add-user.animated #freepik--Window--inject-155 {
					animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
					animation-delay: 0s;
				}

				svg#freepik_stories-add-user.animated #freepik--Character--inject-155 {
					animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) lightSpeedLeft;
					animation-delay: 0s;
				}

				svg#freepik_stories-add-user.animated #freepik--Icon--inject-155 {
					animation: 0.8s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut, 3s Infinite linear heartbeat;
					animation-delay: 0.2s, 1s;
					opacity: 0
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

				@keyframes slideUp {
					0% {
						opacity: 0;
						transform: translateY(30px);
					}

					100% {
						opacity: 1;
						transform: inherit;
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
			</style>
			<g id="freepik--background-complete--inject-155" class="animable"
				style="transform-origin: 275.875px 292.01px;">
				<g id="el764ehjtjcu7">
					<rect x="106.3" y="127.1" width="258.77" height="329.82"
						style="fill: rgb(224, 224, 224); transform-origin: 235.685px 292.01px; transform: rotate(-6.01deg);"
						class="animable" id="elt95quqyzkj"></rect>
				</g>
				<g id="elknsaet3r2rh">
					<rect x="123.21" y="138.89" width="257.63" height="303.33"
						style="fill: rgb(235, 235, 235); transform-origin: 252.025px 290.555px; transform: rotate(-8.53deg);"
						class="animable" id="els91uzpg4n9"></rect>
				</g>
				<path
					d="M457.12,148.56S447,141.89,434.74,166s-16.95,38-16.95,38-3.25,5-6.72,1.75-8.23-12.68-14.13-11c-6.12,1.75-8.14,8.58-7,18.62s2.92,32.12,3.07,34.12-1,4.85-3.7,3-18.41-19.33-26.25-11.39,0,35.36.81,38.38.21,4.3-1.23,5-6.15-5.62-10.81-10.4-10.91-9.51-15.05-4.56-5.46,25.54,14.12,59L361,341.45l18-1c38.48-4.49,54.12-17.94,55.58-24.24s-6.07-8.42-12.7-9.27-14.55-.77-14.82-2.36.41-2.84,3.3-4,29.51-11.43,31.12-22.47-21.77-13-24.91-14.09-1.5-3.68.15-4.75,20.37-13,29.09-18.1,12.95-10.83,10.67-16.77c-2.21-5.73-12.56-3.88-17.29-4.66s-2.65-6.42-2.65-6.42,8.31-12.1,20.16-36.44.15-28.43.15-28.43"
					style="fill: rgb(224, 224, 224); transform-origin: 398.125px 244.582px;" id="elycibwmm5p59"
					class="animable"></path>
				<path
					d="M446.08,170.14s-.07.18-.23.52l-.7,1.51L442.39,178c-2.4,5-5.93,12.25-10.32,21.17C423.29,217,411,241.51,397.26,268.57s-26.1,51.6-35,69.39l-10.48,21.09L349,364.78l-.76,1.49c-.17.33-.27.49-.27.49s.07-.18.22-.52l.71-1.51,2.76-5.77c2.4-5,5.92-12.25,10.31-21.17,8.78-17.84,21.11-42.39,34.82-69.47s26.09-51.58,35-69.38c4.41-8.89,8-16.08,10.47-21.09,1.23-2.47,2.19-4.4,2.86-5.73l.75-1.48C446,170.31,446.08,170.14,446.08,170.14Z"
					style="fill: rgb(235, 235, 235); transform-origin: 397.025px 268.45px;" id="elt0v7fykf5bs"
					class="animable"></path>
				<path
					d="M403.06,208.19a5.48,5.48,0,0,1,.46,1.22c.26.79.6,2,1,3.39.82,2.88,1.84,6.88,2.89,11.31s1.94,8.34,2.65,11.37c.33,1.36.6,2.51.82,3.44a6.66,6.66,0,0,1,.26,1.27,5.74,5.74,0,0,1-.47-1.22c-.26-.79-.6-1.95-1-3.39-.79-2.89-1.76-6.9-2.81-11.34s-2-8.32-2.73-11.34c-.33-1.36-.61-2.51-.84-3.43A7.2,7.2,0,0,1,403.06,208.19Z"
					style="fill: rgb(235, 235, 235); transform-origin: 407.1px 224.19px;" id="els3px9agaglk"
					class="animable"></path>
				<path
					d="M412.8,240.51c0-.15,8.11-2.62,18.21-5.53s18.33-5.13,18.37-5-8.11,2.63-18.21,5.53S412.84,240.66,412.8,240.51Z"
					style="fill: rgb(235, 235, 235); transform-origin: 431.09px 235.246px;" id="el9f3w552llhc"
					class="animable"></path>
				<path
					d="M389.87,281.13a5.93,5.93,0,0,1,1.33-.06h3.61c3.05,0,7.26,0,11.9-.18s8.85-.47,11.88-.71l3.6-.28a5.4,5.4,0,0,1,1.33,0,7.2,7.2,0,0,1-1.3.25c-.85.13-2.07.29-3.59.46-3,.35-7.24.71-11.9.88s-8.87.13-11.93,0c-1.52-.06-2.75-.12-3.61-.19A6.29,6.29,0,0,1,389.87,281.13Z"
					style="fill: rgb(235, 235, 235); transform-origin: 406.695px 280.731px;" id="els6a29f6cn5"
					class="animable"></path>
				<path
					d="M374.64,253.83a5.35,5.35,0,0,1,.7,1c.47.77,1.05,1.73,1.74,2.85,1.45,2.42,2.63,6.57,5.56,9.5,2.14,3.73,4.06,7.12,5.42,9.59.62,1.15,1.15,2.14,1.59,2.93a4.76,4.76,0,0,1,.51,1.12,5.35,5.35,0,0,1-.7-1q-.72-1.15-1.74-2.85c-1.45-2.41-3.42-5.77-5.56-9.5s-4.06-7.12-5.42-9.58L375.15,255A4.76,4.76,0,0,1,374.64,253.83Z"
					style="fill: rgb(235, 235, 235); transform-origin: 382.4px 267.325px;" id="elt8bcuqecfd"
					class="animable"></path>
				<path
					d="M349.84,287.12a8.13,8.13,0,0,1,.89,1.3l2.24,3.64c1.88,3.09,4.43,7.38,7.23,12.13s5.29,9.07,7.08,12.2c.84,1.51,1.55,2.76,2.09,3.74a8.83,8.83,0,0,1,.7,1.4,8.49,8.49,0,0,1-.89-1.29l-2.24-3.65c-1.88-3.08-4.43-7.37-7.22-12.12s-5.3-9.07-7.09-12.21c-.84-1.5-1.54-2.76-2.09-3.73A9.12,9.12,0,0,1,349.84,287.12Z"
					style="fill: rgb(235, 235, 235); transform-origin: 359.955px 304.325px;" id="elmjfctdyq4t7"
					class="animable"></path>
				<path
					d="M369.82,320.57a10.89,10.89,0,0,1,1.68-.12l4.58-.14c3.86-.14,9.2-.34,15.08-.72s11.21-.86,15.06-1.24l4.56-.44a9.57,9.57,0,0,1,1.68-.1,12.05,12.05,0,0,1-1.65.31c-1.07.17-2.63.39-4.55.62-3.84.48-9.16,1-15.06,1.4s-11.24.53-15.12.56c-1.93,0-3.5,0-4.58,0A8.66,8.66,0,0,1,369.82,320.57Z"
					style="fill: rgb(235, 235, 235); transform-origin: 391.14px 319.254px;" id="el2vucvxbv2mk"
					class="animable"></path>
			</g>
			<g id="freepik--Plants--inject-155" class="animable" style="transform-origin: 254.824px 356.351px;">
				<path
					d="M70.92,313.08a14.83,14.83,0,0,1,11.6-.78,26.2,26.2,0,0,1,10,6.39c5.54,5.36,9,13.53,11,21-8.4,1.68-17.09-3.14-21.34-5.86-6.73-4.3-16.28-16.15-11.25-20.73"
					style="fill: #0174BE; transform-origin: 86.5208px 325.755px;" id="elfq17rbbguwp" class="animable">
				</path>
				<path
					d="M118.11,341.43a12.66,12.66,0,0,1-7-10.58,16.83,16.83,0,0,1,4.49-12.2c1.38-1.53,3.21-2.93,5.26-2.83a5.45,5.45,0,0,1,4.41,3.28,10.92,10.92,0,0,1,.69,5.67c-.63,6.57-2.44,12.81-7.8,16.66"
					style="fill: #0174BE; transform-origin: 118.583px 328.622px;" id="eluglmgkk7qek" class="animable">
				</path>
				<path
					d="M131.68,362.32a8,8,0,0,1-1.1-1.14l-2.9-3.21c-2.38-2.74-5.86-6.57-8.1-11.77a27.3,27.3,0,0,1-2.26-14.06,18,18,0,0,1,1-4.22,11.49,11.49,0,0,1,.47-1.09c.11-.24.18-.37.2-.36a29.1,29.1,0,0,0-1.31,5.72A28.06,28.06,0,0,0,120.1,346c2.18,5.1,5.57,8.94,7.88,11.74,1.17,1.4,2.13,2.53,2.76,3.33A8.24,8.24,0,0,1,131.68,362.32Z"
					style="fill: rgb(38, 50, 56); transform-origin: 124.426px 344.395px;" id="elkv3dq0mc9sm"
					class="animable"></path>
				<path
					d="M79,321.46a3.85,3.85,0,0,1,.6.36l1.63,1.11c1.42,1,3.45,2.41,5.94,4.2,5,3.59,11.81,8.64,19.21,14.39s14,11.11,18.71,15.05c2.35,2,4.24,3.58,5.54,4.71l1.48,1.31c.34.31.51.47.49.49a3.68,3.68,0,0,1-.56-.4l-1.55-1.23-5.65-4.57C120,353,113.42,347.71,106,342s-14.18-10.84-19.1-14.51l-5.83-4.34-1.58-1.2A3,3,0,0,1,79,321.46Z"
					style="fill: rgb(38, 50, 56); transform-origin: 105.801px 342.27px;" id="elsnv87r9b2mj"
					class="animable"></path>
				<path
					d="M115,353.13a29.67,29.67,0,0,0-27.08-.42c-2.13,1.08-4.38,2.9-4.19,5.28s2.72,3.83,5,4.51a25.31,25.31,0,0,0,26.66-8.87"
					style="fill: #0174BE; transform-origin: 99.5544px 356.522px;" id="elzpua9zra2pi" class="animable">
				</path>
				<path
					d="M94.32,356.32a7,7,0,0,1,1.31-.72,14,14,0,0,1,1.6-.73,20.45,20.45,0,0,1,2.18-.8,25.45,25.45,0,0,1,2.71-.76,30.91,30.91,0,0,1,3.19-.57,33.32,33.32,0,0,1,7.42,0,32.12,32.12,0,0,1,7.21,1.76,28.23,28.23,0,0,1,3,1.32,27.3,27.3,0,0,1,2.46,1.4c.75.43,1.34.94,1.9,1.33a14.13,14.13,0,0,1,1.36,1.11,7.84,7.84,0,0,1,1.08,1c-.09.1-1.64-1.37-4.55-3.14a26.26,26.26,0,0,0-2.45-1.32,28.86,28.86,0,0,0-2.94-1.26,33,33,0,0,0-7.09-1.68,34.25,34.25,0,0,0-7.3,0,30.89,30.89,0,0,0-3.15.52c-1,.17-1.88.45-2.7.67C96.26,355.43,94.37,356.43,94.32,356.32Z"
					style="fill: rgb(38, 50, 56); transform-origin: 112.03px 356.599px;" id="eljyikmdudef"
					class="animable">
				</path>
				<path
					d="M374.6,392.35c-7-4.5-9.52-10.27-10.62-18.52a29.2,29.2,0,0,1,7.19-23.09c4.66-5.14,11.2-8.65,14.59-14.71,3.6-6.46,3.14-15,8.28-20.35,3.54-3.65,8.87-4.79,13.23-7.39,3.57-2.12,6.45-5.19,9.68-7.78s7.11-4.79,11.25-4.64c6.25.23,11.34,6.16,11.87,12.39s-2.71,12.33-7.32,16.56c-3.34,3.06-7.51,5.47-9.62,9.49-4,7.53.87,17.61-3.42,25-3.13,5.37-10.59,8.17-11.4,14.34-.3,2.27.43,4.54.5,6.83.22,7.15-6.24,13.16-13.23,14.7s-14.25-.39-21-2.8"
					style="fill: rgb(69, 90, 100); transform-origin: 401.939px 345.797px;" id="elrlr4c6kig9d"
					class="animable"></path>
				<path
					d="M415.67,321.51a5.49,5.49,0,0,1-.69.84l-2.11,2.27c-.93,1-2.07,2.17-3.3,3.63s-2.75,3-4.21,4.94-3.18,3.91-4.8,6.23c-.81,1.16-1.72,2.3-2.54,3.57l-2.55,3.88a137.82,137.82,0,0,0-9.68,18.23,131.83,131.83,0,0,0-6.55,19.57c-.71,3.1-1.4,6-1.8,8.84s-.8,5.39-1.07,7.78-.36,4.56-.52,6.47-.17,3.55-.19,4.9-.05,2.3-.07,3.1a5.07,5.07,0,0,1-.09,1.08,4.78,4.78,0,0,1-.08-1.08c0-.8-.05-1.83-.09-3.11s-.07-3,0-4.91.1-4.11.39-6.51.47-5,1-7.84,1-5.78,1.73-8.9A128.78,128.78,0,0,1,385,364.76a132.91,132.91,0,0,1,9.81-18.32l2.59-3.88c.84-1.26,1.76-2.41,2.59-3.56,1.66-2.31,3.37-4.33,4.91-6.19s3-3.45,4.31-4.88,2.45-2.6,3.42-3.54,1.65-1.61,2.23-2.16A5.38,5.38,0,0,1,415.67,321.51Z"
					style="fill: rgb(38, 50, 56); transform-origin: 395.479px 369.175px;" id="el16tlugmpc15"
					class="animable"></path>
			</g>
			<g id="freepik--Window--inject-155" class="animable" style="transform-origin: 252.065px 290.765px;">
				<rect x="123.21" y="139.15" width="257.63" height="303.33"
					style="fill: rgb(250, 250, 250); transform-origin: 252.025px 290.815px;" id="el17kznrnx7xw"
					class="animable"></rect>
				<path
					d="M380.85,442.48c0-2-.1-122.59-.24-303.33l.24.23-257.61,0h0l.26-.26c0,112,0,216.31,0,303.33l-.22-.22,257.64.22-257.64.22H123v-.22c0-87,0-191.34,0-303.33v-.26h.29l257.61,0h.23v.24C380.94,319.89,380.85,440.47,380.85,442.48Z"
					style="fill: rgb(38, 50, 56); transform-origin: 252.065px 290.765px;" id="el7s257q3lnoy"
					class="animable"></path>
				<path d="M266.57,188.72h-5l-1.08,2.41h-1l4.12-9h.94l4.12,9h-1Zm-.34-.77-2.17-4.84L261.9,188Z"
					id="el1fyme8wgxijh" class="animable" style="transform-origin: 264.08px 186.63px;"></path>
				<path
					d="M276.08,181.57v9.56h-.88v-1.34a2.93,2.93,0,0,1-2.61,1.4,3.45,3.45,0,0,1,0-6.89,3,3,0,0,1,2.57,1.34v-4.07Zm-.91,6.17a2.52,2.52,0,1,0-2.51,2.64A2.48,2.48,0,0,0,275.17,187.74Z"
					id="eli75tm61gcob" class="animable" style="transform-origin: 272.703px 186.381px;"></path>
				<path
					d="M284.81,181.57v9.56h-.88v-1.34a2.93,2.93,0,0,1-2.61,1.4,3.45,3.45,0,0,1,0-6.89,3,3,0,0,1,2.57,1.34v-4.07Zm-.91,6.17a2.52,2.52,0,1,0-2.51,2.64A2.48,2.48,0,0,0,283.9,187.74Z"
					id="elk3j1enpm89i" class="animable" style="transform-origin: 281.433px 186.381px;"></path>
				<path
					d="M296.83,184.35v6.78H296v-1.24a2.67,2.67,0,0,1-2.43,1.3,2.62,2.62,0,0,1-2.86-2.91v-3.93h.92v3.84c0,1.44.74,2.18,2,2.18a2.21,2.21,0,0,0,2.31-2.46v-3.56Z"
					id="elimjq2gfn2pe" class="animable" style="transform-origin: 293.761px 187.776px;"></path>
				<path
					d="M298.45,190.36l.41-.73a4.07,4.07,0,0,0,2.41.76c1.29,0,1.82-.43,1.82-1.1,0-1.77-4.4-.38-4.4-3,0-1.11,1-1.94,2.68-1.94a4.67,4.67,0,0,1,2.4.63l-.4.74a3.49,3.49,0,0,0-2-.58c-1.22,0-1.76.48-1.76,1.12,0,1.83,4.39.45,4.39,3,0,1.17-1,1.93-2.79,1.93A4.57,4.57,0,0,1,298.45,190.36Z"
					id="elt65psuu1lh" class="animable" style="transform-origin: 301.225px 187.771px;"></path>
				<path
					d="M311.59,188h-5.67a2.5,2.5,0,0,0,2.67,2.35,2.65,2.65,0,0,0,2.07-.89l.51.6a3.31,3.31,0,0,1-2.61,1.1,3.35,3.35,0,0,1-3.55-3.45,3.3,3.3,0,1,1,6.59,0C311.6,187.82,311.59,187.92,311.59,188Zm-5.67-.69h4.8a2.41,2.41,0,0,0-4.8,0Z"
					id="eldyuc1txgvam" class="animable" style="transform-origin: 308.305px 187.697px;"></path>
				<path
					d="M316.88,184.3v.89h-.22a2.19,2.19,0,0,0-2.28,2.5v3.45h-.92v-6.78h.88v1.33A2.57,2.57,0,0,1,316.88,184.3Z"
					id="elfgs2t902v07" class="animable" style="transform-origin: 315.17px 187.714px;"></path>
				<path
					d="M247.83,279.29s0-.2,0-.56,0-.92,0-1.62c0-1.44,0-3.54,0-6.26,0-5.45-.06-13.37-.1-23.33l.17.16-101.09.1h0l.26-.26c0,11,0,21.7,0,31.77l-.25-.25,72.25.11,21.16.07,5.69,0h1.48l.51,0-.48,0H245.9l-5.63,0-21.1.08-72.43.11h-.26V247.26h.26l101.09.09H248v.17c0,10-.07,18-.09,23.43,0,2.7,0,4.79,0,6.22,0,.69,0,1.22,0,1.59S247.83,279.29,247.83,279.29Z"
					style="fill: rgb(38, 50, 56); transform-origin: 197.24px 263.335px;" id="elahpcjy5pqac"
					class="animable"></path>
				<path
					d="M359.73,322.32s0-.71,0-2.09,0-3.42,0-6.11c0-5.37,0-13.3-.07-23.57l.13.13-213,.13h0l.26-.26v31.77l-.26-.25,151.54.11,45,.07,12.17,0,3.16,0h1.09s-.35,0-1.05,0l-3.13,0-12.11,0-45,.08-151.72.11h-.26V290.29h.27l213,.13h.13v.13c0,10.31-.06,18.26-.08,23.65q0,4,0,6.08C359.75,321.64,359.73,322.32,359.73,322.32Z"
					style="fill: rgb(38, 50, 56); transform-origin: 253.18px 306.365px;" id="el8uein06xj2x"
					class="animable"></path>
				<path
					d="M359.73,365.06s0-.72,0-2.09,0-3.43,0-6.11c0-5.38,0-13.3-.07-23.57l.13.12-213,.14h0l.26-.26v31.77l-.26-.26,151.54.11,45,.08,12.17,0,3.16,0,1.09,0-1.05,0h-3.13l-12.11,0-45,.07-151.72.12h-.26V333h.27l213,.14h.13v.13c0,10.3-.06,18.25-.08,23.64q0,4,0,6.08C359.75,364.38,359.73,365.06,359.73,365.06Z"
					style="fill: rgb(38, 50, 56); transform-origin: 253.18px 349.09px;" id="elue0qw92bnu"
					class="animable">
				</path>
				<path
					d="M359.73,279.29s0-.2,0-.56,0-.92,0-1.62c0-1.44,0-3.54,0-6.26,0-5.45,0-13.37-.09-23.33l.17.16-101.09.1h0l.26-.26v31.77l-.26-.25,72.26.11,21.16.07,5.69,0h1.48l.51,0-.48,0H357.8l-5.63,0-21.1.08-72.44.11h-.25v-.25c0-10.07,0-20.76,0-31.77v-.26h.27l101.09.09h.17v.17c0,10-.07,18-.1,23.43,0,2.7,0,4.79,0,6.22,0,.69,0,1.22,0,1.59S359.73,279.29,359.73,279.29Z"
					style="fill: rgb(38, 50, 56); transform-origin: 309.145px 263.27px;" id="elbs9n3t88wbr"
					class="animable"></path>
				<path
					d="M167.91,268a5.76,5.76,0,0,1-.77.05l-2.28.07c-2,.06-4.86.14-8.3.18h-.32l.1-.3a6.07,6.07,0,0,1,1.6-2.68A5.74,5.74,0,0,1,161,263.9l-.06.49a3.84,3.84,0,0,1-2.29-3.24,3.92,3.92,0,0,1,2.15-3.85,3.41,3.41,0,0,1,4,.87,4,4,0,0,1,.85,3.65,3.69,3.69,0,0,1-2.11,2.49l0-.35a5.64,5.64,0,0,1,2.47,1,5.26,5.26,0,0,1,1.34,1.48,4,4,0,0,1,.61,1.58s-.08-.15-.19-.39a7.87,7.87,0,0,0-.59-1.08,5.09,5.09,0,0,0-3.7-2.22l-.67-.08.63-.27a3.32,3.32,0,0,0,1.83-2.26,3.55,3.55,0,0,0-.78-3.22,3,3,0,0,0-3.43-.73,3.4,3.4,0,0,0-1.84,3.34,3.33,3.33,0,0,0,2,2.82l.85.34-.91.15a5.19,5.19,0,0,0-2.8,1.29,5.65,5.65,0,0,0-1.51,2.45l-.22-.29c3.33,0,6.13,0,8.14.07l2.34,0A6.06,6.06,0,0,1,167.91,268Z"
					style="fill: #0174BE; transform-origin: 162.1px 262.645px;" id="elz4b1d1h574" class="animable">
				</path>
				<path
					d="M286.42,268a5.46,5.46,0,0,1-.76.05l-2.29.07c-2,.06-4.85.14-8.3.18h-.31l.09-.3a6.07,6.07,0,0,1,1.6-2.68,5.74,5.74,0,0,1,3.06-1.44l-.06.49a3.83,3.83,0,0,1-2.28-3.24,3.89,3.89,0,0,1,2.14-3.85,3.42,3.42,0,0,1,4,.87,4,4,0,0,1,.84,3.65,3.69,3.69,0,0,1-2.11,2.49l0-.35a5.64,5.64,0,0,1,2.47,1,5.11,5.11,0,0,1,1.34,1.48,4,4,0,0,1,.61,1.58s-.08-.15-.19-.39a6.15,6.15,0,0,0-.59-1.08,5.07,5.07,0,0,0-3.69-2.22l-.67-.08.62-.27a3.36,3.36,0,0,0,1.84-2.26,3.56,3.56,0,0,0-.79-3.22,2.93,2.93,0,0,0-3.42-.73,3.39,3.39,0,0,0-1.85,3.34,3.33,3.33,0,0,0,2,2.82l.85.34-.91.15a5.19,5.19,0,0,0-2.8,1.29,5.63,5.63,0,0,0-1.5,2.45l-.22-.29c3.33,0,6.13,0,8.13.07l2.35,0A5.85,5.85,0,0,1,286.42,268Z"
					style="fill: #0174BE; transform-origin: 280.61px 262.636px;" id="elqs3rvi2razm" class="animable">
				</path>
				<path d="M179.76,261v2.68h3.52v.62h-3.52v2.89H179v-6.81h4.67V261Z"
					style="fill: rgb(38, 50, 56); transform-origin: 181.335px 263.785px;" id="elkeofva1ccnf"
					class="animable"></path>
				<path d="M184.79,260.45a.5.5,0,0,1,.5-.49.49.49,0,0,1,.51.48.51.51,0,1,1-1,0Zm.15,1.61h.69v5.12h-.69Z"
					style="fill: rgb(38, 50, 56); transform-origin: 185.3px 263.57px;" id="elcjul699zqtw"
					class="animable">
				</path>
				<path
					d="M190.13,262v.68H190a1.65,1.65,0,0,0-1.72,1.88v2.61h-.69v-5.12h.66v1A1.92,1.92,0,0,1,190.13,262Z"
					style="fill: rgb(38, 50, 56); transform-origin: 188.86px 264.581px;" id="el4z5tgwd9bga"
					class="animable"></path>
				<path
					d="M190.7,266.59l.31-.54a3.1,3.1,0,0,0,1.82.57c1,0,1.37-.33,1.37-.83,0-1.34-3.31-.29-3.31-2.31,0-.83.72-1.46,2-1.46a3.5,3.5,0,0,1,1.81.48l-.3.56a2.58,2.58,0,0,0-1.51-.44c-.92,0-1.33.36-1.33.84,0,1.38,3.31.34,3.31,2.31,0,.88-.77,1.45-2.11,1.45A3.43,3.43,0,0,1,190.7,266.59Z"
					style="fill: rgb(38, 50, 56); transform-origin: 192.785px 264.62px;" id="elkb97wq4lei"
					class="animable">
				</path>
				<path
					d="M198.86,266.86a1.64,1.64,0,0,1-1.08.36,1.35,1.35,0,0,1-1.5-1.48v-3.09h-.91v-.59h.91V261H197v1.11h1.55v.59H197v3.05a.82.82,0,0,0,.88.93,1.15,1.15,0,0,0,.76-.26Z"
					style="fill: rgb(38, 50, 56); transform-origin: 197.115px 264.115px;" id="elkh9br2j9te"
					class="animable"></path>
				<path
					d="M207.35,264.21v3h-.69v-2.9a1.42,1.42,0,0,0-1.53-1.63,1.67,1.67,0,0,0-1.79,1.84v2.69h-.69v-5.12h.66V263a2.14,2.14,0,0,1,1.95-1A2,2,0,0,1,207.35,264.21Z"
					style="fill: rgb(38, 50, 56); transform-origin: 205.006px 264.603px;" id="elbzqmco45ws"
					class="animable"></path>
				<path
					d="M213.08,264v3.17h-.66v-.8a1.92,1.92,0,0,1-1.76.84c-1.15,0-1.86-.6-1.86-1.48s.5-1.45,2-1.45h1.62V264c0-.88-.49-1.35-1.44-1.35a2.58,2.58,0,0,0-1.7.6l-.32-.51A3.26,3.26,0,0,1,211,262,1.82,1.82,0,0,1,213.08,264Zm-.69,1.63v-.84h-1.6c-1,0-1.31.39-1.31.92s.47,1,1.29,1A1.63,1.63,0,0,0,212.39,265.64Z"
					style="fill: rgb(38, 50, 56); transform-origin: 210.946px 264.599px;" id="el1vemabxnesu"
					class="animable"></path>
				<path
					d="M223.39,264.21v3h-.69v-2.9c0-1.08-.54-1.63-1.47-1.63a1.64,1.64,0,0,0-1.71,1.84v2.69h-.69v-2.9c0-1.08-.54-1.63-1.47-1.63a1.64,1.64,0,0,0-1.71,1.84v2.69H215v-5.12h.66V263a2.05,2.05,0,0,1,1.87-1,1.83,1.83,0,0,1,1.82,1.08,2.23,2.23,0,0,1,2-1.08A1.93,1.93,0,0,1,223.39,264.21Z"
					style="fill: rgb(38, 50, 56); transform-origin: 219.206px 264.602px;" id="elmpj70868v3"
					class="animable"></path>
				<path
					d="M229.73,264.83h-4.27a1.89,1.89,0,0,0,2,1.78,2,2,0,0,0,1.56-.67l.39.45a2.7,2.7,0,0,1-4.65-1.77,2.49,2.49,0,1,1,5,0C229.74,264.68,229.73,264.76,229.73,264.83Zm-4.27-.51h3.62a1.78,1.78,0,0,0-1.82-1.7A1.76,1.76,0,0,0,225.46,264.32Z"
					style="fill: rgb(38, 50, 56); transform-origin: 227.26px 264.672px;" id="el5ru4wlfljj"
					class="animable">
				</path>
				<path d="M184.83,311v.62H180v-6.8h4.67v.62h-4v2.42h3.52v.61h-3.52V311Z"
					style="fill: rgb(38, 50, 56); transform-origin: 182.415px 308.22px;" id="elcl0ojxygg"
					class="animable">
				</path>
				<path
					d="M194.8,308.69v3h-.69v-2.9c0-1.08-.54-1.63-1.47-1.63a1.64,1.64,0,0,0-1.71,1.85v2.68h-.69v-2.9c0-1.08-.54-1.63-1.47-1.63a1.65,1.65,0,0,0-1.71,1.85v2.68h-.69v-5.11H187v.93a2.07,2.07,0,0,1,1.87-1,1.83,1.83,0,0,1,1.82,1.08,2.23,2.23,0,0,1,2-1.08A1.92,1.92,0,0,1,194.8,308.69Z"
					style="fill: rgb(38, 50, 56); transform-origin: 190.595px 309.094px;" id="eljdnfdcujufe"
					class="animable"></path>
				<path
					d="M200.53,308.49v3.17h-.66v-.8a1.92,1.92,0,0,1-1.76.85c-1.16,0-1.87-.6-1.87-1.49s.51-1.45,2-1.45h1.62v-.31c0-.87-.5-1.35-1.45-1.35a2.6,2.6,0,0,0-1.7.6l-.31-.51a3.21,3.21,0,0,1,2.08-.69A1.82,1.82,0,0,1,200.53,308.49Zm-.69,1.63v-.83h-1.6c-1,0-1.32.39-1.32.91s.48,1,1.3,1A1.64,1.64,0,0,0,199.84,310.12Z"
					style="fill: rgb(38, 50, 56); transform-origin: 198.389px 309.106px;" id="el80djb4a80s3"
					class="animable"></path>
				<path d="M202.25,304.93a.51.51,0,0,1,1,0,.51.51,0,1,1-1,0Zm.15,1.62h.69v5.11h-.69Z"
					style="fill: rgb(38, 50, 56); transform-origin: 202.75px 308.09px;" id="eljur0m8y0fl"
					class="animable">
				</path>
				<path d="M205,304.45h.69v7.21H205Z"
					style="fill: rgb(38, 50, 56); transform-origin: 205.345px 308.055px;" id="elmgbn6kibzyg"
					class="animable"></path>
				<path
					d="M182,349.73c0,1.45-1,2.32-2.78,2.32h-1.83v2.15h-.72v-6.8h2.55C180.93,347.4,182,348.27,182,349.73Zm-.72,0c0-1.09-.72-1.71-2.08-1.71h-1.81v3.4h1.81C180.54,351.42,181.26,350.8,181.26,349.73Z"
					style="fill: rgb(38, 50, 56); transform-origin: 179.335px 350.8px;" id="elxoj4sf0jdxk"
					class="animable">
				</path>
				<path
					d="M187.2,351v3.17h-.67v-.8a1.9,1.9,0,0,1-1.75.85c-1.16,0-1.87-.6-1.87-1.49s.5-1.45,2-1.45h1.63V351c0-.87-.5-1.35-1.45-1.35a2.59,2.59,0,0,0-1.7.61l-.31-.52a3.21,3.21,0,0,1,2.08-.69A1.82,1.82,0,0,1,187.2,351Zm-.69,1.64v-.84H184.9c-1,0-1.31.39-1.31.91s.48,1,1.29,1A1.65,1.65,0,0,0,186.51,352.67Z"
					style="fill: rgb(38, 50, 56); transform-origin: 185.058px 351.631px;" id="elxa9duqt3yfk"
					class="animable"></path>
				<path
					d="M188.36,353.62l.31-.55a3.11,3.11,0,0,0,1.82.58c1,0,1.37-.33,1.37-.84,0-1.33-3.32-.28-3.32-2.3,0-.84.72-1.46,2-1.46a3.38,3.38,0,0,1,1.81.48l-.3.55a2.64,2.64,0,0,0-1.51-.44c-.92,0-1.33.36-1.33.85,0,1.38,3.32.34,3.32,2.3,0,.89-.78,1.46-2.11,1.46A3.41,3.41,0,0,1,188.36,353.62Z"
					style="fill: rgb(38, 50, 56); transform-origin: 190.445px 351.65px;" id="elxe749tgwk5l"
					class="animable"></path>
				<path
					d="M193.11,353.62l.31-.55a3.11,3.11,0,0,0,1.82.58c1,0,1.37-.33,1.37-.84,0-1.33-3.32-.28-3.32-2.3,0-.84.72-1.46,2-1.46a3.4,3.4,0,0,1,1.81.48l-.3.55a2.64,2.64,0,0,0-1.51-.44c-.92,0-1.33.36-1.33.85,0,1.38,3.32.34,3.32,2.3,0,.89-.78,1.46-2.11,1.46A3.41,3.41,0,0,1,193.11,353.62Z"
					style="fill: rgb(38, 50, 56); transform-origin: 195.195px 351.65px;" id="eljv6miiy50ds"
					class="animable"></path>
				<path
					d="M206,349.09,204,354.2h-.65L201.77,350l-1.61,4.19h-.65l-1.93-5.11h.67l1.6,4.34,1.64-4.34h.6l1.63,4.34,1.62-4.34Z"
					style="fill: rgb(38, 50, 56); transform-origin: 201.79px 351.64px;" id="eledinvje3odg"
					class="animable">
				</path>
				<path
					d="M206.35,351.64a2.6,2.6,0,1,1,2.6,2.61A2.51,2.51,0,0,1,206.35,351.64Zm4.5,0a1.9,1.9,0,1,0-1.9,2A1.87,1.87,0,0,0,210.85,351.64Z"
					style="fill: rgb(38, 50, 56); transform-origin: 208.949px 351.651px;" id="el59k9umo5gqd"
					class="animable"></path>
				<path
					d="M215.53,349.05v.67h-.17a1.65,1.65,0,0,0-1.72,1.89v2.6H213v-5.11h.66v1A1.93,1.93,0,0,1,215.53,349.05Z"
					style="fill: rgb(38, 50, 56); transform-origin: 214.265px 351.627px;" id="elvyj2abm0w6"
					class="animable"></path>
				<path
					d="M221.38,347v7.21h-.66v-1a2.2,2.2,0,0,1-2,1.06,2.6,2.6,0,0,1,0-5.2,2.21,2.21,0,0,1,1.94,1V347Zm-.68,4.65a1.9,1.9,0,1,0-1.89,2A1.87,1.87,0,0,0,220.7,351.64Z"
					style="fill: rgb(38, 50, 56); transform-origin: 218.75px 350.637px;" id="elh3xx38hqm2c"
					class="animable"></path>
				<path d="M294,261.33h.71v6.19h3.82v.62H294Z"
					style="fill: rgb(38, 50, 56); transform-origin: 296.265px 264.735px;" id="el0ymxyabf4mz9"
					class="animable"></path>
				<path
					d="M303.4,265v3.17h-.66v-.8a1.92,1.92,0,0,1-1.76.85c-1.16,0-1.87-.61-1.87-1.49s.51-1.45,2-1.45h1.62v-.31c0-.87-.5-1.35-1.45-1.35a2.6,2.6,0,0,0-1.7.6l-.31-.51a3.21,3.21,0,0,1,2.08-.69A1.82,1.82,0,0,1,303.4,265Zm-.69,1.63v-.83h-1.6c-1,0-1.32.39-1.32.91s.48,1,1.3,1A1.64,1.64,0,0,0,302.71,266.6Z"
					style="fill: rgb(38, 50, 56); transform-origin: 301.259px 265.616px;" id="elfd6ceobmlf"
					class="animable"></path>
				<path
					d="M304.56,267.56l.31-.55a3.1,3.1,0,0,0,1.82.57c1,0,1.37-.33,1.37-.83,0-1.33-3.31-.28-3.31-2.31,0-.83.71-1.45,2-1.45a3.43,3.43,0,0,1,1.8.47l-.3.56a2.61,2.61,0,0,0-1.5-.44c-.93,0-1.33.36-1.33.85,0,1.38,3.31.33,3.31,2.3,0,.88-.78,1.46-2.11,1.46A3.5,3.5,0,0,1,304.56,267.56Z"
					style="fill: rgb(38, 50, 56); transform-origin: 306.645px 265.59px;" id="eles7dqorwyps"
					class="animable"></path>
				<path
					d="M312.71,267.83a1.66,1.66,0,0,1-1.08.36,1.35,1.35,0,0,1-1.49-1.49v-3.09h-.92V263h.92v-1.12h.69V263h1.55v.58h-1.55v3.05a.82.82,0,0,0,.88.93,1.13,1.13,0,0,0,.76-.26Z"
					style="fill: rgb(38, 50, 56); transform-origin: 310.965px 265.039px;" id="ela6ium845uy"
					class="animable"></path>
				<path
					d="M321.21,265.17v3h-.69v-2.9a1.42,1.42,0,0,0-1.54-1.63,1.67,1.67,0,0,0-1.78,1.85v2.68h-.69V263h.66V264a2.15,2.15,0,0,1,1.94-1A2,2,0,0,1,321.21,265.17Z"
					style="fill: rgb(38, 50, 56); transform-origin: 318.864px 265.583px;" id="elvetsczz6fuc"
					class="animable"></path>
				<path
					d="M326.94,265v3.17h-.66v-.8a1.91,1.91,0,0,1-1.76.85c-1.16,0-1.87-.61-1.87-1.49s.51-1.45,2-1.45h1.62v-.31c0-.87-.5-1.35-1.45-1.35a2.6,2.6,0,0,0-1.7.6l-.31-.51a3.23,3.23,0,0,1,2.08-.69A1.82,1.82,0,0,1,326.94,265Zm-.69,1.63v-.83h-1.6c-1,0-1.32.39-1.32.91s.48,1,1.3,1A1.64,1.64,0,0,0,326.25,266.6Z"
					style="fill: rgb(38, 50, 56); transform-origin: 324.799px 265.616px;" id="elo1p39e3na4g"
					class="animable"></path>
				<path
					d="M337.25,265.17v3h-.69v-2.9c0-1.08-.54-1.63-1.47-1.63a1.64,1.64,0,0,0-1.71,1.85v2.68h-.69v-2.9c0-1.08-.54-1.63-1.48-1.63a1.65,1.65,0,0,0-1.71,1.85v2.68h-.69V263h.66V264a2.07,2.07,0,0,1,1.88-1,1.84,1.84,0,0,1,1.82,1.08,2.21,2.21,0,0,1,2-1.08A1.93,1.93,0,0,1,337.25,265.17Z"
					style="fill: rgb(38, 50, 56); transform-origin: 333.038px 265.581px;" id="eljy8t9v1ft6h"
					class="animable"></path>
				<path
					d="M343.59,265.8h-4.28a1.9,1.9,0,0,0,2,1.77,2,2,0,0,0,1.57-.67l.39.45a2.7,2.7,0,0,1-4.66-1.77,2.46,2.46,0,0,1,2.5-2.59,2.44,2.44,0,0,1,2.48,2.59C343.6,265.64,343.59,265.72,343.59,265.8Zm-4.28-.52h3.63a1.82,1.82,0,0,0-3.63,0Z"
					style="fill: rgb(38, 50, 56); transform-origin: 341.101px 265.592px;" id="el8mgifejf2xr"
					class="animable"></path>
				<path
					d="M166.75,346.43l0-1a3.41,3.41,0,0,0-6.81,0l0,1.06a1.9,1.9,0,0,0-1.62,1.88v6.12a1.9,1.9,0,0,0,1.9,1.9h6.36a1.9,1.9,0,0,0,1.9-1.9v-6.12A1.9,1.9,0,0,0,166.75,346.43Zm-2.48,6.49h-1.66l.26-1.2a1,1,0,0,1-.48-.86,1,1,0,0,1,2,0,1,1,0,0,1-.44.85C164.08,352.17,164.27,352.92,164.27,352.92Zm1.75-6.5h-5.34v-1a2.67,2.67,0,0,1,5.34,0Z"
					style="fill: none; transform-origin: 163.4px 349.297px;" id="elje2e882nbli" class="animable"></path>
				<path
					d="M166,346.42a4,4,0,0,1-.09-.65,3.23,3.23,0,0,0-.36-1.52,2.54,2.54,0,0,0-1.84-1.26,2.46,2.46,0,0,0-2.39,1.1,2.34,2.34,0,0,0-.38,1.12c0,.42,0,.82,0,1.22l-.24-.25a53,53,0,0,1,5.34.24,42.47,42.47,0,0,1-5.34.25h-.25v-.25c0-.4,0-.79,0-1.25a2.75,2.75,0,0,1,.45-1.36,2.89,2.89,0,0,1,2.9-1.29,2.82,2.82,0,0,1,2.09,1.56,2.89,2.89,0,0,1,.23,1.75C166.08,346.26,166,346.45,166,346.42Z"
					style="fill: #0174BE; transform-origin: 163.308px 344.579px;" id="elymzfsyzxf3n" class="animable">
				</path>
				<path
					d="M164.27,352.92a8.85,8.85,0,0,1-.48-1.17l0-.11.11-.08a.83.83,0,0,0,.2-1.08.77.77,0,1,0-1.08,1l.16.09-.05.17-.3,1.19-.19-.24a12.44,12.44,0,0,1,1.66.19,5.33,5.33,0,0,1-1.66.2l-.24,0,0-.26c.08-.4.15-.8.22-1.21l.11.26a1.26,1.26,0,0,1-.27-1.93,1.23,1.23,0,0,1,1.12-.39,1.26,1.26,0,0,1,.9.63,1.2,1.2,0,0,1-.43,1.61l.08-.19A3.58,3.58,0,0,1,164.27,352.92Z"
					style="fill: #0174BE; transform-origin: 163.378px 351.308px;" id="el0l1mnq3c81e" class="animable">
				</path>
				<path
					d="M166.75,346.43a1.14,1.14,0,0,1,.44,0,2,2,0,0,1,1.4,1.62c0,.35,0,.69,0,1.08,0,.79,0,1.66,0,2.62,0,.49,0,1,0,1.52a8.43,8.43,0,0,1-.06,1.71,2.12,2.12,0,0,1-1.27,1.41,2.29,2.29,0,0,1-1,.16h-1l-4,0h-1.06a2.17,2.17,0,0,1-2.27-2.33c0-1.54,0-3,0-4.5v-1.07a2.81,2.81,0,0,1,.14-1.13,2.15,2.15,0,0,1,1.7-1.37l-.2.23c0-.48,0-.91,0-1.4a3.55,3.55,0,0,1,.41-1.34A3.63,3.63,0,0,1,162.1,342a3.54,3.54,0,0,1,3.87,1,3.39,3.39,0,0,1,.87,2.49,7.14,7.14,0,0,1-.09.94,4.91,4.91,0,0,1-.06-.93,3.38,3.38,0,0,0-.93-2.31,3.24,3.24,0,0,0-5.21.71,3.17,3.17,0,0,0-.35,1.18c0,.41,0,.91,0,1.37v.2l-.2,0a1.68,1.68,0,0,0-1.31,1.07,2.63,2.63,0,0,0-.1,1v1.07c0,1.45,0,3,0,4.5a1.68,1.68,0,0,0,.85,1.61,1.84,1.84,0,0,0,.9.21h5.08a5.94,5.94,0,0,0,1.78-.1,1.67,1.67,0,0,0,1-1.11,9.11,9.11,0,0,0,.08-1.59c0-.52,0-1,0-1.52,0-1,0-1.83,0-2.62,0-.38,0-.76,0-1.06a1.77,1.77,0,0,0-.27-.79A2.26,2.26,0,0,0,166.75,346.43Z"
					style="fill: #0174BE; transform-origin: 163.265px 349.172px;" id="elgyobjt7aw7a" class="animable">
				</path>
				<path
					d="M171.12,313.17a7.68,7.68,0,0,1-.05-.77c0-.54,0-1.24-.07-2.09-.05-1.84-.11-4.37-.19-7.42l.21.21-15.24.2L156,303h0v1.34c0,.45,0,.9,0,1.35,0,.89,0,1.77,0,2.63,0,1.71,0,3.37,0,4.93l-.24-.23c4.44,0,8.22,0,10.91,0l3.16,0a8.7,8.7,0,0,1,1.17.05,6.71,6.71,0,0,1-1.06.06l-3.11.1c-2.68.07-6.52.16-11.07.22h-.23v-.24c0-1.57,0-3.22-.06-4.94,0-.86,0-1.74,0-2.63,0-.44,0-.89,0-1.34v-1.35h0l.26-.27,15.24-.1h.21v.21c0,3.1,0,5.67,0,7.55,0,.83,0,1.51,0,2A3.09,3.09,0,0,1,171.12,313.17Z"
					style="fill: #0174BE; transform-origin: 163.328px 308.015px;" id="el740koq4a8yo" class="animable">
				</path>
				<path
					d="M171,302.89a13.06,13.06,0,0,1-2.11,1.76c-1.34,1-3.21,2.43-5.3,3.94h-.35l0,0-.1-.07-.2-.14-.39-.27-.76-.53-1.43-1-2.41-1.74a14.53,14.53,0,0,1-2.14-1.72,14.31,14.31,0,0,1,2.35,1.42l2.47,1.65,1.45,1,.77.53.39.27.19.13.1.07.05,0,0,0h-.28c2.09-1.51,4-2.86,5.4-3.82A15.14,15.14,0,0,1,171,302.89Z"
					style="fill: #0174BE; transform-origin: 163.405px 305.74px;" id="el8syizz1plgm" class="animable">
				</path>
				<path
					d="M156.18,313.31a16,16,0,0,1,2.33-3.38,16.5,16.5,0,0,1,2.75-3.07,15.79,15.79,0,0,1-2.34,3.39A16.39,16.39,0,0,1,156.18,313.31Z"
					style="fill: #0174BE; transform-origin: 158.72px 310.085px;" id="el2ga59m5ze2v" class="animable">
				</path>
				<path
					d="M166.23,306.86a15.54,15.54,0,0,1,2.65,3,15.38,15.38,0,0,1,2.24,3.32,15.43,15.43,0,0,1-2.65-3A15.2,15.2,0,0,1,166.23,306.86Z"
					style="fill: #0174BE; transform-origin: 168.675px 310.02px;" id="ela287cz1jucj" class="animable">
				</path>
				<rect x="146.74" y="381.49" width="212.99" height="32.47" rx="2.66"
					style="fill: #0174BE; transform-origin: 253.235px 397.725px;" id="elaawssnq1boh" class="animable">
				</rect>
				<g id="elx11l1cpmku" class="">
					<g style="opacity: 0.3; transform-origin: 253.235px 397.725px;" class="animable" id="el51nszh9jtyi">
						<rect x="146.74" y="381.49" width="212.99" height="32.47" rx="2.66" id="el0yki267vqjrh"
							class="animable" style="transform-origin: 253.235px 397.725px;"></rect>
					</g>
				</g>
				<rect x="146.74" y="376.97" width="212.99" height="32.47" rx="2.66"
					style="fill: #0174BE; transform-origin: 253.235px 393.205px;" id="ela0zreouqykn" class="animable">
				</rect>
				<path
					d="M235.25,393.9a3.44,3.44,0,0,1,3.6-3.48,3.37,3.37,0,0,1,2.59,1.06l-.63.61a2.63,2.63,0,1,0,0,3.61l.63.61a3.38,3.38,0,0,1-2.6,1.07A3.44,3.44,0,0,1,235.25,393.9Z"
					style="fill: rgb(255, 255, 255); transform-origin: 238.345px 393.9px;" id="elnozk0oo1djk"
					class="animable"></path>
				<path
					d="M247.37,397.3l-1.47-2.09-.42,0h-1.69v2.07h-1v-6.8h2.66c1.76,0,2.83.89,2.83,2.37a2.15,2.15,0,0,1-1.49,2.15l1.61,2.28Zm0-4.43c0-1-.65-1.52-1.89-1.52h-1.66v3.06h1.66C246.69,394.41,247.34,393.84,247.34,392.87Z"
					style="fill: rgb(255, 255, 255); transform-origin: 245.595px 393.89px;" id="elg3nntot26js"
					class="animable"></path>
				<path d="M254.82,396.46v.84h-4.94v-6.8h4.8v.85h-3.83v2.09h3.42v.82h-3.42v2.2Z"
					style="fill: rgb(255, 255, 255); transform-origin: 252.35px 393.9px;" id="el3idc2jszi4m"
					class="animable"></path>
				<path d="M260.73,395.6h-3.62l-.75,1.7h-1l3.08-6.8h1l3.09,6.8h-1Zm-.34-.77-1.47-3.34-1.47,3.34Z"
					style="fill: rgb(255, 255, 255); transform-origin: 258.945px 393.9px;" id="elhgjekjpv3bi"
					class="animable"></path>
				<path d="M264.51,391.35h-2.33v-.85h5.63v.85h-2.34v5.95h-1Z"
					style="fill: rgb(255, 255, 255); transform-origin: 264.995px 393.9px;" id="elucm8nes69ra"
					class="animable"></path>
				<path d="M273.8,396.46v.84h-4.94v-6.8h4.8v.85h-3.83v2.09h3.41v.82h-3.41v2.2Z"
					style="fill: rgb(255, 255, 255); transform-origin: 271.33px 393.9px;" id="ely91l8t69vzd"
					class="animable"></path>
			</g>
			<g id="freepik--Character--inject-155" class="animable" style="transform-origin: 172.95px 134.095px;">
				<g id="elq3fxj6y14q">
					<circle cx="172.95" cy="140.8" r="70.35"
						style="fill: rgb(224, 224, 224); transform-origin: 172.95px 140.8px; transform: rotate(-45deg);"
						class="animable" id="el5ip50394vpp"></circle>
				</g>
				<path
					d="M213.25,45.71a10.09,10.09,0,0,0-1,11.06c.88,1.58,2.22,3,2.42,4.79.33,2.91-2.49,5.53-2,8.43.31,2,2,3.37,2.92,5.14a6.77,6.77,0,0,1-.77,7.21c-1.28,1.56-3.29,2.55-4.12,4.4-.62,1.36-.47,3-1,4.37a6.79,6.79,0,0,1-5.36,4,20.11,20.11,0,0,1-7-.39l.51-2.53a4.92,4.92,0,0,1-4,2.25,14.34,14.34,0,0,1-4.72-.7c-.95-4.29-1.88-8.82-.54-13,1.22-3.76,4.1-6.7,6.5-9.84a44.4,44.4,0,0,0,6.33-11.46c1.1-2.95,1.89-6,3.43-8.8s4-5.22,7.08-5.81"
					style="fill: rgb(38, 50, 56); transform-origin: 202.105px 70.0418px;" id="elyti1mjybsel"
					class="animable"></path>
				<path
					d="M259,104.8l-13.92,1-.14-3.58a7.86,7.86,0,0,1,1.2-5.06,2.92,2.92,0,0,0,.33-.85c.1-1.06-1.46-6.38-2-8.33-.68-2.34.65-3.58,1.17-2.62.94,1.75,3.43,9.26,4.21,10s.33-3.19.33-3.19c-1.22-8.27-1.75-9.47-.28-9.78,1.69-.36,3.55,11.95,3.55,11.95s-.25-1.72,1.07-2.07,1.93,1.34,1.93,1.34c-.17-.87,1.08-1,1.08-1,3.12.43,1.5,12.3,1.5,12.3l-13.92,1-6.67,46.55-7.12-10.91-18.58,13.26,16.75,20a14.86,14.86,0,0,0,11.93,5.29h0a14.82,14.82,0,0,0,14.26-14Z"
					style="fill: rgb(235, 153, 110); transform-origin: 236.095px 131.246px;" id="elnzihsu9zkwr"
					class="animable"></path>
				<path
					d="M248.11,104.93c-.06-.07.68-.72,1.67-1.94a18.65,18.65,0,0,0,1.56-2.26,16.21,16.21,0,0,0,.76-1.44,3.32,3.32,0,0,0,.48-1.52.65.65,0,0,0-.4-.58,1.26,1.26,0,0,0-.8.13,9,9,0,0,0-1.55.93,8.66,8.66,0,0,0-2,2.13l-.16.23-.12-.24A5.21,5.21,0,0,0,246.45,99s.76.18,1.41,1.26h-.28a8.06,8.06,0,0,1,2-2.32,8.72,8.72,0,0,1,1.63-1,1.71,1.71,0,0,1,1.16-.16,1.16,1.16,0,0,1,.77,1,3.69,3.69,0,0,1-.54,1.82,15.25,15.25,0,0,1-.81,1.45,15.61,15.61,0,0,1-1.69,2.26A7.91,7.91,0,0,1,248.11,104.93Z"
					style="fill: rgb(209, 115, 74); transform-origin: 249.795px 100.836px;" id="el978c6xy8zmj"
					class="animable"></path>
				<path
					d="M253.62,95a12.94,12.94,0,0,1,0,2.56c0,.84-.09,1.77-.15,2.76a10.49,10.49,0,0,0,0,1.58c0,.49.47.91.82.71s.55-.8.7-1.33.27-1.06.38-1.57c.22-1,.38-1.94.53-2.71a10.94,10.94,0,0,1,.59-2.49,14.5,14.5,0,0,1-.23,2.55c-.1.78-.22,1.71-.42,2.75-.09.51-.21,1.05-.36,1.61a2.5,2.5,0,0,1-1,1.66,1,1,0,0,1-1.11-.19,1.42,1.42,0,0,1-.44-.92,9.14,9.14,0,0,1,.06-1.68q.15-1.48.27-2.76A12.32,12.32,0,0,1,253.62,95Z"
					style="fill: rgb(209, 115, 74); transform-origin: 254.703px 98.8402px;" id="ele5imvzej9jo"
					class="animable"></path>
				<path
					d="M256,98.55c.08,0-.12.58-.06,1.48a2.83,2.83,0,0,0,.43,1.4c.17.17.29.18.45,0a5.21,5.21,0,0,0,.46-.86,29.81,29.81,0,0,0,1.49-4.87,9.3,9.3,0,0,1-1,5.09,5.81,5.81,0,0,1-.53,1,.8.8,0,0,1-.62.31.79.79,0,0,1-.59-.3,1.93,1.93,0,0,1-.37-.91,3.77,3.77,0,0,1-.07-.8C255.56,99.05,255.91,98.52,256,98.55Z"
					style="fill: rgb(209, 115, 74); transform-origin: 257.197px 98.9px;" id="elwr1r7jcawhg"
					class="animable"></path>
				<path
					d="M197.38,186.06l1.3,20.24c-39.59,15.17-69-10-69-10l5.92-18.11,1-31.62L129,155l-3.59-3L107.3,136.92l-3.89-3.25,18.83-19.87C146.05,88.17,164.58,96,164.58,96l27.84,2.61s19.26,2.73,28.58,19.61c7.59,13.74,15.85,28.29,15.85,28.29l-23.86,17-7.59-13.94Z"
					style="fill: rgb(69, 90, 100); transform-origin: 170.13px 153.018px;" id="elu9vh6668ff"
					class="animable"></path>
				<path
					d="M102.6,140.53c0,1.19,0,2.37.07,3.57a70,70,0,0,0,1.9,13.93l0,.13c.14.57.3,1.13.46,1.69.62,2.2,1.44,4.14,2.22,6.27.1.27.2.53.31.8,2.52-.66,9.21-7,17.38-15.27l-18.13-15.12C104.48,139.07,103.38,140.23,102.6,140.53Z"
					style="fill: rgb(235, 153, 110); transform-origin: 113.77px 151.725px;" id="el8xortjqydv2"
					class="animable"></path>
				<path
					d="M189.89,101.24c1-6.9,2.13-14.14,2.13-14.14s9.09-.25,12.53-11.59c3.28-10.82,5-36.61,5-36.61h0a33.64,33.64,0,0,0-38.24,3.38h0l-7,56.15c-.81,6.51,4.15,12.4,11.14,13.22h0C182.5,112.47,189,107.81,189.89,101.24Z"
					style="fill: rgb(235, 153, 110); transform-origin: 186.887px 73.1063px;" id="elhit46qd9e4q"
					class="animable"></path>
				<path
					d="M203.49,58.39a1.51,1.51,0,0,1-1.64,1.31,1.44,1.44,0,0,1-1.35-1.56,1.51,1.51,0,0,1,1.64-1.3A1.44,1.44,0,0,1,203.49,58.39Z"
					style="fill: rgb(38, 50, 56); transform-origin: 201.995px 58.2699px;" id="elp8yq1p95oe"
					class="animable"></path>
				<path
					d="M206.13,57.06c-.21.17-1.22-.82-2.82-1s-2.89.43-3,.21.16-.43.72-.73a4.15,4.15,0,0,1,2.46-.4,4,4,0,0,1,2.22,1.07C206.12,56.61,206.23,57,206.13,57.06Z"
					style="fill: rgb(38, 50, 56); transform-origin: 203.225px 56.0884px;" id="el7mt134x5gjg"
					class="animable"></path>
				<path
					d="M187.07,56.42a1.5,1.5,0,0,1-1.64,1.3,1.43,1.43,0,0,1-1.35-1.55,1.51,1.51,0,0,1,1.64-1.31A1.45,1.45,0,0,1,187.07,56.42Z"
					style="fill: rgb(38, 50, 56); transform-origin: 185.575px 56.2905px;" id="eliizmd1ctmt"
					class="animable"></path>
				<path
					d="M189.35,55.34c-.21.17-1.22-.82-2.82-1s-2.89.42-3,.2.16-.42.72-.72a4.16,4.16,0,0,1,2.46-.4,3.89,3.89,0,0,1,2.22,1.07C189.33,54.89,189.45,55.27,189.35,55.34Z"
					style="fill: rgb(38, 50, 56); transform-origin: 186.445px 54.3685px;" id="eldna2om409g"
					class="animable"></path>
				<path
					d="M193.52,68a10.7,10.7,0,0,1,2.67-.11c.41,0,.81,0,.92-.28a2.19,2.19,0,0,0-.11-1.25c-.25-1-.51-2.14-.78-3.28-1.07-4.66-1.78-8.47-1.59-8.52s1.21,3.71,2.27,8.37c.26,1.15.5,2.24.73,3.29a2.4,2.4,0,0,1,0,1.63,1.05,1.05,0,0,1-.75.51,2.79,2.79,0,0,1-.71,0A10.9,10.9,0,0,1,193.52,68Z"
					style="fill: rgb(38, 50, 56); transform-origin: 195.646px 61.4711px;" id="elfvujsuw00sr"
					class="animable"></path>
				<path d="M192,87.1a29.77,29.77,0,0,1-15-6.28s2.67,8.48,14.42,9Z"
					style="fill: rgb(209, 115, 74); transform-origin: 184.5px 85.32px;" id="elnda92n7amt"
					class="animable">
				</path>
				<path
					d="M197.53,35.32c.75,1.83-.43,4-2.1,5a14.6,14.6,0,0,1-5.67,1.6A10.37,10.37,0,0,0,184.3,44c-2.72,2.47-2,6-4.75,9.21a5.92,5.92,0,0,1-5.77,2.42c-2.2-.31-5.05.2-6.16,2.74s.23,4.41,1.46,6.74.9,4.72.2,7.27c-.5,1.84-2.08,3.28-2.43,5.16-.56,3,2,6.34.27,8.8S161,87.71,159.07,90c-.7.81-1.1,2-2.13,2.32a3,3,0,0,1-1.86-.34l-9-3.81c.23-.93.47-1.87.71-2.8a6,6,0,0,1-9.64-1.46,27,27,0,0,0,5.2-3.93A9.09,9.09,0,0,0,145,74.21c.09-2.64-1.34-5.31-.54-7.82,1.15-3.59,6-4.49,8.14-7.57,2-2.88,1.33-7.06,3.4-9.91,2.41-3.3,7.5-3.45,10.26-6.47,1.87-2,2.3-5,3.66-7.43a13.65,13.65,0,0,1,7.73-5.92,29.71,29.71,0,0,1,9.85-1.15,15.24,15.24,0,0,1,7.24,1.45c2.17,1.21,3.81,3.69,3.3,6.13"
					style="fill: rgb(38, 50, 56); transform-origin: 167.642px 60.125px;" id="els3rgxp6cg5h"
					class="animable"></path>
				<path
					d="M173.78,55.66a6.89,6.89,0,0,0-3.76-.27,4.84,4.84,0,0,0-3.08,2.1,5.12,5.12,0,0,0-.54,3.7,8.65,8.65,0,0,0,1.68,3.41,5.8,5.8,0,0,0,2,1.8,2.78,2.78,0,0,0,2.64,0"
					style="fill: rgb(235, 153, 110); transform-origin: 170.023px 60.9893px;" id="elpejfdiabkx"
					class="animable"></path>
				<path
					d="M172.06,63.08c.14.07-.51.75-1.6.28A2.48,2.48,0,0,1,169.23,62a5.52,5.52,0,0,1-.33-2.15,3.27,3.27,0,0,1,.82-2.11,2.16,2.16,0,0,1,1.76-.73c1.17.13,1.42,1,1.29,1s-.5-.39-1.29-.32a2.12,2.12,0,0,0-1.62,2.22c0,1.3.29,2.53.93,2.92S172,63,172.06,63.08Z"
					style="fill: rgb(209, 115, 74); transform-origin: 170.848px 60.265px;" id="el3haofm8w8i7"
					class="animable"></path>
				<path
					d="M197.57,36a5.78,5.78,0,0,0,2.4,6.9c1.3.75,2.9,1,4,2a6.37,6.37,0,0,1,1.68,4.06,14.66,14.66,0,0,0,.83,4.38A3.49,3.49,0,0,0,210,55.54l2.51-7.41c.92-2.72,1.85-5.63,1.19-8.44-.94-4-4.9-6.62-8.86-7.71a8.16,8.16,0,0,0-5.6.05c-1.72.81-2.89,3-2,4.7"
					style="fill: rgb(38, 50, 56); transform-origin: 205.428px 43.53px;" id="elbuo6o7cwrhl"
					class="animable">
				</path>
				<path
					d="M149.3,89.37s.24-.18.59-.63a4.52,4.52,0,0,0,.82-2.28,21.93,21.93,0,0,0-.22-3.92,6.41,6.41,0,0,1,.24-2.5,6.51,6.51,0,0,1,1.41-2.44c1.31-1.49,3.14-2.65,4.72-4.24a6.8,6.8,0,0,0,1.81-2.87,8.4,8.4,0,0,0,.1-3.61c-.19-1.26-.51-2.54-.67-3.89a8.89,8.89,0,0,1,.4-4.17,8.79,8.79,0,0,1,6.4-5.63c2.94-.65,6-.25,8.4-1.49a6,6,0,0,0,2.63-2.85,25.82,25.82,0,0,0,1.27-3.68,13.79,13.79,0,0,1,1.47-3.51,6.09,6.09,0,0,1,2.78-2.31,14.63,14.63,0,0,1,6.34-.67,16.66,16.66,0,0,0,5.16-.3,7.6,7.6,0,0,0,3.39-1.8,4.19,4.19,0,0,0,1-2.2c.1-.55.1-.86.13-.85a4.09,4.09,0,0,1,0,.87,4.16,4.16,0,0,1-1,2.32A7.64,7.64,0,0,1,193,38.66a16.6,16.6,0,0,1-5.25.38,14.28,14.28,0,0,0-6.16.71,5.63,5.63,0,0,0-2.56,2.16,13.42,13.42,0,0,0-1.4,3.4,26.51,26.51,0,0,1-1.28,3.76,7.37,7.37,0,0,1-1.14,1.76,6.27,6.27,0,0,1-1.7,1.32c-2.66,1.33-5.71.91-8.53,1.55A8.32,8.32,0,0,0,159,59a8.41,8.41,0,0,0-.39,3.94c.15,1.31.46,2.59.65,3.88a8.73,8.73,0,0,1-.13,3.81,7.24,7.24,0,0,1-1.94,3c-1.65,1.63-3.48,2.76-4.76,4.18a6,6,0,0,0-1.63,4.68,20.35,20.35,0,0,1,.13,4,4.55,4.55,0,0,1-.93,2.33A2.37,2.37,0,0,1,149.3,89.37Z"
					style="fill: rgb(69, 90, 100); transform-origin: 173.397px 61.4499px;" id="elo7bqbptpu6m"
					class="animable"></path>
				<path
					d="M202.9,95.19a5.82,5.82,0,0,0,.47-.53,3.71,3.71,0,0,0,.6-1.9c.08-.88-.15-2-.09-3.26a7.48,7.48,0,0,1,1.76-4c.93-1.29,2.17-2.63,2.5-4.43s-.44-3.73-.82-5.83a7.11,7.11,0,0,1,.13-3.33A12.21,12.21,0,0,1,209,68.87c.64-1,1.35-1.9,1.9-2.92a7.1,7.1,0,0,0,1-3.3,6,6,0,0,0-1.11-3.24,13.76,13.76,0,0,1-1.65-3.16c-.68-2.33-.15-4.61,0-6.68a11.67,11.67,0,0,0-.06-3A5.82,5.82,0,0,0,208,44a12.37,12.37,0,0,0-4.07-3.07,22.43,22.43,0,0,1-3.72-2.24A8.17,8.17,0,0,1,198,36.24a4.59,4.59,0,0,1-.59-2,2.48,2.48,0,0,1,.05-.72s0,.25.06.71a4.61,4.61,0,0,0,.66,1.9,8.29,8.29,0,0,0,2.18,2.32,23.19,23.19,0,0,0,3.71,2.15,12.48,12.48,0,0,1,4.25,3.13,6.16,6.16,0,0,1,1.21,2.73,12.19,12.19,0,0,1,.09,3.14c-.14,2.11-.63,4.35,0,6.49a13.27,13.27,0,0,0,1.6,3,6.4,6.4,0,0,1,1.19,3.51,7.57,7.57,0,0,1-1.07,3.55c-.58,1.06-1.29,2-1.92,3a11.6,11.6,0,0,0-1.52,2.94,6.52,6.52,0,0,0-.14,3.1c.34,2,1.15,4,.77,6a6.92,6.92,0,0,1-1.11,2.55c-.5.74-1,1.39-1.51,2a7.3,7.3,0,0,0-1.77,3.77c-.09,1.24.11,2.35,0,3.26a3.65,3.65,0,0,1-.72,1.94A1.52,1.52,0,0,1,202.9,95.19Z"
					style="fill: rgb(69, 90, 100); transform-origin: 204.906px 64.355px;" id="el2kcg37a9gg9"
					class="animable"></path>
				<path
					d="M139.09,84.68s.33,0,.95.07a6.39,6.39,0,0,0,2.64-.51A7.56,7.56,0,0,0,146,81.6a10.6,10.6,0,0,0,1.79-5.3c.24-2.1-.29-4.38-.35-6.93a7.41,7.41,0,0,1,.85-3.85,9.28,9.28,0,0,1,3.16-2.74,6.79,6.79,0,0,0,2.9-2.91,13,13,0,0,0,.64-4.35,13.15,13.15,0,0,1,.9-4.65,6.54,6.54,0,0,1,1.35-2.07,4.45,4.45,0,0,1,2.3-1.07c1.66-.29,3.27-.12,4.82-.29a6.38,6.38,0,0,0,4-1.8,13.21,13.21,0,0,0,2.52-3.6c.67-1.3,1.19-2.64,1.83-3.92a15.86,15.86,0,0,1,2.25-3.5,7.15,7.15,0,0,1,3.26-2.22,6.7,6.7,0,0,1,3.69,0,20.42,20.42,0,0,1,3.15,1.18,15.29,15.29,0,0,0,5.39,1.71,10.62,10.62,0,0,0,4.21-.65,12,12,0,0,0,3.19-1.79,4.42,4.42,0,0,1-.71.64,10,10,0,0,1-2.41,1.34,10.61,10.61,0,0,1-4.29.75,15.45,15.45,0,0,1-5.52-1.66,18.77,18.77,0,0,0-3.11-1.13,6.26,6.26,0,0,0-3.46,0,6.81,6.81,0,0,0-3.05,2.11,15.77,15.77,0,0,0-2.16,3.42c-1.21,2.48-2.15,5.44-4.43,7.67a7.19,7.19,0,0,1-2,1.36,7.66,7.66,0,0,1-2.35.59c-1.61.17-3.23,0-4.78.28a3.94,3.94,0,0,0-2,.94,6.19,6.19,0,0,0-1.24,1.9,13.1,13.1,0,0,0-.86,4.47,13.38,13.38,0,0,1-.69,4.52,7.22,7.22,0,0,1-3.1,3.11,8.94,8.94,0,0,0-3,2.57,7,7,0,0,0-.81,3.62c0,2.46.55,4.81.29,7a10.93,10.93,0,0,1-1.92,5.43,7.78,7.78,0,0,1-3.45,2.66,6.16,6.16,0,0,1-2.72.43A3.9,3.9,0,0,1,139.09,84.68Z"
					style="fill: rgb(69, 90, 100); transform-origin: 168.47px 58.5127px;" id="eljcv4o4qe8m"
					class="animable"></path>
				<path
					d="M212.58,46.56a7.58,7.58,0,0,0-.83-2.88,8.55,8.55,0,0,0-2.13-2.44,16.67,16.67,0,0,0-3.47-2c-1.31-.61-2.6-1.15-3.71-1.77a12.77,12.77,0,0,1-2.75-2,7,7,0,0,1-1.37-1.83,1.72,1.72,0,0,1-.28-.79,11.15,11.15,0,0,0,1.9,2.35A13.62,13.62,0,0,0,202.67,37c1.09.58,2.37,1.1,3.7,1.71a16.7,16.7,0,0,1,3.56,2.13,8.19,8.19,0,0,1,2.14,2.64,5.35,5.35,0,0,1,.6,2.22A2,2,0,0,1,212.58,46.56Z"
					style="fill: rgb(69, 90, 100); transform-origin: 205.361px 39.705px;" id="elsgb3ivmgc8b"
					class="animable"></path>
				<path
					d="M190,51.36c-.1.12-.45,0-1-.17a10.16,10.16,0,0,0-2.25-.26,9.75,9.75,0,0,0-2.26.24c-.57.13-.92.28-1,.17s.13-.5.74-.85a5.59,5.59,0,0,1,5.08,0C189.83,50.87,190.05,51.27,190,51.36Z"
					style="fill: rgb(38, 50, 56); transform-origin: 186.74px 50.6441px;" id="elki3mgt6nyi"
					class="animable">
				</path>
				<path
					d="M204.56,53.33c-.05.28-1.09.37-2.34.19S200,53,200,52.67s1.09-.36,2.34-.18S204.6,53.05,204.56,53.33Z"
					style="fill: rgb(38, 50, 56); transform-origin: 202.281px 52.9969px;" id="elp0ibokvtmn"
					class="animable"></path>
				<path
					d="M169.56,66.08s.1.07.25.25a4.05,4.05,0,0,1,.54.86,6.15,6.15,0,0,1,.44,3.66A17.54,17.54,0,0,1,169,76a4.65,4.65,0,0,0-.44,3A13.71,13.71,0,0,0,170,82.05a5.42,5.42,0,0,1-.64,6.46,5,5,0,0,1-2.56,1.56,13.49,13.49,0,0,1-2.55.28,6.44,6.44,0,0,0-3.43.88,4.26,4.26,0,0,0-.93.93s0-.13.13-.33a2.58,2.58,0,0,1,.68-.76A6.18,6.18,0,0,1,164.19,90a14,14,0,0,0,2.47-.33A4.63,4.63,0,0,0,169,88.2a5.34,5.34,0,0,0,1.24-2.76,5.19,5.19,0,0,0-.7-3.16,13.72,13.72,0,0,1-1.45-3.19,5.11,5.11,0,0,1,.5-3.26c.43-1,.9-1.79,1.19-2.64a14,14,0,0,0,.68-2.4,6.28,6.28,0,0,0-.27-3.52C169.84,66.48,169.52,66.11,169.56,66.08Z"
					style="fill: rgb(38, 50, 56); transform-origin: 165.392px 79.12px;" id="el0qbt42zkcxm"
					class="animable">
				</path>
				<path
					d="M216,93a1.34,1.34,0,0,1-.64.12,2.37,2.37,0,0,1-1.66-.83,3.3,3.3,0,0,1-.82-2.81,7,7,0,0,1,1.94-3.39,18.58,18.58,0,0,0,3-3.51,4.56,4.56,0,0,0,.57-2.4,7.9,7.9,0,0,0-.62-2.59,55,55,0,0,1-2.4-5.47,5.75,5.75,0,0,1,0-3.24,16,16,0,0,1,1.49-2.92,4.14,4.14,0,0,0,.64-2.92,5.45,5.45,0,0,0-1.54-2.53c-.69-.74-1.45-1.43-2.09-2.22a6.81,6.81,0,0,1-1.36-2.66,12,12,0,0,1,.08-5.44c.35-1.66.83-3.16,1.13-4.55A10.3,10.3,0,0,0,213.4,39,7.16,7.16,0,0,0,212,37s0,0,.14.09a2.53,2.53,0,0,1,.36.31A5.24,5.24,0,0,1,213.58,39a8.07,8.07,0,0,1,.77,2.85,13.42,13.42,0,0,1-.3,3.89c-.29,1.41-.74,2.92-1.07,4.56a11.67,11.67,0,0,0,0,5.23A6.16,6.16,0,0,0,214.23,58c.61.75,1.36,1.42,2.08,2.18A6,6,0,0,1,218,62.91a4.74,4.74,0,0,1-.69,3.27A15.8,15.8,0,0,0,215.83,69a5.32,5.32,0,0,0,0,3,56.33,56.33,0,0,0,2.34,5.42,8.14,8.14,0,0,1,.63,2.76,5,5,0,0,1-.64,2.62,18.72,18.72,0,0,1-3.11,3.55,6.74,6.74,0,0,0-1.92,3.19,3,3,0,0,0,.69,2.62,2.33,2.33,0,0,0,1.51.87C215.78,93,216,92.94,216,93Z"
					style="fill: rgb(38, 50, 56); transform-origin: 215.401px 65.0612px;" id="elqd1m9aliblm"
					class="animable"></path>
				<path
					d="M255.24,106.48a17.59,17.59,0,0,0-2.17-2.34,19.38,19.38,0,0,0-2.81-1.5,4.3,4.3,0,0,1,3.13,1.09A4.2,4.2,0,0,1,255.24,106.48Z"
					style="fill: rgb(209, 115, 74); transform-origin: 252.75px 104.556px;" id="elp146eddf7j"
					class="animable"></path>
				<path
					d="M240.33,161.28a15.16,15.16,0,0,1-1.45-4.53,14.58,14.58,0,0,1-.43-4.75,42.74,42.74,0,0,1,.94,4.64A39.71,39.71,0,0,1,240.33,161.28Z"
					style="fill: rgb(209, 115, 74); transform-origin: 239.37px 156.64px;" id="el63jojl5sf1w"
					class="animable"></path>
				<path
					d="M176.56,150.07A9.47,9.47,0,0,0,183,141.9c.54-5.21-3-9.84-7.79-10.35s-9.2,3.32-9.74,8.53a9.47,9.47,0,0,0,4.72,9.36c-7.5.39-11.13,5-12.9,9.12a19.94,19.94,0,0,0,11.51,7.82l5.4.56a19.9,19.9,0,0,0,13-5.44C186.31,157.11,183.7,151.9,176.56,150.07Z"
					style="fill: rgb(255, 255, 255); transform-origin: 172.245px 149.222px;" id="elpozlptd2vkc"
					class="animable"></path>
				<g id="elk1seoallsuj">
					<g style="opacity: 0.3; transform-origin: 135.42px 169.145px;" class="animable" id="elrfq6cexbig">
						<path d="M136.68,146.57l4.44-4.58s-1.92,33.1-3.23,37.08-8.17,17.23-8.17,17.23l5.92-18.11Z"
							id="elyqr9fgds6qe" class="animable" style="transform-origin: 135.42px 169.145px;"></path>
					</g>
				</g>
				<path
					d="M146.51,136.38c.1.1-3.8,4.33-8.72,9.45s-9,9.2-9.11,9.1,3.81-4.33,8.73-9.46S146.41,136.28,146.51,136.38Z"
					style="fill: rgb(38, 50, 56); transform-origin: 137.595px 145.655px;" id="elehu307mu2b"
					class="animable"></path>
				<path
					d="M208.58,133.79a4.8,4.8,0,0,1-.05,1c-.06.66-.17,1.62-.33,2.81-.32,2.36-.86,5.62-1.6,9.18s-1.55,6.77-2.2,9.07c-.33,1.15-.61,2.07-.82,2.71a3.76,3.76,0,0,1-.38,1,5,5,0,0,1,.18-1c.19-.76.4-1.67.66-2.74.56-2.32,1.31-5.52,2.05-9.08s1.33-6.79,1.75-9.14c.19-1.08.35-2,.49-2.78A3.77,3.77,0,0,1,208.58,133.79Z"
					style="fill: rgb(38, 50, 56); transform-origin: 205.894px 146.675px;" id="el6or4v6naku5"
					class="animable"></path>
				<path d="M188.45,70.7a2.13,2.13,0,1,1,2.44,3.47,2.15,2.15,0,1,1-1.71-3.93"
					style="fill: #0174BE; transform-origin: 189.843px 72.3084px;" id="el4hxs6f0jy4b" class="animable">
				</path>
				<path
					d="M188.66,68.47c.26,0,0,1.76,1.34,3.19s3.2,1.51,3.18,1.75-.46.28-1.25.19a4.32,4.32,0,0,1-2.66-1.36,3.79,3.79,0,0,1-1-2.66C188.29,68.84,188.54,68.44,188.66,68.47Z"
					style="fill: rgb(38, 50, 56); transform-origin: 190.724px 71.0563px;" id="elplqw8ykm4lc"
					class="animable"></path>
				<path
					d="M166.47,42.57a10,10,0,0,0,2.13-4.92A5.31,5.31,0,0,0,164,32.36a5.61,5.61,0,0,0-5.8,4.1,6,6,0,0,0,3,6.53,6.34,6.34,0,0,0,7.16-1.09"
					style="fill: rgb(38, 50, 56); transform-origin: 163.333px 37.9932px;" id="elpq1a1bi4jaa"
					class="animable"></path>
				<path
					d="M168.76,37.38a5.26,5.26,0,0,1-1,3.67,5.24,5.24,0,0,1-2.94,2.42,18.1,18.1,0,0,0,2.5-2.71A17.93,17.93,0,0,0,168.76,37.38Z"
					style="fill: rgb(69, 90, 100); transform-origin: 166.804px 40.425px;" id="elulkpknitrl"
					class="animable"></path>
				<path
					d="M165.68,43a20.15,20.15,0,0,0-.66-5.56,20.09,20.09,0,0,0-2.63-5s.56.35,1.22,1.17a11,11,0,0,1,1.91,3.62,11.25,11.25,0,0,1,.5,4.06A4,4,0,0,1,165.68,43Z"
					style="fill: rgb(69, 90, 100); transform-origin: 164.215px 37.72px;" id="elcdhr185dr6g"
					class="animable"></path>
			</g>
			<g id="freepik--Icon--inject-155" class="animable" style="transform-origin: 200.94px 198.165px;">
				<circle cx="200.94" cy="200.52" r="25.39" style="fill: #0174BE; transform-origin: 200.94px 200.52px;"
					id="elggefbpn7os" class="animable"></circle>
				<g id="elbgifgxyhoz">
					<g style="opacity: 0.3; transform-origin: 200.94px 200.52px;" class="animable" id="elazwju53ld77">
						<circle cx="200.94" cy="200.52" r="25.39" id="elpls6b63ez3i" class="animable"
							style="transform-origin: 200.94px 200.52px;"></circle>
					</g>
				</g>
				<circle cx="200.94" cy="195.81" r="25.39" style="fill: #0174BE; transform-origin: 200.94px 195.81px;"
					id="el6qz5isxdsxd" class="animable"></circle>
				<path
					d="M200.94,210.83c-.72,0-1.31-6.73-1.31-15s.59-15,1.31-15,1.3,6.73,1.3,15S201.65,210.83,200.94,210.83Z"
					style="fill: rgb(255, 255, 255); transform-origin: 200.935px 195.83px;" id="elt3d58buxdro"
					class="animable"></path>
				<path d="M216,195.81c0,.72-6.72,1.3-15,1.3s-15-.58-15-1.3,6.72-1.3,15-1.3S216,195.09,216,195.81Z"
					style="fill: rgb(255, 255, 255); transform-origin: 201px 195.81px;" id="el33oz24bkncf"
					class="animable">
				</path>
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

	<p class="fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Be Verified</p>
	<small class="text-wrap text-center"
		style="width: 17rem; font-family: 'Courier New', Courier, monospace;">Join experienced Designers on
		this platform.
	</small>
</div>

<div class="col-md-6 right-box">

	<div class="row align-items-center">

		<form action="/session_users/signup" method="POST">
			@csrf

			<div class="card">
				<div class="card-header">
					<div class="header-text">
						<h2>Welcome!</h2>
						<p>Please create your account.</p>
					</div>
				</div>

				<div class="card-body">
					<div class="mb-3">
						<label for="nik" class="form-label">NIK <strong class="text-danger">*</strong></label>
						<input type="text" class="form-control" name="nik" id="nik" aria-describedby="nikhelp"
							placeholder="NIK numbers" value="{{ Session::get('nik') }}">
						<div id="nikhelp" class="form-text">We'll never share your NIK with anyone else.</div>
						@error('nik')
						<small class="text-danger">
							{{ $message }}
						</small>
						@enderror
					</div>

					<div class="mb-3">
						<label for="name" class="form-label">Name <strong class="text-danger">*</strong></label>
						<input type="text" id="name" name="name" class="form-control" placeholder="Your name"
							value="{{ Session::get('name') }}">
						@error('name')
						<small class="text-danger">
							{{ $message }}
						</small>
						@enderror
					</div>

					<div class="mb-3">
						<label for="email" class="form-label">Email address <strong class="text-danger">*</strong></label>
						<input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp"
							placeholder="Email address" value="{{ Session::get('email') }}">
						@error('email')
						<small class="text-danger">
							{{ $message }}
						</small>
						@enderror
					</div>

					<div class="mb-1">
						<label for="password" class="form-label">Password <strong class="text-danger">*</strong></label>
						<input type="password" id="password" name="password" class="form-control"
							aria-describedby="passwordHelpBlock" placeholder="Password">
						@error('password')
						<small class="text-danger">
							{{ $message }}
						</small>
						@enderror
					</div>
					
					<div class="d-flex justify-content-between">
						<div class="form-check">
							<input type="checkbox" class="form-check-input" id="formCheck" onclick="myFunction()">
							<label for="formCheck" class="form-check-label text-secondary">
								<small>
									Show Password
								</small>
							</label>
						</div>
					</div>
				</div>

				<div class="card-footer">
					<div class="mb-3">
						<button type="submit" class="btn btn-lg btn-primary w-100 fs-6">Sign Up</button>
					</div>
					<div class="row">
						<small>You have an account? <a href="{{ url('session_users') }}">Login</a></small>
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

{{-- ! DATEPICKER - PIKADAY --}}
{{-- @section('pikaday')
<script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
<script>
	var picker = new Pikaday({
		field: document.getElementById('datepicker'),
		format: 'YYYY/MM/DD',
		toString(date, format) {
			// you should do formatting based on the passed format,
			// but we will just return 'D/M/YYYY' for simplicity
			const day = String(date.getDate()).padStart(2, 0);
			const month = String(date.getMonth() + 1).padStart(2, 0);
			const year = date.getFullYear();
			return `${day}/${month}/${year}`;
		},
		onSelect: function() {
			console.log(this.getDate());
		}
	});
</script>
@endsection --}}

{{-- ! NOTIFICATION EMAIL --}}
@section('notification_register')
<script>
	$(document).ready(function() {
		@if (Session::has('success_register'))
			Swal.fire({
				icon: 'success',
				title: '<strong>Registration Success!</strong>',
				html: 'Please <b>proceed to the next step</b>, Thank you for registering your account.',
				showConfirmButton: true,
				confirmButtonColor: '#0174BE',
				focusConfirm: false,
				confirmButtonText: 'Yes, confirm!'
			}).then((result) => {
				/* Read more about isConfirmed, isDenied below */
				// REDIRECT INTO EMAIL VERIFICATION PAGE
					if (result.isConfirmed) {
						window.location.href = '/email/verify';
					}
				});
		@endif
	});

</script>
@endsection