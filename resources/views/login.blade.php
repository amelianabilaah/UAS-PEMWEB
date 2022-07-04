@extends('layouts/main')

@section('container')
<link rel="stylesheet" href="{{ asset('/css/login.css')  }}">

<div class="box">
    <form action="{{ route('postlogin') }}" method="post">
        {{ csrf_field() }}
        <div class="headerlogin">
            <h2>Welcome, <br> dear Kimka Hijab Lovers!</h2>
        </div>

        <div class="login-area">
            <img src= "{{ asset('img/belanja2.png') }}" width="200px" height=auto ><br>
            <h5>Login To Your Account</h5>
            <input type="text" class="username" name="email" placeholder="Username">
            <input type="password" class="password" name="password" placeholder="Password">

            <div class="col-20">
                <button type="submit" class="btn btn-secondary btn-block">Login</button>
            </div>
       
                
                
           
            <a href="Forgot Password">Forgot Password?</a>
            <h6>Or <br> Dont Have Account?</h6> <a href="/signup">Sign Up</a>
        </div>
       
    </form> 
</div>


@endsection















