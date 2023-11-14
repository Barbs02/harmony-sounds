<?php
/*
Template Name: Productos
*/
?>
<?php get_header(); ?>
<!-- SECCION DE PRODUCTOS -->
<section class="productos">
    <div class="container">
        <div class="row">
            <div class="col-md-5 my-5">
                <div class="row d-flex flex-column">

                    
                    <div class="col-md-4 my-3 category_items category-filter" data-category="all">
                        <a href="#" class="btn btn-primary">Todo</a>
                    </div>

                    <div class="col-md-4 my-3 category_items category-filter" data-category="blusas">
                        <a href="#" class="btn btn-primary">Blusas</a>
                    </div>

                    <div class="col-md-4 my-3 category_items category-filter" data-category="pantalones">
                        <a href="#" class="btn btn-primary pants">Pantalones</a>
                    </div>

                    <div class="col-md-4 my-3 category_items category-filter" data-category="zapatos">
                        <a href="#" class="btn btn-primary">Zapatos</a>
                    </div>

                </div>
            </div>
            <div class="col-md-7 my-5" data-aos="zoom-in">
                <div class="category_list">
                    <div class="row">
                        <!-- LOOP DE BLUSAS --------------------------------------------------------------------------- -->

                    <?php if (have_posts()) : ?>
                        <?php query_posts("category_name=blusas"); ?>
                    <?php while (have_posts()) : the_post(); ?> 
                        <div class="col-md-3 product_items" data-category="blusas">
                            <a href="<?php the_permalink() ?>">
                                <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                                <p><?php the_title(); ?></p>
                                <p><strong><?php the_field('precio_producto'); ?></strong></p>
                            </a>
                        </div>
                    <?php endwhile; ?>	
                    <?php else : ?>  
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>

                        <!-- LOOP DE PANTALONES----------------------------------------------------------------------- -->

                    <?php if (have_posts()) : ?>
                        <?php query_posts("category_name=pantalones"); ?>
                    <?php while (have_posts()) : the_post(); ?> 
                        <div class="col-md-3 product_items"  data-category="pantalones">
                            <a href="<?php the_permalink() ?>">
                            <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                            <p><?php the_title(); ?></p>
                            <p><strong><?php the_field('precio_producto'); ?></strong></p>
                            </a>
                        </div>
                    <?php endwhile; ?>
                    <?php else : ?>  
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>

                        <!-- LOOP DE ZAPATOS------------------------------------------------------------------------- -->

                    <?php if (have_posts()) : ?>
                        <?php query_posts("category_name=zapatos"); ?>
                    <?php while (have_posts()) : the_post(); ?> 
                    <div class="col-md-3 product_items"  data-category="zapatos">
                        <a href="<?php the_permalink() ?>">
                        <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                        <p><?php the_title(); ?></p>
                        <p><strong><?php the_field('precio_producto'); ?></strong></p>
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
    </div>
</section>

<!-- SECCION DE INVITACION A COTIZAR -->
<section class="s-cotizar my-5">
    <div class="container">
        <div class="row">
            <?php if (have_posts()) : ?>
                <?php query_posts("category_name=invitacion-cotizar"); ?>
            <?php while (have_posts()) : the_post(); ?> 
            <?php the_post_thumbnail('full', array('class' => 'img-fluid position-relative img-foto')); ?>
            <div class="col-md-10  mx-auto bg-dark opacity-75 py-5 position-absolute bg-position"  data-aos="fade-up" data-aos-duration="3000">
                <div class="row">
                    <div class="col-md-6">
                        <h4><?php the_title(); ?></h4>
                    </div>
                    <div class="col-md-6 d-flex align-items-center justify-content-center">
                        <a href="contacto" class="btn btn-outline-primary ">Cotizar</a>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>	
            <?php else : ?>  
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</section>

    <!-- SCRIPT BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <!-- SCRIPT JQUERY -->
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <!-- SCRIPT AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- SCRIPT PROPIO -->
<script>
// Inizacion AOS
AOS.init();


// SECCION FILTRO-----------------------------------------------------------------------------------------------------------------
    $(document).ready(function(){
        // ACTIVAMOS EL PRIMER ENLACE QUE ENGLOBA TODOS LOS PRODUCTOS =============================================

        $('.category_list .category_items[data-category="all"]').addClass('item-activate');

        // FILTRAMOS LOS PRODUCTOS ==================================================================

        $('.category_items').click(function(){
            var ctProducto = $(this).attr('data-category');
            console.log(ctProducto);

            // AGREGANDO CLASE ACTIVE AL ENLACE SELECCIONADO
            $('.category_items').removeClass('item-activate');
            $(this).addClass('item-activate');


            // OCULTANDO PRODUCTOS =========================
            $('.product_items').css('transform', 'scale(0)');
            function hideProducto(){
                $('.product_items').hide();
            } setTimeout(hideProducto,400);

            // MOSTRANDO PRODUCTOS =========================
            function showProducto(){
                $('.product_items[data-category="'+ctProducto+'"]').show();
                $('.product_items[data-category="'+ctProducto+'"]').css('transform', 'scale(1)');
            } setTimeout(showProducto,400);
        });

        // MOSTRANDO TODOS LOS PRODUCTOS =======================

        $('.category_items[data-category="all"]').click(function(){
            function showAll(){
                $('.product_items').show();
                $('.product_items').css('transform', 'scale(1)');
            } setTimeout(showAll,400);
        });
    })
</script>
<?php get_footer(); ?>