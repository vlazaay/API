@extends('layouts.layout')


@section('content')
<div id="header-featured">
		<div id="banner-wrapper">
			<div id="banner" class="container">
				<h2>Blog about IT in Ukraine</h2>
				<p>Aute labore commodo ut sunt.Officia eiusmod ipsum minim consequat nisi aute sint reprehenderit deserunt.Eiusmod nostrud id anim do eu sint adipisicing magna amet id do sit.Esse sunt eiusmod id deserunt incididunt aute elit.</p>
				<a href="#" class="button">All posts</a> </div>
		</div>
</div>
<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
				<h2>Welcome to my blog</h2>
				<span class="byline">Ull enjoy my posts</span> </div>
			<p><img src="images/banner.jpg" alt="" class="image image-full" /> </p>

			@foreach($posts as $post)
			<h2 class=" mb-4">{{$post->title}}</h2>
			<p class=" mb-4">{{$post->body}}</p>
         <p class=" mb-4">{{$post->conclusion}}</p>
			@endforeach

		</div>



		<div id="sidebar">
			<ul class="style1">
				<li class="first">
					<h3>Amet sed volutpat mauris</h3>
					<p><a href="#">In posuere eleifend odio. Quisque semper augue mattis wisi. Pellentesque viverra vulputate enim. Aliquam erat volutpat.</a></p>
				</li>
				<li>
					<h3>Sagittis diam dolor sit amet</h3>
					<p><a href="#">In posuere eleifend odio. Quisque semper augue mattis wisi. Pellentesque viverra vulputate enim. Aliquam erat volutpat.</a></p>
				</li>
				<li>
					<h3>Maecenas ac quam risus</h3>
					<p><a href="#">In posuere eleifend odio. Quisque semper augue mattis wisi. Pellentesque viverra vulputate enim. Aliquam erat volutpat.</a></p>
				</li>
			</ul>
			<div id="stwo-col">
				<div class="sbox1">
					<h2>Etiam rhoncus</h2>
					<ul class="style2">
						<li><a href="#">Semper quis egetmi dolore</a></li>
						<li><a href="#">Quam turpis feugiat dolor</a></li>
						<li><a href="#">Amet ornare hendrerit lectus</a></li>
						<li><a href="#">Quam turpis feugiat dolor</a></li>
					</ul>
				</div>
				<div class="sbox2">
					<h2>Integer gravida</h2>
					<ul class="style2">
						<li><a href="#">Semper quis egetmi dolore</a></li>
						<li><a href="#">Quam turpis feugiat dolor</a></li>
						<li><a href="#">Consequat lorem phasellus</a></li>
						<li><a href="#">Amet turpis feugiat amet</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
