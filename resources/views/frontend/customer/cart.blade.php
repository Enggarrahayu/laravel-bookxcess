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
											<img style="width: 150px;"  src="{{ url('storage') }}/{{ $order_detail->ebook->ebook_image }}" alt="">
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
										</select>
									</td>
									<td class="product-total">{{$order_detail->total_price}}</td>
									<
										<td class="action">
											<form action="{{ url('delete') }}/{{ $order_detail->id }}" method="post">
												@csrf
                                       			 {{ method_field('DELETE') }}
												<button  class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Anda yakin akan menghapus data ?');"> <i class="fa fa-trash"></i>
												</button>
											</form>
										</td>
									
								</tr>
								@endforeach
							</tbody>
						</table> <!-- .cart -->

						<div class="cart-total">
							@if(!empty($order))
								<p class="total"><strong>Total</strong><span class="num">Rp. {{$order->total_price}}</span></p>
							@endif
						
							
							<p>
								<a href="/customer" class="button muted">Continue Shopping</a>
								<a href="{{ url('confirmation') }}" class="button" onclick="return confirm('Anda yakin akan Check Out ?');" >Finalize and pay</a>
							</p>
						</div> <!-- .cart-total -->
						
					</div>
@endsection