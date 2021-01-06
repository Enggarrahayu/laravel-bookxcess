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
                    <li class="breadcrumb-item active" aria-current="page">Book Collection</li>
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
                                <th>Download File</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php $no = 1; ?>
                                @foreach($ebook as $book)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $book->ebook_title }}</td>
                                <td>
                                    <a href="{{ url('storage'.'/'.$book->ebook_file) }}" class="button"><i class="fa fa-info"></i> {{ $book->ebook_file }}</a>

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