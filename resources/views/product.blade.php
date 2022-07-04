
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/product.css')  }}">
  </head>
  <body>
          
    <a href="/dashboardadmin" type="button" class="btn btn-dark float-right">Back</a>
    <h1 class="text-center mb-5 mt-5">Database of Product</h1>
    <a href="/create" type="button" class="btn btn-dark mb-3" >Create</a>
    <div class="container">
       
        <div class="row mt-4 mb-4">
            @if($message = Session::get('success'))
                <div class="alert alert-dark" role="alert">
                    {{ $message }}
                </div>  
            @endif
            <table class="table"> 
              
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Price</th>
                    <th scope="col">Description</th>
                    <th scope="col">Last Modified</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>

                  @php
                    $nomer = 1;
                  @endphp

                    @foreach($data as $row)
                        <tr>
                            <th scope="row">{{ $row->id }}</th>
                            <td>{{ $row->productName }}</td>
                            <td>
                              <img src="{{ $row->image }}" style="width:40px">
                            </td>
                            <td>{{ $row->productStock }}</td>
                            <td>{{ $row->productPrice }}</td>
                            <td>{{ $row->description }}</td>
                            <td>{{ $row->updated_at !=null ? $row->updated_at->format('D M Y') : '-'}}</td>
                            
                            
                            <td class="buttondel">
                              
                                <a href="/updatedata/{{ $row->id }}" class="btn btn-secondary">Update</a>
                                <a href="/delete/{{ $row->id }}" type="button" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    
                    @endforeach
                  
                </tbody>
              </table>

        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  
      </div>
    </div>
    


</body>
</html>
