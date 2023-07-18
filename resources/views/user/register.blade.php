<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/reg.css">
</head>
<body>
    <div class="foto">
        <img src="./assets/images/logoAuction.svg" alt="">
    </div>
    <div class="upp">
        <p>Sign Up</p>
    </div>
    <div class="garis"></div>
    <div class="row">
        <div class="col-md-6">
            @if($errors->any())
            @foreach($errors->all() as $err)
            <p class="alert alert-danger">{{ $err }}</p>
            @endforeach
            @endif
            <form action="{{ route('register.action') }}" method="POST"> 
                @csrf
                <div class="nama">
                    <input class="form-control"  placeholder="Name" type="text" name="name" value="{{ old('name') }}" />
                </div>
                <div class="email">
                    <input class="form-control" placeholder="Email" type="email" name="email" value="{{ old('email') }}" />
                </div>
                <div class="username">
                    <input class="form-control" placeholder="username" type="username" name="username" value="{{ old('username') }}" />
                </div>
                <div class="pass">
                    <input class="form-control" placeholder="Password" type="password" name="password" />
                </div>
                <div class="con">
                    <input class="form-control" type="password" placeholder="Confrim Password" name="password_confirm" />
                </div>
                <input type="text" value="2" name="level" style="display: none;">
                <div class="Reg">
                    <button class="butoon">Register</button> <br>  
                    <a class="nyambung" href="{{ route('login') }}">have an account ? <span>Login</span> </a>
                </div>
            </form> 
        </div>
    </div>
    <div class="latar">
        <img src="./assets/images/logo2.svg" alt="">
    </div>
</body>
</html>