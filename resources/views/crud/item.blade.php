<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- 
- primary meta tags
-->
<title>Metalink - Discover rate collection or Arts & NFTs</title>
<meta name="title" content="Metalink - Discover rate collection or Arts & NFTs">
<meta name="description" content="This is a NFT html template made by codewithsadee">
<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

<!-- 
- favicon
-->
<link rel="shortcut icon" href="./favicon-32x32.png" type="image/x-icon">
<link rel="shortcut icon" href="./favicon-16x16.png" type="image/x-icon">
<link rel="shortcut icon" href="./android-chrome-192x192.png" type="image/x-icon">
<link rel="shortcut icon" href="./android-chrome-512x512.png" type="image/x-icon">

<!-- 
- google font link
-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700&display=swap" rel="stylesheet">

<!-- 
- custom css link
-->
<link rel="stylesheet" href="./assets/css/style.css">

</head>
<div class="im">
    <img src="./assets/images/b1.jpg" alt="">
</div>
<div class="pr">
    <p>Profile</p>
</div>

<body id="top">

<!-- 
- #HEADER
-->

<header class="header" data-header>
<div class="container">
    
    <a href="#">
    <img src="./assets/images/logoAuction.svg" width="65" height="" alt="Metalink home" class="logo">
    </a>

    <nav class="navbar" data-navbar>
    <ul class="navbar-list">

        <li>
        <a href="/lobby" class="navbar-link label-lg">Home</a>
        </li>

        <li>
        <a href="/market" class="navbar-link label-lg">Marketplace</a>
        </li>

        <li>
        <a href="/tambah_detail" class="navbar-link label-lg">Create</a>
        </li>
    </nav>
    <form action="/insert_data" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-5">
            <label for="exampleInputEmail1" class="form-label" style="position: absolute;width: 300px;height: 30px;left: 230px;top: 1100px;font-family: 'Poppins';font-style: normal;font-weight: 700;font-size: 20px;
            line-height: 30px;color: #888888;">Masukan Foto</label>
            <input type="file"  name="foto" style="position: absolute;
            width: 980px;height: 90px;left: 230px;top: 1150px;background: #D9D9D9;border-radius: 5px;">
        </div>
        <div class="mb-5">
            <label for="exampleInputEmail1" class="form-label" style="position:absolute;width: 134px;height: 30px;left: 230px;top: 340px;font-family: 'Poppins';font-style: normal;font-weight: 700;font-size: 20px;line-height: 30px;color: #888888;">Preview Item</label>
            <input type="text" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" name="preview_item" style="position: absolute;width: 980px;height: 40px;left: 230px;top: 390px;background: #D9D9D9;border-radius: 5px;">
        </div>
        <div class="mb-5">
            <label for="exampleInputEmail1" class="form-label" style="position:absolute;width: 52px;height: 30px;left: 230px;top: 460px;font-family: 'Poppins';font-style: normal;font-weight: 700;font-size: 20px;line-height: 30px;color: #888888;">Price</label>
            <input type="number" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" name="price" style="position: absolute;width: 980px;height: 40px;left: 230px;top: 510px;background: #D9D9D9;border-radius: 5px;">
        </div>
        <div class="mb-5">
            <label for="exampleInputEmail1" class="form-label" style="position: absolute;width: 137px;height: 30px;left: 230px;top: 580px;font-family: 'Poppins';font-style: normal;font-weight: 700;font-size: 20px;line-height: 30px;color: #888888;">Minimum Bid</label>
            <input type="number" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" name="minimum_bid" style="position: absolute;width: 980px;height: 40px;left: 230px;top: 630px;background: #D9D9D9;border-radius: 5px;">
        </div>
        <div class="mb-5">
            <label for="exampleInputEmail1" class="form-label" style="position: absolute;width: 137px;height: 30px;left: 230px;top: 710px;color: #888888;font-family: 'Poppins';font-style: normal;font-weight: 700;font-size: 20px;">Starting Date</label>
            <input type="date" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" name="starting_date" style="position: absolute;width: 420px;height: 40px;left: 230px;top: 750px;background: #D9D9D9;border-radius: 5px;">
        </div>
        <div class="mb-5">
            <label for="exampleInputEmail1" class="form-label" style="position: absolute;width: 158px;height: 30px;left: 760px;top: 710px;font-family: 'Poppins';font-style: normal;font-weight: 700;font-size: 20px;line-height: 30px;color: #888888;">Expiration Date</label>
            <input type="date" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" name="expiration_date" style="position: absolute;width: 440px;height: 40px;left: 760px;top: 750px;background: #D9D9D9;border-radius: 5px;">
        </div>
        <div class="mb-5">
            <label for="exampleInputEmail1" class="form-label" style="position: absolute;width: 45px; height: 30px;left: 230px;top: 820px;font-family: 'Poppins';font-style: normal;font-weight: 700;font-size: 20px;line-height: 30px;color: #888888">Title</label>
            <input type="text" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" name="title" style="position: absolute;
                width: 980px;height: 40px;left: 230px;top: 870px;background: #D9D9D9;border-radius: 5px;">
        </div>
        <div class="mb-5">
            <label for="exampleInputEmail1" class="form-label" style="position: absolute;width: 119px;height: 30px;left: 230px;top: 935px;font-family: 'Poppins';font-style: normal;font-weight: 700;font-size: 20px;
            line-height: 30px;color: #888888;">Description</label>
            <input type="text" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" name="deskrpsi" style="position: absolute;
                width: 980px;height: 90px;left: 230px;top: 985px;background: #D9D9D9;border-radius: 5px;">
        </div>
        <div class="mb-5">
            <label for="exampleInputEmail1" class="form-label" style="position: absolute;width: 119px;height: 30px;left: 230px;top: 1270px;font-family: 'Poppins';font-style: normal;font-weight: 700;font-size: 20px;
            line-height: 30px;color: #888888;">Menit</label>
            <input type="time" class="form-control" id="menit"
                aria-describedby="emailHelp" style="position: absolute;
                width: 100px;height: 50px;left: 230px;top: 1300px;background: #D9D9D9;border-radius: 5px;">
        </div>
        <div class="mb-5">
            <label for="exampleInputEmail1" class="form-label" style="position: absolute;width: 119px;height: 30px;left: 590px;top: 1270px;font-family: 'Poppins';font-style: normal;font-weight: 700;font-size: 20px;
            line-height: 30px;color: #888888;">Tanggal</label>
            <input type="number" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" id="tanggal" style="position: absolute;
                width: 100px;height: 50px;left: 590px;top: 1300px;background: #D9D9D9;border-radius: 5px;">
        </div>
        <div class="mb-5">
            <label for="exampleInputEmail1" class="form-label" style="position: absolute;width: 119px;height: 30px;left: 470px;top: 1270px;font-family: 'Poppins';font-style: normal;font-weight: 700;font-size: 20px;
            line-height: 30px;color: #888888;">Bulan</label>
            <input type="text" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" id="bulan" style="position: absolute;
                width: 100px;height: 50px;left: 470px;top: 1300px;background: #D9D9D9;border-radius: 5px;">
        </div>
        <div class="mb-5">
            <label for="exampleInputEmail1" class="form-label" style="position: absolute;width: 119px;height: 30px;left: 350px;top: 1270px;font-family: 'Poppins';font-style: normal;font-weight: 700;font-size: 20px;
            line-height: 30px;color: #888888;">Tahun</label>
            <input type="number" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" id="tahun" style="position: absolute;
                width: 100px;height: 50px;left: 350px;top: 1300px;background: #D9D9D9;border-radius: 5px;">
        </div>
        <button type="submit" class="btn btn-primary" name="btnitem" style="position: absolute; top: 1500px;width: 300px;height: 30px;left: 580px; ">Submit</button>
    </form>


    






    
    <div class="header-action">

        <button class="btn-icon primary" aria-label="wallet" onclick="togglePay()">
            <ion-icon name="wallet-outline"></ion-icon>
          </button>
  
          <div class="sub-pay-wrap" id="subPay">  
            <div class="sub-pay"> 
                <div class="uer-info"> 
                    <h2>SALDO</h2> 
                </div> 
                <hr> 
            </div> 
          </div> 

    <button class="btn-icon profil-btn" aria-label="Metalink account: Fiona doe">
        <img src="./assets/images/profile.jpg" width="50" height="50" alt="Fiona doe" class="img-cover" onclick="toggleMenu()">
    </button>
    
    <div class="sub-menu-wrap" id="subMenu">  
        <div class="sub-menu"> 
            <div class="uer-info"> 
                <h2>{{ auth()->user()->username }}</h2> 
            </div> 
            <hr> 

            <a href="profile.html" class="sub-menu-link"> 
                <img src="/assets/images/person-outline.svg" alt="">
                <p>My Profile</p>
            </a> 

            <a href="http://" class="sub-menu-link"> 
                <img src="/assets/images/log-in-outline.svg" alt="">
                <p>Logout</p> 
            </a> 
        </div> 
    </div> 

    <button class="nav-toggle-btn" aria-label="menu toggle" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true" class="default-icon"></ion-icon>

        <ion-icon name="close-outline" aria-hidden="true" class="active-icon"></ion-icon>
    </button>

    </div>

