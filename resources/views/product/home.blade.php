@extends('layout.master')

@section('konten')
    <div class="container-fluid container">
        <section class="section-products">
            <div class="row justify-content-center text-center">
                <div class="col-md-8 col-lg-12 mb-4">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h2 class="title font-bold">Popular Products</h2>
                        </div>
                        <div>
                            <form action="/product/search" method="post"
                                class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                                {{ csrf_field() }}
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                        placeholder="Search for..." aria-label="Search" name="search"
                                        aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ">
                @foreach ($dataProduct as $product)
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
            </div>
        </section>
    </div>
@endsection
