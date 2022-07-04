<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/mainlogin2.css')  }}">
    <title>KIMKA HIJAB OFFICIAL STORE </title>
    

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('/css/mainlogin2.css')  }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <div class="header">
                <h1><b>KIMKA HIJAB OFFICIAL STORE</b></h1>   
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/homepage2">HOME</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/userproduct/1">Blouse</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/userproduct/2">Inner</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/userproduct/3">Dress</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/userproduct/4">Skirt</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/userproduct/5">Pants</a>
                        </li>
            
                    </ul>
                </div>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Find Your Product Here" aria-label="Search">
                    <button class="btn btn-outline-dark" type="submit">Search</button>
                </form>
                <br>
                <div class="carticon">
                    <a href={{ URL::to('mycart') }}>
                    <img src="../img/cart.png" height="40px" width="auto">
                    </a>
                </div>

                <div class="profile">
                    <a href="/account">
                    <img src="../img/profile.png" height="40px" width="auto">
                    </a>
                </div>                
                <br>
    </div>
 </nav>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-4">
        @yield('container')
    </div>
   

</body>
 
<div class="footer">
    <div class="footer-logo"> 
       <p>Follow Us</p> 
       <div class="footer-list">
          <a href="/tentangkamii"><li>About Us</li></a>
          <a href="/lokasikamii"><li>Our Location</li></a>
          <a href="https://web.whatsapp.com/"><li>Contact Us</li></a>
        </div>
        <div class="instagram">
            <a href = "https://www.instagram.com/kimka_hijab/">
            <img src="../img/instagram.png" height="30px" width="auto"> Kimkahijabofficial</a>
        </div>
        <div class="whatsapp">
            <a href="https://web.whatsapp.com/">
            <img src="../img/whatsapp.png" height="30px" width="auto"> 08765438762345</a>
        </div>
        <div class="line">
            <a href = "https://line.me/id/">
            <img src="../img/line.png" height="30px" width="auto"> kimkahijabofficial</a>
        </div>
    </div>       
</div>

</html>

          