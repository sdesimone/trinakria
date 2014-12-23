<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="xarop.com">
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.png">
<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/img/apple-touch-icon.png">
<title>Zágara Travel</title>
<link href="<?php bloginfo('template_directory'); ?>/js/fotorama/fotorama.css" rel="stylesheet">
<!--<link href="<?php bloginfo('template_directory'); ?>/js/datepicker/css/datepicker.css" rel="stylesheet"> -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

</head>
<body>

<!-- Header-->
<header>
  <nav class="top" role="navigation">
    <div class="container shadow"> <a href="#" class="navbar-toggle pull-left" data-toggle="collapse" data-target=".bs-navbar-collapse"><img src="<?php bloginfo('template_directory'); ?>/img/favicon.png"  height="24"> MENÚ <b class="caret"></b></a>
      <div class="pull-left hidden-xs"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/favicon.png" height="24"> ZágaraTravel</a> es un proyecto <a href="#">Trinakria Tours</a> especialista en viajes mediterraneos y artesanos. </div>
      <ul class="list-inline pull-right">
        <li class="hidden-xs"><a href="<?php echo site_url(); ?>/faqs/"><span class="visible-sm">FAQs</span><span class="hidden-sm">Preguntas frecuentes</span></a> </li>
        <li class="visible-xs"><a href="<?php echo site_url(); ?>/contactar/">Contactar</a></li>
        
      </ul>
    </div>
  </nav>
  <div class="header container nopadding shadow">
  

    <div class="row hidden-xs">
      <div class="col-md-8 col-sm-8"><a href="<?php echo site_url(); ?>/"><img src="<?php bloginfo('template_directory'); ?>/img/logo.jpg" class="logo img-responsive"></a></div>
      <div class="col-md-4 col-sm-4 text-right">
        <form class="navbar-form search" role="search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Buscar..." name="srch-term" id="srch-term">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
          </div>
        </form>
      </div>
    </div>
    
   
   <?php include_once (TEMPLATEPATH . '/inc/menu-main.php' );?>
   

   
   
  </div>
</header>
<!-- /.header--> 

