<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
    
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta Frente al Bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="imagen propiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>

            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>

                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p>3</p>
                </li>

                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                    <p>4</p>
                </li>
            </ul>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita quisquam omnis dolorem quia eligendi
                hic alias, fugit ipsum repudiandae corrupti odit amet sunt. Ad officiis quisquam sit dolore alias
                beatae.
                Similique reiciendis sapiente quidem est expedita, enim reprehenderit eligendi maiores ipsam illo culpa
                laboriosam, delectus eum id voluptatum, nisi ullam perspiciatis ipsa voluptatem repellendus facilis?
                Odio, labore? Iure, voluptatibus quidem.
                Recusandae, quibusdam architecto. Repudiandae culpa rem id, ex maiores commodi ipsa esse facilis,
                mollitia sint, libero ipsum recusandae! Ab nemo eveniet eos cumque tenetur! Sint placeat doloribus ab
                ipsam modi.
                Consequatur cum suscipit enim, adipisci necessitatibus eum quas iure dignissimos numquam, laboriosam
                dicta sit temporibus molestiae praesentium tempora quae, aut dolor facere non libero itaque vel quisquam
                exercitationem? Laboriosam, magnam?</p>

            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta odio ea sit distinctio, temporibus
                incidunt non iure dolore. Neque repellendus iste dolorum atque unde vitae recusandae odio tempore illum
                assumenda?
                Ducimus et quibusdam odio molestiae repellat delectus rem voluptatem dolor, incidunt ipsam voluptatum
                laudantium cupiditate. Consectetur sapiente amet odio, neque obcaecati necessitatibus suscipit
                praesentium voluptatum eligendi minima ex consequatur ullam!
                Vitae labore nesciunt quos molestiae quasi rem laborum repellat voluptas blanditiis ipsam vel dolore a
                eaque nulla expedita voluptatem, non fugiat enim! Debitis hic non pariatur dignissimos atque aut
                dolorum.</p>
        </div>
    </main>

    <?php 
        incluirTemplate('footer');
    ?>
   