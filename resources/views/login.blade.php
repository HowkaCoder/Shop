@extends('layout.app')

@section('header')
<ul class="nav navbar-nav collapse navbar-collapse">
<li><a href="{{route('index') }}" >Home</a></li>
<li class="dropdown"><a href="#" class="active">Shop<i class="fa fa-angle-down"></i></a>
<ul role="menu" class="sub-menu">
    <li><a href="{{route('shop')}}" >Products</a></li>
    <li><a href="{{ route('product-details') }}">Product Details</a></li> 
    <li><a href="{{ route('checkout') }}">Checkout</a></li> 
    <li><a href="{{ route('cart') }}" >Cart</a></li> 
    <li><a href="{{ route('login') }}"  class="active">Login</a></li> 
</ul>
</li> 
<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
<ul role="menu" class="sub-menu">
    <li><a href="{{ route('blog') }}">Blog List</a></li>
    <li><a href="{{ route('blog-single') }}">Blog Single</a></li>
</ul>
</li> 
<li><a href="{{ route('404') }}">404</a></li>
<li><a href="{{ route('contact-us') }}">Contact</a></li>
</ul>
@endsection


@section('content_1')
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="#">
							<input type="text" placeholder="Name" />
							<input type="email" placeholder="Email Address" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="#">
							<input type="text" placeholder="Name"/>
							<input type="email" placeholder="Email Address"/>
							<input type="password" placeholder="Password"/>
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
	
@endsection