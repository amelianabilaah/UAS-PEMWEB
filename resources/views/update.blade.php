<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
  <body>
    <h1 class="text-center mb-5 mt-5">Update Product</h1>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="/resubmitdata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Product Name</label>
                              <input type="text" name="productName" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" value="{{ $data->productName }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Product Description</label>
                                <input type="text" name="description" class="form-control" id="exampleInputDesc1" aria-describedby="descHelp" value="{{ $data->description }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Product Price</label>
                                <input type="number" name="productPrice" class="form-control" id="exampleInputPrice1" aria-describedby="priceHelp" value="{{ $data->productPrice }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Product Stock</label>
                                <input type="number" name="productStock" class="form-control" id="exampleInputStock1" aria-describedby="stockHelp" value="{{ $data->productStock }}">
                            </div>
                            <div class="mb-3">
                              <label for="type">Category:</label>
                              <select class="form-control" id="type" name="type" value="{{old('type')}}">
                                  <option value="1" {{ old('type') == 1 ? 'selected' : '' }}>Blouse</option>
                                  <option value="2" {{ old('type') == 2 ? 'selected' : '' }}>Inner</option>
                                  <option value="3" {{ old('type') == 3 ? 'selected' : '' }}>Dress</option>
                                  <option value="4" {{ old('type') == 4 ? 'selected' : '' }}>Skirt</option>
                                  <option value="5" {{ old('type') == 5 ? 'selected' : '' }}>Pants</option>
                              </select>
                            </div>
                            <div class="mb-3">
                                <span>Choose Image<br></span>
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