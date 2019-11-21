<!DOCTYPE html>
<html lang="en">


<!-- ###################### HEADER START ########################### -->
<head>

  

  <title><?php bloginfo('title'); ?></title>

   <?php wp_head(); ?>

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

 

</head>
<!-- ###################### HEADER END ########################### -->

<!-- ###################### BODY START ########################### -->

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="http://localhost/Prince/wordpress2/">Start Bootstrap</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
       <!--  <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#team">Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="http://localhost/Prince/wordpress2/index.php/category/blog/">Blog</a>
          </li>
          <li class="nav-item">
            <a class=" nav-link js-scroll-trigger" href="http://localhost/Prince/wordpress2/index.php/signup/">Signup/Login</a>
          </li>
        </ul> -->
        <?php

              wp_nav_menu( array(
              'theme_location' => 'top-menu',
              'depth' => 2,
              'container' => false,
              'menu_class' => 'navbar-nav text-uppercase ml-auto',
              'direct_parent' => true, 
              'sub_menu' => true,
              'show_parent' => true
              ));


        ?>

        


      </div>
    </div>
  </nav>



