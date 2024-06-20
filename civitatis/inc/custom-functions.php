<?php

if (!function_exists('mostrar_carrusel_posts')) {
	function mostrar_carrusel_posts(){
		$posts_slider_principal = array(
			'posts_per_page' => 6,
			'category__not_in' => array( '76', '73', '77' ), // Reemplaza ID_categoria_1, ID_categoria_2, ID_categoria_3 con los IDs de las categorías que deseas excluir
			'ignore_sticky_posts' => 1 // Ignorar posts fijados en la parte superior
		);
		$count_post = 0;
		
		$consulta = new WP_Query($posts_slider_principal);
		?>
		<div class="row">
			<div id="slidetoprank" class="slidetoprank carousel slide">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#slidetoprank" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#slidetoprank" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#slidetoprank" data-bs-slide-to="2" aria-label="Slide 3"></button>
				<button type="button" data-bs-target="#slidetoprank" data-bs-slide-to="3" aria-label="Slide 4"></button>
			</div>
			<div class="carousel-inner">
				
				<?php
				
				if ($consulta->have_posts()) {
					while ($consulta->have_posts()) {
						$consulta->the_post();
						//Recuperamos la imagen destacada.
						$imagen_destacada_url = get_the_post_thumbnail_url();
							// Verifica si hay una imagen destacada
							if ($count_post === 0){
								?>
									<div class="carousel-item active">
								<?php
							}else{
								?>
									<div class="carousel-item">
								<?php
							}

								?>
										<div class="row">
											<div class="col-12 col-md-5 order-2 order-sm-1">
												<span class="text-date">21 diciembre 2023</span>
												<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
												<p>Contempla Barcelona desde las alturas con nuestro recorrido por los mejores miradores. Descubre vistas impresionantes y disfruta de la ciudad desde lo más alto.</p>
												<div class="tags mb-5 mb-sm-0">
													<?php
														// Obtiene las categorías del post actual
														$categorias_post = get_the_category();
														mostrar_categorias_de_post("toprank");
													?>
													<!-- <button type="button" class="btn-civitatis-outline-tag">EUROPA</button>
													<button type="button" class="btn-civitatis-outline-tag">ESPAÑA</button> -->
												</div>  
											</div>

											<div class="col-12 col-md-7 order-1 order-sm-2 pb-4 pb-sm-0">
											<?php if ($imagen_destacada_url){ ?>
												<img class="mw-100 img-destacada" src="<?php echo esc_url($imagen_destacada_url); ?>" class="d-block w-100" alt="...">
											<?php }else{ ?>
												<img class="mw-100 img-destacada" src="<?php echo esc_url( get_template_directory_uri() . '/images/ico_home.svg' );  ?>" class="d-block w-100" alt="...">
											<?php } ?>
											</div>
										</div>
									</div>						
								<?php
						
						// Agrega cualquier otra información que desees mostrar
						$count_post++;
					}
					?>
					<?php
					// wp_reset_postdata(); // Restaura los datos originales del post
				} else {
					// No se encontraron posts
					get_template_part( 'template-parts/content', 'none' );
				}
				?>
				</div>
		</div>
		</div>	
		<?php
	}
}

if (!function_exists('mostrar_relational_post')) {
	function mostrar_relational_post(){
		// Instancia de WP_Query para obtener los últimos posts excluyendo los primeros 4
		$args = array(
			'posts_per_page' => 3, // Obtener todos los posts
			'offset' => 4, // Excluir los primeros 4 posts
		);

		$consulta = new WP_Query($args);
		?>
		<div class="row related-posts rpostabsolute-m row-cols-1 row-cols-md-3 g-4 my-3">
			<?php
			if ($consulta->have_posts()) :
				while ($consulta->have_posts()) :
					$consulta->the_post();
					$imagen_destacada_url = get_the_post_thumbnail_url();

					// Contenido del loop aquí
					?>
					<div class="col">
						<div class="card hover-animation position-relative border-0 rounded-0 bg-image hover-zoom">
							<img src="<?php echo esc_url($imagen_destacada_url); ?>" class="card-img-top"  alt="...">
							<div class="card-body content-post-absolute">
								<span class="post-tag">#civitatisinsider</span>
								<h5><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h5>
							</div>
						</div>
						</div>
					<?php

				endwhile;
				wp_reset_postdata(); // Restaura los datos originales del post
			else :
				// Si no se encontraron posts
				get_template_part( 'template-parts/content', 'none' );
			endif;
		?>
		</div>

	<?php
	}
}

