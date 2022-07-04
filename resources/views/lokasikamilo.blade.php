@extends('layouts/mainlogin2')

@section('container')

<link rel="stylesheet" href="{{ asset('/css/lokasikami.css')  }}">
<title>KIMKA HIJAB OFFICIAL STORE</title>

    <div class="lokasi">
        <h2> Pilih Lokasi Cabang terdekat kami : </h2><br>
        <select class="form-select" aria-label="Default select example">
            <option selected>Pilih Kota/Kabupaten</option>
            <option value="1">Kota Surabaya</option>
            <option value="2">Kabupaten Sidoarjo</option>
            <option value="3">Kabupaten Gresik</option>
            <option value="4">Kota Jakarta</option>
            <option value="5">Kota Yogyakarta</option>
            <option value="6">Kota Bandung</option>
           
          </select>
          
    </div>
    <br><br><br><br><br><br><br>
    <div class="alamat">
        <table>
            <td>
                <h4>Kota Surabaya</h4>
                <p>Alamat : Jl. Mawar no. 234, Kota Surabaya <br>
                    Telepon : 08345913456   
                </p>
            </td>

            <td>
                <h4>Kabupaten Sidoarjo</h4>
                <p>Alamat : Jl. Melati no. 201, Kabupaten Sidoarjo<br>
                    Telepon : 08226789032  
                </p>
            </td>

            
            <td>
                <h4>Kabupaten Gresik</h4>
                <p>Alamat : Jl. Tulip no. 321, Kabupaten Gresik <br>
                    Telepon : 08145678932
                </p>
            </td>

            
            <td>
                <h4>Kota Jakarta</h4>
                <p>Alamat : Jl. Lavender no. 81, Kota Jakarta<br>
                    Telepon : 08543876590  
                </p>
            </td>
        </table>

    </div>
    <br><br>
        
    



@endsection