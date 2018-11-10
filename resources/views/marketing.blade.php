@extends('app')

@section('body-class', 'home')

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
            <h1>সুন্দর কোড পছন্দ করেন? আমরাও করি </h1>
            <p> ওয়েব শিল্পীদের জন্য পিএইচপি ফ্রেমওয়ার্ক</p>
        </div>

        @include('partials/browser')

        <div class="macbook">
<pre class="line-numbers"><code class="language-php">
&lt;?php


class Idea extends Eloquent
{

    /**
     * Dreaming of something more?
     *
     * @with Laravel
     */
    public function create()
    {
        // Have a fresh start...
    }

}</code></pre>
            {!! svg('macbook') !!}
        </div>

        <div class="callout rule">
            <span class="text">দেখুন নতুন কি আছে!</span>
        </div>

        <div class="callouts">
            <a href="/docs/horizon" class="callout minimal third">
                <div class="callout-head">
                    <div class="callout-title">Laravel Horizon</div>
                    <div class="callout-icon">{!! svg('logo-horizon')!!}</div>
                </div>
                <p>Laravel Horizon provides a beautiful dashboard and code-driven configuration for your Redis queues.</p>
            </a>
            <a href="/docs/dusk" class="callout minimal third">
                <div class="callout-head">
                    <div class="callout-title">Laravel Dusk</div>
                    <div class="callout-icon">{!! svg('logo-dusk')!!}</div>
                </div>
                <p>Laravel Dusk provides an expressive, easy-to-use browser automation and testing API. You'll love it.</p>
            </a>
            <a href="/docs/broadcasting" class="callout minimal third">
                <div class="callout-head">
                    <div class="callout-title">Laravel Echo</div>
                    <div class="callout-icon">{!! svg('logo-echo')!!}</div>
                </div>
                <p>Event broadcasting, evolved. Bring the power of WebSockets to your application without the complexity.</p>
            </a>
        </div>
    </div>
</section>

{{-- <section class="panel laracon standout" id="laracon">
    <object type="image/svg+xml" data="/assets/img/laracon-16.svg" width="350"></object>
    <h2>This year Laracon goes <strong>bigger than ever</strong>. Early Bird tickets available for a limited time.</h2>
    <a href="http://laracon.us" class="btn"><em>Laracon US</em>Louisville, Kentucky</a>
    <a href="http://laracon.eu" class="btn"><em>Laracon EU</em>Amsterdam, Netherlands</a>
</section> --}}

<section class="panel features dark" id="features">
    <h1>দ্রুততা?</h1>
    <p class="intro">মার্জিত অ্যাপ্লিকেশন টানা গতিতে বিতরণ.</p>
        <div class="blocks stacked">
            <div class="block odd">
                <div class="text">
                    <h2>Expressive, beautiful syntax.</h2>
                    <p>Value elegance, simplicity, and readability? You’ll fit right in. Laravel is designed for people just like you. If you need help getting started, check out <a href="https://laracasts.com">Laracasts</a> and our <a href="/docs">great documentation</a>.</p>
                </div>
                <div class="media">

                    <div class='browser-window'>
                        <div class='top-bar'>
                            <div class='circles'>
                                <div class="circle circle-red"></div>
                                <div class="circle circle-yellow"></div>
                                <div class="circle circle-green"></div>
                            </div>
                        </div>
                        <div class='window-content'>
                            <pre class="line-numbers"><code class="language-php">
class Purchase implements ShouldQueue
{

    /**
     * Purchase a new podcast.
     */
    public function handle(Repository $repo)
    {
        foreach ($this->purchases as $purchase)
        {
            //
        }
    }
</code></pre>
                        </div>
                    </div>

                </div>
            </div><!-- /.block -->
            <div class="block even">
                <div class="text">
                    <h2>Tailored for your team.</h2>
                    <p>Whether you're a solo developer or a 20 person team, Laravel is a breath of fresh air. Keep everyone in sync using Laravel's database agnostic <a href="/docs/migrations">migrations</a> and <a href="/docs/migrations">schema builder</a>.</p>
                </div>
                <div class="media">
                    <div class="terminal-window">
                        <div class='top-bar'></div>
                        <div class='window-content'>
                            <div class="dark-code">
                            <pre><code class="language-bash">
~/Apps $ php artisan make:migration create_users_table
Migration created successfully!

~/Apps $ php artisan migrate --seed
Migrated: 2015_01_12_000000_create_users_table
Migrated: 2015_01_12_100000_create_password_resets_table
Migrated: 2015_01_13_162500_create_projects_table
Migrated: 2015_01_13_162508_create_servers_table
</code></pre></div>
                        </div>
                    </div>
                </div>
            </div><!-- /.block -->
            <div class="block odd">
                <div class="text">
                    <h2>Modern toolkit. Pinch of magic.</h2>
                    <p>An <a href="/docs/eloquent">amazing ORM</a>, painless <a href="/docs/routing">routing</a>, powerful <a href="/docs/queues">queue library</a>, and <a href="/docs/authentication">simple authentication</a> give you the tools you need for modern, maintainable PHP. We sweat the small stuff to help you deliver amazing applications.
                </div>
                <div class="media">

