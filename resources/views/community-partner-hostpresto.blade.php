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

<section class="partner-profile">
    <div class="container">
        <a href="/partners"><h4>Laravel Partners</h4></a>

        <div class="partner-profile-header clearfix">
            <div class="partner-logo"><img src="/assets/svg/hostpresto-logo-white.svg"></div>
            <div class="partner-ctas">
                <a href="http://hostpresto.com"><div class="btn btn-default">Visit Website</div></a>
            </div>
        </div>

        <div class="row">
            <div class="partner-profile-overview col-md-6">
                <div class="partner-profile-img"><img src="https://hostpresto.com/wp-content/themes/hostpresto/assets/img/logos/logo-white-blue.svg"></div>

                <div class="partner-proficiencies">
                    <h4>Service</h4>
                    <div class="flex">
                        <ul class="partner-proficiencies-list multi-col flex-fill">
                            <li>Web Hosting</li>
                            <li>Wordpress Hosting</li>
                            <li>Domain Names</li>
                            <li>Cloud Servers</li>
                            <li>Email Hosting</li>
                            <li>Windows Hosting</li>
                        </ul>

                        <ul class="partner-proficiencies-list multi-col flex-fill">
                            <li>FileMaker Hosting</li>
                            <li>Plesk Hosting</li>
                            <li>ASP Hosting</li>
                            <li>Node.js Hosting</li>
                            <li>Serif WebPlus Hostin</li>
                            <li>Cloud Servers</li>
                            
                        </ul>
                    </div>
                </div>
                
                


                <div class="partner-social">
                    <h4>Elsewhere</h4>

                    <ul class="partner-social-list">
                        <li><a href="https://github.com/hostpresto"><img src="/assets/svg/icon-github.svg"></a></li>
                        <li><a href="https://twitter.com/hostpresto"><img src="/assets/svg/icon-twitter.svg"></a></li>
                      
                    </ul>
                </div>
            </div>

            <div class="partner-profile-bio col-md-6">
                <h2>About hostpresto</h2>
               
                <p>
                

Leading provider of UK web hosting services. Shared hosting, VPS, cloud servers, reseller hosting & more!
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