if (!function_exists('mostrar_toprankposts')) {
	function mostrar_toprankposts(){
		// Instancia de WP_Query para obtener los últimos posts excluyendo los primeros 4
		$args = array(
			'order' => 'DESC',
			'category__not_in' => array( '76', '73', '77' ), // Reemplaza ID_categoria_1, ID_categoria_2, ID_categoria_3 con los IDs de las categorías que deseas excluir
			'posts_per_page' => -1,
			'tag'=> 'rank1'
		);

		$count_post = 0;
		$consulta_toprankposts = new WP_Query($args);
		
		if ($consulta_toprankposts->have_posts()) :
			while ($consulta_toprankposts->have_posts()) :
				$consulta_toprankposts->the_post();
				//Recuperamos la imagen destacada.
				$imagen_destacada_url = get_the_post_thumbnail_url();
				// Verifica si hay una imagen destacada
				if ($count_post === 0){
						echo '<div class="carousel-item active">';
				}else{
						echo '<div class="carousel-item">';
				}

					?>
							<div class="row top-rank-post row-cols-1 row-cols-md-2 g-4 my-sm-3">
								<div class="col-12 col-md-8 position-relative d-none d-sm-block">
									<img src="<?php echo esc_url($imagen_destacada_url); ?>" class="w-100"  alt="...">
									<div class="card-body content-post-absolute text-center pe-5">
										<span class="post-tag">ESPAÑA</span>
										<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
										<span class="post-tag"><?php echo get_the_date('j F Y'); ?></span>
									</div>
								</div>

								<div class="col-12 col-md-4">
								<?php
								$count_post++;
								$count_posts_der = 0;
								while ($count_posts_der < 4 && $count_post < $consulta_toprankposts->found_posts ) :
									$consulta_toprankposts->the_post();
								?>
								
									<div class="side-post d-flex flex-column">
										<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
										<span class="excerpt"><?=the_excerpt();?></span>
									</div>
								<?php
									$count_post++;
									$count_posts_der++;
								endwhile;
								?>
								</div>
							</div> <!-- col-12 -->
						</div>
					<?php
						// $count_post++;
					endwhile;
					wp_reset_postdata(); // Restaura los datos originales del post
				else :
					// Si no se encontraron posts
					get_template_part( 'template-parts/content', 'none' );
				endif;
	}
}

if (!function_exists('mostrar_posts_actualidad')) {
	function mostrar_posts_actualidad(){
		
		$posts_actualidad = array(
			'posts_per_page'   => -1,
			'cat'         => 77,
			'orderby'          => 'date',
			'order'            => 'ASC',
			'post_type'        => 'post'
		);
		
		$consulta = new WP_Query($posts_actualidad);
		// echo '<h1>' . $consulta->post_count . '</h1>';
		if ($consulta->have_posts()) :
			while ($consulta->have_posts()) :
				$consulta->the_post();
				//Recuperamos la imagen destacada.
				$imagen_destacada_url = get_the_post_thumbnail_url();
				
				?>
				<div class="col">
					<div class="card hover-animation position-relative border-0 rounded-0">	
						<img src="<?php echo esc_url($imagen_destacada_url); ?>" class="card-img-top"  alt="...">
						<div class="card-body content-post-absolute">
							<span class="post-categories">GENERAL</span>
							<h5><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h5>
						</div>
					</div>
				</div>

			<?php
			endwhile;
			wp_reset_postdata(); // Restaura los datos originales del post
		else :
			// Si no se encontraron posts
			get_template_part( 'template-parts/content', 'none' );
		endif;
	}
}

if (!function_exists('mostrar_top_destinos')) {
	function mostrar_top_destinos(){
		

		?>
		<div class="col">
			<h1>Mostrar iframe con actividades</h1>
		</div>
		<div class="col">
			<h1>Mostrar iframe con actividades</h1>
		</div>
		<div class="col">
			<h1>Mostrar iframe con actividades</h1>
		</div>
		<?php
	}
}

