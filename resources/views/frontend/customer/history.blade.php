@extends('layouts.master')
@section('content')
<div class="page">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('home') }}" class="button"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Order History</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3><i class="fa fa-history"></i> Order History</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Total Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($orders as $order)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $order->order_date }}</td>
                                <td>
                                    @if($order->status == 1)
                                    Ordered but not been paid yet
                                    @else
                                    Payment Completed
                                    @endif
                                </td>
                                <td>Rp. {{ number_format($order->total_price+$order->code) }}</td>
                                <td>
                                    <a href="{{ url('history') }}/{{ $order->id }}" class="button"><i class="fa fa-info"></i> Detail</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection