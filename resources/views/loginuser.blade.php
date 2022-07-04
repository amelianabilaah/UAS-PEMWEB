@extends('layouts/main')

@section('container')
<link rel="stylesheet" href="{{ asset('/css/loginuser.css')  }}">

<div class="box">
    <form action="{{ route('postlogin') }}" method="post">
        {{ csrf_field() }}
        <div class="headerlogin">
            <h2>Welcome, <br> dear Kimka Hijab Lovers!</h2>
        </div>

        <div class="login-area">
            <img src= "{{ asset('img/belanja2.png') }}" width="200px" height=auto ><br>
            <h5>Login To Your Account</h5>
            <h5>as</h5>
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="/login">
                    <button type="button" class="btn btn-secondary">Admin</button>
                </a>
                <a href="/logincust">
                    <button type="button" class=" bottom btn btn-secondary">Customer</button>
                </a>
                
            </div>
            <br><br>
        
                
                
           
            <a href="Forgot Password">Forgot Password?</a>
            <h6>Or <br> Dont Have Account?</h6> <a href="/signup">Sign Up</a>
        </div>
        
    </form> 
</div>


@endsection















