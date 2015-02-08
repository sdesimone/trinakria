

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
    

    <li class="active visible-affix"><a href="<?php echo site_url(); ?>"><strong>Malta</strong></a> </li>

    
    <li class="dropdown"> <a href="<?php echo site_url(); ?>/malta/rutas/" class="dropdown-toggle disabled <?php if($submenu==1) echo 'active';?>" data-toggle="dropdown">Rutas por Malta<b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="<?php echo site_url(); ?>/malta/rutas/malta-a-tu-aire" >Malta a tu aire</a></li>
        <li><a href="<?php echo site_url(); ?>/malta/rutas/malta-con-encanto" >Malta con encanto</a></li>
      </ul>
    </li>
    
    <li class="dropdown"> <a href="<?php echo site_url(); ?>/malta/alojamientos/" class="dropdown-toggle disabled <?php if($submenu==2) echo 'active';?>" data-toggle="dropdown">Alojamientos en Malta<b class="caret"></b></a>
      <ul class="dropdown-menu" style="width:220px;">


        <li><a href="<?php echo site_url(); ?>/malta/alojamientos/zona-malta">Isla de Malta<i class="fa fa-compass fa-2x pull-right rotate<?php echo $data['Salento']['position'] ?>"></i></a></li>
        <li><a href="<?php echo site_url(); ?>/malta/alojamientos/zona-gozo">Isla de Gozo<i class="fa fa-compass fa-2x pull-right rotate<?php echo $data['Valle dItria']['position'] ?>"></i></a></li>
      </ul>
    </li>

    <li class="dropdown"> <a href="<?php echo site_url(); ?>/malta/guia/" class="dropdown-toggle disabled <?php if($submenu==3) echo 'active';?>" data-toggle="dropdown">Guía de Malta<b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="<?php echo site_url(); ?>/malta/guia/historia/">Historia</a></li>
        <li><a href="<?php echo site_url(); ?>/malta/guia/geografia/">Geografía</a></li>
        <li><a href="<?php echo site_url(); ?>/malta/guia/como-llegar/">Como llegar a Malta</a></li>
        <li><a href="<?php echo site_url(); ?>/malta/guia/eltiempo/">El tiempo</a></li>
        <li><a href="<?php echo site_url(); ?>/malta/guia/cocina/">La Cocina en Malta</a></li>
        <li><a href="<?php echo site_url(); ?>/malta/guia/eventos/">Eventos en Malta</a></li>
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
