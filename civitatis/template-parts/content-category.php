<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Civitatis
 */

include get_template_directory() . '/inc/custom-functions.php';
$current_category = get_queried_object();
?>
    <div class="container">
		<div class="row titulo py-4">
			<?php
			if ($current_category) {
				// echo '$current_category: ' . var_dump($current_category);
				echo '<h1>' . esc_html($current_category->name) . '</h1>';
			}
			?>
			<p class="pt-2">Descubre todo sobre los destinos en <span class="destacado">#<?=esc_html($current_category->name)?></span></p>
		</div>
	</div>

	<!-- Categorías por países -->
	<div class="container py-0">
		<div class="row top-destinos row-cols-2 row-cols-md-4 g-1 g-sm-4 my-0 py-0 my-sm-3">
			<?php obtener_subcategorias($current_category->cat_ID); ?>
		</div>
	</div>

	<!-- Banner Civitatis 1 -->
	<div class="container my-5">
		<div class="banner">
			<img class="w-100 d-none d-sm-block" src="<?php echo esc_url( get_template_directory_uri() . '/images/banner-civitatis.jpeg' );  ?>" alt="...">
			<img class="w-100 d-block d-sm-none" src="<?php echo esc_url( get_template_directory_uri() . '/images/banner-civitatis-movil.gif' );  ?>" alt="...">
		</div>
	</div>
	<!-- Fin Banner Civitatis 1 -->

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