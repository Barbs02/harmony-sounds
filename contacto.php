<?php
/*
Template Name: Contacto
*/
?>
<?php get_header(); ?>

<!-- SECCION INVITACION A VISITAR NUESTRA TIENDA ----------------------------------------------------------->

<section class="f-contacto">
    <div class="container">
        <div class="row">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?> 
            <div class="col-md-12 my-3 mx-auto">
                <h3><?php the_field('mensaje_contacto');?></h3>
            </div>
            <div class="col-md-12 d-flex justify-content-center">
                <div class="col-md-3">
                    <div class="texto">
                    <?php 
                    $image = get_field('firma_contacto');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
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
<!-- HORARIOS DE ATENCION, NUMEROS DE TELEFONO, CORREO ELECTRONICO Y REDES SOCIALES------------------------------------ -->
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto my-5">
                <div class="row">
                    <div class="col-md-6">
                        <h4><?php the_field('titulo_horario_de_atencion_contacto');?></h4>
                        <p><?php the_field('horarios_contacto');?></p>
                    </div>
                    <div class="col-md-6">
                        <?php 
                        $image = get_field('imagen_horario_contacto');
                        if( !empty( $image ) ): ?>
                            <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- UBICACION---------------------------------------------------------------------------------------- -->
<section class="c-ubicacion">
    <div class="container p-4">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="row">
                    <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?> 
                    <div class="col-md-6 d-flex align-items-center flex-wrap">
                        <?php the_field('ubicacion_contacto');?> 
                    </div>
                    <div class="col-md-6">
                        <h4><?php the_field('titulo_ubicacion_contacto');?></h4>
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>Número de Telefonos:</strong></p>
                                <p><?php the_field('telefonos_contacto');?></p>
                                <p><?php the_field('telefonos_contacto_2');?></p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Correos electrónicos:</strong></p>
                                <p><?php the_field('email_contacto');?></p>
                                <p><?php the_field('email_contacto_2');?></p>
                            </div>
                            <div class="col-md-12">
                                <p><strong>Redes sociales:</strong><br></p>
                                <div class="row">
                                    <div class="col-2 p-0 mx-auto">
                                        <?php 
                                        $image = get_field('imagen_red_social_1_contacto');
                                        if( !empty( $image ) ): ?>
                                            <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                        <?php endif; ?> 
                                        <p class="me-2 mt-2"><?php the_field('redes_sociales_1_contacto');?><br></p>
                                    </div>
                                    <div class="col-2 p-0 mx-auto">
                                        <?php 
                                        $image = get_field('imagen_red_social_2_contacto');
                                        if( !empty( $image ) ): ?>
                                            <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                        <?php endif; ?> 
                                        <p class="me-2 mt-2"><?php the_field('redes_sociales_2_contacto');?><br></p>
                                    </div>
                                    <div class="col-2 p-0 mx-auto">
                                        <?php 
                                        $image = get_field('imagen_red_social_3_contacto');
                                        if( !empty( $image ) ): ?>
                                            <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                        <?php endif; ?> 
                                        <p class="me-2 mt-2"><?php the_field('redes_sociales_3_contacto');?><br></p>
                                    </div>
                                    <div class="col-2 p-0 mx-auto">
                                        <?php 
                                        $image = get_field('imagen_red_social_4_contacto');
                                        if( !empty( $image ) ): ?>
                                            <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                        <?php endif; ?> 
                                        <p class="me-2"><?php the_field('redes_sociales_4_contacto');?><br></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">                        
                            </div>
                        </div>
                        <p><?php the_field('parrafo_ubicacion_contacto_');?></p>
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
<!-- FORMULARIO DE COTIZACION  ------------------------------------------>
<section class="formContact" >
    <div class="container">
        <div class="row">
            <div class="col-md-10 my-5 mx-auto">
                <div class="row">
                    <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?> 
                    <div class="col-md-6">    
                    <form action="contacto.php">
                            <div class="row ">
                                <div class="col-md-6">
                                    <label for="nombre">Nombre y Apellido</label>
                                    <input type="text" class="text" id="nombre">
                                </div>
                                <div class="col-md-6">
                                    <label for="telefono">Numero de telefono</label>
                                    <input type="text" class="text" id="telefono">
                                </div>
                                <div class="col-md-12 my-3">
                                    <select id="selection" name="selection">
                                        <option value="seleccionar">Seleccionar</option>
                                        <option value="blusas">Blusas</option>
                                        <option value="pantalones">Pantalones</option>
                                        <option value="zapatos">Zapatos</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for="message">Mensaje</label><br>
                                    <textarea name="message" id="message" cols="60" rows="5"></textarea>
                                </div>
                                <div class="col-md-2 my-3 ">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-success="Su mensaje a sido enviado">
                                        Enviar
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog ">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                    <?php 
                    $image = get_field('imagen_formulario_contacto_');
                    if( !empty( $image ) ): ?>
                        <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
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


    <!-- SCRIPT BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <!-- SCRIPT JQUERY -->
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <!-- SCRIPT AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- SCRIPT SuperScrollorama -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <!-- SCRIPT PROPIO -->
    <script>
        // Llamo a SuperScrollama
        gsap.from(".texto", {rotation: -360, x: -100, duration: 1});

        // Modal

        
        let modal = document.getElementById('exampleModal');

        // Mostrar el mensaje en el modal
        modal.addEventListener('show.bs.modal', event => {
            let boton = event.relatedTarget;
            let parrafo= boton.getAttribute('data-success') ;

            document.querySelector('.modal-body').innerHTML = '<p>' + parrafo + '</p>';
        });
        
        
    </script>
