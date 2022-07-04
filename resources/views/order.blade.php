@extends('layouts/mainlogin2')

@section('container')
<link rel="stylesheet" href="{{ asset('/css/order.css')  }}">

<div class="order">

    <ul class="nav nav-tabs">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/myorder">Packed Order</a>
        </li>
        
        <li class="nav-item">
        <a class="nav-link"aria-current="page" href="/myorder">Order Sent</a>
        </li>
        <li class="nav-item">
        <a class="nav-link"aria-current="page" href="/myorder">Order Finished</a>
        </li>
        
    </ul>
    <table><br>
        <tr>
            <td><h5> Invoice Number: {{ $checkout->no_invoice}} </h5> </td>
        </tr>
        <tr>
            @if($itemalamatpengiriman != null)
            <td><h5> Shipping Address: {{ $itemalamatpengiriman->alamat}} </h5> </td>
            @else
            <td><h5> Shipping Address: - </h5> </td>
            @endif
        </tr>
        <tr>
            <td> <h5> Total : {{ $checkout->total }} </h5> </td>
        </tr>
    </table><br>
</div>

@endsection