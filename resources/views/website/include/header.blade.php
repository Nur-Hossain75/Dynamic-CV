<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="frontend-assets/assets/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="frontend-assets/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="frontend-assets/assets/css/style.css">
</head>
<body>
    <body>
        <!-- menu part start -->
        <section>
            <nav class="navbar navbar-expand-lg nav">
                <div class="container">
                  <a class="navbar-brand text-white" href="{{route('home.page')}}"><strong>Nur Hossain</strong></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class=" ml" id="navbarScroll">
                    <ul class="navbar-nav me-auto mx-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                      <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="{{route('home.page')}}">Home</a>
                      </li>
                      <li class="nav-item">
                        <h3 class="" style="color:rgb(247, 250, 249);">|</h3>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href=""><i class="px-2 fa-solid fa-user-tie" style="color: rgb(247, 250, 249);;"></i>Dashboard</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="{{route('login')}}">Login</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="{{route('register')}}">Sign Up</a>
                      </li>
                     
                    </ul>
                  </div>
                </div>
              </nav>
        </section>
        <!-- menu part end -->