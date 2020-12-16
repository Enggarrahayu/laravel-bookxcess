@extends('layouts.master')
@section('title','Book Details')
@section('content')
					<div class="page">
						
						<div class="entry-content">
							<div class="row">
								<div class="col-sm-6 col-md-4">
									<div class="product-images">
										<figure class="large-image">
											<a href="dummy/image-1.jpg"><img src="{{ url('storage') }}/{{ $ebook->ebook_image }}" alt="Game 1" alt=""></a>
										</figure>
										
									</div>
								</div>
								<div class="col-sm-6 col-md-8">
									<h2 class="entry-title">{{ $ebook->ebook_title}}</h2>
									<small class="price">Rp. {{ number_format($ebook->ebook_price)}}</small>
									<small class="price">Downloadable: {{$ebook->ebook_downloadabe}}</small>

									<p>{{ $ebook->short_desc}} </p>
									

									<div class="addtocart-bar" >
										<form method="post" action="{{ url('order') }}/{{ $ebook->ebook_ID }}">
                                    	@csrf
											<label for="#">Quantity</label>
											<select name="qty">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
											</select>
											<input type="submit" value="Add to cart">
										</form>

										<div class="social-links square">
											<strong>Share</strong>
											<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
											<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
											<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
											<a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					

						
					</div>
@endsection