<?php
/*
Template Name: Somos
*/
?>
<?php get_header(); ?>

<!-- HEADER -->
<header class="h-somos">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 my-5 mx-auto">
                <div class="row">
                    <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?> 
                    <div class="col-md-6"  data-aos="fade-up" data-aos-duration="3000" >
                        <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                    </div>
                    <div class="col-md-6 d-flex flex-wrap align-items-center"  data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                        <h2><?php the_field('titulo_somos');?></h2>
                        <p><?php the_field('parrafo_somos');?></p>
                    </div>
                    <?php endwhile; ?>	
                    <?php else : ?>  
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- SECCION DE TRABAJADORES DE LA COMPAÑIA  -->
<section class="s-empleados">
    <div class="container">
        <div class="row">
            <div class="col-md-11 my-5 mx-auto">
                <h2 class="text-center my-5" >Estos son los integrantes de nuestro equipo de trabajo</h2>
                <div class="row">
                    <?php if (have_posts()) : ?>
                        <?php query_posts("category_name=somos"); ?>
                    <?php while (have_posts()) : the_post(); ?> 
                        <div class="col-md-4" data-aos="zoom-in">
                            <?php the_post_thumbnail('full', array('class' => 'img-t')); ?>
                            <h4 class="text-center mt-4"><?php the_field('nombre_integrante_somos');?></h4>
                            <p class="text-center mb-4"><?php the_field('cargo_integrante_somos');?></p>
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

<!-- SCRIPTS -->
    <!-- SCRIPT BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <!-- SCRIPT JQUERY -->
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <!-- SCRIPT AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    // Script de AOS

AOS.init();
</script>





<?php get_footer(); ?>