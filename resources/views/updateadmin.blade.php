<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
  <body>
    <h1 class="text-center mb-5 mt-5">Update Profile Admin</h1>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="/resubmitdataadmin/{{ $user->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Name</label>
                              <input type="text" name="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" value="{{ $user->name }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Telephone</label>
                                <input type="text" name="phone_number" class="form-control" id="exampleInputuserphone1" aria-describedby="descHelp" value="{{ $user->phone_number }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Address</label>
                                <input type="text" name="address" class="form-control" id="exampleInputaddress1" aria-describedby="priceHelp" value="{{ $user->address }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Email</label>
                                <input type="text" name="email" class="form-control" id="exampleInputemail1" aria-describedby="stockHelp" value="{{ $user->email }}">
                            </div>

                            <div class="mb-3">
                                <span>Update Foto Profile<br></span>
                                <input type="file" accept="image/png, image/jpeg" name="image" id="image">
                            </div>
                            <button type="submit" class="btn btn-secondary">Submit</button>
                          </form>
                    
                    </div>
            </div>
           
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  



</body>
</html>