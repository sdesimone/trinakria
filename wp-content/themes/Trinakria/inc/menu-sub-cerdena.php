

<nav class="collapse navbar-collapse bs-navbar-collapse sub-menu shadowin" role="navigation" data-spy="affix" data-offset-top="158">
  <ul class="nav navbar-nav">
  

  
    
    
    <li class="dropdown visible-affix"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php bloginfo('template_directory'); ?>/img/favicon.png"  height="24"> <b class="caret"></b></a>
      <ul class="dropdown-menu">
       <li><a href="<?php echo site_url(); ?>">Inicio</a></li>
       <li><a href="<?php echo site_url(); ?>">Quienes somos</a></li>
       <li class="divider"></li>
       <li><a href="<?php echo site_url(); ?>/sicilia/">Sicilia</a></li>
       <li><a href="<?php echo site_url(); ?>/cerdena/">Cerdeña</a></li>
       <li><a href="<?php echo site_url(); ?>/puglia/">Puglia</a></li>
       <li><a href="<?php echo site_url(); ?>/creta/">Creta</a></li>
       <li><a href="<?php echo site_url(); ?>/malta/">Malta</a></li>
       
      </ul>
    </li>
    

    <li class="active visible-affix"><a href="<?php echo site_url(); ?>"><strong>Cerdeña</strong></a> </li>

    
    <li class="dropdown"> <a href="<?php echo site_url(); ?>/cerdena/rutas/" class="dropdown-toggle disabled <?php if($submenu==1) echo 'active';?>" data-toggle="dropdown">Rutas por Cerdeña<b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="<?php echo site_url(); ?>/cerdena/rutas/cerdena-a-tu-aire" >Cerdeña a tu aire</a></li>
        <li><a href="<?php echo site_url(); ?>/cerdena/rutas/cerdena-rural" >Cerdeña rural</a></li>
        <li><a href="<?php echo site_url(); ?>/cerdena/rutas/cerdena-con-encanto" >Cerdeña con encanto</a></li>
      </ul>
    </li>
    
    <li class="dropdown"> <a href="<?php echo site_url(); ?>/cerdena/alojamientos/" class="dropdown-toggle disabled <?php if($submenu==2) echo 'active';?>" data-toggle="dropdown">Alojamientos en Cerdeña<b class="caret"></b></a>
      <ul class="dropdown-menu" style="width:220px;">
	<li><a href="<?php echo site_url(); ?>/cerdena/alojamientos/zona-alghero">Alghero<i class="fa fa-compass fa-2x pull-right rotate<?php echo $data['Alghero']['position'] ?>"></i></a></li>

	<li><a href="<?php echo site_url(); ?>/cerdena/alojamientos/zona-oristano-y-interior">Oristano<i class="fa fa-compass fa-2x pull-right rotate<?php echo $data['Oristano']['position'] ?>"></i></a></li>

	<li><a href="<?php echo site_url(); ?>/cerdena/alojamientos/zona-sulcis-iglesiente">Sulcis-Iglesiente<i class="fa fa-compass fa-2x pull-right rotate<?php echo $data['Sulcis-Iglesiente']['position'] ?>"></i></a></li>

	<li><a href="<?php echo site_url(); ?>/cerdena/alojamientos/zona-cagliari-y-interior">Cagliari<i class="fa fa-compass fa-2x pull-right rotate<?php echo $data['Cagliari']['position'] ?>"></i></a></li>

	<li><a href="<?php echo site_url(); ?>/cerdena/alojamientos/zona-nuoro-y-interior">Orosei<i class="fa fa-compass fa-2x pull-right rotate<?php echo $data['Orosei']['position'] ?>"></i></a></li>

	<li><a href="<?php echo site_url(); ?>/cerdena/alojamientos/zona-gallura">Gallura/C. Esmeralda<i class="fa fa-compass fa-2x pull-right rotate<?php echo $data['Gallura y C. Esmeralda']['position'] ?>"></i></a></li>

      </ul>
    </li>

    <li class="dropdown"> <a href="<?php echo site_url(); ?>/cerdena/guia/" class="dropdown-toggle disabled <?php if($submenu==3) echo 'active';?>" data-toggle="dropdown">Guía de Cerdeña<b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="<?php echo site_url(); ?>/cerdena/guia/historia/">Historia</a></li>
        <li><a href="<?php echo site_url(); ?>/cerdena/guia/geografia/">Geografía</a></li>
        <li><a href="<?php echo site_url(); ?>/cerdena/guia/como-llegar/">Como llegar a Cerdeña</a></li>
        <li><a href="<?php echo site_url(); ?>/cerdena/guia/eltiempo/">El tiempo</a></li>
        <li><a href="<?php echo site_url(); ?>/cerdena/guia/cocina/">La Cocina en Cerdeña</a></li>
        <li><a href="<?php echo site_url(); ?>/cerdena/guia/eventos/">Eventos en Cerdeña</a></li>
      </ul>
    </li>
    
    
    
  </ul>
<!--
  <ul class="nav navbar-nav navbar-right visible-affix">
  
    <li> <a href="<?php echo site_url(); ?>/blog/">Blog</a> </li>
    <li> <a href="<?php echo site_url(); ?>/faqs/">FAQs</a> </li>
    <li> <a href="<?php echo site_url(); ?>/contactar/">Contactar</a> </li>
  </ul>
-->
</nav>
