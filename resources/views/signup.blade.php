@extends('layouts/main')

@section('container')
<link rel="stylesheet" href="{{ asset('/css/signup.css')  }}">

<div class="box">
    <form action="{{ route('register') }}" method="POST">
        @csrf
        
        <div class="headerlogin">
            <h2>Welcome, <br> dear Kimka Hijab Lovers!</h2>
        </div>

        <div class="login-area">
            <img src= "{{ asset('img/belanja2.png') }}" width="200px" height=auto ><br>
            <h5>Sign Up </h5>
            <input type="email" class="username" id="email" name="email" placeholder="E-mail">
            <input type="text" class="name" id="name" name="name" placeholder="Name">
            <input type="text" class="address" id="address" name="address" placeholder="Address">
            <select name="gender" id="gender">
                
                <option value="1">Woman</option>
                <option value="2">Man</option>
            </select>
            <input type="number" class="phone" id="phone_number" name="phone_number" placeholder="Phone Number">
            <input type="password" class="password" id="password" name="password" placeholder="Password">
            <div class="signbutton">
                <button class="button message" type="submit">Sign Up</button>
            <h6><br> Do You Have Account?</h6> <a href="/login">Login</a>
            </div>
        </div>
    </form> 
</div>


@endsection


