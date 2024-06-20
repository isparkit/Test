<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Civitatis
 */
include get_template_directory() . '/inc/custom-functions.php';
get_header();

while ( have_posts() ) :
	the_post();
?>

    <!-- Título e imagen Post -->
    <div class="container">
        <div class="row titulo py-4 text-center">
        <?php 
          $categories = get_the_category();
          $main_category = $categories[0];
          // echo '<p>Categoría principal: <a href="' . esc_url(get_category_link($main_category->term_id)) . '">' . esc_html($main_category->name) . '</a></p>';
        ?>
          <a style="text-transform: uppercase" href="<?= esc_url(get_category_link($main_category->term_id)) ?>" class="destacado pb-2"><?= esc_html($main_category->name)?></a>
          <?php the_title( '<h1>', '</h1>' );?>
        </div>
        <div class="row imagen-post">
          <!-- <img class="w-100 p-0" src="img/viajar-mascota.jpg" alt=""> -->
		      <?php echo get_the_post_thumbnail(); ?>
        </div>
    </div>
    <!-- Fin Título e imagen Post -->

    <!-- Contenido Post -->
    <div class="container py-4">
      <div class="row flex-nowrap">
        <div class="col py-3">
          <div class="autor d-flex align-items-center mb-4">
            <!-- <img class="me-3" src="./img/autor_fernando.png" alt=""> -->
            <?php 
              //Obtenemos la imagen del autor
              $author_id = get_the_author_meta('ID');
              echo get_avatar($author_id, 64);
            ?>
            <div class="d-flex flex-column">
              <div class="nombre">por <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="destacado"><?php echo get_the_author(); ?></a></div>
              <span class="fecha-publi"><?php echo get_the_date('j F Y'); ?></span>
            </div>
          </div>

          <div class="contenido-post">
            <?php the_content(); ?>
          </div>

          <div class="categorias-post">
            <div class="d-flex align-items-center border-top border-left-0 border-right-0 py-3">
              <span class="me-2">Más en</span>
              <div class="tags mb-5 mb-sm-0">
                <button type="button" class="btn-civitatis-outline-tag">EUROPA</button>
                <button type="button" class="btn-civitatis-outline-tag">ESPAÑA</button>
              </div>

            </div>
            <!-- Iconos compartir -->
            <div class="d-flex align-items-center border-top border-left-0 border-right-0 py-3">
              <span class="me-2">COMPÁRTELO</span>
              <ul class="list-group w-50 list-group-horizontal">
                <li class="list-group-item align-items-center d-flex border-0 px-2">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/images/ico-insta-gris.svg' );  ?>" alt="">
                </li>
                <li class="list-group-item align-items-center d-flex border-0 px-2">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/images/ico-facebook-gris.svg' );  ?>" alt="">
                </li>
                <li class="list-group-item align-items-center d-flex border-0 px-2">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/images/ico-twitter-gris.svg' );  ?>" alt="">
                </li>
                <li class="list-group-item align-items-center d-flex border-0 px-2">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/images/ico-linkedin-gris.svg' );  ?>" alt="">
                </li>
                <li class="list-group-item align-items-center d-flex border-0 px-2">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/images/ico-youtube-gris.svg' );  ?>" alt="">
                </li>
                <li class="list-group-item align-items-center d-flex border-0 px-2">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/images/ico-tiktok-gris.svg' );  ?>" alt="">
                </li>
                <li class="list-group-item align-items-center d-flex border-0 px-2">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/images/ico-pinterest-gris.svg' );  ?>" alt="">
                </li>
            </ul>

            </div>

            <div class="d-flex flex-column align-items-start border-top border-bottom border-left-0 border-right-0 py-3">
              <span class="me-2 mb-4">COMENTARIOS</span>
              <div class="comentarios">
              <?php 
              // If comments are open or we have at least one comment, load up the comment template.
              if ( comments_open() || get_comments_number() ) :
                comments_template();
              endif;
              ?>      
              </div>

            </div>
          </div>
        </div>
        
        <!-- Sidebar post -->
        <div class="col-auto col-md-3 col-xl-4 px-sm-2 px-0">
          <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 min-vh-100">
            <div class="mb-5">
              IFRAME ACTIVIDADES
            </div>
            <!-- Lo más leído Sidebar -->
            <div class="row">
              <div class="container py-0">
                <div class="row section-title">
                  <h2>Lo más leidos de #Barcelona<h2>
                </div>
                <div class="row top-child-category row-cols-1 row-cols-md-1 g-1 g-sm-4 my-0 py-0 my-sm-3">
                    <div class="col my-0">
                      <div class="card hover-animation position-relative border-0 rounded-0">
                          <div class="py-2 border-top border-bottom">
                            <h5><a href="#">Los pueblos más bonitos de la Costa Dorada</a></h5>
                            <p class="lh-1">28 noviembre 2023</p>
                          </div>
                      </div>
                    </div>

                    <div class="col my-0">
                      <div class="card hover-animation position-relative border-0 rounded-0">
                          <div class="py-2 border-top border-bottom">
                            <h5><a href="#">Los pueblos más bonitos de la Costa Dorada</a></h5>
                            <p class="lh-1">28 noviembre 2023</p>
                          </div>
                      </div>
                    </div> 

                    <div class="col my-0">
                      <div class="card hover-animation position-relative border-0 rounded-0">
                          <div class="py-2 border-top border-bottom">
                            <h5><a href="#">Los pueblos más bonitos de la Costa Dorada</a></h5>
                            <p class="lh-1">28 noviembre 2023</p>
                          </div>
                      </div>
                    </div>

                    <div class="col my-0">
                      <div class="card hover-animation position-relative border-0 rounded-0">
                          <div class="py-2 border-top border-bottom">
                            <h5><a href="#">Los pueblos más bonitos de la Costa Dorada</a></h5>
                            <p class="lh-1">28 noviembre 2023</p>
                          </div>
                      </div>
                    </div>

                    <div class="col my-0">
                      <div class="card hover-animation position-relative border-0 rounded-0">
                          <div class="py-2 border-top border-bottom">
                            <h5><a href="#">Los pueblos más bonitos de la Costa Dorada</a></h5>
                            <p class="lh-1">28 noviembre 2023</p>
                          </div>
                      </div>
                    </div>
                    
                </div>
              </div>
            </div>
            <!-- Fin Lo más leído Sidebar -->

            <!-- banner -->
            <div class="row mx-auto">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/images/banner-sidebar.jpeg' );  ?>" alt="">
            </div>
          </div>
        </div>
        

      </div>
    </div>
    <!-- Fin Contenido Post -->

	<!-- Lo más leído de ... 
        #toprankposts
		-->
	<div class="container mt-2 mb-5 pb-3">
		<div class="row section-title">
			<h2>Lo más leído de #EUROPA</h2>
		</div>

		<div class="row">
			<div id="toprankposts" class="toprankposts carousel slide">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#toprankposts" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#toprankposts" data-bs-slide-to="1" aria-label="Slide 2"></button>
					<button type="button" data-bs-target="#toprankposts" data-bs-slide-to="2" aria-label="Slide 3"></button>
				</div>

				<div class="carousel-inner">
					<?= mostrar_toprankposts(); ?>
				</div> <!-- carousel-inner -->
			</div> <!-- toprankposts -->
		</div> <!-- row -->
	</div> <!-- container -->
	<!-- Fin lo más leido -->

<?
	endwhile; // End of the loop.
get_footer();
