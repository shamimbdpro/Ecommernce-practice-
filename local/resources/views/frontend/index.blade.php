@extends('layouts.frontend')
@section('contents')



	<!-- start product Area -->
	<section class="owl-carousel active-product-area section_gap">
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Latest Products</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
								dolore
								magna aliqua.</p>
						</div>
					</div>
				</div>
				<div class="row">


				@foreach($products as $product)


					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="{{asset('local/uploads/products')}}/{{$product->img}}" alt="">
							<div class="product-details">
								<h6>{{$product->title}}</h6>
								<div class="price">
									<h6>${{$product->final_price}}</h6>
									<h6><s>${{$product->regular_price}}</s></h6>
								</div>

								<a href="{{route('single_product',$product->id)}}" class="btn btn-success ">Add to Cart</a>

							</div>
						</div>
					</div>

	            @endforeach




				</div>
			</div>
		</div>














@endsection
