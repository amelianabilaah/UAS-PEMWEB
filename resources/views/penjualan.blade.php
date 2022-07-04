<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="{{ asset('/css/penjualan.css')  }}">

</head>
<body>
    <a href="/dashboardadmin" type="button" class="btn btn-dark float-right">Back</a>
    <h1 class="text-center">Product Sale</h1>
    <div class="container">
        <table class="table mt-5"> 
       
            <thead>
              <tr>
                <th scope="col">User ID</th>
                <th scope="col">No Invoice</th>
                <th scope="col">Total</th>
              </tr>
            </thead>
            <tbody>

              @php
                $nomer = 1;
              @endphp
            <div class="data">
                @foreach($checkout as $row)
                <tr>
                    <th scope="row">{{ $row->user_id }}</th>
                    <td>{{ $row->no_invoice }}</td>
                    <td>{{ $row->total }}</td>
                </tr>
            
                @endforeach
            </div>
            </tbody>
        </table>
      </div>

    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  

   
</body>
</html>