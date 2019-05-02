<ul class="top-menu">
	<li class="top-menu__trigger hidden-lg hidden-md">
		<a href="index.html"><i class="zmdi zmdi-search"></i></a>
	</li>

	<li class="top-menu__apps dropdown hidden-xs hidden-sm">
		<a data-toggle="dropdown" href="index.html">
			<i class="zmdi zmdi-apps"></i>
		</a>
		<ul class="dropdown-menu pull-right">
			<li>
				<a href="index.html">
					<i class="zmdi zmdi-calendar"></i>
					<small>Calendar</small>
				</a>
			</li>

			<li>
				<a href="index.html">
					<i class="zmdi zmdi-file-text"></i>
					<small>Files</small>
				</a>
			</li>
			<li>
				<a href="index.html">
					<i class="zmdi zmdi-email"></i>
					<small>Mail</small>
				</a>
			</li>
			<li>
				<a href="index.html">
					<i class="zmdi zmdi-trending-up"></i>
					<small>Analytics</small>
				</a>
			</li>
			<li>
				<a href="index.html">
					<i class="zmdi zmdi-view-headline"></i>
					<small>News</small>
				</a>
			</li>
			<li>
				<a href="index.html">
					<i class="zmdi zmdi-image"></i>
					<small>Gallery</small>
				</a>
			</li>
		</ul>
	</li>
	<li class="dropdown hidden-xs">
		<a data-toggle="dropdown" href="index.html"><i class="zmdi zmdi-more-vert"></i></a>
		<ul class="dropdown-menu dropdown-menu--icon pull-right">
			<li class="hidden-xs">
				<a data-mae-action="fullscreen" href="index.html"><i class="zmdi zmdi-fullscreen"></i> Toggle Fullscreen</a>
			</li>
			<li>
				<a data-mae-action="clear-localstorage" href="index.html"><i class="zmdi zmdi-delete"></i> Clear Local Storage</a>
			</li>
			<li>
				<a href="index.html"><i class="zmdi zmdi-face"></i> Privacy Settings</a>
			</li>
			<li>
				<a href="index.html"><i class="zmdi zmdi-settings"></i> Other Settings</a>
			</li>
		</ul>
	</li>
	<li class="top-menu__alerts" data-mae-action="block-open" data-mae-target="#notifications" data-toggle="tab" data-target="#notifications__messages">
		<a href="index.html"><i class="zmdi zmdi-notifications"></i></a>
	</li>
	<li class="top-menu__profile dropdown">
		<a data-toggle="dropdown" href="index.html">
			<img src="demo/img/profile-pics/1.jpg" alt="">
		</a>

		<ul class="dropdown-menu pull-right dropdown-menu--icon">
			<li>
				<a href="profile-about.html"><i class="zmdi zmdi-account"></i> View Profile</a>
			</li>
			<li>
				<a href="index.html"><i class="zmdi zmdi-input-antenna"></i> Privacy Settings</a>
			</li>
			<li>
				<a href="index.html"><i class="zmdi zmdi-settings"></i> Settings</a>
			</li>
			<li>
				<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
					<i class="zmdi zmdi-time-restore"></i> {{ __('Logout') }}</a>

					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
					</form>	

				</a>

				

			</li>
		</ul>
	</li>
</ul>