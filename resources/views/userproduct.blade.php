@extends('layouts/mainlogin2')

@section('container')
<link rel="stylesheet" href="{{ asset('/css/dress.css')  }}">

<table><tr>

    @foreach($data as $data)
    <td>
        <div class="kotak1">
            <p>{{ $data->productName }}</p>
            <img src="{{ $data->image }}"title={{ $data->productName }}><br>
            <p>Rp. {{ $data->productPrice }}</p>
            <p><a href="/detailproduct/{{ $data->id }}">View Product</a></p>
        </div>
        <br><br>
    <td>
    @endforeach
 </tr></table>

@endsection
