@extends('layout.app')

@section('header')
<ul class="nav navbar-nav collapse navbar-collapse">
<li><a href="{{route('index') }}" >Home</a></li>
<li class="dropdown"><a href="#" >Shop<i class="fa fa-angle-down"></i></a>
<ul role="menu" class="sub-menu">
    <li><a href="{{route('shop')}}"  >Products</a></li>
    <li><a href="{{ route('product-details') }}">Product Details</a></li> 
    <li><a href="{{ route('checkout') }}">Checkout</a></li> 
    <li><a href="{{ route('cart') }}">Cart</a></li> 
    <li><a href="{{ route('login') }}">Login</a></li> 
</ul>
</li> 
<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
<ul role="menu" class="sub-menu">
    <li><a href="{{ route('blog') }}">Blog List</a></li>
    <li><a href="{{ route('blog-single') }}">Blog Single</a></li>
</ul>
</li> 
<li><a href="{{ route('404') }}" class="active">404</a></li>
<li><a href="{{ route('contact-us') }}">Contact</a></li>
</ul>
@endsection

@section('content_1')
<div class="container text-center">
		<div class="logo-404">
			<a href="index.html"><img src="images/home/logo.png" alt="" /></a>
		</div>
		<div class="content-404">
			<img src="images/404/404.png" class="img-responsive" alt="" />
			<h1><b>OPPS!</b> We Couldn’t Find this Page</h1>
			<p>Uh... So it looks like you brock something. The page you are looking for has up and Vanished.</p>
			<h2><a href="index.html">Bring me back Home</a></h2>
		</div>
	</div>

@endsection