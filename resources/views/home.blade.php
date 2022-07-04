<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KIMKA HIJAB OFFICIAL STORE</title>
    

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <div class="header">
                <h1><b>KIMKA HIJAB OFFICIAL STORE</b></h1>   
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/home">HOME</a>
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
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-dark" type="submit">Search</button>
                </form>
                <br>
                <form class="d-flex">
                    <button class="btn btn-outline-dark" type="submit"><a href="/login">Login</a></button>
                </form>
                
            </div>
        </nav>
</head>
                    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <body>
        <div class="imgsliding">
            <img src="{{ asset('img/gambarkimka.png') }}" width="1520px" height=auto>
        </div>

        <div class="contentpage">
            <p>Kimka Hijab now comes with an official website. Kimka Hijab provides a variety of women's clothing products with the latest models.
                You can find various kinds of blouses, t-shirts, and beautiful shirts in our shop. You can choose from a variety of colors and sizes available in each of our products.
                <br><br><h4>Happy Shopping at Kimka Hijab Official Website!!! <h4> </p>

            <div class="contentimage">
                <img src= "{{ asset('img/1.jpg') }}" width="500px" height=auto> 
                <img src= "{{ asset('img/2.jpeg') }}" width="500px" height=auto><br>      
                <a href=""><b>Best Seller Items</b></a>
                <br>
                <img src= "{{ asset('img/celana (1).jpg') }}" width="500px" height=auto>
                <img src= "{{ asset('img/celana (2).jpg') }}" width="500px" height=auto><br>
                <a href=""><b>Sale Up to 50%</b></a>
            </div>
        </div>

            <div class="message-wrapper">
                <div class="heading">
                <h3>If You have an Opinion About Our Service</h3>
                <h4>Please Give Us Your Suggestions</h4>
                </div>
                <span class="button message">
                <a href="/suggest">Click Here</a>
                </span>
            </div>
        </div>

    </body>

    <div class="footer">
        <div class="footer-logo"> 
           <p>Follow Us</p> 
           <div class="footer-list">
              <a href="/tentangkami"><li>About Us</li></a>
              <a href="/lokasikami"><li>Our Location</li></a>
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
<link rel="stylesheet" href="{{ asset('/css/kimkastyle.css')  }}">
</html>


