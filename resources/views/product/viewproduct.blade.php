@extends('layouts/mainlogin2')

@section('container')

    <link rel="stylesheet" href="{{ asset('/css/viewproductdetail.css')  }}">
    <div class="profile">
        <h3> View Product</h3>
    </div>

    <div class="boxproduct">
        <img src="{{ $data->image }}">
    </div>
    
    <div class="detailidentitas">
        <table>
            <tr>
                <td><p> Name    : {{ $data->productName }} </p></td>
            </tr>
            <tr>
                <td><p> Price   : {{$data->productPrice  }} </p></td>
            </tr>
            <tr>
                <td><p> Stock   : {{ $data->productStock }} </p></td>
            </tr>
            <tr>
                <td><p> Description   : {{ $data->description }} </p></td>
            </tr>
        </table>
    </div>

    <div class="card-body">
        <form action="{{ route('cartdetail.store') }} " method="POST">
            @csrf
            <input type="hidden" name="product_id" value={{$data->id}}>
            <button class="btn btn-block btn-secondary" type="submit">
            <i class="fa fa-shopping-cart"></i> Add to Cart
            </button>
            </form>
    </div>





@endsection
