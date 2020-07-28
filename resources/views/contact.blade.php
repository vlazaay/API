
<div id="wrapper">
@auth
	<h2>Hello, {{Auth::user()->name}}</h2>
	@else
	<h2>Hello</h2>
	@endauth
<br>
	Contact page

</div>
