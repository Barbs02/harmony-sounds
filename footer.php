<?php wp_footer(); ?>
<footer class="bg-fondo-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 mx-auto p-4">
            <?php if (have_posts()) : ?>
                <?php query_posts("category_name=footer"); ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="row d-flex justify-content-evenly">
                    <div class="col-3">
                    <?php 
                    $image = get_field('logo_footer');
                    if( !empty( $image ) ): ?>
                        <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?> 
                    </div>
                    <div class="col-md-3">
                        <h2 class="mb-4">Contacto</h2>
                        <p><?php the_field('telefono_footer');?></p>
                        <p><?php the_field('email_footer');?></p>
                    </div>
                    <div class="col-md-3">
                        <h2 class="mb-4">Redes Sociales</h2>
                        <div class="row">
                            <div class="col-2 col-sm-3">
                            <?php 
                            $image = get_field('logo_facebook_footer');
                            if( !empty( $image ) ): ?>
                                <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?> 
                            </div>
                            <div class="col-2 col-sm-3">
                            <?php 
                            $image = get_field('logo_instagram_footer');
                            if( !empty( $image ) ): ?>
                                <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?> 
                            </div>
                            <div class="col-2 col-sm-3">
                            <?php 
                            $image = get_field('logo_twitter_footer');
                            if( !empty( $image ) ): ?>
                                <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?> 
                            </div>
                            <div class="col-2 col-sm-3">
                            <?php 
                            $image = get_field('logo_pinterest_footer');
                            if( !empty( $image ) ): ?>
                                <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?> 
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>	
            <?php else : ?>  
            <?php endif; ?>
            <?php wp_reset_query(); ?>
                
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>