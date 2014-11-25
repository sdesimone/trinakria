<?php 
global $post;
if($post->post_parent) { $post_data = get_post($post->post_parent);
$parent =  $post_data->post_name; }
else {$parent = get_post( $post )->post_name;}
//echo $parent;
?>
<!--<nav class="collapse navbar-collapse bs-navbar-collapse main shadowin" role="navigation"> -->
<nav class="collapse navbar-collapse bs-navbar-collapse main shadowin"  role="navigation" data-spy="affix" data-offset-top="60">
  <ul class="nav navbar-nav">
    <li class="<?php if (is_home()){ echo 'active'; }?>"><a href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/favicon.png"  height="24" class="visible-affix"> Inicio</a> </li>
    <li class="dropdown"> <a href="<?php echo site_url(); ?>/quienes-somos/" class="dropdown-toggle disabled" data-toggle="dropdown">Quienes somos <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="<?php echo site_url(); ?>/quienes-somos/">¡Nosotros!</a></li>
        <li><a href="<?php echo site_url(); ?>/filosofia/">Filosofia</a></li>
        <li><a href="<?php echo site_url(); ?>/porque/">Porqué ZÁGARA</a></li>
        <li><a href="<?php echo site_url(); ?>/testimonios/">Nuestros Clientes dicen...</a></li>
        <li><a href="<?php echo site_url(); ?>/faqs/">Preguntas Frecuentes</a></li>
        <li><a href="<?php echo site_url(); ?>/oficinas/">Oficinas</a></li>
      </ul>
    </li>
    <li class="dropdown"> <a href="<?php echo site_url(); ?>/sicilia/"  data-toggle="dropdown" class="dropdown-toggle disabled <?php if ($parent=='sicilia') echo 'active'; ?>">Sicilia <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="<?php echo site_url(); ?>/sicilia/rutas/">Rutas por Sicilia</a></li>
        <li><a href="<?php echo site_url(); ?>/sicilia/alojamientos/">Alojamientos en Sicilia</a></li>
        <li><a href="<?php echo site_url(); ?>/sicilia/guia/">Guia de Sicilia</a></li>
      </ul>
    </li>
    <li class="dropdown">
    <a href="<?php echo site_url(); ?>/cerdena/"  data-toggle="dropdown" class="dropdown-toggle disabled <?php if ($parent=='cerdena') echo 'active'; ?>">Cerdeña <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="<?php echo site_url(); ?>/cerdena/rutas/">Rutas por Cerdeña</a></li>
        <li><a href="<?php echo site_url(); ?>/cerdena/alojamientos/">Alojamientos en Cerdeña</a></li>
        <li><a href="<?php echo site_url(); ?>/cerdena/guia/">Guia de Cerdeña</a></li>
      </ul>
    </li>
    <li class="dropdown"> <a href="<?php echo site_url(); ?>/puglia/"  data-toggle="dropdown" class="dropdown-toggle disabled <?php if ($parent=='puglia') echo 'active'; ?>">Puglia <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="<?php echo site_url(); ?>/puglia/rutas/">Rutas por Puglia</a></li>
        <li><a href="<?php echo site_url(); ?>/puglia/alojamientos/">Alojamientos en Puglia</a></li>
        <li><a href="<?php echo site_url(); ?>/puglia/guia/">Guia de Puglia</a></li>
      </ul>
    </li>
    <li class="dropdown"> <a href="<?php echo site_url(); ?>/creta/"  data-toggle="dropdown" class="dropdown-toggle disabled <?php if ($parent=='creta') echo 'active'; ?>">Creta <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="<?php echo site_url(); ?>/creta/rutas/">Rutas por Creta</a></li>
        <li><a href="<?php echo site_url(); ?>/creta/alojamientos/">Alojamientos en Creta</a></li>
        <li><a href="<?php echo site_url(); ?>/creta/guia/">Guia de Creta</a></li>
      </ul>
    </li>
    <li class="dropdown"> <a href="<?php echo site_url(); ?>/malta/"  data-toggle="dropdown" class="dropdown-toggle disabled <?php if ($parent=='malta') echo 'active'; ?>">Malta <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="<?php echo site_url(); ?>/malta/rutas/">Rutas por Malta</a></li>
        <li><a href="<?php echo site_url(); ?>/malta/alojamientos/">Alojamientos en Malta</a></li>
        <li><a href="<?php echo site_url(); ?>/malta/guia/">Guia de Malta</a></li>
      </ul>
    </li>
  </ul>
  <ul class="nav navbar-nav navbar-right">
    <li> <a href="<?php echo site_url(); ?>/blog/">Blog</a> </li>
    <!--<li><a href="<?php echo site_url(); ?>/faqs/">FAQs</a> </li> -->
    <li><strong><a href="<?php echo site_url(); ?>/contactar/">Contactar</a></strong></li>
  </ul>
</nav>
