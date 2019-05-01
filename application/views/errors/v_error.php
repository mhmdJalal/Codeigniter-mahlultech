    <?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Mahlul Tech, Technology is a solution">
    <meta name="author" content="Muhamad Jalaludin">

    <title>Error 404 : Page not found</title>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?= base_url('assets/css/materialize.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/animate.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/blockScroll.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/owlcarousel/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/owlcarousel/css/owl.theme.default.min.css') ?>">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/icons/simple-line-icons/css/simple-line-icons.css') ?>">

    <link rel="shortcut icon" type="image/ico" href="<?= base_url('assets/img/mahlul.png') ?>" />

    <style type="text/css" media="screen">
      #section {
        height: 400px;
        margin-top: 40px;
      }
    </style>
  </head>
  <body class="font-regular">

    <header class="navbar-fixed">
      <nav class="white" role="navigation">
        <div class="nav-wrapper container">
          <a id="logo-container" href="<?= base_url() ?>" class="brand-logo grey-text text-darken-2">Mahlul Tech</a>
          <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons grey-text">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a class="grey-text text-darken-2" href="<?= base_url() ?>">Home</a></li>
            <li><a class="grey-text text-darken-2" href="<?= base_url('portfolio') ?>">Portfolio</a></li>
            <li><a class="grey-text text-darken-2" href="<?= base_url('blog') ?>">Blog</a></li>
            <li><a class="grey-text text-darken-2" href="<?= base_url('contact') ?>">Contact</a></li>
            <li><a class="grey-text text-darken-2" href="<?= base_url('about') ?>">About Us</a></li>
          </ul>
        </div>
      </nav>
    </header><!-- /header -->

    <!-- Sidenav -->
    <ul class="sidenav" id="nav-mobile">
      <li><a class="waves-effect" href="<?= base_url() ?>">Home</a></li>
      <li><a class="waves-effect" href="<?= base_url('portfolio') ?>">Portfolio</a></li>
      <li><a class="waves-effect" href="<?= base_url('blog') ?>">Blog</a></li>
      <li><a class="waves-effect" href="<?= base_url('contact') ?>">Contact</a></li>
      <li><a class="waves-effect" href="<?= base_url('about') ?>">About Us</a></li>
    </ul>

  	<section class="section" id="section">
  		<div class="container">
  			<div class="row ">
  				<div class="col s12 center-align">
  					<img class="responsive-img" src="<?= base_url('assets/img/startup.png') ?>" alt="">
  				</div>
  				<div class="col s12 center-align">
  					<h3 class="light font-pompadour">Opss!! Error 404</h3>
  					<h5 class="font-pompadour">Page not found!</h5>
  					<a href="<?= base_url() ?>" class="waves-effect waves-light btn teal"><i class="material-icons left">chevron_left</i>Back to home</a>
  				</div>
  			</div>
  		</div>
  	</section>

	   <footer class="page-footer grey lighten-4 grey-text text-darken-2" id="footer">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 >Company Bio</h5>
            <p class="light">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


          </div>
          <div class="col l3 s12">
            <h5>Settings</h5>
            <ul>
              <li><a class="grey-text text-darken-2" href="#!">Link 1</a></li>
              <li><a class="grey-text text-darken-2" href="#!">Link 2</a></li>
              <li><a class="grey-text text-darken-2" href="#!">Link 3</a></li>
              <li><a class="grey-text text-darken-2" href="#!">Link 4</a></li>
            </ul>
          </div>
          <div class="col l3 s12">
            <h5>Connect</h5>
            <ul>
              <li><a class="grey-text text-darken-2" href="#!">Link 1</a></li>
              <li><a class="grey-text text-darken-2" href="#!">Link 2</a></li>
              <li><a class="grey-text text-darken-2" href="#!">Link 3</a></li>
              <li><a class="grey-text text-darken-2" href="#!">Link 4</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright grey lighten-3">
        <div class="container">
          <div class="right-align hide-on-med-and-down grey-text text-darken-3">
            <span class="left">Copyright &copy; 2018 <a class="teal-text" href="<?= base_url() ?>">Mahlul Tech</a>. All rights reserved.</span>
            <a style="margin-left:10px" class="grey-text text-darken-3 tooltipped" data-position="top" data-tooltip="Click this to see our Services" href="">Services</a>
            <a style="margin-left:10px" class="grey-text text-darken-3 tooltipped" data-position="top" data-tooltip="Click this to see our Team" href="">Our Team</a>
            <a style="margin-left:10px" class="grey-text text-darken-3 tooltipped" data-position="top" data-tooltip="Click this to see our Portfolio" href="<?= base_url('Portfolio') ?>">Portfolio</a>
            <a style="margin-left:10px" class="grey-text text-darken-3 tooltipped" data-position="top" data-tooltip="Click this to see our Blog Post's" href="<?= base_url('Blog') ?>">Blog</a>
            <a style="margin-left:10px" class="grey-text text-darken-3 tooltipped" data-position="top" data-tooltip="Click this to see our Contact" href="<?= base_url('Contact') ?>">Contact</a>
            <a style="margin-left:10px" class="grey-text text-darken-3 tooltipped" data-position="top" data-tooltip="Click this to see About Us" href="<?= base_url('About') ?>">About</a>
          </div>
        </div>
      </div>
    </footer>
      


    <!-- Scripts -->
    <script src="<?= base_url('assets/js/jquery.min.js') ?>" charset="utf-8"></script>
    <script src="<?= base_url('assets/js/bin/materialize.js') ?>" charset="utf-8"></script>
    <script src="<?= base_url('assets/js/bin/init.js') ?>" charset="utf-8"></script>
    <script src="<?= base_url('assets/js/plugin/TweenLite.min.js') ?>" charset="utf-8"></script>
    <script src="<?= base_url('assets/js/plugin/CSSPlugin.min.js') ?>" charset="utf-8"></script>
    <script src="<?= base_url('assets/js/plugin/jquery.scrollAnimations.min.js') ?>" charset="utf-8"></script>
    <script src="<?= base_url('assets/owlcarousel/js/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/script.js') ?>" charset="utf-8"></script>
  </body>
</html>
