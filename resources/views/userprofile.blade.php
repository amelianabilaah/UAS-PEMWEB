@extends('layouts/mainlogin2')

@section('container')

<link rel="stylesheet" href="{{ asset('/css/profile.css')  }}">
<div class="profile">
    <h1> My Profile</h1>
</div>

    <div class="kotak">
    <img src="{{ $user->image }}"style="width:290px">
    </div>
    <div class="datacustomer">
      <table>
          <tr>
              <td> <h3> Name : {{ $user->name }}</h3> </td>
          </tr>
          <tr>
              <td> <h3> Gender : {{ $user->gender == 1 ? 'Women' : 'Laki-laki'  }} </h3> </td>
          </tr>
          <tr>
              <td> <h3> Telephone : {{ $user->phone_number }} </h3> </td>
          </tr>
          <tr>
              <td> <h3> Address : {{ $user->address }} </h3> </td>
          </tr>
          <tr>
              <td> <h3> Email :{{ $user->email }}  </h3> </td>
          </tr>
      </table><br>
      <a href="/updateprofileuser" class="btn "><button> Update My Profile</button></a>

</div><br><br>

@endsection

