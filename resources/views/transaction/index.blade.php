@extends('layout.master')

@section('konten')
    <div class="container-fluid container min-h-100">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Transaction Data</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Product</th>
                                <th>Destination Address</th>
                                <th>Phone Number</th>
                                <th>Total</th>
                                <th>Payment Method</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataTransaction as $data)
                                <tr>
                                    <td>{{ $data->users->name }}</td>
                                    <td>{{ $data->products->name }}</td>
                                    <td>{{ $data->address }}</td>
                                    <td>{{ $data->phone }}</td>
                                    <td>{{ currency_IDR($data->total) }}</td>
                                    <td>{{ $data->payments->name }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
