@extends('includes.front.main')

@section('title')
    Home
@endsection

@section('style')
@endsection

@section('content')
    <div class="container">
        <div class="row mt-4">

            <div class="col-md-12 col-lg-6">
                <img src="{{ 'img/rotate.png' }}" class="rotate-y-image" alt="">
                <img src="{{ 'img/triangle.svg' }}" class="rotate" alt="">
                <div class="text-box text-start">
                    <p class="display-5 main-text" style="color: #6084a4">Unlock Your Potential With <span
                            class="main-text-sapn text-dark fw-semibold">'KickStart Career'</span></p>
                    <p class="text text-capitalize fw-light">Our goal is to empower the next generation of tech leaders. Our
                        internship program offers hands-on experience in different fields.</p>
                    @if (auth()->guard('student')->check())
                        <a href="{{ route('student.registration') }}"
                            class="btn-part text-white btn mt-3 py-2 px-4 text-start">Register</a>
                    @endif
                </div>
            </div>

            <div class="col-md-12 col-lg-6 ">
                <img src="{{ asset('img/cross.svg') }}" class="cross-img" alt="">
                {{-- <img src="{{ asset('img/firsttop.png') }}" alt="" class="img-fluid"> --}}
                <svg class="animated" id="freepik_stories-online-test" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 500 500" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                    xmlns:svgjs="http://svgjs.com/svgjs">
                    <style>
                        svg#freepik_stories-online-test:not(.animated) .animable {
                            opacity: 0;
                        }

                        svg#freepik_stories-online-test.animated #freepik--background-simple--inject-126 {
                            animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) lightSpeedRight;
                            animation-delay: 0s;
                        }

                        svg#freepik_stories-online-test.animated #freepik--Picture--inject-126 {
                            animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
                            animation-delay: 0s;
                        }

                        svg#freepik_stories-online-test.animated #freepik--Test--inject-126 {
                            animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) fadeIn;
                            animation-delay: 0s;
                        }

                        svg#freepik_stories-online-test.animated #freepik--Graphics--inject-126 {
                            animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) fadeIn;
                            animation-delay: 0s;
                        }

                        svg#freepik_stories-online-test.animated #freepik--Table--inject-126 {
                            animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomIn;
                            animation-delay: 0s;
                        }

                        svg#freepik_stories-online-test.animated #freepik--Character--inject-126 {
                            animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) lightSpeedRight;
                            animation-delay: 0s;
                        }

                        svg#freepik_stories-online-test.animated #freepik--Drink--inject-126 {
                            animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) fadeIn;
                            animation-delay: 0s;
                        }

                        svg#freepik_stories-online-test.animated #freepik--Device--inject-126 {
                            animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) lightSpeedLeft;
                            animation-delay: 0s;
                        }

                        svg#freepik_stories-online-test.animated #freepik--Plant--inject-126 {
                            animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideLeft;
                            animation-delay: 0s;
                        }

                        @keyframes lightSpeedRight {
                            from {
                                transform: translate3d(50%, 0, 0) skewX(-20deg);
                                opacity: 0;
                            }

                            60% {
                                transform: skewX(10deg);
                                opacity: 1;
                            }

                            80% {
                                transform: skewX(-2deg);
                            }

                            to {
                                opacity: 1;
                                transform: translate3d(0, 0, 0);
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

                        @keyframes fadeIn {
                            0% {
                                opacity: 0;
                            }

                            100% {
                                opacity: 1;
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
                    <g id="freepik--background-simple--inject-126" class="animable"
                        style="transform-origin: 248.603px 246.353px;">
                        <path
                            d="M401.7,434.26a124.18,124.18,0,0,0,38.24-43.52c57.16-107.09,44.25-265-65.83-332.73C323.23,26.71,250,6.9,195,39.05c-44.6,26.07-71.94,75.16-94.56,119.82C86.23,187,74.52,217.19,57,243.47c-22.72,34.08-47.73,79.6-22.48,119.2,34.41,53.94,99.4,78.57,158.33,94.79,63.94,17.59,135.84,20.09,194.9-14.23Q394.92,439.06,401.7,434.26Z"
                            style="fill: #26C5B5; transform-origin: 248.603px 246.353px;" id="elix1fu5bh7od"
                            class="animable"></path>
                        <g id="el925dppdiyye">
                            <path
                                d="M401.7,434.26a124.18,124.18,0,0,0,38.24-43.52c57.16-107.09,44.25-265-65.83-332.73C323.23,26.71,250,6.9,195,39.05c-44.6,26.07-71.94,75.16-94.56,119.82C86.23,187,74.52,217.19,57,243.47c-22.72,34.08-47.73,79.6-22.48,119.2,34.41,53.94,99.4,78.57,158.33,94.79,63.94,17.59,135.84,20.09,194.9-14.23Q394.92,439.06,401.7,434.26Z"
                                style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 248.603px 246.353px;"
                                class="animable" id="eljk7fpw1mbwa"></path>
                        </g>
                    </g>
                    <g id="freepik--Picture--inject-126" class="animable" style="transform-origin: 400.5px 148.105px;">
                        <g id="elu3c8rhzsqb">
                            <g style="opacity: 0.3; transform-origin: 400.5px 148.105px;" class="animable"
                                id="elz4qq8h0wlt">
                                <rect x="349" y="80.47" width="103" height="135.27"
                                    style="fill: none; stroke: rgb(0, 0, 0); stroke-miterlimit: 10; transform-origin: 400.5px 148.105px;"
                                    id="el8zmj6pkbvum" class="animable"></rect>
                                <rect x="367.9" y="105.29" width="65.2" height="85.63"
                                    style="fill: none; stroke: rgb(0, 0, 0); stroke-miterlimit: 10; transform-origin: 400.5px 148.105px;"
                                    id="elruvdk63mpd" class="animable"></rect>
                            </g>
                        </g>
                    </g>
                    <g id="freepik--Test--inject-126" class="animable" style="transform-origin: 185.935px 183.725px;">
                        <rect x="52.17" y="65.31" width="272.7" height="242.74"
                            style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 188.52px 186.68px;"
                            id="el7wudprnj5w" class="animable"></rect>
                        <rect x="47" y="59.4" width="272.7" height="242.74"
                            style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 183.35px 180.77px;"
                            id="elwxh69etuo2i" class="animable"></rect>
                        <g id="el01ffup9dohp5">
                            <rect x="266.6" y="143.81" width="13.56" height="13.56"
                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 273.38px 150.59px; transform: rotate(180deg);"
                                class="animable" id="elko5m4n9y2rn"></rect>
                        </g>
                        <g id="elvu9lqj4ueqs">
                            <rect x="284.35" y="143.81" width="13.56" height="13.56"
                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 291.13px 150.59px; transform: rotate(180deg);"
                                class="animable" id="eloh0a5c2hwf"></rect>
                        </g>
                        <line x1="261.18" y1="151.4" x2="192.29" y2="151.4"
                            style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 226.735px 151.4px;"
                            id="el9q1ked4o29" class="animable"></line>
                        <g id="elhj5e537tlct">
                            <rect x="266.6" y="175.81" width="13.56" height="13.56"
                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 273.38px 182.59px; transform: rotate(180deg);"
                                class="animable" id="eljv5wwxky8l"></rect>
                        </g>
                        <g id="elz5eu8m72egk">
                            <rect x="284.35" y="175.81" width="13.56" height="13.56"
                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 291.13px 182.59px; transform: rotate(180deg);"
                                class="animable" id="eln1rdzh3jjcb"></rect>
                        </g>
                        <line x1="261.18" y1="183.4" x2="192.29" y2="183.4"
                            style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 226.735px 183.4px;"
                            id="elosawy2kfwmp" class="animable"></line>
                        <g id="eligbptkvfmgb">
                            <rect x="266.6" y="207.81" width="13.56" height="13.56"
                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 273.38px 214.59px; transform: rotate(180deg);"
                                class="animable" id="elfvkay0ozem"></rect>
                        </g>
                        <g id="elvxcisp6rd5">
                            <rect x="284.35" y="207.81" width="13.56" height="13.56"
                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 291.13px 214.59px; transform: rotate(180deg);"
                                class="animable" id="elop4xko5cq5"></rect>
                        </g>
                        <line x1="261.18" y1="215.41" x2="192.29" y2="215.41"
                            style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 226.735px 215.41px;"
                            id="els79ayp9jwu" class="animable"></line>
                        <g id="elhnegngxlcfc">
                            <rect x="136.96" y="143.81" width="13.56" height="13.56"
                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 143.74px 150.59px; transform: rotate(180deg);"
                                class="animable" id="elluew6cnozt"></rect>
                        </g>
                        <g id="ela2smwbr0whp">
                            <rect x="154.71" y="143.81" width="13.56" height="13.56"
                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 161.49px 150.59px; transform: rotate(180deg);"
                                class="animable" id="eluxdmn6hgo3m"></rect>
                        </g>
                        <line x1="131.54" y1="151.4" x2="62.65" y2="151.4"
                            style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 97.095px 151.4px;"
                            id="ely60dp4zsd5f" class="animable"></line>
                        <g id="elbffcddkl0tu">
                            <rect x="136.96" y="175.81" width="13.56" height="13.56"
                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 143.74px 182.59px; transform: rotate(180deg);"
                                class="animable" id="el91uwptt1lwp"></rect>
                        </g>
                        <g id="elsxp6kg7ahde">
                            <rect x="154.71" y="175.81" width="13.56" height="13.56"
                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 161.49px 182.59px; transform: rotate(180deg);"
                                class="animable" id="elrd3yfkv1zf"></rect>
                        </g>
                        <line x1="131.54" y1="183.4" x2="62.65" y2="183.4"
                            style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 97.095px 183.4px;"
                            id="elg15gni5lpkj" class="animable"></line>
                        <g id="ela9wkxjuqn9s">
                            <rect x="136.96" y="207.81" width="13.56" height="13.56"
                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 143.74px 214.59px; transform: rotate(180deg);"
                                class="animable" id="eledqyzjj5jx9"></rect>
                        </g>
                        <g id="el54kelzzmtd">
                            <rect x="154.71" y="207.81" width="13.56" height="13.56"
                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 161.49px 214.59px; transform: rotate(180deg);"
                                class="animable" id="elv3hf9ys15ms"></rect>
                        </g>
                        <line x1="131.54" y1="215.41" x2="62.65" y2="215.41"
                            style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 97.095px 215.41px;"
                            id="elfwg46o3etji" class="animable"></line>
                        <rect x="66.93" y="268" width="14.94" height="14.94"
                            style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 74.4px 275.47px;"
                            id="el2wv951opzh6" class="animable"></rect>
                        <rect x="127.9" y="268" width="14.94" height="14.94"
                            style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 135.37px 275.47px;"
                            id="elt6k9kjhozs" class="animable"></rect>
                        <rect x="191.29" y="268" width="14.94" height="14.94"
                            style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 198.76px 275.47px;"
                            id="elzgyq7f0c0ys" class="animable"></rect>
                        <polyline points="159.17 148.34 161.48 152.98 172.67 142.17"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2px; transform-origin: 165.92px 147.575px;"
                            id="el8x3ndff8vr" class="animable"></polyline>
                        <polyline points="159.17 179.99 161.48 184.62 172.67 173.81"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2px; transform-origin: 165.92px 179.215px;"
                            id="elli0823tss7r" class="animable"></polyline>
                        <polyline points="139.87 213.18 142.19 217.81 153.38 207"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2px; transform-origin: 146.625px 212.405px;"
                            id="els6idtr4mt6o" class="animable"></polyline>
                        <polyline points="288.06 147.96 290.37 152.59 301.56 141.78"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2px; transform-origin: 294.81px 147.185px;"
                            id="elsiceyhhiikn" class="animable"></polyline>
                        <polyline points="269.38 180.37 271.69 185 282.88 174.2"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2px; transform-origin: 276.13px 179.6px;"
                            id="el263xs9xeclf" class="animable"></polyline>
                        <polyline points="269.38 212.89 271.69 217.52 282.88 206.72"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2px; transform-origin: 276.13px 212.12px;"
                            id="el5c3jrrb2okh" class="animable"></polyline>
                        <rect x="47" y="59.4" width="272.7" height="37.92"
                            style="fill: #26C5B5; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 183.35px 78.36px;"
                            id="elut8z7k6fegr" class="animable"></rect>
                        <rect x="309.43" y="59.4" width="10.27" height="242.74"
                            style="fill: rgb(219, 219, 219); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 314.565px 180.77px;"
                            id="el8m0v4gkg2df" class="animable"></rect>
                        <rect x="309.43" y="95.88" width="10.27" height="46.85"
                            style="fill: rgb(148, 148, 148); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 314.565px 119.305px;"
                            id="elrwqsvzy48mc" class="animable"></rect>
                        <rect x="47" y="59.4" width="272.7" height="18.44"
                            style="fill: rgb(219, 219, 219); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 183.35px 68.62px;"
                            id="elebpwd5tr399" class="animable"></rect>
                        <rect x="60.83" y="64.77" width="107.54" height="7.68"
                            style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 114.6px 68.61px;"
                            id="elaamkjeut3yd" class="animable"></rect>
                        <line x1="303.6" y1="65.13" x2="313.04" y2="65.13"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 308.32px 65.13px;"
                            id="elnvo4pi81fnq" class="animable"></line>
                        <line x1="303.6" y1="69.12" x2="313.04" y2="69.12"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 308.32px 69.12px;"
                            id="el9u8sjcyv6z4" class="animable"></line>
                        <line x1="303.6" y1="73.12" x2="313.04" y2="73.12"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 308.32px 73.12px;"
                            id="elkm1wku280qt" class="animable"></line>
                        <path
                            d="M142.26,112.66c0-2.37,1.25-3.72,3.53-3.72s3.52,1.35,3.52,3.72v7.68c0,2.36-1.24,3.71-3.52,3.71s-3.53-1.35-3.53-3.71Zm2.33,7.83c0,1.05.46,1.45,1.2,1.45s1.2-.4,1.2-1.45v-8c0-1.06-.46-1.46-1.2-1.46s-1.2.4-1.2,1.46Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 145.785px 116.495px;" id="el8gkylm1f0ff"
                            class="animable"></path>
                        <path d="M152.88,113.19v10.69h-2.09V109.11h2.91l2.39,8.84v-8.84h2.07v14.77h-2.39Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 154.475px 116.495px;" id="el2cov55nff3o"
                            class="animable"></path>
                        <path d="M159.82,109.11h2.33v12.66H166v2.11h-6.15Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 162.91px 116.495px;" id="elxcnadctk6ci"
                            class="animable"></path>
                        <path d="M167,109.11h2.32v14.77H167Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 168.16px 116.495px;" id="elcqmy4ti6z1b"
                            class="animable"></path>
                        <path d="M173.06,113.19v10.69H171V109.11h2.91l2.39,8.84v-8.84h2.06v14.77H176Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 174.68px 116.495px;" id="el5yrafvvwyt"
                            class="animable"></path>
                        <path d="M182.32,115.34h3.19v2.11h-3.19v4.32h4v2.11H180V109.11h6.33v2.11h-4Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 183.165px 116.495px;" id="elr8j2emx44z"
                            class="animable"></path>
                        <path d="M190.37,109.11h7.17v2.11h-2.43v12.66h-2.32V111.22h-2.42Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 193.955px 116.495px;" id="elu0pcqtpcn5n"
                            class="animable"></path>
                        <path d="M200.88,115.34h3.18v2.11h-3.18v4.32h4v2.11h-6.33V109.11h6.33v2.11h-4Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 201.715px 116.495px;" id="elyazlzz64njf"
                            class="animable"></path>
                        <path
                            d="M209.44,108.94c2.26,0,3.42,1.35,3.42,3.72v.46h-2.19v-.61c0-1.06-.42-1.46-1.16-1.46s-1.16.4-1.16,1.46c0,3,4.53,3.61,4.53,7.83,0,2.36-1.18,3.71-3.46,3.71S206,122.7,206,120.34v-.91h2.2v1.06c0,1.05.46,1.43,1.2,1.43s1.2-.38,1.2-1.43c0-3-4.53-3.61-4.53-7.83C206,110.29,207.19,108.94,209.44,108.94Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 209.44px 116.495px;" id="elcgdvil1ibl6"
                            class="animable"></path>
                        <path d="M213.54,109.11h7.17v2.11h-2.42v12.66H216V111.22h-2.43Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 217.125px 116.495px;" id="elk286xhdfcwd"
                            class="animable"></path>
                        <path d="M78.56,264.4H76.21l-.4-2.68H73l-.4,2.68H70.43l2.36-14.77h3.4Zm-5.3-4.69H75.5l-1.12-7.47Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 74.495px 257.015px;" id="elvzftxm8rfk"
                            class="animable"></path>
                        <path
                            d="M138.55,253v.52c0,1.52-.46,2.49-1.5,3,1.25.48,1.73,1.6,1.73,3.16v1.21c0,2.28-1.2,3.5-3.52,3.5h-3.65V249.63h3.5C137.52,249.63,138.55,250.75,138.55,253Zm-4.62-1.29v3.9h.91c.86,0,1.39-.38,1.39-1.56v-.82c0-1.06-.36-1.52-1.18-1.52Zm0,6v4.54h1.33c.78,0,1.2-.36,1.2-1.46v-1.28c0-1.38-.44-1.8-1.49-1.8Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 135.195px 257.01px;" id="elfwksrx83v5d"
                            class="animable"></path>
                        <path
                            d="M202.54,258.89v2c0,2.37-1.18,3.72-3.46,3.72s-3.46-1.35-3.46-3.72v-7.68c0-2.36,1.18-3.71,3.46-3.71s3.46,1.35,3.46,3.71v1.44h-2.19V253c0-1.06-.47-1.46-1.21-1.46s-1.2.4-1.2,1.46v8c0,1.06.47,1.44,1.2,1.44s1.21-.38,1.21-1.44v-2.11Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 199.08px 257.055px;" id="el1nq00mz9314"
                            class="animable"></path>
                        <line x1="63.7" y1="241.76" x2="240.95" y2="241.76"
                            style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 152.325px 241.76px;"
                            id="el4cryfy4p15d" class="animable"></line>
                    </g>
                    <g id="freepik--Graphics--inject-126" class="animable"
                        style="transform-origin: 264.625px 185.859px;">
                        <g id="el78pvbvanacs">
                            <rect x="354.84" y="41.02" width="19.57" height="19.57"
                                style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; opacity: 0.3; transform-origin: 364.625px 50.805px; transform: rotate(180deg);"
                                class="animable" id="elqcjxj09ga1h"></rect>
                        </g>
                        <g id="elog0z26tfz3">
                            <rect x="380.46" y="41.02" width="19.57" height="19.57"
                                style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; opacity: 0.3; transform-origin: 390.245px 50.805px; transform: rotate(180deg);"
                                class="animable" id="elitcc2h9bcuq"></rect>
                        </g>
                        <g id="el0pnd7owlpep9">
                            <polyline points="359.04 48.76 362.38 55.44 372.2 44.63"
                                style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2px; opacity: 0.3; transform-origin: 365.62px 50.035px;"
                                class="animable" id="el1swoiluuqmq"></polyline>
                        </g>
                        <g id="eldltdxnbxzag">
                            <rect x="58.57" y="328.14" width="19.57" height="19.57"
                                style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; opacity: 0.3; transform-origin: 68.355px 337.925px; transform: rotate(180deg);"
                                class="animable" id="elwsh8ex3i4os"></rect>
                        </g>
                        <g id="eldwk7ouywjan">
                            <rect x="84.19" y="328.14" width="19.57" height="19.57"
                                style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; opacity: 0.3; transform-origin: 93.975px 337.925px; transform: rotate(180deg);"
                                class="animable" id="el3g7mynchco4"></rect>
                        </g>
                        <g id="elua2sd3mapdc">
                            <polyline points="62.77 335.88 66.11 342.56 75.93 331.75"
                                style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2px; opacity: 0.3; transform-origin: 69.35px 337.155px;"
                                class="animable" id="eliz29jn6ejss"></polyline>
                        </g>
                        <g id="elhmcl7cdct8">
                            <rect x="151.29" y="328.14" width="19.57" height="19.57"
                                style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; opacity: 0.3; transform-origin: 161.075px 337.925px; transform: rotate(180deg);"
                                class="animable" id="elr25lmh4ra3"></rect>
                        </g>
                        <g id="el1uisyuve8pbh">
                            <rect x="176.91" y="328.14" width="19.57" height="19.57"
                                style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; opacity: 0.3; transform-origin: 186.695px 337.925px; transform: rotate(180deg);"
                                class="animable" id="elbakiwv6nmtl"></rect>
                        </g>
                        <g id="elfvet1r2o79">
                            <polyline points="155.49 335.88 158.83 342.56 168.65 331.75"
                                style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2px; opacity: 0.3; transform-origin: 162.07px 337.155px;"
                                class="animable" id="elyakzwiylz0s"></polyline>
                        </g>
                        <g id="elebqevqdbvdd">
                            <g style="opacity: 0.3; transform-origin: 179.64px 38.41px;" class="animable"
                                id="elsjrhzrdq8ts">
                                <g id="elut7fipbkr2">
                                    <circle cx="179.64" cy="38.41" r="12.56"
                                        style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; transform-origin: 179.64px 38.41px; transform: rotate(-9.18deg);"
                                        class="animable" id="el9swqr7lgym"></circle>
                                </g>
                                <polyline points="183.15 42.95 179.64 38.41 179.64 31.26"
                                    style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; transform-origin: 181.395px 37.105px;"
                                    id="el9urnywl0it" class="animable"></polyline>
                            </g>
                        </g>
                        <g id="elq6x3q0y8iu">
                            <g style="opacity: 0.3; transform-origin: 437.095px 283.725px;" class="animable"
                                id="elz8us0fjo1cj">
                                <path
                                    d="M414.08,279.32h-1.86l-.32-2.12h-2.26l-.32,2.12h-1.69l1.88-11.71h2.69Zm-4.2-3.71h1.77l-.89-5.93Z"
                                    id="eli223wmc562" class="animable" style="transform-origin: 410.855px 273.465px;">
                                </path>
                                <path
                                    d="M440.27,270.3v.42a2.29,2.29,0,0,1-1.18,2.36,2.38,2.38,0,0,1,1.37,2.51v1a2.49,2.49,0,0,1-2.8,2.77h-2.89V267.61h2.78C439.45,267.61,440.27,268.49,440.27,270.3Zm-3.66-1v3.1h.72c.68,0,1.1-.3,1.1-1.24v-.65c0-.84-.28-1.21-.94-1.21Zm0,4.77v3.6h1.05c.62,0,1-.28,1-1.15v-1c0-1.08-.36-1.42-1.19-1.42Z"
                                    id="elrziyxfeeu8" class="animable" style="transform-origin: 437.627px 273.496px;">
                                </path>
                                <path
                                    d="M466.79,275v1.55c0,1.88-.93,2.95-2.74,2.95s-2.75-1.07-2.75-2.95v-6.09c0-1.88.94-2.95,2.75-2.95s2.74,1.07,2.74,2.95v1.14h-1.74V270.3c0-.84-.37-1.15-.95-1.15s-1,.31-1,1.15v6.33c0,.84.37,1.14,1,1.14s.95-.3.95-1.14V275Z"
                                    id="elfscz8cevurt" class="animable" style="transform-origin: 464.045px 273.505px;">
                                </path>
                                <rect x="403.51" y="285.71" width="14.23" height="14.23"
                                    style="fill: none; stroke: rgb(0, 0, 0); stroke-miterlimit: 10; transform-origin: 410.625px 292.825px;"
                                    id="el6hyo3yzcfii" class="animable"></rect>
                                <rect x="429.98" y="285.71" width="14.23" height="14.23"
                                    style="fill: none; stroke: rgb(0, 0, 0); stroke-miterlimit: 10; transform-origin: 437.095px 292.825px;"
                                    id="el3r6z9qj16tc" class="animable"></rect>
                                <rect x="456.45" y="285.71" width="14.23" height="14.23"
                                    style="fill: none; stroke: rgb(0, 0, 0); stroke-miterlimit: 10; transform-origin: 463.565px 292.825px;"
                                    id="el768yw96jo9h" class="animable"></rect>
                            </g>
                        </g>
                    </g>
                    <g id="freepik--Table--inject-126" class="animable" style="transform-origin: 261.83px 450.56px;">
                        <line x1="80.44" y1="450.56" x2="50.33" y2="450.56"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 65.385px 450.56px;"
                            id="elc07va7on14f" class="animable"></line>
                        <line x1="473.33" y1="450.56" x2="90.25" y2="450.56"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 281.79px 450.56px;"
                            id="ela1gzedj8fro" class="animable"></line>
                    </g>
                    <g id="freepik--Character--inject-126" class="animable"
                        style="transform-origin: 318.325px 317.192px;">
                        <path
                            d="M357.64,450.22l6.44-97.8,4.74-46.5-13-14.51-6.52-4.74s-9.18,8-15.69,9.77S320.84,300,320.84,300s-22.21,41.76-24,60.71-4.74,89.15-4.74,89.15l2.47.36Z"
                            style="fill: rgb(158, 158, 158); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 330.46px 368.445px;"
                            id="ellpzxz4ubuck" class="animable"></path>
                        <path d="M327.11,369.59s-1.11-.57,1.11-6.29"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 327.526px 366.445px;"
                            id="elift46jc7lir" class="animable"></path>
                        <path d="M324.5,299a192.16,192.16,0,0,1,1.83,23.84s6.67-2.67,12-12a107.77,107.77,0,0,0,7.58-15.66Z"
                            style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 335.205px 309.01px;"
                            id="el4xam7al7mk2" class="animable"></path>
                        <path
                            d="M357.64,450.22l5.79-87.93c-5.68,2.9-16.89,7.69-29.26,7.9-14.82.25-33.17-11.26-33.17-11.26l-4.13,1.62c0,.05,0,.11,0,.16-1.78,19-4.74,89.15-4.74,89.15l2.47.36Z"
                            style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 327.78px 404.575px;"
                            id="elicaism6ziz" class="animable"></path>
                        <path
                            d="M348,401c0,22.65.78,44.44,1,49.2h43.65c.6-7.06,4.36-51,6.29-66.75,2.11-17.21,15.95-42.83,15.95-52s2.81-7.72-9.83-14.39-40.52-21.07-44.38-22.83-8.08-6-8.08-6,1.4,8.78,1,32.65S348,375.39,348,401Z"
                            style="fill: #26C5B5; transform-origin: 381.578px 369.215px;" id="el1gnn3q2pp9y"
                            class="animable"></path>
                        <g id="eltfi56d5a1wq">
                            <g style="opacity: 0.2; transform-origin: 381.515px 369.285px;" class="animable"
                                id="elcpyg6rgzmp">
                                <path
                                    d="M352.6,288.32a118.58,118.58,0,0,1,.9,12.52V289.17C352.94,288.66,352.6,288.32,352.6,288.32Z"
                                    id="eldyyxjsyeq0f" class="animable" style="transform-origin: 353.05px 294.58px;">
                                </path>
                                <path
                                    d="M410,345.47v3c.34-.91.68-1.79,1-2.66v-.36h.13c.13-.33.25-.67.37-1H411V332h3.87c0-.15,0-.31,0-.46s0-.36,0-.54H411V320.34c-.31-.19-.64-.37-1-.57V331H399.5v-12.5h8.12l-1.88-1H399.5V314.2l-1-.53v3.8H388v-9.26l-1-.52v9.78H376.5V305h5.23l-1.94-1H376.5v-1.69l-1-.52V304H365v-7.55c-.35-.18-.68-.35-1-.5V304H353.6c0,.33,0,.66,0,1H364v12.5H353.69c0,.33,0,.66,0,1H364V331H353.5v-4.75c-.2,4.88-.56,10-1,15.21v3h-.26l-.09,1h.35V358H351l-.1,1h1.65v12.5h-2.84l-.09,1h2.93V385h-3.9l-.06,1h4v12.5h-4.43c0,.34,0,.67,0,1h4.44V412h-4.41c0,.34,0,.67,0,1h4.4v12.5h-4.2c0,.34,0,.67,0,1h4.18v23.75h1V426.47H364v23.75h1V426.47h10.5v23.75h1V426.47H387v23.75h1V426.47h6.73c0-.33,0-.66.09-1H388V413H396c0-.33.07-.66.1-1H388v-12.5h9.24c0-.34.06-.66.1-1H388V386h10.5v1.33l.44-3.83c.14-1.12.33-2.28.56-3.47v-7.53h1.87l.3-1H399.5V359H406c.13-.33.25-.67.38-1H399.5v-12.5ZM399.5,332H410v12.5H399.5ZM364,425.47H353.5V413H364Zm0-13.5H353.5v-12.5H364Zm0-13.5H353.5V386H364Zm0-13.5H353.5v-12.5H364Zm0-13.5H353.5V359H364Zm0-13.5H353.5v-12.5H364Zm0-13.5H353.5V332H364Zm11.5,81H365V413h10.5Zm0-13.5H365v-12.5h10.5Zm0-13.5H365V386h10.5Zm0-13.5H365v-12.5h10.5Zm0-13.5H365V359h10.5Zm0-13.5H365v-12.5h10.5Zm0-13.5H365V332h10.5Zm0-13.5H365v-12.5h10.5Zm0-13.5H365V305h10.5Zm11.5,108H376.5V413H387Zm0-13.5H376.5v-12.5H387Zm0-13.5H376.5V386H387Zm0-13.5H376.5v-12.5H387Zm0-13.5H376.5V359H387Zm0-13.5H376.5v-12.5H387Zm0-13.5H376.5V332H387Zm0-13.5H376.5v-12.5H387Zm11.5,54H388v-12.5h10.5Zm0-13.5H388V359h10.5Zm0-13.5H388v-12.5h10.5Zm0-13.5H388V332h10.5Zm0-13.5H388v-12.5h10.5Z"
                                    id="ellp54ndza52" class="animable" style="transform-origin: 381.515px 373.1px;">
                                </path>
                            </g>
                        </g>
                        <path
                            d="M348,401c0,22.65.78,44.44,1,49.2h43.65c.6-7.06,4.36-51,6.29-66.75,2.11-17.21,15.95-42.83,15.95-52s2.81-7.72-9.83-14.39-40.52-21.07-44.38-22.83-8.08-6-8.08-6,1.4,8.78,1,32.65S348,375.39,348,401Z"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 381.578px 369.215px;"
                            id="elq9bm1mmifa" class="animable"></path>
                        <path
                            d="M352.6,288.32s1.4,8.78,1,32.65c-.08,6-.49,12.48-1,19.16,1.2-1.65,5.07-6.92,6-7.22,1.05-.35,6.67,4.92,11.23,5.62s6.32.7,1.41-4.57-7-20.71-8.78-32.3a45,45,0,0,0-1.63-7.32l-.12,0C356.81,292.54,352.6,288.32,352.6,288.32Z"
                            style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 363.392px 314.225px;"
                            id="elqbjkymdmal" class="animable"></path>
                        <path
                            d="M381.41,396.92c3.23-1.47,5.77-2.74,5.77-2.74l1.19,9.18s-17.48,7.7-27.25,8.29-10.66.89-10.66.89l.29-8.88"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 369.415px 403.36px;"
                            id="elt0grhjossql" class="animable"></path>
                        <path d="M372.66,400.51c1.79-.6,3.89-1.45,5.94-2.34"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 375.63px 399.34px;"
                            id="elmd215njzze" class="animable"></path>
                        <path d="M354,402.77a117.16,117.16,0,0,0,15.26-1.39"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 361.63px 402.075px;"
                            id="el2fq7a8fnw3" class="animable"></path>
                        <line x1="388.37" y1="403.36" x2="388.96" y2="410.47"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 388.665px 406.915px;"
                            id="el58erjdpe87y" class="animable"></line>
                        <path
                            d="M254.39,450.22h49.12c.11-3.85,1.53-52.78,2.49-77.75,1-26,18.64-65.44,18.64-65.44s2.36-5.56-.14-8.06-8.5-1.5-13,2-46,21.5-48.5,24-2,11-3,21-17.5,79-17.5,79-4.5,1-6,2-1.5,4-1.5,4,2,.5,8,3.5C248.52,437.23,253.61,448.43,254.39,450.22Z"
                            style="fill: #26C5B5; transform-origin: 280.324px 373.901px;" id="elnqdtll639ya"
                            class="animable"></path>
                        <g id="eltd5ny6tbjtq">
                            <path
                                d="M318,318.47v5.11c.34-.92.67-1.81,1-2.67v-2.44h.94l.39-1H319V305h6.3c.07-.31.15-.65.2-1H319v-6.28c-.33.05-.66.1-1,.18V304H307.5v-.68l-1,.51V304h-.34l-2,1h2.34v12.5H296V308.9l-1,.47v8.1H284.5v-3.19l-1,.47v2.72h-5.81l-2.12,1h7.93V331H273V319.7l-1,.48V331H261.5v-2.52a88.39,88.39,0,0,0-1,11v5h-.36l-.09,1h.45V358h-2.69l-.21,1h2.9v12.5h-5.61c-.07.33-.15.67-.22,1h5.83V385h-8.65c-.08.34-.15.67-.23,1h8.88v12.5H250V393l-1,4.32v1.13h-.26l-.23,1H249V412h-3.42l-.24,1H249v12.5h-8.49a26.22,26.22,0,0,0-3,1h0v5.44c.3.12.63.26,1,.43v-5.87H249v14c.35.5.68,1,1,1.51v-15.5h10.5v23.75h1V426.47H272v23.75h1V426.47h10.5v23.75h1V426.47H295v23.75h1V426.47h8.21l0-1H296V413h8.63l0-1H296v-12.5h9.06l0-1H296V386h9.51c0-.33,0-.67,0-1H296v-12.5h10c0-.33,0-.66.05-1H296V359h10.5v7.39c.26-2.13.59-4.32,1-6.54V359h.16c.06-.33.13-.66.19-1h-.35v-12.5h3.35c.09-.33.19-.66.28-1H307.5V332H315c.12-.33.23-.67.34-1H307.5v-12.5ZM307.5,305H318v12.5H307.5Zm-47,120.5H250V413h10.5Zm0-13.5H250v-12.5h10.5Zm11.5,13.5H261.5V413H272Zm0-13.5H261.5v-12.5H272Zm0-13.5H261.5V386H272Zm0-13.5H261.5v-12.5H272Zm0-13.5H261.5V359H272Zm0-13.5H261.5v-12.5H272Zm0-13.5H261.5V332H272Zm11.5,81H273V413h10.5Zm0-13.5H273v-12.5h10.5Zm0-13.5H273V386h10.5Zm0-13.5H273v-12.5h10.5Zm0-13.5H273V359h10.5Zm0-13.5H273v-12.5h10.5Zm0-13.5H273V332h10.5Zm11.5,81H284.5V413H295Zm0-13.5H284.5v-12.5H295Zm0-13.5H284.5V386H295Zm0-13.5H284.5v-12.5H295Zm0-13.5H284.5V359H295Zm0-13.5H284.5v-12.5H295Zm0-13.5H284.5V332H295Zm0-13.5H284.5v-12.5H295Zm11.5,27H296v-12.5h10.5Zm0-13.5H296V332h10.5Zm0-13.5H296v-12.5h10.5Z"
                                style="opacity: 0.2; transform-origin: 281.505px 373.99px;" class="animable"
                                id="elmnoyx9e1nc"></path>
                        </g>
                        <path
                            d="M254.39,450.22h49.12c.11-3.85,1.53-52.78,2.49-77.75,1-26,18.64-65.44,18.64-65.44s2.36-5.56-.14-8.06-8.5-1.5-13,2-46,21.5-48.5,24-2,11-3,21-17.5,79-17.5,79-4.5,1-6,2-1.5,4-1.5,4,2,.5,8,3.5C248.52,437.23,253.61,448.43,254.39,450.22Z"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 280.324px 373.901px;"
                            id="elw3c1pgub3cj" class="animable"></path>
                        <path
                            d="M235,431s2,.5,8,3.5,11.5,16,11.5,16h9.69c.61-1.82,2.1-8.44-4.69-16.5-8-9.5-17-9-17-9s-4.5,1-6,2S235,431,235,431Z"
                            style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 249.882px 437.748px;"
                            id="el69izh8knslf" class="animable"></path>
                        <path
                            d="M318.46,297.78c-2.15,5.69-7.24,18.56-11.46,24.69-5.5,8-15.5,14.5-12,17.5s13.5-6.5,13.5-6.5,2.5,7,3,9a.75.75,0,0,0,.13.25,314.24,314.24,0,0,1,13-35.69s2.36-5.56-.14-8.06C323.2,297.67,321,297.33,318.46,297.78Z"
                            style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 309.956px 320.156px;"
                            id="el4ljcyahjxyp" class="animable"></path>
                        <path d="M281.94,346.05a52.05,52.05,0,0,0,.56-5.58"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 282.22px 343.26px;"
                            id="elwccaxmiv958" class="animable"></path>
                        <path d="M274,451.47s1.5-32,1.5-50.5c0-13.33,3.63-35.75,5.67-49.48"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 277.585px 401.48px;"
                            id="elbsrlt7muqy" class="animable"></path>
                        <path d="M276.5,394s8,2.5,12,3l12,1.5-.91,11.33s-.59-.33-9.59-3.33-14.5-5.5-14.5-5.5"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 288px 401.915px;"
                            id="el95t6vxmy4ke" class="animable"></path>
                        <path d="M299.59,409.8S299,432,299,435s-9,1-9,1"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 294.795px 423.227px;"
                            id="el4qoeiw9hie6" class="animable"></path>
                        <path
                            d="M306.77,287.22s9.43,13.56,17.87,19.81,15.64-2.5,21.27-11.88,9.38-16.26,12.19-24.39,0-21.57-11.25-32.2-37.53-26.27-44.09-18.14-12.82,26-8.45,41.27A80.67,80.67,0,0,0,306.77,287.22Z"
                            style="fill: rgb(158, 158, 158); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 325.985px 263.65px;"
                            id="eldkpx6c5lowc" class="animable"></path>
                        <path d="M302.8,258.05a19,19,0,0,1,10.91,0"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-miterlimit: 10; stroke-width: 2px; transform-origin: 308.255px 257.65px;"
                            id="elu9x0ohv9g4k" class="animable"></path>
                        <path
                            d="M310.87,266.42c.3,1.62-.08,3.05-.85,3.19s-1.62-1.06-1.92-2.69.08-3.05.85-3.19S310.57,264.79,310.87,266.42Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 309.485px 266.67px;" id="elx198fxv6yk8"
                            class="animable"></path>
                        <path
                            d="M338.69,266.85c.29,1.62-.09,3-.85,3.19s-1.62-1.06-1.92-2.69.08-3.05.85-3.19S338.39,265.22,338.69,266.85Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 337.302px 267.104px;" id="eli1wij34e9de"
                            class="animable"></path>
                        <path d="M318.08,288.9a29.45,29.45,0,0,0,11.25,1.56c6.57-.31,12.2-5,12.2-5"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 329.805px 287.983px;"
                            id="elcayg4pv8jag" class="animable"></path>
                        <path
                            d="M303.73,227.33s13.89,31.68,15.63,32.55,5.21-9.55,5.21-9.55S329.34,259,335,261.61s7.38-1.73,7.38-1.73a97,97,0,0,1,8.25,5.21l2.17,1.73,2.17,7.81s-6.51,21.27-4.34,23.88,14.32-.87,14.32-.87-3,4.34.87,4.34,10.85.87,20.83-12.59,10.85-35.15,10.85-35.15,4.77,5.2,5.21-1.31-5.64-17.36-5.64-17.36,9.54,9.55,8.68-.43-6.51-21.27-8.68-23.87-15.2-10-15.2-10,5.21-.87,1.31-6.95-18.23-7.81-23.44-7.81-16.06,1.74-16.06,1.74,6.95-13.46-.43-14.33-20.4,13.46-20.4,13.46-13-10.42-16.93-8.25-1.3,5.21-1.3,5.21-16.92,1.3-21.7,8.68.87,11.72.87,11.72-30.38,20.83-25.61,28.64,13.46.44,13.46.44-12.16,31.25-10.42,33.42,10-.87,10-.87-.43,25.17,6.08,27.78,7.81-2.17,7.81-2.17,3.47,3.47,11.29,3.9,10.41-8.68,10.41-8.68-8.68-20.4-8.24-37.32S303.73,227.33,303.73,227.33Z"
                            style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 331.738px 237.937px;"
                            id="eltuk344ehu1f" class="animable"></path>
                        <path d="M321.21,263.88s-3.13,16.26-.63,19.7,11.26,0,11.88-1.87"
                            style="fill: rgb(158, 158, 158); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 326.036px 274.464px;"
                            id="eltifxgtd6eo" class="animable"></path>
                        <ellipse cx="308.23" cy="264.82" rx="12.35" ry="9.07"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 308.23px 264.82px;"
                            id="el01ib0ce1tfsv" class="animable"></ellipse>
                        <ellipse cx="337.93" cy="264.2" rx="12.35" ry="9.07"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 337.93px 264.2px;"
                            id="el5spta5c25to" class="animable"></ellipse>
                        <path d="M321.21,263.88s2.5-1.87,4.37.32"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 323.395px 263.668px;"
                            id="el0u9m9z9pic3" class="animable"></path>
                        <path d="M218.31,436.91s15.7-4.43,20.53-5.23,14.5,8.05,16.11,12.88-.45,5.91-.45,5.91l-32.17-1.07Z"
                            style="fill: rgb(158, 158, 158); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 236.938px 441.05px;"
                            id="elegxtxhrc7xr" class="animable"></path>
                        <path
                            d="M224,435.35s11.85,4.44,14.81,6.22,2.07,5.33.3,7.1a16.72,16.72,0,0,1-7.41,3.56,72.91,72.91,0,0,1-8.29,0c-3.55-.3-6.81.3-9.77.3s-11.85-.89-11.85-.89l-2.67-1.78s-5,1.48-8.88,3-2.67-1.78.29-4.15,10.37-8.29,11.56-8.88,16.29-5,16.29-5Z"
                            style="fill: rgb(158, 158, 158); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 214.265px 444.038px;"
                            id="elzfda5ulgmv" class="animable"></path>
                        <path
                            d="M228.44,436.53s-7.71-3.55-9.78-3.55-16.88,5-18.95,6.51-4.15,15.7-2.67,16.59,2.67-1.78,3-3.55,4.45-11.26,4.45-11.26l-3,15.11s1.19,2.36,2.37.29,8.59-16.29,9.18-17.18a10.82,10.82,0,0,1,2.67-2.07s-1.48,6.52-2.67,12.74-.29,8,1.49,8.29,2.66-3.85,3.55-5.92,4.74-13.93,4.74-13.93"
                            style="fill: rgb(158, 158, 158); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 212.49px 445.722px;"
                            id="ely5kcz7xihd" class="animable"></path>
                        <path
                            d="M237,442.46s-8.88,9.18-10.07,11.25-1.18,2.37,2.08,2.37,13.33-6.52,14.21-7.41.6-3.55-1.48-5.33A5.25,5.25,0,0,0,237,442.46Z"
                            style="fill: rgb(158, 158, 158); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 234.948px 449.158px;"
                            id="el5su0heh4k6s" class="animable"></path>
                        <path
                            d="M292.46,441.44s-11.85,3.83-14.76,6-7.11,4.56-6.2,5.29,3.83,0,4.74-.73,5.1-1.46,5.1-1.46,4.92-2.92,8.75-5.28S296.83,440.34,292.46,441.44Z"
                            style="fill: rgb(158, 158, 158); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 283.01px 447.105px;"
                            id="el8ubyw7knoy5" class="animable"></path>
                        <path
                            d="M357.87,421.38s-33,6-44.94,10.19-16.69,7.11-22.66,11.33S272.2,455.09,274,456.49s8.07-3.51,9.13-4.56,8.77-4.21,8.77-4.21l5.16-2.64s-7.77,9.57-10.57,12-.91,3.95,1.2,3.25,6.09-4.89,6.09-4.89L306.61,447s-5.27,7.38-7.73,9.48,2.81,3.87,3.87,2.11,6.32-6.32,6.32-6.32,8.77-4.56,10.88-6.32,7.37-6.67,7.37-6.67l39.32,3.16s2.46-1.4,1.06-9.48S357.87,421.38,357.87,421.38Z"
                            style="fill: rgb(158, 158, 158); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 320.975px 440.941px;"
                            id="el5y89zsp5k3q" class="animable"></path>
                        <path
                            d="M384.55,359.24,403.86,407l-31.25,10.88,8.78,25.63s22.44.06,40-1,29.88-11.65,27.07-24.28-13.34-30.9-21.77-52.67-5.82-34.75-9.68-41.42-14.75-8.43-14.75-8.43l-6-1"
                            style="fill: #26C5B5; transform-origin: 410.735px 379.11px;" id="ela8l9g9bzu5"
                            class="animable"></path>
                        <g id="ele9890a8p73f">
                            <path
                                d="M445.5,431.51v-5h2.61c.11-.33.2-.66.28-1H445.5V413H447c-.11-.32-.23-.66-.34-1H445.5v-3.05c-.32-.83-.65-1.68-1-2.53V412H434v-12.5h7.54c-.15-.33-.29-.66-.44-1H434V386h1.4c-.16-.33-.31-.66-.46-1H434v-2.09c-.33-.74-.67-1.48-1-2.23V385H422.5v-12.5h7c-.14-.33-.28-.66-.41-1H422.5V359h1.87c-.11-.33-.21-.67-.31-1H422.5V352.3c-.38-1.58-.71-3.09-1-4.54V358H411v-12.5h10.08l-.18-1H411V332h8.21l-.15-1H411V318.74a28.31,28.31,0,0,0-2.7-1.27h-8.8v-2.24l-1-.18v2.42h-2.95l-.27,1h3.22V331H392l-.26,1h6.77v12.5H388.44l-.27,1H398.5V358H388V346.14l-1,3.79v8h-2.12l-.26,1H387v6.33l1,2.47V359h10.5v12.5h-9l.4,1h8.6V385H395l.41,1h3.14v7.77l1,2.47V386H410v12.5h-9.59l.41,1H410V412H399.5v-3.46l-1,.35V412h-8.94l-2.88,1H387v12.5H376.5v-9l-1,.35v8.6h-.29l1.29,3.76v-2.76H387v17h1v-17h10.5v16.87l1,0V426.47H410V443l1,0V426.47h10.5v16l1-.08V426.47H433v13.72l1-.38V426.47h10.5v6.28C444.85,432.34,445.19,431.93,445.5,431.51Zm-47-6H388V413h10.5Zm11.5,0H399.5V413H410Zm0-40.5H399.5v-12.5H410Zm0-13.5H399.5V359H410Zm0-13.5H399.5v-12.5H410Zm0-13.5H399.5V332H410Zm0-13.5H399.5v-12.5H410Zm11.5,94.5H411V413h10.5Zm0-13.5H411v-12.5h10.5Zm0-13.5H411V386h10.5Zm0-13.5H411v-12.5h10.5Zm0-13.5H411V359h10.5Zm11.5,54H422.5V413H433Zm0-13.5H422.5v-12.5H433Zm0-13.5H422.5V386H433Zm1,27V413h10.5v12.5Z"
                                style="fill: rgb(38, 50, 56); opacity: 0.2; transform-origin: 411.8px 379.25px;"
                                class="animable" id="elf83nak6o56l"></path>
                        </g>
                        <path
                            d="M384.55,359.24,403.86,407l-31.25,10.88,8.78,25.63s22.44.06,40-1,29.88-11.65,27.07-24.28-13.34-30.9-21.77-52.67-5.82-34.75-9.68-41.42-14.75-8.43-14.75-8.43l-6-1"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 410.735px 379.11px;"
                            id="elm5qo0nbd77" class="animable"></path>
                        <path d="M422.66,402.14a140,140,0,0,0-18.8,4.85s13.34-8.78,20.71-9.48"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 414.215px 402.25px;"
                            id="el9wq9l9hpqx" class="animable"></path>
                        <path d="M431.6,401.72a19.22,19.22,0,0,0-4.18-.14"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 429.51px 401.623px;"
                            id="el763s27p12ud" class="animable"></path>
                        <path
                            d="M381.74,414s7.1,6.79,9.2,12.05,1.33,19.55-.07,20.95-27.53,1.23-31.83-4.14c-1.12-1.4,6.55-4.63,2.69-12.36s-5.62-8.42-5.62-8.42-3.16-1.76,2.81-5.62S378.58,409.8,381.74,414Z"
                            style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 373.755px 429.825px;"
                            id="elpjr6kzkmvef" class="animable"></path>
                    </g>
                    <g id="freepik--Drink--inject-126" class="animable" style="transform-origin: 431.035px 440.49px;">
                        <polygon points="443.99 468.14 418.07 468.14 414.83 416.9 447.23 416.9 443.99 468.14"
                            style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 431.03px 442.52px;"
                            id="elf35j4lcfwwf" class="animable"></polygon>
                        <rect x="413.4" y="416.98" width="35.27" height="7.46"
                            style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 431.035px 420.71px;"
                            id="elmaz5zfsven" class="animable"></rect>
                        <polygon points="448.67 417.26 413.4 417.26 416.92 412.84 445.14 412.84 448.67 417.26"
                            style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 431.035px 415.05px;"
                            id="elsp2tbp0723q" class="animable"></polygon>
                        <polygon points="444.94 453.11 446.23 432.7 415.83 432.7 417.12 453.11 444.94 453.11"
                            style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 431.03px 442.905px;"
                            id="elykr987077zh" class="animable"></polygon>
                    </g>
                    <g id="freepik--Device--inject-126" class="animable" style="transform-origin: 226.925px 425.715px;">
                        <polygon points="294.62 471.55 326.56 463.11 326.56 467.43 294.62 476.38 294.62 471.55"
                            style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 310.59px 469.745px;"
                            id="ela1sp5bw2xm4" class="animable"></polygon>
                        <polygon points="326.56 463.11 159.57 463.11 127.29 471.55 294.62 471.55 326.56 463.11"
                            style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 226.925px 467.33px;"
                            id="el73osuisfhzy" class="animable"></polygon>
                        <rect x="127.29" y="375.05" width="167.33" height="101.33"
                            style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 210.955px 425.715px;"
                            id="elnxzgd1sbxzq" class="animable"></rect>
                        <path
                            d="M294.62,389.71c-36.4,1.73-58.08,35.28-90.29,57.76-29.36,20.5-65.62,24-77,24.55v4.36H294.62Z"
                            style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linejoin: round; transform-origin: 210.975px 433.045px;"
                            id="elmd1sdbjgdc" class="animable"></path>
                        <rect x="127.29" y="471.55" width="167.33" height="4.83"
                            style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 210.955px 473.965px;"
                            id="elqaxua39z83a" class="animable"></rect>
                    </g>
                    <g id="freepik--Plant--inject-126" class="animable" style="transform-origin: 89.0706px 424.323px;">
                        <path d="M77.75,438.12S63.81,415.82,75,403.27s29.27-6.51,33,5.11-4.18,31.14-4.18,31.14Z"
                            style="fill: #26C5B5; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 89.8256px 417.909px;"
                            id="elo71e4m7dr7" class="animable"></path>
                        <path
                            d="M78.21,412.56c-2.32,0-11.15-3.25-13.94-7.43S61,391.65,68.92,391.65s10.69,13.94,10.69,13.94l.46,5.11"
                            style="fill: #26C5B5; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 71.2452px 402.105px;"
                            id="elijyupcunrfd" class="animable"></path>
                        <path
                            d="M85.36,403.88c-2.08-1-8.53-7.88-9.16-12.87s3.11-13.51,10.18-10,3.34,17.25,3.34,17.25l-1.87,4.78"
                            style="fill: #26C5B5; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 83.4174px 392.033px;"
                            id="eloa70qksj99" class="animable"></path>
                        <path
                            d="M93.8,406.22c-1.16-2-2.72-11.29-.48-15.79s10.08-9.52,14-2.66-6.79,16.2-6.79,16.2l-4.21,2.94"
                            style="fill: #26C5B5; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 100.182px 395.655px;"
                            id="elwt4kn3lnr4e" class="animable"></path>
                        <path d="M96.57,422.88c-.38-2.3,1.36-11.54,5-15s12.75-5.45,14.06,2.34-12,12.86-12,12.86l-5,1.3"
                            style="fill: #26C5B5; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 106.12px 414.605px;"
                            id="eltv8072ztcu" class="animable"></path>
                        <line x1="65.29" y1="399.52" x2="66.86" y2="401.99"
                            style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 66.075px 400.755px;"
                            id="els0htxwdd4b" class="animable"></line>
                        <line x1="69.78" y1="405.58" x2="72.24" y2="407.59"
                            style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 71.01px 406.585px;"
                            id="elkwvztpaccpl" class="animable"></line>
                        <line x1="67.09" y1="394.81" x2="69.55" y2="398.4"
                            style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 68.32px 396.605px;"
                            id="el4dkf6hrhp2b" class="animable"></line>
                        <line x1="72.92" y1="401.32" x2="75.61" y2="406.25"
                            style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 74.265px 403.785px;"
                            id="elm26sb0oiqs" class="animable"></line>
                        <line x1="79.19" y1="389.43" x2="80.09" y2="392.12"
                            style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 79.64px 390.775px;"
                            id="el1sw865mjiiy" class="animable"></line>
                        <line x1="82.33" y1="397.05" x2="83.9" y2="399.3"
                            style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 83.115px 398.175px;"
                            id="elqi24t5wear" class="animable"></line>
                        <line x1="81.66" y1="384.05" x2="83.68" y2="388.53"
                            style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 82.67px 386.29px;"
                            id="elml1tgzco9ar" class="animable"></line>
                        <line x1="73.81" y1="415.67" x2="74.49" y2="419.7"
                            style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 74.15px 417.685px;"
                            id="elx4ulm6edm4" class="animable"></line>
                        <line x1="75.83" y1="423.51" x2="76.73" y2="426.88"
                            style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 76.28px 425.195px;"
                            id="elfrqwqlhxib4" class="animable"></line>
                        <line x1="78.07" y1="415.89" x2="78.97" y2="420.37"
                            style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 78.52px 418.13px;"
                            id="elnhw1pj1i9pj" class="animable"></line>
                        <line x1="80.99" y1="423.51" x2="81.66" y2="426.88"
                            style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 81.325px 425.195px;"
                            id="elouoro6m1gle" class="animable"></line>
                        <line x1="82.56" y1="410.06" x2="83.9" y2="416.34"
                            style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 83.23px 413.2px;"
                            id="elfukoazjzkb" class="animable"></line>
                        <line x1="85.7" y1="422.39" x2="85.92" y2="425.31"
                            style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 85.81px 423.85px;"
                            id="el2oqfd3k0swl" class="animable"></line>
                        <line x1="88.16" y1="408.04" x2="89.28" y2="413.87"
                            style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 88.72px 410.955px;"
                            id="el1rgu8n87i1q" class="animable"></line>
                        <line x1="89.28" y1="419.93" x2="89.73" y2="425.98"
                            style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 89.505px 422.955px;"
                            id="elhnet1l7j7bb" class="animable"></line>
                        <line x1="94.67" y1="410.28" x2="94.67" y2="415.22"
                            style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 94.67px 412.75px;"
                            id="elcotw71nrdoh" class="animable"></line>
                        <line x1="93.99" y1="421.5" x2="94.22" y2="425.31"
                            style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 94.105px 423.405px;"
                            id="elugi9zujzmq8" class="animable"></line>
                        <line x1="100.27" y1="386.96" x2="99.15" y2="389.66"
                            style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 99.71px 388.31px;"
                            id="el2ebv3t0ons4" class="animable"></line>
                        <line x1="98.7" y1="392.79" x2="97.58" y2="396.61"
                            style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 98.14px 394.7px;"
                            id="eluxo5aqxsh9" class="animable"></line>
                        <line x1="105.2" y1="392.12" x2="103.41" y2="395.71"
                            style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 104.305px 393.915px;"
                            id="el66z9bd9tau4" class="animable"></line>
                        <line x1="99.6" y1="399.75" x2="97.58" y2="401.99"
                            style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 98.59px 400.87px;"
                            id="elzbu5agy7kg" class="animable"></line>
                        <line x1="95.34" y1="391.9" x2="94.67" y2="394.81"
                            style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 95.005px 393.355px;"
                            id="el0yzvpwm0jvd" class="animable"></line>
                        <line x1="105.2" y1="408.04" x2="102.74" y2="412.08"
                            style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 103.97px 410.06px;"
                            id="elo1dy89jswf" class="animable"></line>
                        <line x1="101.17" y1="414.54" x2="99.82" y2="418.13"
                            style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 100.495px 416.335px;"
                            id="el4hbfqr2j8x3" class="animable"></line>
                        <line x1="103.19" y1="419.93" x2="107.22" y2="417.68"
                            style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 105.205px 418.805px;"
                            id="el6mt8ecnicey" class="animable"></line>
                        <line x1="109.69" y1="408.04" x2="107.67" y2="411.41"
                            style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 108.68px 409.725px;"
                            id="elqrxxxmion6" class="animable"></line>
                        <line x1="111.71" y1="411.85" x2="109.02" y2="413.87"
                            style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 110.365px 412.86px;"
                            id="elvo85l7uhzpl" class="animable"></line>
                        <rect x="70.69" y="430.34" width="38.12" height="38.12"
                            style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 89.75px 449.4px;"
                            id="eljyn07wprdhl" class="animable"></rect>
                    </g>
                    <defs>
                        <filter id="active" height="200%">
                            <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2">
                            </feMorphology>
                            <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>
                            <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                            <feMerge>
                                <feMergeNode in="OUTLINE"></feMergeNode>
                                <feMergeNode in="SourceGraphic"></feMergeNode>
                            </feMerge>
                        </filter>
                        <filter id="hover" height="200%">
                            <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2">
                            </feMorphology>
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
    </div>
@endsection

@section('script')
@endsection
