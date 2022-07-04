<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="{{ asset('/css/dashboardadm.css')  }}">

</head>
<body>

    <div class="container">
        <div class="sidebar">
            <div class="header">
                <div class="list-item">
                    <a href="#">
                        <img src="" class="icon">
                        <span class="description-header">Kimka Hijab Official  </span>
                    </a>
                </div>
                <div class="illustration">
                    <img src="/img/belanja2.png" height="200px" width="auto">

                </div>
            </div>
      
        <div class="main">
            <div class="list-item">
                <a href="/myprofileadmin">
                    <img src="/img/logouser.png" height="21px" width="auto" class="icon">
                    <span class="description">My Profile</span>
                </a>
            </div>
            <div class="list-item">
                <a href="/dashboardadmin">
                    <img src="/img/dashboard.png" height="21px" width="auto" class="icon">
                    <span class="description">Dashboard</span>
                </a>
            </div>
            <div class="list-item">
                <a href="/product">
                    <img src="/img/product.png" height="21px" width="auto" class="icon">
                    <span class="description">Product</span>
                </a>
            </div>
            <div class="list-item">
                <a href="/penjualan">
                    <img src="/img/penjualan.png" height="20px" width="auto" class="icon">
                    <span class="description">Product Sale</span>
                </a>
            </div>
            <div class="keluar">
                <a href="/logout" type="button" class="btn btn-danger float-right">Logout</a>
            </div>
        </div>
    </div>
        <div class="main-content">
            <div id="menu-button">
                <input type="checkbox" id="menu-checkbox">
                <label for="menu-checkbox" id="menu-label">
                    <div id="hamburger"></div>
                </label>
            </div>
          
            <div class="kotak">
                <table><tr>
                    <td>
                        <div class="kotak1">
                            <a href="/dashboard"><p>Activity</p></a>
                            <h2>500+</h2>
                            <img src="/img/dashboard.png" title="Activity">
                        </div>
                        <br><br>
                    <td>
                        <div class="kotak2">
                            <a href="/product"><p>Product</p></a>
                            <h2>400+</h2>
                            <img src="/img/product.png"title="Product">
                            
                            
                        </div>
                        <br><br>
                    <td>
                        <div class="kotak3">
                            <a href="/penjualan"><p>Product Sale</p></a>
                            <h2>700+</h2>
                            <img src="/img/penjualan.png"title="Penjualan">
                            
                        </div>
                        <br><br>
                </td></td></td></tr></table>
            </div>
    
            <div class="box">
                <div class ="gambar">
                    <h2> Sales Chart</h2>
                    <img src="/img/grafik2.png"> 
                </div>
    
                <div class="login">
                    <h4>NOTIFICATION CHAT</h4><br><br><br><br><br>
                    
                    <div class="user">
                        <button> 
                           <img src="/img/belanja2.png"> <h5> HI CAN I HAVE NEW PROUCT, PLEASE?</h5>
                        </button><br><br><br>
                        
                        <button> 
                            <img src="/img/belanja2.png"> <h5> HALLO, HOW MANY THIS PRODUCT READY?</h5>
                         </button><br><br><br>

                         <button> 
                            <img src="/img/belanja2.png"> <h5> IS ANOTHER BLAZER PRODUCT FROM KIMKA? </h5>
                         </button><br><br><br>
     
                       
                      
                    </div>
    
                    <div class="submit">
                       
                    <p> CHECK ALL MESSAGE <a href="/signup" style="color :white" ><b>HERE</b></a></p>
                    </div>
                </div>
        </div>
</div>
    
    <script src ="script.js"></script>
</body>
</html>