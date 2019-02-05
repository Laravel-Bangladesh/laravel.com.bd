@extends('app')

@section('body-class', 'community')

@section('content')
    <nav id="slide-menu" class="slide-menu" role="navigation">
        <div class="brand">
            <a href="/">
                <img src="/assets/img/laravel-logo-white.png" height="50" alt="Laravel white logo">
            </a>
        </div>

        <ul class="slide-main-nav">
            @include('partials.main-nav')
        </ul>
    </nav>

    <section class="hero">
        <div class="container">

            <div class="content">
                <h1>Making the web a better place with Laravel</h1>
                <p>
                    Laravel Partners are elite shops providing top-notch Laravel development and consulting.<br>
                    Each of our partners can help you craft a beautiful, well-architected project.
                </p>
            </div>
        </div>
    </section>


    <section class="panel partners dark">
        <div class="container">
            <div class="callouts flex-column mw-620px">
                <a href="/partner/hostpresto/" class="partner-card">
                    <div class="partner-card-banner partner-card-lg partner-logo-banner-vehikl">
                        <img src="/assets/svg/vehikl-logo-white.svg">
                        <div class="flag">🇨🇦</div>
                    </div>
                </a>

                <div class="flex-row">
                    <a href="/partner/neu" class="partner-card mr-2">
                        <div class="partner-card-banner partner-card-md partner-logo-banner-tighten">
                            <img src="/assets/svg/tighten-logo-white.svg">
                            <div class="flag">🇧🇩 </div>
                        </div>
                    </a>
                    
                    
                    <a href="#" class="partner-card">
                        <div class="partner-card-banner partner-card-md partner-logo-banner-kirschbaum">
                            <img src="/assets/svg/kirschbaum-logo-white.svg">
                            <div class="flag">🇺🇸</div>
                        </div>
                    </a>
                </div>
