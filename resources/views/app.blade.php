<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ isset($title) ? $title . ' - ' : null }} লারাভেল ফ্রেমওয়ার্ক  -  ওয়েব শিল্পীদের জন্য পিএইচপি ফ্রেমওয়ার্ক</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="author" content="Jubayed Hossain">
    <meta name="description" content="লারাভেল পিএইচপি প্রোগ্রামিং ল্যাংগুয়েজের অত্যন্ত জনপ্রিয় একটি ওয়েব অ্যাপ্লিকেশন ফ্রেমওয়ার্ক। লারাভেল বাংলা(laravel bangla) ডকুমেন্টেশন laravel.com থেকে অনুবাদ করা। ডকুমেন্টেশন বিজ্ঞাপনহীন সম্পূর্ণ বিনামূল্যে। যা লারাভেল ফ্রেমওয়ার্ক বাংলা ভাষায় শিখতে সহায়তা করবে"> 
    <meta name="keywords" content="laravel, bangla, bd, laravel bangla, laravel bd, লারাভেল ফ্রেমওয়ার্ক, লারাভেল পিএইচপি, ফ্রেমওয়ার্ক, লারাভেল">
    <meta name="google-site-verification" content="0zGjqFVduurLPHXaZEJB_sCiK5STdxJ_NPR0wwmTc1o" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @if (isset($canonical))
    <link rel="canonical" href="{{ url($canonical) }}" />
    @endif
    <link href='https://fonts.googleapis.com/css?family=Miriam+Libre:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ elixir('assets/css/laravel.css') }}">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css">
    <link rel="stylesheet" type="text/css" href="https://cloud.typography.com/7737514/7707592/css/fonts.css" />
    <link rel="apple-touch-icon" href="/favicon.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
    <meta name="msvalidate.01" content="B3A90AFE2F6C367F46A431F27EAEC5CE" />
</head>
<body class="@yield('body-class', 'docs') language-php">
    <div class="laracon-banner">
        <!-- <img src="/assets/svg/laracon-logo.svg" alt=""> -->
        লারাভেল বাংলা ডকুমেন্টেশন বিজ্ঞাপনহীন সম্পূর্ণ বিনামূল্যে। সাইটি বাংলায় অনুবাদ করে অবদান রাখুন।
        <a href="https://github.com/laravel-bangladesh/docs" target="_blank"> অনুবাদ করুন! </a>
    </div>
    <span class="overlay"></span>

    <nav class="main">
        <a href="/" class="brand nav-block">
            {!! svg('laravel-logo') !!}
            <span>লারাভেল</span>
        </a>

        <div class="search nav-block invisible">
            {!! svg('search') !!}
            <input placeholder="অনুসন্ধান" type="text" v-model="search" id="search-input" v-on:blur="reset" />
        </div>

        <ul class="main-nav" v-if="! search">
            @include('partials.main-nav')
        </ul>

        @if (Request::is('docs*') && isset($currentVersion))
            @include('partials.switcher')
        @endif

        <div class="responsive-sidebar-nav">
            <a href="#" class="toggle-slide menu-link btn">&#9776;</a>
        </div>
    </nav>

    @yield('content')

    <footer class="main">
        <ul>
            @include('partials.main-nav')
        </ul>
 <p>লারভেল Taylor Otwell এর ট্রেডমার্ক। কপিরাইট &copy; Taylor Otwell.</p>
        <p class="less-significant">
            <a href="http://jackmcdade.com" terget="_blank">
                Designed by<br>
                {!! svg('jack-mcdade') !!}
            </a>
        </p>
    </footer>

    <script>
        var algolia_app_id      = '{{ Config::get('algolia.connections.main.id', false) }}';
        var algolia_search_key  = '{{ Config::get('algolia.connections.main.search_key', false) }}';
        var version             = '{{ isset($currentVersion) ? $currentVersion : DEFAULT_VERSION }}';
    </script>

    @include('partials.algolia_template')

    <script src="{{ elixir('assets/js/laravel.js') }}"></script>
    <script src="/assets/js/viewport-units-buggyfill.js"></script>
    <script>window.viewportUnitsBuggyfill.init();</script>
   <script>
        var _gaq=[['_setAccount','UA-116029141-1'],['_trackPageview']];
        (function(d,t){
            var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)
        }(document,'script'));
    </script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-7535539102225595",
    enable_page_level_ads: true
  });
</script>
</body>
</html>
