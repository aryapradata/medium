<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/header.css">

    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap/bootstrap.min.css')?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>" />


  </head>
<body>
        
<!--::header part start::-->
<header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="<?= base_url('assets/img/m.png')?>" alt="logo" height="60px" width="250px"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.html">Subscribe</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.html">Write</a>
                                </li>
                                <li class="nav-item active">
                                   
                                </li>
                                <ul class="nav justify-content-end">
                                    <li class="nav-item">
                                      <a class="nav-link active" data-toggle="modal" data-target="#exampleModal"> Sign In </a>
                                    </li>
                                </ul>
                                <li class="nav-item active">
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal1">
                                      Get Started
                                    </button>  
                                  </li>
                            
                                
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    
    <div class="container">
  <div class="row">
    <div class="col-sm">
      One of three columns
    </div>
    <div class="col-sm">
      
         <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                
                    <div class="banner_text">
                        <div class="banner_text_iner text-center">
                            
                            <h3>Get smarter about what </h3>
                            <br>
                            <h3> matters to you.</h3>
                            <br>

                            <div class="mybox">
                               <p> <img src="img/hashtag.png" class="mypic"> Future</p>
                            </div>

                            <!-- <form action="post">
                                <div class="mybox">
                                    <input type="radio" name="future" src="img/hashtag.png" class="mypic" ><p>future </p>
                                </div>
                            </form> -->

                            <br>
                            <h4> Select what you're into. We'll help you find great things to read. </h4>
                            <br>
                            <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#exampleModal1">
                            GET STARTED
                            </button>  
                            <br>
                            <br>
                            <h4>Already have an account?</h4> <a href="#exampleModal" class="btn btn-link" data-toggle="modal" data-target="#exampleModal">Sign in</a> 
                            
                        </div>
                    </div>
            
            </div>
        </div>
        
        <div class="hero-app-1 custom-animation"><img src="img/animate_icon/icon_1.png" alt=""></div>
        <div class="hero-app-5 custom-animation2"><img src="img/animate_icon/icon_3.png" alt=""></div>
        <div class="hero-app-7 custom-animation3"><img src="img/animate_icon/icon_2.png" alt=""></div>
        <div class="hero-app-8 custom-animation"><img src="img/animate_icon/icon_4.png" alt=""></div>
    </section>
    <!-- banner part start-->

    </div>
    <div class="col-sm">
      One of three columns
    </div>
  </div>
</div>


</body>
</html>