@extends('layouts.master')
@section('title','Cart')
@section('content')
<div class="page">
						
						<table class="cart">
							<thead>
								<tr>
									<th class="product-name">Book Title</th>
									<th class="product-price">Price</th>
									<th class="product-qty">Quantity</th>
									<th class="product-total">Total</th>
									<th class="action"></th>
								</tr>
							</thead>
							<tbody>
								@foreach($order_details as $order_detail)
								<tr>
									<td class="product-name">
										<div class="product-thumbnail">
											<img style="width: 150px;"  src="data:image/png;base64,{{ chunk_split(base64_encode($order_detail->ebook->ebook_image)) }}" alt="">
										</div>
										<div class="product">
											<div class="inner-product">
										<div class="figure-images">
											<h3 class="product-title">{{ $order_detail->ebook->ebook_title}}</h3>
											<p>{{$order_detail->ebook->short_desc}}</p>
										</div>
											</div>
										</div>
									</td>
									<td class="product-price">{{$order_detail->total_price}}</td>
									<td class="product-qty">
										<select name="#">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
										</select>
									</td>
									<td class="product-total">{{$order_detail->total_price}}</td>
									<td class="action"><a href="#"><i class="fa fa-times"></i></a></td>
								</tr>
								@endforeach
							</tbody>
						</table> <!-- .cart -->

						<div class="cart-total">
							<?php 
								$total = \App\Models\OrderDetail::select(DB::raw('SUM(total_price)'))->groupBy('order_id')->first();
								
							?>
							<p class="total"><strong>Total</strong><span class="num">Rp. {{$total['SUM(total_price)']}}</span></p>
							<p>
								<a href="#" class="button muted">Continue Shopping</a>
								<a href="#" class="button">Finalize and pay</a>
							</p>
						</div> <!-- .cart-total -->
						
					</div>
@endsection