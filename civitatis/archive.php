<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Civitatis
 */

get_header();
include get_template_directory() . '/inc/custom-functions.php';
$current_category = get_queried_object();

// get_template_part( 'template-parts/content-category', 'page' );

// Verifica si la categoría es una hoja
if (es_categoria_mashija($current_category->cat_ID)) {
	//Es una categoría sin hijos. Reridigir a plantilla de categoría simple.
	get_template_part( 'template-parts/content-category-child', 'page' );
	// Aquí puedes agregar el código que quieras ejecutar si es una categoría hoja
} else {
	//La categoría tiene subcategorias
	get_template_part( 'template-parts/content-category', 'page' );
}
?>

<?php

get_footer();
