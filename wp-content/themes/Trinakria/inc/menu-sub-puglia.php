

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
    

    <li class="active visible-affix"><a href="<?php echo site_url(); ?>"><strong>Puglia</strong></a> </li>

    
    <li class="dropdown"> <a href="<?php echo site_url(); ?>/puglia/rutas/" class="dropdown-toggle disabled <?php if($submenu==1) echo 'active';?>" data-toggle="dropdown">Rutas por Puglia<b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="<?php echo site_url(); ?>/puglia/rutas/puglia-a-tu-aire" >Puglia a tu aire</a></li>
        <li><a href="<?php echo site_url(); ?>/puglia/rutas/puglia-rural" >Puglia rural</a></li>
        <li><a href="<?php echo site_url(); ?>/puglia/rutas/puglia-con-encanto" >Puglia con encanto</a></li>
      </ul>
    </li>
    
    <li class="dropdown"> <a href="<?php echo site_url(); ?>/puglia/alojamientos/" class="dropdown-toggle disabled <?php if($submenu==2) echo 'active';?>" data-toggle="dropdown">Alojamientos en Puglia<b class="caret"></b></a>
      <ul class="dropdown-menu" style="width:220px;">

        <li><a href="<?php echo site_url(); ?>/puglia/alojamientos/zona-salento">Salento<i class="fa fa-compass fa-2x pull-right rotate<?php echo $data['Salento']['position'] ?>"></i></a></li>
        <li><a href="<?php echo site_url(); ?>/puglia/alojamientos/zona-itria-y-murgia">Valle d'Itria<i class="fa fa-compass fa-2x pull-right rotate<?php echo $data['Valle dItria']['position'] ?>"></i></a></li>
        <li><a href="<?php echo site_url(); ?>/puglia/alojamientos/zona-matera">Matera<i class="fa fa-compass fa-2x pull-right rotate<?php echo $data['Matera']['position'] ?>"></i></a></li>
        <li><a href="<?php echo site_url(); ?>/puglia/alojamientos/zona-gargano">Gargano<i class="fa fa-compass fa-2x pull-right rotate<?php echo $data['Gargano']['position'] ?>"></i></a></li>

      </ul>
    </li>

    <li class="dropdown"> <a href="<?php echo site_url(); ?>/puglia/guia/" class="dropdown-toggle disabled <?php if($submenu==3) echo 'active';?>" data-toggle="dropdown">Guía de Puglia<b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="<?php echo site_url(); ?>/puglia/guia/historia/">Historia</a></li>
        <li><a href="<?php echo site_url(); ?>/puglia/guia/geografia/">Geografía</a></li>
        <li><a href="<?php echo site_url(); ?>/puglia/guia/como-llegar/">Como llegar a Puglia</a></li>
        <li><a href="<?php echo site_url(); ?>/puglia/guia/eltiempo/">El tiempo</a></li>
        <li><a href="<?php echo site_url(); ?>/puglia/guia/cocina/">La Cocina en Puglia</a></li>
        <li><a href="<?php echo site_url(); ?>/puglia/guia/eventos/">Eventos en Puglia</a></li>
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
