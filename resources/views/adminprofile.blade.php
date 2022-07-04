<link rel="stylesheet" href="{{ asset('/css/adminprofile.css')  }}">

<head>

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
        
            <div class="profile">
                <h1> My Admin Profile</h1>
            </div>
           
           <div class="kotak">
            <img src="{{ $user->image }}"style="width:200px">
           </div>
            <div class="datapegawai">
                <table>
                    <tr>
                        <td><h3> Employee ID : {{ $user->id }} </h3> </td>
                    </tr>
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
                <a href="/updateprofileadmin" class="btn btn-secondary"><button> Update My Profile</button></a>
         
           </div>
         
    </div>
</div>
    



    
</body>
</html>