<!--
                <div class="flex-row">
                    <a href="/partner/byte5" class="partner-card mr-2">
                        <div class="partner-card-banner partner-card-md partner-logo-banner-byte5">
                            <img src="/assets/img/partner-img-byte5-logo-while.png" style="max-width: 160px;">
                            <div class="flag">🇩🇪</div>
                        </div>
                    </a>
                    <a href="/partner/64robots" class="partner-card">
                        <div class="partner-card-banner partner-card-md partner-logo-banner-64robot">
                            <svg xmlns="http://www.w3.org/2000/svg" width="173" height="23" viewBox="0 0 173 23" class="">
                                <g fill-rule="evenodd">
                                    <path style="fill: rgb(255, 255, 255);" d="M43.828 14.726c0-1.158-.725-2.316-2.256-2.316-1.503 0-2.228 1.104-2.282 2.316 0 1.185.779 2.343 2.282 2.343 1.477 0 2.256-1.158 2.256-2.343zm1.182-9.964a.457.457 0 0 1-.161.647c-1.45.888-2.793 2.208-3.76 3.339.296-.054.564-.08.967-.08 4.726.269 5.773 3.77 5.773 6.166 0 1.885-1.154 6.032-6.257 6.032-5.129 0-6.283-4.363-6.283-6.248 0-6.193 3.974-10.205 7.546-12.279a.544.544 0 0 1 .698.162l1.477 2.261zM55.188 13.487h1.934v-2.989l-1.934 2.99zm6.096 6.732c0 .27-.215.485-.483.485h-3.196a.482.482 0 0 1-.483-.485v-2.935H50.73a.482.482 0 0 1-.483-.485v-1.427c0-.323.08-.619.269-.888l7.277-11.66a.928.928 0 0 1 .752-.404h2.256c.268 0 .483.215.483.485v10.582h1.772c.269 0 .484.216.484.485v2.827c0 .27-.215.485-.484.485h-1.772v2.935zM76.449 8.357c0-.763-.42-2.185-2.31-2.185h-2.993v4.397h3.098c1.785-.053 2.205-1.527 2.205-2.212m.814 5.45l3.019 6.476c.105.184-.053.421-.263.421H76.37a.756.756 0 0 1-.682-.421l-2.678-5.765h-1.864v5.712c0 .263-.21.474-.473.474h-3.229a.471.471 0 0 1-.472-.474V2.75c0-.263.21-.474.472-.474h6.564c5.092 0 6.641 3.58 6.641 6.081 0 2.607-1.417 4.476-3.386 5.45M97.767 11.464c0-1.37-.604-5.528-4.83-5.528-4.253 0-4.857 4.159-4.857 5.528 0 1.369.604 5.58 4.857 5.58 4.226 0 4.83-4.211 4.83-5.58m4.28 0c0 3.949-2.153 9.53-9.11 9.53-6.983 0-9.136-5.581-9.136-9.53 0-3.844 2.153-9.504 9.136-9.504 6.957 0 9.11 5.66 9.11 9.504M115.672 15.097c0-.553-.262-1.711-2.074-1.764h-3.176v3.449h3.124c1.838 0 2.126-1.264 2.126-1.685m0-7.187c0-.421-.288-1.738-2.126-1.738h-3.124v3.66h3.176c1.812-.053 2.074-1.422 2.074-1.922m4.254 7.187c0 2.5-1.55 5.607-6.643 5.607h-6.563a.471.471 0 0 1-.472-.474V2.75c0-.263.21-.474.472-.474h6.563c5.094 0 6.643 3.133 6.643 5.634 0 1.264-.972 2.975-2.363 3.554 1.365.526 2.363 1.974 2.363 3.633M137.044 11.464c0-1.37-.604-5.528-4.83-5.528-4.254 0-4.858 4.159-4.858 5.528 0 1.369.604 5.58 4.857 5.58 4.227 0 4.83-4.211 4.83-5.58m4.28 0c0 3.949-2.153 9.53-9.11 9.53-6.983 0-9.136-5.581-9.136-9.53 0-3.844 2.153-9.504 9.136-9.504 6.957 0 9.11 5.66 9.11 9.504M147.572 6.199h-4.331a.471.471 0 0 1-.473-.474V2.75c0-.263.21-.474.473-.474h12.942c.263 0 .473.21.473.474v2.975c0 .263-.21.474-.473.474H151.8V20.23c0 .263-.21.474-.472.474h-3.282a.471.471 0 0 1-.473-.474V6.2zM172.96 15.202c0 3.212-2.783 5.713-6.8 5.713-2.546 0-4.62-.632-6.852-1.79-.236-.106-.315-.395-.21-.632l1.444-2.685c.105-.237.394-.316.63-.211 1.68.763 3.308 1.369 4.83 1.369 1.366 0 2.521-.658 2.521-1.58 0-1.158-1.418-1.658-3.15-2.211-2.652-.869-5.986-1.896-5.986-5.686 0-3.449 2.546-5.503 6.064-5.503 1.155 0 3.57.158 6.642 1.58a.515.515 0 0 1 .237.658l-1.182 2.712c-.105.237-.368.342-.63.237-1.155-.421-3.334-1.211-4.804-1.211-1.103 0-2.127.342-2.1 1.342.105 1.132 1.942 1.633 3.99 2.37 2.547.895 5.356 2.158 5.356 5.528M15.163 17.064c2.296 0 4.156-1.846 4.156-4.123h-8.312c0 2.277 1.86 4.123 4.156 4.123"></path>
                                    <path style="fill: rgb(255, 255, 255);" d="M26.71 14.396h1.251V8.514h-1.25v5.882zm-2.257 6.275H5.873V2.239h18.58V20.671zM2.257 14.397h1.358V8.514H2.257v5.883zM30.22 6.274H26.71V0H3.615v6.274H0v10.362h3.615v6.275H26.711v-6.275h3.508V6.274z"></path>
                                    <path style="fill: rgb(255, 255, 255);" d="M21.048 9.195c0 .947-.774 1.714-1.729 1.714a1.722 1.722 0 0 1-1.728-1.714c0-.948.774-1.715 1.728-1.715.955 0 1.729.767 1.729 1.715M12.735 9.195c0 .947-.774 1.714-1.728 1.714a1.722 1.722 0 0 1-1.729-1.714c0-.948.774-1.715 1.729-1.715.954 0 1.728.767 1.728 1.715"></path>
                                </g>
                            </svg>
                            <div class="flag">🇺🇸</div>
                        </div>
                    </a>
                </div>

                <div class="flex-row">
                    <a href="/partner/cubet" class="partner-card mr-2">
                        <div class="partner-card-banner partner-card-md partner-logo-banner-cubet">
                            <?php echo file_get_contents(public_path('assets/img/partner-img-cubet-logo-while.svg')); ?>
                            <div class="flag">🇮🇳</div>
                        </div>
                    </a>

                    <a href="/partner/dev-squad" class="partner-card mr-2">
                        <div class="partner-card-banner partner-card-md partner-logo-banner-devsquad">
                            <img src="/assets/img/partner-img-devsquad-logo-while.png" style="max-width: 270px;">
                            <div class="flag">🇺🇸</div>
                        </div>
                    </a>

