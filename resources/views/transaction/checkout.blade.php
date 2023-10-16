@extends('layout.master')

@section('konten')
    <div class="container-fluid container min-h-100">
        <section class="h-100 h-custom checkout-page">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12">
                        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                            <div class="card-body p-0">
                                <div class="row g-0">
                                    <div class="col-lg-8">
                                        <div class="p-5">
                                            <div class="d-flex justify-content-between align-items-center mb-5">
                                                <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>

                                                @if (session()->has('saldoSekarang'))
                                                    <h6 class="mb-0 text-muted">Balance :
                                                        <span class="font-bold">
                                                            {{ currency_IDR(session()->get('saldoSekarang')) }}</span>
                                                    </h6>
                                                @else
                                                    <h6 class="mb-0 text-muted">Balance :
                                                        <span class="font-bold">{{ currency_IDR($saldoSekarang) }}</span>
                                                    </h6>
                                                @endif
                                            </div>
                                            <hr class="my-4">
                                            @foreach ($dataProduct as $data)
                                                <div class="row mb-4 d-flex justify-content-between align-items-center">
                                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                                        <img src="{{ asset('assets/img/' . $data->image_1) }}"
                                                            class="img-fluid rounded-3" alt="Cotton T-shirt">
                                                    </div>
                                                    <div class="col-md-3 col-lg-4" style="margin-left: -50px;">
                                                        <h6 class="text-black mb-0 font-bold">{{ $data->name }}</h6>
                                                    </div>
                                                    <div
                                                        class="col-md-3 col-lg-4 offset-lg-1 d-flex justify-content-lg-end">
                                                        <h6 class="mb-0">{{ currency_IDR($data->price) }}</h6>
                                                    </div>
                                                </div>
                                            @endforeach




                                            {{-- <hr class="my-4">

                                            <div class="pt-5">
                                                <h6 class="mb-0"><a href="#!" class="text-body"><i
                                                            class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a>
                                                </h6>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="col-lg-4 bg-grey"
                                        style="border-top-right-radius: 15px; border-bottom-right-radius: 15px">
                                        <div class="p-5">
                                            <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                                            <hr class="my-4">
                                            @if (session()->has('message'))
                                                <div class="alert alert-success">
                                                    {{ session()->get('message') }}
                                                </div>
                                            @endif

                                            <form method="post" action="{{ url('/store') }}">
                                                @csrf
                                                <input type="hidden" value="{{ $dataProduct[0]->id }}" name="products_id">
                                                <input type="hidden" value="{{ $dataProduct[0]->price }}" name="total">
                                                <input type="hidden" value="{{ $saldoSekarang }}" name="saldo">
                                                <div class="mb-3">
                                                    <div class="form-outline">
                                                        <label class="form-label" for="form3Examplea2">Destination
                                                            Address</label>
                                                        <textarea type="text" id=""
                                                            class="form-control form-control-lg @error('address') is-invalid
                                                        @enderror"
                                                            name="address" autofocus>{!! old('address') !!}</textarea>
                                                        @error('address')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <div class="form-outline">
                                                        <label class="form-label" for="form3Examplea2">Phone</label>
                                                        <input type="text" id="form3Examplea2"
                                                            class="form-control form-control-lg @error('phone') is-invalid @enderror"
                                                            name="phone" value="{{ old('phone') }}" />
                                                        @error('phone')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="mb-4 pb-2">
                                                    <label class="form-label" for="form3Examplea2">Payment</label>
                                                    <select
                                                        class="select text-capitalize form-control @error('payments_id') is-invalid
                                                    @enderror"
                                                        name="payments_id">
                                                        <option value="" selected disabled hidden>-- Choose --
                                                        </option>
                                                        @foreach ($dataPayment as $data)
                                                            <option value="{{ $data->id }}" class="text-capitalize">
                                                                {{ $data->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('payments_id')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                <hr class="my-4">
                                                <div class="d-flex justify-content-between mb-5">
                                                    <h5 class="text-uppercase">Total</h5>
                                                    <h5>{{ currency_IDR($dataProduct[0]->price) }}</h5>
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-block btn-lg"
                                                    data-mdb-ripple-color="dark">Checkout</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
