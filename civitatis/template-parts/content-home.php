<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Civitatis
 */
// $count_post = get_query_var('count_post', 0);
// if ($cont_post == 0):
?>
    <div class="carousel-item active">
        <div class="carousel-item">
            <div class="row">
                <div class="col-12 col-md-5 order-2 order-sm-1">
                    <span class="text-date">21 diciembre 2023</span>
                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                    <p>Contempla Barcelona desde las alturas con nuestro recorrido por los mejores miradores. Descubre vistas impresionantes y disfruta de la ciudad desde lo más alto.</p>
                    <div class="tags mb-5 mb-sm-0">
                        <button type="button" class="btn-civitatis-outline-tag">EUROPA</button>
                        <button type="button" class="btn-civitatis-outline-tag">ESPAÑA</button>
                    </div>  
                </div>

                <div class="col-12 col-md-7 order-1 order-sm-2 pb-4 pb-sm-0">
                <img class="mw-100" src="./img/home-hero-banner1.jpeg" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>