                    <div class='browser-window'>
                        <div class='top-bar'>
                            <div class='circles'>
                                <div class="circle circle-red"></div>
                                <div class="circle circle-yellow"></div>
                                <div class="circle circle-green"></div>
                            </div>
                        </div>
                        <div class='window-content'>
                            <pre class="line-numbers"><code class="language-php">
Route::resource('photos', 'PhotoController');

/**
 * Retrieve A User...
 */
Route::get('/user/{user}', function(App\User $user)
{
    return $user;
})
</code></pre>
                    </div>
                </div>
            </div><!-- /.block -->
        </div>
    </section>

    <section class="panel ecosystem light" id="ecosystem">
        <h1>Laravel ইকোসিস্টেম</h1>
        <p class="intro">বৈপ্লবিক, যেভাবে আপনি ওয়েব নির্মাণ.</p>

        <div class="container">
            <a href="https://forge.laravel.com" class="callout full forge">
                <div class="content">
                    {!! svg('forge') !!}
                    <p>Instant PHP Platforms On Linode, DigitalOcean, and more. Push to deploy, PHP 7.2, HHVM, queues, and everything you need to launch and deploy amazing Laravel applications.</p>
                    <p>Launch your application in minutes!</p>
                </div>
                <img src="https://forge.laravel.com/images/ui-preview.png" alt="Forge UI Preview" height="350" />
            </a>
            <div class="callouts">
                <a class="third callout pop" href="/docs/homestead">
                    <div class="callout-head">
                        <div class="callout-title">Homestead</div>
                        <div class="callout-icon">{!! svg('h') !!}</div>
                    </div>
                    <div class="callout-body">
                        <p>The official Laravel development environment. Powered by Vagrant, Homestead gets your entire team on the same page with the latest PHP, MySQL, Postgres, Redis, and more.</p>
                    </div>
                </a>
                <a class="third callout pop teal" href="https://laracasts.com">
                    <div class="callout-head">
                        <div class="callout-title">Laracasts</div>
                        <div class="callout-icon">{!! svg('play') !!}</div>
                    </div>
                    <div class="callout-body">
                        <p>Hundreds (yes, hundreds) of Laravel and PHP video tutorials with new videos added every week. Skim the basics or start your journey to Laravel mastery. All for the price of lunch.</p>
                    </div>
                </a>
                <a class="third callout pop" href="/docs/billing">
                    <div class="callout-head">
                        <div class="callout-title">Laravel Cashier</div>
                        <div class="callout-icon">{!! svg('cashier') !!}</div>
                    </div>
                    <div class="callout-body">
                        <p>Make subscription billing painless with built-in Stripe and Braintree integrations. Coupons, swapping subscriptions, cancellations, and even PDF invoices are ready out of the box.</p>
                    </div>
                </a>
            </div>
            <div class="callout rule">
                <span class="text">এবং আরো অনেক কিছু!</span>
            </div>
            <div class="packages">
                <div class="third">
                    <div class="package">
                        <div class="icon">{!! svg('package') !!}</div>
                        <div class="content">
                            <a href="/docs/valet" class="package-title">Valet</a>
                            <p>A Laravel development environment for Mac minimalists. No Vagrant, no Apache, no fuss.</p>
                        </div>
                    </div>

                </div>
                <div class="third">
                    <div class="package">
                        <div class="icon">{!! svg('package') !!}</div>
                        <div class="content">
                            <a href="/docs/mix" class="package-title">Mix</a>
                            <!-- <p>If you've ever been frustrated with Gulp and asset compilation, Elixir is for you.</p> -->
                            <p>Laravel Mix makes front-end a breeze. Start using SASS and Webpack in minutes.</p>
                        </div>
                    </div>
                </div>
                <div class="third">
                    <div class="package">
                        <div class="icon">{!! svg('package') !!}</div>
                        <div class="content">
                            @if(rand(0, 1))
                                <a href="https://cachethq.io" class="package-title">Cachet</a>
                                <p>Cachet is the best way to inform customers of downtime. This is your status page.</p>
                            @else
                                <a href="https://styleci.io" class="package-title">StyleCI</a>
                                <p>StyleCI is the PHP coding style continuous integration service for Laravel.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
