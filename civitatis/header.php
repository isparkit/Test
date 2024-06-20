<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Civitatis
 */

if ( has_custom_logo() ) :
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$image_logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
endif;

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'civitatis' ); ?></a>

    <header>
			<!-- TOP HEADER -->
			<div class="container text-center d-flex flex-row justify-content-between align-items-center">
				<div class="d-none d-sm-block h-ico">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/ico_home.svg' ); ?>" alt="" ></a>
				</div>
				
				<div class="d-block d-sm-none mobile-device-tab">
					<!-- Collapsible wrapper -->
							<div class="navbar-collapse mobile-device" id="navbarhover">
									<?php
									wp_nav_menu(array(
											'theme_location' => 'principal',
											'container' => false,
											'menu_class' => 'navbar-nav mx-auto ps-lg-0',
											'depth' => 2,
											'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
											'walker' => new wp_bootstrap_navwalker(),
									));
									?>
							</div>
							<!-- Collapsible wrapper -->
				</div>
				
				<div class="">
					<a class="navbar-brand" href="#">
						<img class="logo-img" src="<?=$image_logo[0]?>" alt="Bootstrap">
					</a>
				</div>

				<!-- IDIOMAS -->
				<div class="">
					<div class="d-flex justify-content-end align-items-center">
						<div class="languages pe-3 d-none d-sm-block">
							ESP
						</div>
						<img src="<?php echo esc_url( get_template_directory_uri() . '/images/ico_search.svg' ); ?>" alt="Home">
					</div>
					
				</div>
			</div>
			<!-- FIN TOP HEADER -->

			<!-- MENU ESCRITORIO -->
      <div class="menu-civitatis container-fluid text-center p-0 d-none d-sm-block desktop-menu">
    		<nav class="navbar navbar-expand-lg" style="padding: 0px;">
					<!-- Container wrapper -->
					<div class="container-fluid">

							<!-- Collapsible wrapper -->
							<div class="collapse navbar-collapse" id="navbarhover">
									<?php
									wp_nav_menu(array(
											'theme_location' => 'principal',
											'container' => false,
											'menu_class' => 'navbar-nav mx-auto ps-lg-0',
											'depth' => 2,
											'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
											'walker' => new wp_bootstrap_navwalker(),
									));
									?>
							</div>
							<!-- Collapsible wrapper -->
					</div>
					<!-- Container wrapper -->
				</nav>
			</div>
	  	<!-- FIN MENU ESCRITORIO -->

	  	<!-- MENU MOVIL -->
      <!-- <div class="menu-movil d-block d-sm-none">
        <nav class="navbar fixed-top">
          <div class="container-fluid">
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
              <div class="offcanvas-header">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/images/logo-movil.svg' ); ?>" alt="">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1">
                  <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Europa
                    </a>
                    <ul class="dropdown-menu rounded-0">
                      <li><a class="dropdown-item" href="#">Alemania</a></li>
                      <li><a class="dropdown-item" href="#">Austria</a></li>
                      <li><a class="dropdown-item" href="#">Bélgica</a></li>
                      <li><a class="dropdown-item" href="#">Bosnia y Herzegobina</a></li>
                      <li><a class="dropdown-item" href="#">Bulgaria</a></li>
                      <li><a class="dropdown-item" href="#">Dinamarca</a></li>
                      <li><a class="dropdown-item" href="#">España</a></li>
                      <li><a class="dropdown-item" href="#">España</a></li>
                      <li><a class="dropdown-item" href="#">España</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">América</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Asia
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                </ul>
                <div class="rrss">
                  <h5>Síguenos en las redes</h5>
                  <div class="d-flex justify-content-between px-5 pt-3">
                    <div class=""><img src="./img/ico-instagram.svg" alt=""></div>
                    <div class=""><img src="./img/ico-facebook.svg" alt=""></div>
                    <div class=""><img src="./img/ico-twitter.svg" alt=""></div>
                    <div class=""><img src="./img/ico-linkedin.svg" alt=""></div>
                    <div class=""><img src="./img/ico-youtube.svg" alt=""></div>
                    <div class=""><img src="./img/ico-tiktok.svg" alt=""></div>
                    <div class=""><img src="./img/ico-pinterest.svg" alt=""></div>
                  </div>
                </div>
                <div class="idioma">
                  <h5>Selecciona tu idioma</h5>
                  <div class="d-flex justify-content-between px-5 pt-3">
                    <div class=""><img src="./img/ico-instagram.svg" alt=""></div>
                    <div class=""><img src="./img/ico-facebook.svg" alt=""></div>
                    <div class=""><img src="./img/ico-twitter.svg" alt=""></div>
                    <div class=""><img src="./img/ico-linkedin.svg" alt=""></div>
                    <div class=""><img src="./img/ico-youtube.svg" alt=""></div>
                    <div class=""><img src="./img/ico-tiktok.svg" alt=""></div>
                    <div class=""><img src="./img/ico-pinterest.svg" alt=""></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div> -->
	  	<!-- FIN MENU MOVIL -->
        
    </header>
