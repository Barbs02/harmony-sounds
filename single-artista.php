<?php get_header(); ?>


<section>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 mx-auto my-5">
            <div class="row">
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?> 
                    <div class="col-md-4">
                        <?php 
                        $image = get_field('slide_imagen_1_productos');
                        if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="col-md-8">
                        <h2 class="text-uppercase mb-4 color-rose"><?php the_title(); ?></h2>
                        <p><?php the_field('oyentes_artista');?> oyentes mensuales</p>
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
        <h2 class="text-uppercase mb-4 color-rose">Descripción</h2>
            <div class="row">
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?> 
            <div class="col-md-5">
                <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                    <p id="list-item-1"><?php the_field('descripcion_artista');?></p>
                </div>
            </div>
            </div>
            <div class="col-md-2"></div>
            <?php endwhile; ?>	
            <?php else : ?>  
            <?php endif; ?>

            <?php wp_reset_query(); ?>
                <?php query_posts("category_name=genero&cat=8"); ?>
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?> 
                <div class="col-md-5">
                    <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                </div>
            <?php endwhile; ?>	
            <?php else : ?>  
            <?php endif; ?>
            <?php wp_reset_query(); ?>
            </div>
        </div>
    </div>
</div>
<!-- SECCION DE Populares -->
<section class="populares">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto my-5">
            <h2 class="text-uppercase mb-4 color-blue">Más populares</h2>
            <div class="row">
                <?php if (have_posts()) : ?>
                    <?php query_posts("category_name=genero&showposts=6&offset=5"); ?>
                <?php while (have_posts()) : the_post(); ?> 
                        <div class="col-md-2 zoom-effect">
                            <a href="<?php the_permalink() ?>">
                                <div class="card" >
                                    <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                                    <div class="card-body">
                                        <h5 class="card-title"><?php the_title(); ?></h5>
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
