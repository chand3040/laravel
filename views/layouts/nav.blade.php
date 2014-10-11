<nav>
<ul>
	<li> <a href="{{ URL::route('home') }}">home</a> </li>
	@if(Auth::check())
		<li> <a href="{{ URL::route('account-sign-out') }}">Sign out</a> </li>
	@else
		<li> <a href="{{ URL::route('account-sign-in') }}">Sign in</a> </li>
		<li> <a href="{{ URL::route('account-create') }}">Sign up</a> </li>
	@endif

	
</ul>
</nav>