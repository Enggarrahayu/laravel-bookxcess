@extends('layouts.masterpub')
@section('title','Accept Pay')
@section('content')
<div class="page">
						
						<table class="cart">
							<thead>
								<tr>
									<th class="product-price"></th>
									<th class="product-price">Order Date</th>
									<th class="product-price">Customer Name</th>
									<th class="product-name">Book Title</th>
									<th class="product-total">Total</th>
									<th class="action" style="text-align: center;">Accept Payment</th>
								</tr>
							</thead>
							<tbody>
								@foreach($accept as $acc)
								<tr>
										<td class="product-name">
										<td class="product-price">{{$acc->order_date}}</td>
										<td class="product-price">{{$user->name}}</td>
										<td class="product-price">{{$order_details->ebook->ebook_title}}</td>	
										<td class="product-total">{{$acc->total_price}}</td>
										<td class="action" style="text-align: center; font-size: 20px;">
											<a href="{{ url('fixpayment') }}" onclick="return confirm('Are you sure want to accept payment ?');"><i class="fa fa-check"></i></a></td>
								</tr>
								@endforeach
							</tbody>
						</table> <!-- .cart -->
						
</div>
@endsection