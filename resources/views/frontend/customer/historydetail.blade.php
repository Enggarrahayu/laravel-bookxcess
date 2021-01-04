@extends('layouts.master')
@section('content')
<div class="page">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('history') }}" class="button"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('history') }}">Order History</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Order Details</li>
                    <div class="card-body"> <br> <br>
                    <h3>Successfully Checkout</h3>
                    @if($order->status != 2)
                    <h3>Your Order has been successfully checkout. Now, you can transer on <strong>Bank BRI with Account Number : 32113-821312-123</strong> dengan nominal : <strong>Rp. {{ number_format($order->code+$order->total_price) }}</strong></h3>
                     @endif
                </div>
                </ol>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <h3><i class="fa fa-shopping-cart"></i> Detail Pemesanan</h3>
                    @if(!empty($order))
                    <p align="right">Tanggal Pesan : {{ $order->order_date }}</p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            
                                <th>No</th>
                                <th>Ebook Image</th>
                                <th>Ebook Title</th>
                                <th colspan="5" align="right">Price</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($order_details as $order_detail)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    <img style="width: 120px;"  src="{{ url('storage') }}/{{ $order_detail->ebook->ebook_image }}" alt="">
                                </td>
                                <td> <strong> {{ $order_detail->ebook->ebook_title }} </strong></td>
                                <td colspan="5" align="center">Rp. {{ $order_detail->ebook->ebook_price }}</td
                                
                            </tr>
                            @endforeach

                            <tr>
                                <td colspan="5" align="right"><strong>Total Price :</strong></td>
                                <td align="right"><strong>Rp. {{ $order->total_price }}</strong></td>
                                
                            </tr>
                            <tr>
                                <td colspan="5" align="right"><strong>Unique Code :</strong></td>
                                <td align="right"><strong>Rp. {{ $order->code }}</strong></td>
                                
                            </tr>
                             <tr>
                                <td colspan="5" align="right"><strong>Amount to be paid :</strong></td>
                                <td align="right"><strong>Rp. {{ $order->code+$order->total_price }}</strong></td>
                                
                            </tr>
                        </tbody>
                    </table>
                    @endif

                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection