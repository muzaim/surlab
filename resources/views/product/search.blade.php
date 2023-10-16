@extends('layout.master')

@section('konten')
    <div class="container-fluid container min-h-100">
        <div class="row justify-content-center text-center">
            <div class="col-md-8 col-lg-12 mb-4">
                <div class="d-flex justify-content-start">
                    <div>
                        <h2 class="title ">Product Search :
                            <span class="font-bold">
                                {{ $kataDicari }}
                            </span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row ">
            @foreach ($dataProductDicari as $product)
                <div class="col-md-3 col-sm-6 turun">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img class="pic-1" src="{{ asset('assets/img/' . $product->image_1) }}">
                                <img class="pic-2"src="{{ asset('assets/img/' . $product->image_2) }}">
                            </a>
                            <a href="#" class="product-like-icon" data-tip="Add to Wishlist">
                                <i class="far fa-heart"></i>
                            </a>
                            <ul class="product-links">
                                <li><a href="#"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                <li><a href="#"><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <h3 class="title font-bold">
                                <a href="{{ '/product/' . $product->slug }}">{{ $product->name }}</a>
                            </h3>
                            <div class="price">{{ currency_IDR($product->price) }}</div>
                        </div>
                    </div>
                </div>
            @endforeach

            @if ($dataProductDicari->count() == 0)
                <h4 class="text-danger">No Product found.</h4>
            @endif
        </div>
    </div>
@endsection