</div>
</header>





<main>
<article>

    <!-- 
    - #HERO
    -->

    <section class="section profile" aria-label="home">
        <!-- <h2>My Profile</h2>

        <p>Lihat Karya Anda</p> -->
    </section>

    <!-- 
    - #Pofile
    -->

    <section class="section discover" aria-labelledby="discover-label">
    








    </section>

<!-- 
- #FOOTER
-->

<footer class="footer">

<div class="section footer-top">
    <div class="container">

    <div class="footer-brand">

        <a href="#">
        <img src="./assets/images/logoAuction.svg" width="60" height="60" loading="lazy" alt="Metalink home">
        </a>

        <p class="body-md footer-text">
        Buy, sell and discover exclusive digital assets by the top artists of SMK TARUNA BHAKTI.
        </p>

    </div>

    <ul class="footer-list">

        <li>
        <p class="title-lg footer-list-title">GRAPHEIN-LINK</p>
        </li>

        <li>
        <a href="#" class="footer-link">
            <ion-icon name="chevron-forward"></ion-icon>

            <span class="span">Explore Item</span>
        </a>
        </li>

        <li>
        <a href="#" class="footer-link">
            <ion-icon name="chevron-forward"></ion-icon>

            <span class="span">Live Auction</span>
        </a>
        </li>

        <li>
        <a href="#" class="footer-link">
            <ion-icon name="chevron-forward"></ion-icon>

            <span class="span">Marketplace</span>
        </a>
        </li>

        <li>
        <a href="#" class="footer-link">
            <ion-icon name="chevron-forward"></ion-icon>

            <span class="span">Wallets</span>
        </a>
        </li>

        <li>
        <a href="#" class="footer-link">
            <ion-icon name="chevron-forward"></ion-icon>

            <span class="span">Create</span>
        </a>
        </li>

    </ul>

    <ul class="footer-list">

        <li>
        <p class="title-lg footer-list-title">Useful Links</p>
        </li>

        <li>
        <a href="#" class="footer-link">
            <ion-icon name="chevron-forward"></ion-icon>

            <span class="span">Terms & Condition</span>
        </a>
        </li>

        <li>
        <a href="#" class="footer-link">
            <ion-icon name="chevron-forward"></ion-icon>

            <span class="span">Privacy policy</span>
        </a>
        </li>

        <li>
        <a href="#" class="footer-link">
            <ion-icon name="chevron-forward"></ion-icon>

            <span class="span">Login</span>
        </a>
        </li>

    </ul>

    <div class="footer-list">

        <ul>

        <li>
            <p class="title-lg footer-list-title">Contact Details</p>
        </li>

        <li class="footer-list-item">
            <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>

            <a href="mailto:metalink@nft.com" class="footer-link">metalink@gmail.com</a>
        </li>

        <li class="footer-list-item">
            <ion-icon name="call-outline" aria-hidden="true"></ion-icon>

            <a href="tel:+111 234-567-891" class="footer-link">+62 234-567-891</a>
        </li>

        </ul>

    </div>

    </div>
</div>
    
</footer>





<!-- 
- #BACK TO TOP
-->

<a href="#top" class="back-to-top btn-icon" aria-label="back to top" data-back-top-btn>
<ion-icon name="arrow-up" aria-hidden="true"></ion-icon>
</a>





<div class="body-bg-shape"></div>





<!-- 
- custom js link
-->
<script src="./assets/js/script.js"></script>
<script src="./assets/js/main.js"></script>


<!-- 
- ionicon link
-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>