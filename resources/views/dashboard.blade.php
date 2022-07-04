@extends('layouts/main')

@section('container')
<link rel="stylesheet" href="{{ asset('/css/dashboard.css')  }}">

    <div class="icon-wrapper">
        <div class="heading">
            <h2>Hello, Welcome To Kimka Hijab Official Store</h2>
        </div>
        <div class="icon">
            <div class="content">
            <div class="content-icon">
                <img src="../img/belanja2.png">
            </div>
            <a href="/home">View Catalogue Products</a>
            </div>
            
            <div class="content">
            <div class="content-icon">
                <img src="../img/belanja2.png">
            </div>
            <a href="/login">Login Or Signup</a>
            </div>
            
            <div class="content">
            <div class="content-icon">
                <img src="../img/belanja2.png">
            </div>
            <a href="/suggest">Critism And Suggest</a>
            </div>
        </div>
    </div>
<br><br>


@endsection