if (!function_exists('mostrar_consejos_viajes')) {
	function mostrar_consejos_viajes(){
		$posts_consejos = array(
			'posts_per_page'   => 4,
			'cat'         => 73,
			'orderby'          => 'date',
			'order'            => 'ASC',
			'post_type'        => 'post'
		);
		
		$consulta = new WP_Query($posts_consejos);
		// echo '<h1>' . $consulta->post_count . '</h1>';
		if ($consulta->have_posts()) :
			while ($consulta->have_posts()) :
				$consulta->the_post();
				//Recuperamos la imagen destacada.
				$imagen_destacada_url = get_the_post_thumbnail_url();
				
				?>
				<div class="col pt-0 pb-3">
					<div class="card border-0">
					<img src="<?php echo esc_url($imagen_destacada_url); ?>" class="card-img-top d-none d-sm-block"  alt="...">
					<div class="card-body p-0">
						<?php mostrar_categorias_de_post("consejos"); ?>
						<p class="card-text"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></p>
					</div>
					</div>
				</div>
				<?php
			endwhile;
			wp_reset_postdata(); // Restaura los datos originales del post
		else :
			// Si no se encontraron posts
			get_template_part( 'template-parts/content', 'none' );
		endif;
	}
}

if (!function_exists('mostrar_categorias_de_post')) {
	function mostrar_categorias_de_post($widget) {
		// Obtiene las categorías del post actual
		$categorias = get_the_category();
		// Verifica si hay categorías asociadas al post
		if ($categorias) {
			// Itera sobre cada categoría y muestra su nombre
			foreach ($categorias as $categoria) {
				// if ($widget === 'consejos') {
				//     echo '<h5 class="card-title d-none d-sm-block">' . mostrar_categorias_de_post("consejos") . '</h5>';
				// } elseif ($widget === 'toprank') {
				//     echo '<a href="' . esc_url(get_category_link($categoria->term_id)) . '"><button type="button" class="btn-civitatis-outline-tag">' . esc_html($categoria->name) . '</button></a>';
				// } else {
				//     echo '<a href="' . esc_url(get_category_link($categoria->term_id)) . '"><button type="button" class="btn-civitatis-outline-tag">' . esc_html($categoria->name) . '</button></a>';
				// }	
				// if($categoria->term_taxonomy_id != 73 ){
				// Si aún no hemos encontrado una categoría hija, o si la actual es más hija que la guardada
				
					switch ($widget) {
						case 'consejos':
							if($categoria->term_taxonomy_id != 73 ){
								echo '<span class="card-title d-none d-sm-block">' . esc_html($categoria->name)  . '</span>';
							}
							break;
						default:
							echo '<a href="' . esc_url(get_category_link($categoria->term_id)) . '"><button type="button" class="btn-civitatis-outline-tag">' . esc_html($categoria->name) . '</button></a>';
							break;
					}
				// }
				// if ($widget == 'consejos'){
				// 	echo '<h5 class="card-title d-none d-sm-block">' . mostrar_categorias_de_post("consejos") . '</h5>';
				// }else{
				// 	echo '<a href="' . esc_url(get_category_link($categoria->term_id)) . '"><button type="button" class="btn-civitatis-outline-tag">' . esc_html($categoria->name) . '</button></a>';
				// }
			}
		} else {
			// Si no hay categorías, puedes mostrar un mensaje predeterminado o dejar este espacio en blanco
			echo 'Sin categorías';
		}
	}
}

if (!function_exists('mostrar_tags_posts')) {
	function mostrar_tags_posts(){
		$tags = get_terms('post_tag');

		if ($tags) {
			// Itera sobre cada categoría y muestra su nombre
			foreach ($tags as $tag) {
				echo '<span class="card-title d-none d-sm-block">' . esc_html($tags->name) . '</span>';
			}
		}
	}
}


