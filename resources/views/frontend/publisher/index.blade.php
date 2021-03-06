@extends('layouts.masterpub')
@section('title','Products')
@section('content')
<div class="page" style="padding-top:30px;">
                <section>
                    <header>
                        <p style="text-align:center; font-size: 30pt;"><strong> Publisher Page </strong></p> 
                        <h2 class="section-title">Your Published Book</h2>
                        <a href="#" class="all">Show All</a>
                    </header>
   
                    <div class="product-list">

                        @foreach($data_ebook as $ebook)
                        <div  class="product">
                            <div style="height: 600px;" class="inner-product">
                                <div class="figure-image">
                                    <a href="single.html"><img src="{{ url('storage') }}/{{ $ebook->ebook_image }}" alt="Game 1"></a>
                                </div>
                                <h3 class="product-title"><a href="#">{{ $ebook->ebook_title }}</a></h3>
                                <small class="price">{{ $ebook->ebook_price}}</small>
                                <p>{{ $ebook->short_desc }}</p>
                                <form method="post" action="">
                                    @csrf
                                        <input type="submit" value="add to cart" class="button">
                                        <a style="margin-top: 10px;" href="" class="button muted">Read Details</a>
                                </form>
                                
                            </div>
                        </div> <!-- .product -->
                        @endforeach
                    </div> <!-- .product-list -->
                </section>
            </div>
@endsection