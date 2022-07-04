@extends('layouts/mainlogin2')

@section('container')

<link rel="stylesheet" href="{{ asset('/css/account.css')  }}">


<br><br><br>
<div class="boxprofile">
        <div class="headerlogin">
            <h2>My Account</h2>
        </div>

        <div class="profilebutton">
            <button class="btn btn-primary" type="button"><a href="/myprofile">Setting My Profile</a></button>
            <br><br>
            <button class="btn btn-primary" type="button"><a href="/myorder">Order</a></button>
            <br><br><br>
            <button class="btn btn-primary" type="button"><a href="{{ route('logout') }}">Logout</a></button>

        </div>

</div>





@endsection