<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title> অবদানকারীর -  লারাভেল - ওয়েব ডেভেলপারদের জন্য পিএইচপি ফ্রেমওয়ার্ক</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="author" content="Jubayed Hossain">
    <meta name="description" content="লারাভেল - ওয়েব ডেভেলপারদের জন্য পিএইচপি ফ্রেমওয়ার্ক">
    <meta name="keywords" content="laravel, php, framework, web, artisans, jubayed, bangla, bd, লারাভেল, পিএইচপি, ফ্রেমওয়ার্ক">
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
</head>
<body class="@yield('body-class', 'docs') language-php">

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
            <a href="http://jackmcdade.com">
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

    <script>

        $(document).ready(function(){


         var user= [];
         
         
         user = ["9925505", "7860229"];
         
// and remember the jqxhr object for this request
$.getJSON( "https://api.github.com/repos/Laravel-Bangladesh/laravel.com.bd/pulls?state=all", function() {
  console.log( "get all pulls" );
})
.done(function(data) {
    $.each( data, function( key, value ) {

     var a = user.indexOf( ""+ value.user.id + "");

     if (a == -1 ) {
         user.push("" + value.user.id + "" );
                //console.log(value.user);
            }

        });

    build_user(user);

})

.fail(function() {
    console.log( "error pulls" );
})




            // Assign handlers immediately after making the request,
// and remember the jqxhr object for this request
$.getJSON( "https://api.github.com/repos/Laravel-Bangladesh/docs/pulls?state=all", function() {
  console.log( "get all pulls" );
})
.done(function(data) {
    $.each( data, function( key, value ) {

     var a = user.indexOf( ""+ value.user.id + "");

     if (a == -1 ) {
         user.push("" + value.user.id + "" );
                //console.log(value.user);
            }

        });

    build_user(user);

})

.fail(function() {
    console.log( "error pulls" );
})



function build_user(user){



    var name = "";
    var location = "&nbsp;&nbsp;";
    var blog = "#";

    $.each( user, function( key, value ) {

        $.getJSON( "https://api.github.com/user/"+ value +"", function() {
          console.log( "success" );
      })
        .done(function(data) {
          console.log(data);

  // ===========

  if(data.name == null )
    name = data.login;
else
    name = data.name;

if(data.location != null )
    location = data.location;

if(data.blog != null )
    blog = data.blog;
else
  blog = "#";


$html = ' <div class="profile-box"> <img src="'+ data.avatar_url +'" alt="'+ data.name +'"> <h3>'+ name +'</h3><h4>'+ location +'</h4><div class="btn-container"><a href="'+ data.html_url +'"  target="_blank" class="profile-btn" >Github</a><a href="'+ blog +'"  target="_blank" class="profile-btn"><i class="fa fa-globe" aria-hidden="true"></i>Website</a></div></div>';

$('#contributors_list').append($html);


       })

        .fail(function() {
            console.log( "error con-user-data" );
        })


    });
}

});

    </script>
</body>


</html>
