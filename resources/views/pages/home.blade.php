@extends('layout.index')
@section('content')
<section class="slider-area">
	<!-- slider start -->
	<div class="slider">
		<div id="mainSlider" class="nivoSlider nevo-slider">
			@foreach($slide as $value)
			<img src="upload/slide/{{$value->image}}" alt="main slider" title="#htmlcaption{{$value->id}}"/>
			@endforeach
		</div>
		@foreach($slide as $value)
		<div id="htmlcaption{{$value->id}}" class="nivo-html-caption slider-caption">
			<div class="slider-progress"></div>
			<div class="slider-text">
				<div class="middle-text">
					<div class="width-cap">
						<h3 class="slider-tiile-top top-ani-1"><span>Buy Now</span></h3>
						<h2 class="slider-tiile-middle middle-ani-1"><span>{{$value->name}}</span></h2>
						<div class="slider-readmore">
							<a href="#">explorer</a>
						</div>
						<div class="slider-shopping">
							<a href="#">Shopping Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endforeach 
	</div>
	<!-- slider end -->
</section>
<!-- slider-area end -->
<!--Start Lateast Collection bottom area -->
<div class="banner_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="single_image">
					<a href="#"><img class="banner_home1" src="pages_assets/img/collection-image/banner-11.jpg" alt="" /></a>
					<div class="banner_text">
						<h3><a href="#">see lookbook</a></h3>
					</div>
					<div class="shop_collection">
						<a href="#">Shop the Collection <span><img src="pages_assets/img/arrow/bkg_newsletter.png" alt="" /></span></a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="single_image">
					<a href="#"><img class="banner_home1" src="pages_assets/img/collection-image/banner-12.jpg" alt="" /></a>
					<div class="banner_text">
						<h3><a href="#">Shop accessories</a></h3>
					</div>
					<div class="shop_collection">
						<a href="#">Shop the Collection <span><img src="pages_assets/img/arrow/bkg_newsletter.png" alt="" /></span></a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="single_image">
					<a href="#"><img class="banner_home1" src="pages_assets/img/collection-image/banner-13.jpg" alt="" /></a>
					<div class="banner_text">
						<h3><a href="#">Sale up to 70% off</a></h3>
					</div>
					<div class="shop_collection">
						<a href="#">Shop the Collection <span><img src="pages_assets/img/arrow/bkg_newsletter.png" alt="" /></span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--End Lateast Collection bottom area -->
<!--Start Feature area -->
<div class="feature_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="feature_text">
					<h4>Featured</h4>
				</div>
			</div>
		</div>
		<div class="row">
			@foreach($product as $items)
			<div class="product_bottom_area">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="product_list">
						<div class="single_product">
							<a href="product.html" target="main"><img src="upload/product/@foreach($items->image as $img)
								{{$img->image}}
								@break
								@endforeach" alt=""/></a>
							<div class="product_details">
								<h2>{{$items->name}}</h2>
								<p><span class="regular_price">{{$items->price+1}}đ</span> <span class="popular_price">{{$items->price}}đ</span></p>
							</div>
							<div class="product_detail">
								<div class="star_icon">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
								</div>
								<div class="product_button">
									<div class="cart_details">
										<a href="#" target="blank">Add to cart</a>
									</div>
									<div class="cart_details">
										<a href="#" target="expand"><i class="fa fa-expand"></i></a>
									</div>
									<div class="cart_details">
										<a href="#" target="heart"><i class="fa fa-heart-o"></i></a>
									</div>
								</div>
							</div>
							<div class="sale_product">
								<h5>Sale</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php $index++; ?>
    		@if($index % 4 == 0) </div><div class="row">@endif
			@endforeach
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="more_feature_area">
					<h2><a href="#">Load More...</a></h2>
				</div>
			</div>
		</div>
	</div>
</div>
<!--End Feature area -->
<!--Start Testimonila area -->
<div class="carousel_testimonial_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="testimonial_list">
					<div class="testimonial_single">
						<a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</a>
						<p>alexmax</p>
						<div class="author">
							<img src="pages_assets/img/author/avatar.png" alt="" />
						</div>
					</div>
					<div class="testimonial_single">
						<a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</a>
						<p>alexmax</p>
						<div class="author">
							<img src="pages_assets/img/author/avatar.png" alt="" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--End Testimonila area -->
<!--Start Blog area -->
<div class="blog_post_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="feature_text">
					<h4>Blog Post</h4>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="carousel_blog_list">
				<div class="col-lg-3">
					<div class="single_blog">
						<a href="#"><img src="pages_assets/img/blog-post-image/cl-1.jpg" alt="" /></a>
						<div class="blog_details">
							<a href="#">William Eto</a>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam...</p>
							<h3>18 Aug 2015</h3>
							<a href="#">
								<div class="read_more">
									<i class="fa fa-angle-right"></i>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="single_blog">
						<a href="#"><img src="pages_assets/img/blog-post-image/cl-2.jpg" alt="" /></a>
						<div class="blog_details">
							<a href="#">William Eto</a>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam...</p>
							<h3>18 Aug 2015</h3>
							<a href="#">
								<div class="read_more">
									<i class="fa fa-angle-right"></i>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="single_blog">
						<a href="#"><img src="pages_assets/img/blog-post-image/cl-3.jpg" alt="" /></a>
						<div class="blog_details">
							<a href="#">William Eto</a>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam...</p>
							<h3>18 Aug 2015</h3>
							<a href="#">
								<div class="read_more">
									<i class="fa fa-angle-right"></i>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="single_blog">
						<a href="#"><img src="pages_assets/img/blog-post-image/cl-4.jpg" alt="" /></a>
						<div class="blog_details">
							<a href="#">William Eto</a>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam...</p>
							<h3>18 Aug 2015</h3>
							<a href="#">
								<div class="read_more">
									<i class="fa fa-angle-right"></i>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="single_blog">
						<a href="#"><img src="pages_assets/img/blog-post-image/cl-3.jpg" alt="" /></a>
						<div class="blog_details">
							<a href="#">William Eto</a>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam...</p>
							<h3>18 Aug 2015</h3>
							<a href="#">
								<div class="read_more">
									<i class="fa fa-angle-right"></i>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="single_blog">
						<a href="#"><img src="pages_assets/img/blog-post-image/cl-1.jpg" alt="" /></a>
						<div class="blog_details">
							<a href="#">William Eto</a>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam...</p>
							<h3>18 Aug 2015</h3>
							<a href="#">
								<div class="read_more">
									<i class="fa fa-angle-right"></i>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--End blog area -->
<!--Start Contact info area -->
<div class="service_info_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="service_list">
					<h2><i class="fa fa-envelope-o"></i> gnurt10@gmail.com</h2>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="service_list">
					<h3><i class="fa fa-phone"></i>(+84)987 896 241</h3>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="Social_list">
					<h2>Connect us: </h2>
					<div class="social_icon my-class uk-scrollspy-init-inview uk-invisible">
						<a data-toggle="tooltip" data-placement="top" title="" data-original-title="Like 6k" class="red-tooltip" href="#"><i class="fa fa-facebook"></i></a>
						<a data-toggle="tooltip" data-placement="top" title="" data-original-title="Followers 61k" class="red-tooltip" href="#"><i class="fa fa-twitter"></i></a>
						<a data-toggle="tooltip" data-placement="top" title="" data-original-title="Followers 16k" class="red-tooltip" href="#"><i class="fa fa-linkedin"></i></a>
						<a data-toggle="tooltip" data-placement="top" title="" data-original-title="Followers 10k" class="red-tooltip" href="#"><i class="fa fa-pinterest"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection