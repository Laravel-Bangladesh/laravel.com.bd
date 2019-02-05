<li class="nav-docs"><a href="/docs">ডকুমেন্টেশন</a></li>
@if(!empty($page))
<li class="nav-docs"><a href="https://github.com/laravel-bangladesh/docs/blob/{{ ucfirst($currentVersion) }}/{{ strtolower(ucfirst($page)) }}.md/" target="_blank">সম্পাদন</a></li>
@endif
{{--<li class="nav-laracasts"><a href="/contributors" target="_blank"> কান্ট্রিবিউটর্স</a></li>--}}
{{--<li class="nav-laracasts"><a href="https://laracasts.com" target="_blank">লারকাস্টস</a></li>--}}
<li class="nav-laravel-news"><a href="https://laravel-news.com" target="_blank">নিউজ</a></li>
<li class="nav-partners"><a href="/partners">সহযোগী</a></li>
<li class="nav-forge"><a href="https://forge.laravel.com">ফর্জ</a></li>
<li class="dropdown community-dropdown">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ইকোসিস্টেম <span class="caret"></span></a>
	<ul class="dropdown-menu" role="menu">
		<li><a href="https://envoyer.io">ইনভয়ের</a></li>
		<li><a href="https://horizon.laravel.com">হরাইজন</a></li>
		<li><a href="https://lumen.laravel.com">লুমেন</a></li>
		<li><a href="https://spark.laravel.com">স্পার্ক</a></li>
		<li class="divider"></li>
		<li><a href="https://laravel.com/certification">সার্টিফিকেশন</a></li>
		<li><a href="//forum.laravel.com.bd">ফোরাম</a></li>
		<li><a href="https://github.com/laravel/laravel">গিটহাব</a></li>
		<li><a href="https://larajobs.com/?partner=5#/">জবস</a></li>
		<li><a href="http://www.laravelpodcast.com/">পডকাস্ট</a></li>
		<li><a href="https://larachat.co">স্ল্যাক</a></li>
		<li><a href="https://twitter.com/laravelphp">টুইটার</a></li>
	</ul>
</li>
