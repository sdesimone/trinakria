

<nav class="collapse navbar-collapse bs-navbar-collapse sub-menu shadowin" role="navigation" data-spy="affix" data-offset-top="60">
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
    

    <li class="active visible-affix"><a href="<?php echo site_url(); ?>"><strong><?php echo $destino; ?></strong></a> </li>

    
    <li class="dropdown"> <a href="<?php echo site_url(); ?>/<?php echo $destino; ?>/rutas/" class="dropdown-toggle disabled <?php if($submenu==1) echo 'active';?>" data-toggle="dropdown">Rutas por <?php echo $destino; ?> <b class="caret"></b></a>
      <ul class="dropdown-menu">
      <?php foreach ($data[$destino]['rutas'] as $value) { ?>
        <li><a href="<?php echo site_url(); ?>/<?php echo $destino; ?>/ruta/?ruta=<?php echo $value; ?>" ><?php echo $value; ?></a></li>
      <?php } ?>
      </ul>
    </li>
    
    <li class="dropdown"> <a href="<?php echo site_url(); ?>/<?php echo $destino; ?>/alojamientos/" class="dropdown-toggle disabled <?php if($submenu==2) echo 'active';?>" data-toggle="dropdown">Alojamientos en <?php echo $destino; ?> <b class="caret"></b></a>
      <ul class="dropdown-menu" style="width:220px;">
      <?php foreach ($data[$destino]['zonas'] as $value) { ?>
        <li><a href="<?php echo site_url(); ?>/<?php echo $destino; ?>/alojamientos/zona/?zona=<?php echo $value; ?>"><?php echo $value; ?>  <i class="fa fa-compass fa-2x pull-right rotate<?php echo $data[$value]['position'] ?>"></i></a></li>
        <?php } ?>
      </ul>
    </li>
    
    
    <li class="dropdown"> <a href="<?php echo site_url(); ?>/guia/" class="dropdown-toggle disabled <?php if($submenu==3) echo 'active';?>" data-toggle="dropdown">Guía de <?php echo $destino; ?> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="<?php echo site_url(); ?>/<?php echo $destino; ?>/historia/">Historia</a></li>
        <li><a href="<?php echo site_url(); ?>/<?php echo $destino; ?>/geografia/">Geografía</a></li>
        <li><a href="<?php echo site_url(); ?>/<?php echo $destino; ?>/como-llegar/">Como llegar a <?php echo $destino; ?></a></li>
        <li><a href="<?php echo site_url(); ?>/<?php echo $destino; ?>/eltiempo/">El tiempo</a></li>
        <li><a href="<?php echo site_url(); ?>/<?php echo $destino; ?>/cocina/">La Cocina en <?php echo $destino; ?></a></li>
        <li><a href="<?php echo site_url(); ?>/<?php echo $destino; ?>/eventos/">Eventos en <?php echo $destino; ?></a></li>
      </ul>
    </li>
    
    
    
  </ul>
  <ul class="nav navbar-nav navbar-right visible-affix">
  
    <li> <a href="<?php echo site_url(); ?>/blog/">Blog</a> </li>
    <li> <a href="<?php echo site_url(); ?>/faqs/">FAQs</a> </li>
    <li> <a href="<?php echo site_url(); ?>/contactar/">Contactar</a> </li>
  </ul>
</nav>
