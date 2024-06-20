<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Civitatis
 */

get_header();
include get_template_directory() . '/inc/custom-functions.php';
			
$posts_slider_principal = array(
	'posts_per_page' => 4,
	'category__not_in' => array( '76', '73', '77' ), // Reemplaza ID_categoria_1, ID_categoria_2, ID_categoria_3 con los IDs de las categorías que deseas excluir
	'ignore_sticky_posts' => 1 // Ignorar posts fijados en la parte superior
);
$count_post = 0;

$consulta = new WP_Query($posts_slider_principal);

// echo 'Consulta: ' . var_dump($consulta);
?>
	<main id="primary" class="site-main">
		<div class="container mt-2">
		<?php 
			mostrar_carrusel_posts(); 
			mostrar_relational_post();
		?>
		</div>

		<div class="divider-line"></div>

		<!-- Lo más leído de ... 
        #toprankposts
		-->
		<div class="container mt-2 pb-3">
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
		
		<!-- Banner Civitatis 1 -->
		<div class="container my-5">
			<div class="banner">
				<img class="w-100 d-none d-sm-block" src="<?php echo esc_url( get_template_directory_uri() . '/images/banner-civitatis.jpeg' );  ?>" alt="...">
				<img class="w-100 d-block d-sm-none" src="<?php echo esc_url( get_template_directory_uri() . '/images/banner-civitatis-movil.gif' );  ?>" alt="...">
			</div>
		</div>
		<!-- Fin Banner Civitatis 1 -->

		<!-- Actualidad -->
		<div class="container">
			<div class="divider-line"></div>
				<div class="row section-title">
					<h2>Actualidad</h2>
				</div>
			<div class="row related-posts row-cols-1 row-cols-md-3 g-2 g-sm-4 pb-3">
				<?= mostrar_posts_actualidad();?>
			</div>
    	</div>
		<!-- Fin Actualidad -->

		<!-- Mapas Escritorio -->
		<div class="container pb-5 d-none d-sm-block">
			<div class="divider-line"></div>

			<div class="row section-title">
				<h2 class="text-black text-center">¿De qué país te gustaría saber contenido?</h2>
			</div>
			<div class="mapas row row-cols-1 row-cols-md-5">
				<div class="col position-relative">
				<img class="mapa-continente" src="<?php echo esc_url( get_template_directory_uri() . '/images/mapa-america.svg' );  ?>"  alt="...">
					<div class="continente">
						<h3>AMÉRICA</h3>
						<button class="btn btn-continente" href="#">
						Leer más
						<img src="./img/ico-arrow-right.svg" alt="">
						</button>
					</div>
				</div>

				<div class="col position-relative">
					<img class="mapa-continente" src="<?php echo esc_url( get_template_directory_uri() . '/images/mapa-asia.svg' );  ?>"  alt="...">
					<div class="continente">
						<h3>ASIA</h3>
						<button class="btn btn-continente" href="#">
						Leer más
						<img src="./img/ico-arrow-right.svg" alt="">
						</button>
					</div>
				</div>

				<div class="col position-relative">
					<img class="mapa-continente" src="<?php echo esc_url( get_template_directory_uri() . '/images/mapa-africa.svg' );  ?>"  alt="...">
					<div class="continente">
						<h3>ÁFRICA</h3>
						<button class="btn btn-continente" href="#">
						Leer más
						<img src="./img/ico-arrow-right.svg" alt="">
						</button>
					</div>
				</div>

				<div class="col position-relative">
					<img class="mapa-continente" src="<?php echo esc_url( get_template_directory_uri() . '/images/mapa-europa.svg' );  ?>"  alt="...">
					<div class="continente">
						<h3>EUROPA</h3>
						<button class="btn btn-continente" href="#">
						Leer más
						<img src="./img/ico-arrow-right.svg" alt="">
						</button>
					</div>
				</div>

				<div class="col position-relative">
					<img class="mapa-continente" src="<?php echo esc_url( get_template_directory_uri() . '/images/mapa-oceania.svg' );  ?>"  alt="...">
					<div class="continente">
						<h3>OCEANÍA</h3>
						<button class="btn btn-continente" href="#">
						Leer más
						<img src="./img/ico-arrow-right.svg" alt="">
						</button>
					</div>
				</div>
				
			</div>
		</div>
		
		<!-- Mapas movil -->
		<div id="slidermapas" class="carousel slide d-block d-sm-none">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#slidermapas" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#slidermapas" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#slidermapas" data-bs-slide-to="2" aria-label="Slide 3"></button>
				<button type="button" data-bs-target="#slidermapas" data-bs-slide-to="3" aria-label="Slide 4"></button>
				<button type="button" data-bs-target="#slidermapas" data-bs-slide-to="4" aria-label="Slide 5"></button>
			</div>
			<div class="row section-title">
				<h2 class="text-black text-center">¿De qué país te gustaría saber contenido?</h2>
			</div>
			<div class="carousel-inner mapas">
				<div class="col position-relative carousel-item active">
					<img class="mapa-continente" src="<?php echo esc_url( get_template_directory_uri() . '/images/mapa-america.svg' );  ?>"  alt="...">
				<div class="continente">
					<h3>AMÉRICA</h3>
					<button class="btn btn-continente" href="#">
					Leer más
					<img src="./img/ico-arrow-right.svg" class="w-sm-100" alt="">
					</button>
				</div>
				</div>
				
				<div class="col position-relative carousel-item">
					<img class="mapa-continente" src="<?php echo esc_url( get_template_directory_uri() . '/images/mapa-asia.svg' );  ?>"  alt="...">
				<div class="continente">
					<h3>ASIA</h3>
					<button class="btn btn-continente" href="#">
					Leer más
					<img src="./img/ico-arrow-right.svg" class="w-sm-100" alt="">
					</button>
				</div>
				</div>

				<div class="col position-relative carousel-item">
					<img class="mapa-continente" src="<?php echo esc_url( get_template_directory_uri() . '/images/mapa-africa.svg' );  ?>"  alt="...">
					<div class="continente">
						<h3>ÁFRICA</h3>
						<button class="btn btn-continente" href="#">
						Leer más
						<img src="./img/ico-arrow-right.svg" class="w-sm-100" alt="">
						</button>
					</div>
				</div>

				<div class="col position-relative carousel-item">
					<img class="mapa-continente" src="<?php echo esc_url( get_template_directory_uri() . '/images/mapa-europa.svg' );  ?>"  alt="...">
					<div class="continente">
						<h3>EUROPA</h3>
						<button class="btn btn-continente" href="#">
						Leer más
						<img src="./img/ico-arrow-right.svg" class="w-sm-100" alt="">
						</button>
					</div>
				</div>

				<div class="col position-relative carousel-item">
					<img class="mapa-continente" src="<?php echo esc_url( get_template_directory_uri() . '/images/mapa-oceania.svg' );  ?>"  alt="...">
					<div class="continente">
						<h3>OCEANÍA</h3>
						<button class="btn btn-continente" href="#">
						Leer más
						<img src="./img/ico-arrow-right.svg" class="w-sm-100" alt="">
						</button>
					</div>
				</div>
			</div>
		</div>
		<!-- Fin Mapas -->

		<!-- Top destinos en civitatis -->
		<div class="container-fluid bg-body-tertiary">
			<div class="container py-3 pt-sm-5">
				<div class="row section-title pb-2">
				<h2>Top destinos en civitatis</h2>
				</div>
				<div class="row">
				<div class="row top-destinos row-cols-2 row-cols-md-3 g-1 g-sm-4 my-0 my-sm-3">
					<?php mostrar_top_destinos(); ?>

				</div>
				</div>
			</div>
    	</div>
    	<!-- Fin Top destinos en civitatis -->

		<!-- Consejos de viaje -->
		<div class="container py-4 py-sm-5">
			<div class="row section-title pb-2">
				<h2>Consejos de viaje</h2>
			</div>
			<div class="row consejos-viajes row-cols-1 row-cols-md-4 g-4">
				<?php mostrar_consejos_viajes(); ?>
			</div>
		</div>
		<!-- Fin Consejos de viaje -->

		<!-- Actividades -->
		<div class="container-fluid bg-body-tertiary">
			<div class="container py-5">
				<div class="row actividades row-cols-1 row-cols-md-3 g-4">
				<div class="col">
					<div class="card border-0">
					<img src="./img/natalia.jpeg" class="card-img-top" alt="...">
					<div class="card-body">
						<div class="actividad d-flex justify-content-between mb-2">
						<span class="tituloactividad pe-4">Excursión a Auschwitz - Birkenau</span>
						<span class="precioactividad">55€</span>
						</div>
						<div class="resenas d-flex justify-content-start g-2">
						<span class="puntuacion pe-2">8,5/10</span>
						<span class="num-opiniones">22.130 opiniones</span>
						</div>
					</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-0">
					<img src="./img/natalia.jpeg" class="card-img-top" alt="...">
					<div class="card-body">
						<div class="actividad d-flex justify-content-between mb-2">
						<span class="tituloactividad pe-4">Excursión a Auschwitz - Birkenau</span>
						<span class="precioactividad">55€</span>
						</div>
						<div class="resenas d-flex justify-content-start g-2">
						<span class="puntuacion pe-2">8,5/10</span>
						<span class="num-opiniones">22.130 opiniones</span>
						</div>
					</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-0">
					<img src="./img/natalia.jpeg" class="card-img-top" alt="...">
					<div class="card-body">
						<div class="actividad d-flex justify-content-between mb-2 g-4">
						<span class="tituloactividad pe-4">Visita guiada por los Museos Vaticanos y Capilla Sixtina</span>
						<span class="precioactividad">55€</span>
						</div>
						<div class="resenas d-flex justify-content-start g-2">
						<span class="puntuacion pe-2">8,5/10</span>
						<span class="num-opiniones">22.130 opiniones</span>
						</div>
					</div>
					</div>
				</div>
				
				</div>

				<div class="row my-4">
				<div class="d-flex justify-content-center">
					<hr class="hr w-25" />
					<h5 class="colaboración px-4">EN COLABORACIÓN CON CIVITATIS</h5>
					<hr class="hr w-25" />
				</div>
				</div>

				<div class="row my-4">
				<div class="col d-flex justify-content-center">
					<button type="button" class="btn btn-outline-primary">Ver todas las actividades</button>
				</div>
				</div>
			</div>
    	</div>
    	<!-- Fin Actividades -->    



	</main><!-- #main -->

<?php
get_footer();
