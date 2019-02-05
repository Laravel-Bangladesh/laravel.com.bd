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
                        <img src="/assets/svg/hostpresto-logo-white.svg">
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
                        
                    </a>
                </div>

            </div>
        </div>
    </section>
@endsection
