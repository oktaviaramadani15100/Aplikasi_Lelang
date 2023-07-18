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
    <div class="pos"></div>
    <div class="kd"></div>
    <div class="avatar">
        <img src="./assets/images/avatar-1.jpg" alt="">
    </div>
    <div class="nama-pengguna">
        <p>John Biden</p>
    </div>
    <div class="dec">Lorem ipsum dolor sit amet consectetur. Eget at viverra eget accumsan id amet </div>
    <div class="avatar2">
        <img src="./assets/images/avatar-1.jpg" alt="">
    </div>
    <div class="learn">
        <div class="lr">
            <p>Learn More</p>
        </div>
    </div>
    <div class="nama-produk">
        <p>Civilian</p>
        <img src="./assets/images/avatar-1.jpg" alt="">
    </div>
    <div class="nama-akun">
        <p>John Biden</p>
    </div>
    <div class="nama-owner">
        <p>Owner</p>
    </div>
    <div class="pla">
        <button> <p>Place a Bid</p> </button>
    </div>
    <div class="bid">
        <p>Current Bid</p>
    </div>
    <div class="uang">
        <p>$4,429.67</p>
    </div>

    






    
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

        {{-- @if ()
            
        @else --}}
        <button class="btn-icon profil-btn" aria-label="Metalink account: Fiona doe">
            <a href="/lobby"><img src="./assets/images/profile.jpg" width="50" height="50" alt="Fiona doe" class="img-cover"></a>
        </button>
            
        {{-- @endif --}}
    
    <div class="sub-menu-wrap" id="subMenu">  
        <div class="sub-menu"> 
            <div class="uer-info"> 
                <h2>{{ auth()->user()->username }}</h2> 
            </div> 
            <hr> 

            <a href="/profil" class="sub-menu-link"> 
                <img src="/assets/images/person-outline.svg" alt="">
                <p>My Profile</p>
            </a> 

            <a href="/sesi/logout" class="sub-menu-link"> 
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

<!-- 
- ionicon link
-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>