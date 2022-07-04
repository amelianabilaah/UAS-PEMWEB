@extends('layouts/main')
    
@section('container')
<link rel="stylesheet" href="{{ asset('/css/suggest.css')  }}">
<div class="form">
    <h3><b>Please Give Us Your Suggest!</b></h3>
    <div class="form-list">
    <form method="POST" enctype="multipart/form-data" action="{{ route('suggest.store') }}">
        @csrf
        @method('POST')
        <ul>
            <li>Email</li>
            <input type="email" name="email" >
            <li>Name</li>
            <input type="text" name="name" >
            <li>Suggestion</li>
            <input type="text" name="suggest" >
            <br><br>
            <button type="submit" class="submit-form">Submit</button>   
        </ul>
    </form>
   
    </div>
</div>
<br><br>

@endsection