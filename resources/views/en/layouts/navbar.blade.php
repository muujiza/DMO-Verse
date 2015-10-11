<nav class="uk-navbar">
	<a href="/" class="uk-navbar-brand">DMO Universe</a>


	<ul class="uk-navbar-nav uk-navbar-flip uk-margin-right"> 
		@if(Auth::guest())
			<li><a href="{{ route('register') }}">
				<i class="uk-icon-user-plus uk-margin-small-right"></i> Register</a>
			</li>
			<li><a href="{{ route('login') }}">
				<i class="uk-icon-user-plus uk-margin-small-right"></i> Login</a>
			</li>
			
		@else
			<li><a href="" data-uk-tooltip="{pos:'bottom-right'}" title="Add">
					<i class="uk-icon-plus-square-o uk-icon-small"></i>
				</a>
			</li>
			<li><a href="" data-uk-tooltip="{pos:'bottom-right'}" title="Notifications">
					<i class="uk-icon-bell-o uk-icon-small"></i>
				</a>
			</li>
			<li><a href="" data-uk-tooltip="{pos:'bottom-right'}" title="Messages">
					<i class="uk-icon-envelope-o uk-icon-small"></i>
				</a>
			</li>
			<li class="uk-parent" data-uk-dropdown="{mode:'click'}">
				<a data-uk-tooltip="{pos:'bottom-right'}" title="Profile and settings">
				<img src="{{ Auth::user()->avatar }}" class="uk-border-rounded" 
					width="30px" height="30px" 
				>
				</a>
				<div class="uk-dropdown uk-dropdown-navbar uk-dropdown-flip">
					<ul class="uk-nav uk-nav-dropdown uk-panel">
						<li class="uk-nav-header">{{ Auth::user()->username }}</li>
						<li><a href="#">Profile</a></li>
                        <li class="uk-nav-divider"></li>
                        <li><a href="{{ route('logout') }}">Logout</a></li>
					</ul>
				</div>
			</li>
		@endif
	</ul>
</nav>
