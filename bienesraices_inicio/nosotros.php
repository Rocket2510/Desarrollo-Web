<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
    
?>


    <main class="contenedor seccion">
        <h1>Conoce Sobre Nosotros</h1>

        <div class="contenido-nosotros">

            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="imagen nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>25 Años de Experiencia</blockquote>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius culpa debitis tempora vel odit id alias
                    esse corporis et nihil, animi aperiam fugit, dolore at voluptates illo dicta modi porro!
                    Doloribus odio labore illum impedit pariatur minus at, quaerat cupiditate incidunt natus laudantium
                    nemo
                    culpa ipsa non iure quas, accusamus sint qui quia architecto. Non distinctio vel delectus veniam
                    iusto.
                </p>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quibusdam similique velit ut,
                    alias,
                    esse, ex sapiente obcaecati nobis quasi ullam atque nesciunt unde! Fuga animi eveniet voluptates
                    totam
                    voluptas.
                    Architecto, assumenda ratione, quidem quo maxime ea totam at, iste quae nisi nihil harum? Sapiente
                    unde
                    veniam quis totam possimus ipsam facilis eaque laborum. Eligendi perspiciatis cum placeat alias
                    quos.
                    Quos natus quibusdam totam itaque. Ad ratione temporibus alias animi iure ex inventore esse laborum
                    delectus aliquam, accusamus provident? Deleniti explicabo, consequuntur alias dolore at aliquid
                    ratione
                    impedit ipsam accusamus?
                </p>
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="icono-seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt repellat ab ullam accusantium
                    aliquid natus molestiae obcaecati expedita! Libero ad dignissimos quae laudantium repellendus, odit
                    molestiae unde magni vel nisi?
                </p>
            </div>

            <div class="icono">
                <img src="build/img/icono2.svg" alt="icono-precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt repellat ab ullam accusantium
                    aliquid natus molestiae obcaecati expedita! Libero ad dignissimos quae laudantium repellendus, odit
                    molestiae unde magni vel nisi?
                </p>
            </div>

            <div class="icono">
                <img src="build/img/icono3.svg" alt="icono-tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt repellat ab ullam accusantium
                    aliquid natus molestiae obcaecati expedita! Libero ad dignissimos quae laudantium repellendus, odit
                    molestiae unde magni vel nisi?
                </p>
            </div>
        </div>

    </section>



    <?php 
        incluirTemplate('footer');
    ?>