if (!function_exists('obtener_subcategorias')) {
	function obtener_subcategorias($cat) {
		// echo 'CAT: ' . $cat;
		$args = array('child_of' => $cat);
		$categorias = get_categories( $args );
		
		if ($categorias) {
			foreach ($categorias as $categoria) {
				// echo '$categoria->term_id: '. $categoria->term_id;
				
				//Recuperamos la imagen del CPT.
				$image_cpt = get_field('imagen_categoria', $categoria);
				// $imagen_cpt = recuperar_imagen_cpt_categorias($categoria->term_id);
				// echo '$imagen_categoria_i: ' . var_dump($imagen_categoria_id);
				// $imagen_categoria_url = '';
				?>

					<div class="col">
						<div class="card hover-animation position-relative border-0 rounded-0">
							<?php
							if ($image_cpt){
								?>
								<img class="card-img-top" src="<?php echo esc_url($image_cpt['url']); ?>" alt="<?php echo esc_attr($image_cpt['alt']); ?>" />
								<?php
							}else{
								?>
								<img src="<?php echo esc_url( get_template_directory_uri() . '/images/cat_alemania.jpeg' ); ?>" class="card-img-top" alt="Hollywood Sign on The Hill">
								<?php
							}
							?>
							
							<div class="card-body content-post-absolute">
								<h5>
									<a href="<?php echo get_category_link($categoria->term_id); ?>" 
									title="<?php sprintf( __( 'View all posts in %s' ), $categoria->name ) ?>"> 
									<?php echo $categoria->name ?>
									</a>
								</h5> 
							</div>
						</div>
					</div>
				<?php
				// if ($imagen_categoria_id) {
				//     $imagen_categoria_url = wp_get_attachment_url(get_post_thumbnail_id($imagen_categoria_id[0]));
				// }
				// if ($imagen_categoria_url) {
					// echo '<img class="card-img-top" src="' . esc_url($imagen_categoria_url) . '" alt="' . esc_attr($categoria->name) . '">';
				// }
			}
		}
	}
}

if (!function_exists('recuperar_imagen_cpt_categorias')) {
	function recuperar_imagen_cpt_categorias($categoria_id){
		// Realiza una consulta personalizada para obtener el CPT "imagen_categoria" relacionado con la categoría
		$args = array(
			'post_type' => 'imagen_categoria',
			'meta_query' => array(
				array(
					'key' => 'categoria_id', // Suponiendo que este es el campo personalizado que relaciona la imagen con la categoría
					'value' => $categoria_id,
					'compare' => '='
				)
			),
			'posts_per_page' => 1
		);

		$query = new WP_Query($args);

		// Si hay resultados, obtiene la URL de la imagen destacada y la muestra
		if ($query->have_posts()) {
			while ($query->have_posts()) {
				$query->the_post();
				$imagen_url = get_the_post_thumbnail_url();
			}
			return $imagen_url;
			wp_reset_postdata(); // Restaura los datos originales del post
		} else {
			echo 'No se encontró ninguna imagen para esta categoría.';
		}
	}
}

//Comprobar si la categoría es la más hija.
if (!function_exists('es_categoria_mashija')) {
	function es_categoria_mashija($categoria_id) {
		// Obtener subcategorías de la categoría actual
		$subcategorias = get_categories(array(
			'child_of' => $categoria_id,
			'hide_empty' => false,
		));

		// Si no hay subcategorías, entonces es una categoría hoja
		if (empty($subcategorias)) {
			return true;
		} else {
			return false;
		}
	}
}

//Obtener los últimos posts de la ciudad
if (!function_exists('obtener_ult_posts_ciudad')){
	function obtener_ult_posts_ciudad($current_category){
		// echo '$current_category: ' . $current_category;
		$posts_actualidad = array(
			'posts_per_page'   => -1,
			'cat'         => $current_category,
			'orderby'          => 'date',
			'order'            => 'ASC',
			'post_type'        => 'post'
		);
		
		$consulta = new WP_Query($posts_actualidad);
		if ($consulta->have_posts()) :
			$cont_post = 0;
			while ($consulta->have_posts() && $cont_post < 3) :
				$consulta->the_post();
				//Recuperamos la imagen destacada.
				$imagen_destacada_url = get_the_post_thumbnail_url();
				
				?>
				<div class="col my-0">
					<div class="card ult-posts-ciudad position-relative border-0 rounded-0">
						<img src="<?php echo esc_url($imagen_destacada_url); ?>" class="card-img-top" alt="Hollywood Sign on The Hill">
						<div class="py-4">
						<h5><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h5>
							<?php 
								$content = get_the_content(); 
							?>
							<p><?php echo wp_trim_words( $content, 50, '...' );?></p>
							<p>28 noviembre 2023</p>	
						</div>
					</div>
				</div>

			<?php
			$cont_post++;
			endwhile;
			if($consulta->post_count > 3)
				return true;
			wp_reset_postdata(); // Restaura los datos originales del post
		else :
			// Si no se encontraron posts
			get_template_part( 'template-parts/content', 'none' );
		endif;
	}
}