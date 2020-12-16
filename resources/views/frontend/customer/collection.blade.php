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
                    <h3><i class="fa fa-history"></i> Book Collection</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Book Title</th>
                                <th>Ordered Date</th>
                                <th>Total Price</th>
                                <th>Download</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($order_details as $order_detail)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $order_detail->ebook->ebook_title }}</td>
                                <td>  {{$collection->order_date}} </td>
                                <td>{{ $order_detail->ebook->ebook_price}}</td>
                                <td>
                                    <a href="{{ url('storage'.'/'.$order_detail->ebook->ebook_file) }}" class="button"><i class="fa fa-info"></i> {{ $order_detail->ebook->ebook_file }}</a>

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