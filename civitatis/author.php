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

?>

    <!-- Contenido Autor -->
    <div class="container py-4">
      <div class="row flex-nowrap">
        <div class="col py-3">
          <div class="autor d-flex align-items-center mb-4 border-bottom">
            <img class="me-5" src="<?php echo esc_url( get_template_directory_uri() . '/images/autor_fernando.png' );  ?>" alt="">
            <div class="d-flex flex-column">
              <div class="nombre mb-2"><a href="#">Fernando García</a></div>
              <span>Última publicación: 25 de noviembre 2023</span>

              <!-- Iconos compartir -->
              <div class="d-flex align-items-center border-top border-bottom border-left-0 border-right-0 py-3">
                <ul class="rrss list-group w-50 list-group-horizontal">
                  <li class="list-group-item align-items-center d-flex border-0 px-2">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/images/ico-insta-rojo.svg' );  ?>"  alt="...">
                  </li>
                  <li class="list-group-item align-items-center d-flex border-0 px-2">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/images/ico-facebook-rojo.svg' );  ?>"  alt="...">
                  </li>
                  <li class="list-group-item align-items-center d-flex border-0 px-2">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/images/ico-twitter-rojo.svg' );  ?>"  alt="...">
                  </li>
                  <li class="list-group-item align-items-center d-flex border-0 px-2">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/images/ico-linkedin-rojo.svg' );  ?>"  alt="...">
                  </li>
              </ul>

              </div>
            </div>
          </div>

          <div class="contenido-post">
            <p><strong>Contempla Barcelona desde las alturas con nuestro recorrido por los mejores miradores. Descubre vistas impresionantes y disfruta de la ciudad desde lo más alto.</strong></p>
            <p>Contemplar una ciudad desde las alturas es una experiencia que todo el mundo debería realizar, ya que ofrece una perspectiva diferente de los atractivos que posee el destino que estamos visitando. Barcelona es una de esas ciudades que merece la pena conocer desde cualquier punto de vista, ya sea paseando por sus calles, disfrutando de sus playas y, cómo no, subiendo a sus miradores. Pero, ¿desde dónde se obtienen las mejores vistas de Barcelona?</p>

            <h3>Experiencia</h3>
            <p>
            Con una carrera en constante movimiento, Fernando se ha destacado como bloguero y viajero apasionado. A lo largo de los años, ha compartido sus vivencias, desde destinos remotos hasta icónicas metrópolis, aportando un enfoque personal y auténtico a sus relatos.</p>
            <p>Su destreza en la escritura y su dedicación a explorar el mundo han convertido su blog en una fuente de inspiración para aquellos que buscan experiencias genuinas y consejos prácticos para sus propios viajes.
            </p>

            <h3>Formación</h3>
            <ul>
                <li>Estudios Académicos: sólida formación académica en periodismo que ha nutrido su perspectiva en los viajes.</li>
                <li>Cursos Especializados: Ha complementado su educación con cursos específicos relacionados con el periodismo de viajes, fotografía, y marketing digital.</li>
                <li>Experiencia Práctica: La verdadera formación de Fernando proviene de su experiencia directa en terreno, explorando diversos destinos y sumergiéndose en distintas culturas.</li>
                <li>Colaboraciones y Redes: Ha establecido conexiones significativas con otros blogueros, expertos en la industria del turismo y comunidades locales, enriqueciendo así su conocimiento y perspectiva.</li>
                <li>Actualización Continua: se mantiene al día con las últimas tendencias y avances en la industria de los viajes, participando activamente en conferencias, talleres y eventos relacionados.</li>
            </ul>

            <h3>Premios</h3>
            <ul>
                <li>Estudios Académicos: sólida formación académica en periodismo que ha nutrido su perspectiva en los viajes.</li>
                <li>Cursos Especializados: Ha complementado su educación con cursos específicos relacionados con el periodismo de viajes, fotografía, y marketing digital.</li>
                <li>Experiencia Práctica: La verdadera formación de Fernando proviene de su experiencia directa en terreno, explorando diversos destinos y sumergiéndose en distintas culturas.</li>
                <li>Colaboraciones y Redes: Ha establecido conexiones significativas con otros blogueros, expertos en la industria del turismo y comunidades locales, enriqueciendo así su conocimiento y perspectiva.</li>
                <li>Actualización Continua: se mantiene al día con las últimas tendencias y avances en la industria de los viajes, participando activamente en conferencias, talleres y eventos relacionados.</li>
            </ul>

          </div>

        </div>
        
        <!-- Sidebar post -->
        <div class="col-auto col-md-3 col-xl-4 px-sm-2 px-0">
          <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 min-vh-100">
            <!-- Lo más leído Sidebar -->
            <div class="row equipo-editorial">
              <div class="container p-3">
                <div class="row section-title">
                  <h2>Nuestro equipo editorial<h2>
                </div>
                <div class="row top-child-category row-cols-1 row-cols-md-1 g-1 g-sm-4 my-0 py-0 my-sm-3">
                    <div class="col my-0">
                      <div class="position-relative border-0 rounded-0">
                          <div class="py-2 border-top border-bottom">
                            <h5><a href="#">Paloma Montes</a></h5>
                            <p class="lh-1">7 artículos</p>
                          </div>
                      </div>
                    </div>
                    <div class="col my-0">
                      <div class="position-relative border-0 rounded-0">
                          <div class="py-2 border-top border-bottom">
                            <h5><a href="#">Paloma Montes</a></h5>
                            <p class="lh-1">7 artículos</p>
                          </div>
                      </div>
                    </div>
                    <div class="col my-0">
                      <div class="position-relative border-0 rounded-0">
                          <div class="py-2 border-top border-bottom">
                            <h5><a href="#">Paloma Montes</a></h5>
                            <p class="lh-1">7 artículos</p>
                          </div>
                      </div>
                    </div>
                    <div class="col my-0">
                      <div class="position-relative border-0 rounded-0">
                          <div class="py-2 border-top border-bottom">
                            <h5><a href="#">Paloma Montes</a></h5>
                            <p class="lh-1">7 artículos</p>
                          </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>

            <div class="row equipo-editorial mt-4">
              <div class="container p-3">
                <div class="row section-title">
                  <h2>Nuestros colaboradores<h2>
                </div>
                <div class="row top-child-category row-cols-1 row-cols-md-1 g-1 g-sm-4 my-0 py-0 my-sm-3">
                    <div class="col my-0">
                      <div class="position-relative border-0 rounded-0">
                          <div class="py-2 border-top border-bottom">
                            <h5><a href="#">Antonio Parrado</a></h5>
                            <p class="lh-1">7 artículos</p>
                          </div>
                      </div>
                    </div>

                    <div class="col my-0">
                      <div class="position-relative border-0 rounded-0">
                          <div class="py-2 border-top border-bottom">
                            <h5><a href="#">Antonio Parrado</a></h5>
                            <p class="lh-1">7 artículos</p>
                          </div>
                      </div>
                    </div>

                    <div class="col my-0">
                      <div class="position-relative border-0 rounded-0">
                          <div class="py-2 border-top border-bottom">
                            <h5><a href="#">Antonio Parrado</a></h5>
                            <p class="lh-1">7 artículos</p>
                          </div>
                      </div>
                    </div>

                    <div class="col my-0">
                      <div class="position-relative border-0 rounded-0">
                          <div class="py-2 border-top border-bottom">
                            <h5><a href="#">Antonio Parrado</a></h5>
                            <p class="lh-1">7 artículos</p>
                          </div>
                      </div>
                    </div>

                    <div class="col my-0">
                      <div class="position-relative border-0 rounded-0">
                          <div class="py-2 border-top border-bottom">
                            <h5><a href="#">Antonio Parrado</a></h5>
                            <p class="lh-1">7 artículos</p>
                          </div>
                      </div>
                    </div>

                    <div class="col my-0">
                      <div class="position-relative border-0 rounded-0">
                          <div class="py-2 border-top border-bottom">
                            <h5><a href="#">Antonio Parrado</a></h5>
                            <p class="lh-1">7 artículos</p>
                          </div>
                      </div>
                    </div>

                    <div class="col my-0">
                      <div class="position-relative border-0 rounded-0">
                          <div class="py-2 border-top border-bottom">
                            <h5><a href="#">Antonio Parrado</a></h5>
                            <p class="lh-1">7 artículos</p>
                          </div>
                      </div>
                    </div>
                    
                </div>
              </div>
            </div>
            <!-- Fin Lo más leído Sidebar -->
          </div>
        </div>
        

      </div>
    </div>
    <!-- Fin Contenido Post -->
    
    <!-- Post Autor -->
    <div class="container py-0">
      <div class="row top-child-category row-cols-2 row-cols-md-3 g-1 g-sm-4 my-0 py-0 my-sm-3">
          <div class="col my-0">
            <div class="card hover-animation position-relative border-0 rounded-0">
                <img src="./img/cat_alemania.jpeg" class="card-img-top" alt="Hollywood Sign on The Hill">
                <div class="py-4">
                  <h5>Los pueblos más bonitos de la Costa Dorada</h5>
                  <p>España puede presumir de tener costas que están entre las más visitadas de Europa, y la costa de Tarragona, conocida como la Costa Dorada, es una de ellas...</p>
                  <p>28 noviembre 2023</p>
                </div>
            </div>
          </div>

          <div class="col my-0">
            <div class="card hover-animation position-relative border-0 rounded-0">
                <img src="./img/cat_alemania.jpeg" class="card-img-top" alt="Hollywood Sign on The Hill">
                <div class="py-4">
                  <h5>Los pueblos más bonitos de la Costa Dorada</h5>
                  <p>España puede presumir de tener costas que están entre las más visitadas de Europa, y la costa de Tarragona, conocida como la Costa Dorada, es una de ellas...</p>
                  <p>28 noviembre 2023</p>
                </div>
            </div>
          </div> 

          <div class="col my-0">
            <div class="card hover-animation position-relative border-0 rounded-0">
                <img src="./img/cat_alemania.jpeg" class="card-img-top" alt="Hollywood Sign on The Hill">
                <div class="py-4">
                  <h5>Los pueblos más bonitos de la Costa Dorada</h5>
                  <p>España puede presumir de tener costas que están entre las más visitadas de Europa, y la costa de Tarragona, conocida como la Costa Dorada, es una de ellas...</p>
                  <p>28 noviembre 2023</p>
                </div>
            </div>
          </div>
          
      </div>
      <div class="row text-center">
        <a href="#" class="button_arrow">Ver más artículos <img class="ps-2" src="img/ico-flecha-light.svg" alt=""></a>
      </div>
    </div>
    <!-- Fin Post Autor -->


<!-- <div id="content" class="narrowcolumn">

    <?php
    $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
    ?>

    <h2>Sobre: <?php echo $curauth->nickname; ?></h2>
    <dl>
        <dt>Website</dt>
        <dd><a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a></dd>
        <dt>Perfil</dt>
        <dd><?php echo $curauth->user_description; ?></dd>
    </dl>

    <h2>Artículos de <?php echo $curauth->nickname; ?>:</h2>

    <ul>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <li>
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
            <?php the_title(); ?></a>,
            <?php the_time('d M Y'); ?> in <?php the_category('&');?>
        </li>

    <?php endwhile; else: ?>
        <p><?php _e('No posts by this author.'); ?></p>

    <?php endif; ?>

    </ul>
</div> -->



<?
get_footer();