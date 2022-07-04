@extends('layouts/mainlogin2')

@section('container')

    <div class="container">
        <div class="row">
        <div class="col col-8">
            @if(count($errors) > 0)
            @foreach($errors->all() as $error)
                <div class="alert alert-warning">{{ $error }}</div>
            @endforeach
            @endif
            @if ($message = Session::get('error'))
                <div class="alert alert-warning">
                    <p>{{ $message }}</p>
                </div>
            @endif
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="row mb-2">
            <div class="col col-12 mb-2">
                <div class="card">
                <div class="card-header">
                    Item
                </div>
                <div class="card-body">
                    <table class="table table-stripped">
                    <thead>
                        <tr>
                        <th>No</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($checkout->detail as $detail)
                        <tr>
                        <td>
                        {{ $no++ }}
                        </td>
                        <td>
                        {{ $detail->product->productName }}
                        </td>
                        <td>
                        {{ number_format($detail->productPrice, 2) }}
                        </td>
                        <td>
                        {{ number_format($detail->productStock, 2) }}
                        </td>
                        <td>
                        {{ number_format($detail->subtotal, 2) }}
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
            <div class="col col-12">
                <div class="card">
                <div class="card-header">Shipping Address</div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-stripped">
                        <thead>
                        <tr>
                            <th>Recipient's Name</th>
                            <th>Address</th>
                            <th>Phone Number</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($itemalamatpengiriman)
                        <tr>
                            <td>
                            {{ $itemalamatpengiriman->nama_penerima }}
                            </td>
                            <td>
                            {{ $itemalamatpengiriman->alamat }}<br />
                            {{ $itemalamatpengiriman->kelurahan}}, {{ $itemalamatpengiriman->kecamatan}}<br />
                            {{ $itemalamatpengiriman->kota}}, {{ $itemalamatpengiriman->provinsi}} - {{ $itemalamatpengiriman->kodepos}}
                            </td>
                            <td>
                            {{ $itemalamatpengiriman->no_tlp }}
                            </td>
                            <td>
                            <a href="{{ route('alamatpengiriman.index') }}" class="btn btn-success btn-sm">
                                Change Adress
                            </a>                        
                            </td>
                        </tr>
                        @endif
                        </tbody>
                    </table>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('alamatpengiriman.index') }}" class="btn btn-sm btn-primary">
                    Add Address
                    </a>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="col col-4">
            <div class="card">
            <div class="card-header">
                Summary
            </div>
            <div class="card-body">
                <table class="table">
                <tr>
                    <td>Invoice Number</td>
                    <td class="text-right">
                    {{ $checkout->no_invoice }}
                    </td>
                </tr>
                <tr>
                    <td>Subtotal</td>
                    <td class="text-right">
                    {{ number_format($checkout->subtotal, 2) }}
                    </td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td class="text-right">
                    {{ number_format($checkout->total, 2) }}
                    </td>
                </tr>
                </table>
            </div>
            <div class="card-footer">
                <form action="{{ URL::to ('myorder') }}" method="get">
                @csrf()
                <button type="submit" class="btn btn-danger btn-block">Order Now</button>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>


@endsection