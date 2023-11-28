<?php get_header(); ?>

<section>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 mx-auto my-5">
            <div class="row">
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?> 
                    <div class="col-md-4">
                        <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                    </div>
                    <div class="col-md-8">
                        <h2 class="text-uppercase mb-4 color-rose pb-4"><?php the_title(); ?></h2>
                        <p class="pb-4" ><strong>Año publicación: </strong><?php the_field('ano_publicacion_genero');?></p>
                        <p class="pb-4" ><?php the_field('nombre__genero');?></p>
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; ?>	
                <?php else : ?>  
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto my-5">
        <h2 class="text-uppercase mb-4 color-blue">Letra</h2>
            <div class="row">
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?> 
            <div class="col-md-10">
                <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                    <p id="list-item-1"><?php the_field('letra_cancion_genero');?></p>
                </div>
            </div>
            </div>
            <?php endwhile; ?>	
            <?php else : ?>  
            <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<!-- SECCION DE Populares -->
<section class="populares">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto my-5">
            <h2 class="text-uppercase mb-4 color-rose">Más populares</h2>
            <div class="row">
                <?php if (have_posts()) : ?>
                    <?php query_posts("category_name=genero&showposts=6&offset=2"); ?>
                <?php while (have_posts()) : the_post(); ?> 
                        <div class="col-md-2 pt-4 zoom-effect">
                            <a href="<?php the_permalink() ?>">
                                <div>
                                    <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                                    <div class="card-body pt-4">
                                        <h5 class="card-title color-blue"><?php the_title(); ?></h5>
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                <?php endwhile; ?>	
                <?php else : ?>  
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
