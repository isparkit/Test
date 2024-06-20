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
				<div class="d-none d-sm-block">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/ico_home.svg' ); ?>" alt="" ></a>
				</div>
				
				<div class="d-block d-sm-none">
					<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/images/ico-menu.svg' ); ?>" alt="Menu movil" >
					</button>
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
      <div class="menu-civitatis container-fluid text-center p-0 d-none d-sm-block">
				<!-- Collapsible wrapper -->
				<div class="collapse navbar-collapse" id="navbarhover">
					<nav class="navbar navbar-expand-lg" style="padding: 0px;">
              <!-- Container wrapper -->
              <div class="container-fluid">
                <!-- Toggle button -->
                <button class="navbar-toggler px-0" type="button" data-mdb-toggle="collapse"
                  data-mdb-target="#navbarhover" aria-controls="navbarhover" aria-expanded="false"
                  aria-label="Toggle navigation">
                  <i class="fas fa-bars"></i>
                </button>
            
                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse" id="navbarhover">
									<?php
									// wp_die(var_dump(get_registered_nav_menus()));
									wp_nav_menu(
										array(
											'theme_location' 	=> 'principal',
											'menu_id'        	=> 'principal',
											'container'				=> 'navbar navbar-expand-lg',
											'container_id'		=> 'nav',
											'menu_class'			=> 'navbar-nav mx-auto ps-lg-0',
											'add_li_class'		=> 'nav-item'
										)
									);
									?>
								</div>
							</div>
					</nav>
          <!-- <nav class="navbar navbar-expand-lg" style="padding: 0px;">
              <div class="container-fluid">
                <button class="navbar-toggler px-0" type="button" data-mdb-toggle="collapse"
                  data-mdb-target="#navbarhover" aria-controls="navbarhover" aria-expanded="false"
                  aria-label="Toggle navigation">
                  <i class="fas fa-bars"></i>
                </button>
            
                <div class="collapse navbar-collapse" id="navbarhover">
                  <ul class="navbar-nav mx-auto ps-lg-0" style="padding-left: 0.15rem">
                    <li class="nav-item">
                      <a class="nav-link" href="#">EUROPA</a>
                    </li>

                    <li class="nav-item dropdown dropdown-hover position-static">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-mdb-toggle="dropdown" aria-expanded="false">
                        AMÉRICA
                      </a>
                    
                      <div class="megamenu-civitatis dropdown-menu w-100 mt-0" aria-labelledby="navbarDropdown" style="border-top-left-radius: 0;
                                        border-top-right-radius: 0;
                                      ">
            
                        <div class="container">
                          <div class="row my-4">
                            <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                              <div class="list-group list-group-flush">
                                <a href="" class="list-group-item list-group-item-action main-cat">Lorem ipsum</a>
                                <a href="" class="list-group-item list-group-item-action">Dolor sit</a>
                                <a href="" class="list-group-item list-group-item-action">Amet consectetur</a>
                                <a href="" class="list-group-item list-group-item-action">Cras justo odio</a>
                                <a href="" class="list-group-item list-group-item-action">Adipisicing elit</a>
                              </div>
                            </div>
                            <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                              <div class="list-group list-group-flush">
                                <a href="" class="list-group-item list-group-item-action main-cat">Explicabo voluptas</a>
                                <a href="" class="list-group-item list-group-item-action">Perspiciatis quo</a>
                                <a href="" class="list-group-item list-group-item-action">Cras justo odio</a>
                                <a href="" class="list-group-item list-group-item-action">Laudantium maiores</a>
                                <a href="" class="list-group-item list-group-item-action">Provident dolor</a>
                              </div>
                            </div>
                            <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
                              <div class="list-group list-group-flush">
                                <a href="" class="list-group-item list-group-item-action main-cat">Iste quaerato</a>
                                <a href="" class="list-group-item list-group-item-action">Cras justo odio</a>
                                <a href="" class="list-group-item list-group-item-action">Est iure</a>
                                <a href="" class="list-group-item list-group-item-action">Praesentium</a>
                                <a href="" class="list-group-item list-group-item-action">Laboriosam</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </nav> -->
						</div>
					</div>
	  	<!-- FIN MENU ESCRITORIO -->

	  	<!-- MENU MOVIL -->
      <div class="menu-movil d-block d-sm-none">
        <nav class="navbar fixed-top">
          <div class="container-fluid">
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button> -->
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
      </div>
	  	<!-- FIN MENU MOVIL -->
        
    </header>