<!--                     <a href="/partner/insider" class="partner-card mr-2">
                        <div class="partner-card-banner partner-card-md partner-logo-banner-insider">
                            <img src="/assets/img/partner-img-insider-logo-white.png" style="max-width: 160px;">
                            <div class="flag">🇹🇷</div>
                        </div>
                    </a> -->
                </div>

                <div class="flex-row">
                    <a href="/partner/ideil" class="partner-card mr-2">
                        <div class="partner-card-banner partner-card-md partner-logo-banner-ideil">
                            <svg  fill="#fff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 155 50" width="155" height="50" class="i-svg i-logo">
                                <path d="M99.0722838,39.2499924 C96.009337,45.4464885 89.5364942,49.674125 82.02,49.674125 C71.5525,49.674125 63.0325,41.442875 63.0325,31.262875 C63.0325,21.082875 71.5525,12.851625 82.02,12.851625 C92.49,12.851625 100.93875,21.082875 100.93875,31.262875 C100.93875,32.345375 100.72125,33.500375 100.4325,34.511625 C100.4325,34.511625 91.76875,33.572875 91.76875,33.500375 C92.20125,32.345375 92.4175,32.561625 92.4175,31.262875 C92.4175,25.559125 87.725,20.866625 82.02,20.866625 C76.31625,20.866625 71.625,25.559125 71.625,31.262875 C71.625,36.967875 76.31625,41.660375 82.02,41.660375 C84.5309624,41.660375 86.8762913,40.7529599 88.6826145,39.2499924 L99.0722838,39.2499924 Z"/>
                                <polygon points="68.88 34.512 100.433 34.512 93.718 27.436 68.88 27.436"/>
                                <path d="M35.5235,12.85125 C25.271,12.85125 16.896,21.0825 16.896,31.26375 C16.896,41.44375 25.271,49.67375 35.5235,49.67375 C45.776,49.67375 54.00725,41.44375 54.00725,31.26375 C54.00725,21.0825 45.776,12.85125 35.5235,12.85125 M35.88475,41.66 C30.17975,41.66 25.48725,36.9675 25.48725,31.26375 C25.48725,25.56 30.17975,20.86625 35.88475,20.86625 C41.5885,20.86625 46.281,25.56 46.281,31.26375 C46.281,36.9675 41.5885,41.66 35.88475,41.66"/>
                                <polygon points="46.282 49.241 54.802 49.241 54.802 .503 46.282 .503"/>
                                <polygon points="127.723 49.241 136.244 49.241 136.244 .503 127.723 .503"/>
                                <polygon points=".794 49.241 9.314 49.241 9.314 13.285 .794 13.285"/>
                                <path d="M0,5.05375 C0,7.86875 2.2375,10.10875 5.05375,10.10875 C7.87125,10.10875 10.10875,7.86875 10.10875,5.05375 C10.10875,2.2375 7.87125,0 5.05375,0 C2.2375,0 0,2.2375 0,5.05375"/>
                                <polygon points="108.879 49.241 117.4 49.241 117.4 13.285 108.879 13.285"/>
                                <path d="M108.08525,5.05375 C108.08525,7.86875 110.324,10.10875 113.14025,10.10875 C115.954,10.10875 118.19275,7.86875 118.19275,5.05375 C118.19275,2.2375 115.954,0 113.14025,0 C110.324,0 108.08525,2.2375 108.08525,5.05375"/>
                                <polygon points="146.362 49.241 154.882 49.241 154.882 40.44 146.362 40.44"/>
                            </svg>

                            <div class="flag">🇺🇦</div>
                        </div>
                    </a>
                </div>
                
                -->

                <div class="flex-row">
                    <a href="mailto:&#116;&#097;&#121;&#108;&#111;&#114;&#064;&#108;&#097;&#114;&#097;&#118;&#101;&#108;&#046;&#099;&#111;&#109;" class="partner-card-md partner-card-call mb-2">
                        <div class="partner-banner-become-title">Become A Partner</div>

                        <div class="partner-card-body">
                            <p class="mb-2">If you're a web development shop creating high-quality Laravel projects, we would love to discuss partnering with you.
                                You can get in touch using the link below:</p>
                            <div class="text-red">Contact Us</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
