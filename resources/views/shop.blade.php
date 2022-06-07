@extends('layout.app')

@section('header')
<ul class="nav navbar-nav collapse navbar-collapse">
<li><a href="{{route('index') }}" >Home</a></li>
<li class="dropdown"><a href="#" class="active">Shop<i class="fa fa-angle-down"></i></a>
<ul role="menu" class="sub-menu">
    <li><a href="{{route('shop')}}" class="active" >Products</a></li>
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
<li><a href="{{ route('404') }}">404</a></li>
<li><a href="{{ route('contact-us') }}">Contact</a></li>
</ul>
@endsection

@section('content_1')
<section id="advertisement">
		<div class="container">
			<img src="images/shop/advertisement.jpg" alt="" />
		</div>
	</section>
	
@endsection

@section('content_2')
<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							
							
						@foreach($categories as $category)
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#{{$category->name}}">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											{{$category->name}}
										</a>
									</h4>
								</div>
								<div id="{{$category->name}}" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											@foreach($category->file as $brend)
											<li><a href="#">{{$brend->name}}</a></li>
											@endforeach
										</ul>
									</div>
								</div>
							</div>
						@endforeach
							
						</div><!--/category-productsr-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
								@foreach($brends as $brend)	
								<li><a href="#"> <span class="pull-right">(^_^)</span>{{ $brend->name  }} </a></li>
								@endforeach
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b>$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
						
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						@foreach($data as $value)
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="storage/images/{{ $value->img }}" alt="" />
											<h2>${{$value->price}}</h2>
											<p>{{ $value->dsb }}</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>${{ $value->price }}</h2>
												<p>{{ $value->dsb  }}</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
						</div>
						@endforeach
						<ul class="pagination">
							<li class="active"><a href="">1</a></li>
							<li><a href="">2</a></li>
							<li><a href="">3</a></li>
							<li><a href="">&raquo;</a></li>
						</ul>
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>
	
@endsection