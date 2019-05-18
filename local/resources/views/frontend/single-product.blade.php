@extends('layouts.frontend')
@section('contents')


	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Product Details Page</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Shop<span class="lnr lnr-arrow-right"></span></a>
						<a href="single-product.html">product-details</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Single Product Area =================-->
	<div class="product_image_area">
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-6">
					<div class="s_Product_carousel">
						<div class="single-prd-item">
								<img class="img-fluid" src="{{asset('local/uploads/products')}}/{{$single_product->img}}" alt="">
						</div>

					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
						<h3>{{$single_product->title}}</h3>
						<h2>${{$single_product->final_price}}</h2>
						<ul class="list">
							<li><a class="active" href="#"><span>Category</span> :
								@if(!empty($single_product->category->name))
							{{$single_product->category->name}}
						   @endif

							</a></li>
							<li><a href="#"><span>Availibility</span> : In Stock</a></li>
						</ul>
						<p>{{$single_product->des}}</p>
					

             @include('frontend.template.cartbutton')





					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================End Single Product Area =================-->
<br />
<br />
<br />
<br />

	@endsection
