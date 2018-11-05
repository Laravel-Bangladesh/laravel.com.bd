<li class="nav-docs"><a href="/docs">ডকুমেন্টেশন</a></li>
@if(!empty($page))
<li class="nav-docs"><a href="https://github.com/laravel-bangladesh/docs/blob/{{ ucfirst($currentVersion) }}/{{ strtolower(ucfirst($page)) }}.md/" target="_blank">সম্পাদন</a></li>
@endif

<li class="nav-laracasts"><a href="/contributors" target="_blank"> কান্ট্রিবিউটর্স</a></li>

<li class="nav-laracasts"><a href="//forum.laravel.com.bd" target="_blank">ফোরাম</a></li>

<li class="nav-laracasts"><a href="https://laracasts.com" target="_blank">লারকাস্টস</a></li>
<li class="nav-laravel-news"><a href="https://laravel-news.com" target="_blank">নিউস</a></li>
{{--<li class="nav-partners"><a href="/partners">Partners</a></li>--}}
<li class="nav-forge"><a href="https://forge.laravel.com">Forge</a></li>
<li class="dropdown community-dropdown">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Ecosystem <span class="caret"></span></a>
	<ul class="dropdown-menu" role="menu">

		<li><a href="https://envoyer.io">Envoyer</a></li>
		<li><a href="https://horizon.laravel.com">Horizon</a></li>
		<li><a href="https://lumen.laravel.com">Lumen</a></li>
		<li><a href="https://spark.laravel.com">Spark</a></li>

		<li class="divider"></li>

		<li><a href="https://laravel.com/certification">Certification</a></li>
		<li><a href="https://laracasts.com/discuss">Forums</a></li>
		<li><a href="https://github.com/laravel/laravel">GitHub</a></li>
		<li><a href="https://larajobs.com/?partner=5#/">Jobs</a></li>
		<li><a href="http://www.laravelpodcast.com/">Podcast</a></li>
		<li><a href="https://larachat.co">Slack</a></li>
		<li><a href="https://twitter.com/laravelphp">Twitter</a></li>
	</ul>
</li>
