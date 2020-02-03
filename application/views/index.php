<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/header.css">

    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>" />

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

</body>
</html>