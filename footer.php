 <footer>
        <div class="container">
            <div class="row">
            <?php 
           /**
            * Displays a navigation menu
            * @param array $args Arguments
            */
            $args = array(
                'theme_location' => 'principal',
                'menu' => 'nav',
                'container' => 'nav',
                'container_class' => 'nav navbar-nav navbar-right navbar-header page-scroll',
                'container_id' => 'mainNav',
                'menu_class' => 'collapse navbar-collapse nav navbar-nav navbar-right',
                'menu_id' => 'bs-example-navbar-collapse-1',
                
                
            );
        
            wp_nav_menu( $args );
            ?>
                <div class="col-md-4">
                    <span class="copyright">2016|Desarrollado Por: <?php bloginfo('name' ); ?></span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="http://www.facebook.com/carlinsk8"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="http://www.instagram.com/carlinsk8"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
                
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>La Parada de las Hurdes</h2>
                                <p class="item-intro text-muted">Sitio desarrollado en WordPress</p>
                                <img class="img-responsive img-centered" src="<?php bloginfo('template_directory'); ?>/img/portfolio/roundicons-free.png" alt="">
                                <p>Este sitio fue desarrollado para la empresa Unquiet Pixel S.L.</p>
                                
                                    
                                <ul class="list-inline">
                                
                                    <li>Cliente: Unquiet Pixel S.L.</li>
                                    <li>Category: Desarrollo web</li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Mr Rod Fotografia</h2>
                                <p class="item-intro text-muted">
                                <p class="item-intro text-muted">Sitio desarrollado en WordPress</p>
                                <img class="img-responsive img-centered" src="<?php bloginfo('template_directory'); ?>/img/portfolio/startup-framework-preview.png" alt="">
                                <p>Este sitio fue desarrollado para Rodian Martinez Fotografo</p>
                                
                                    
                                <ul class="list-inline">
                                
                                    <li>Cliente: Rodian Martinez</li>
                                    <li>Category: Desarrollo web</li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>International Business School SAEJEE</h2>
                                <p class="item-intro text-muted">Sitio desarrollado en WordPress</p>
                                <img class="img-responsive img-centered" src="<?php bloginfo('template_directory'); ?>/img/portfolio/treehouse-preview.png" alt="">
                                <p>Este sitio fue desarrollado para la empresa SAJEE</p>
                                
                                    
                                <ul class="list-inline">
                                
                                    <li>Cliente: SAJEE</li>
                                    <li>Category: Desarrollo web</li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Upload imagen</h2>
                                <p class="item-intro text-muted">Sitio desarrollado en Nodejs</p>
                                <img class="img-responsive img-centered" src="<?php bloginfo('template_directory'); ?>/img/portfolio/golden-preview.png" alt="">
                                <p>Este sistema fue creado para el aprendizaje del lenguaje</p>
                                <p>Tiene un sistema de login que sirve para que los usuarios compartan imagenes</p>
                                    
                                <ul class="list-inline">
                                    <li>Category: Desarrollo web</li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Proyecto en conjunto</h2>
                                <p class="item-intro text-muted">Sitio desarrollado en Nodejs</p>
                                <img class="img-responsive img-centered" src="<?php bloginfo('template_directory'); ?>/img/portfolio/escape-preview.png" alt="">
                                <p>Este sitio fue creado en conjunto con otro desarrollador para un proyecto a futuro</p>

                                <ul class="list-inline">
                                    <li>Category: Desarrollo web</li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Registro de visita de la Alcaldia Rosio</h2>
                                <p class="item-intro text-muted">Sistema Desarrollado en YiiFramework</p>
                                <img class="img-responsive img-centered" src="<?php bloginfo('template_directory'); ?>/img/portfolio/dreams-preview.png" alt="">
                                 <p>Este sistema fue desarrollado para el control de visitas en la Alcaldia de Rosio, Guarico, Venezuela.</p>
                                
                                    
                                <ul class="list-inline">
                                
                                    <li>Cliente: Alcaldia de Rosio, Guarico, Venezuela.</li>
                                    <li>Category: Desarrollo web</li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Portfolio Modal 7 -->
    <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Certificados</h2>

                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                  <!-- Indicators -->
                                  <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                    <li data-target="#myCarousel" data-slide-to="3"></li>
                                    <li data-target="#myCarousel" data-slide-to="4"></li>
                                    <li data-target="#myCarousel" data-slide-to="5"></li>
                                  </ol>

                                  <!-- Wrapper for slides -->
                                  <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                      <img src="<?php bloginfo('template_directory'); ?>/img/about/admin-local.jpg" alt="Chania">
                                      <p>Configuración básica de un servidor GNU/linux, herramientas básicas deadministración local, monitoreo del estado del sistema. (kernel,procesos, logs, memoria y discos), sistemade archivos y gestión de discos, usuarios y grupos, sistema de actualización de software, programación enshell, servidores de impresión. 24-4-11.</p>
                                    </div>

                                    <div class="item">
                                      <img src="<?php bloginfo('template_directory'); ?>/img/about/css.jpg" alt="Chania">
                                      <p>Estilos, capas , selectores, estilos y etiquetas. 29-9-11</p>
                                    </div>

                                    <div class="item">
                                      <img src="<?php bloginfo('template_directory'); ?>/img/about/mysql.jpg" alt="Flower">
                                      <p>Administración básica de base de datos, operaciones sobre tablas,transacciones, accesoremoto a mysql, administración avanzada mysql, clientes gráficos mysql. 6-9-11.</p>
                                    </div>

                                    <div class="item">
                                      <img src="<?php bloginfo('template_directory'); ?>/img/about/python.jpg" alt="Flower">
                                      <p>Elementos básicos, herramientas de control de flujo funciones,cadenas, estructura de datos, clases y objetos, módulos. 5-12-12.</p>
                                    </div>
                                    <div class="item">
                                      <img src="<?php bloginfo('template_directory'); ?>/img/about/seguridad.jpg" alt="Flower">
                                      <p>Introducción a la seguridad básica. 26-09-12.</p>
                                    </div>
                                    <div class="item">
                                      <img src="<?php bloginfo('template_directory'); ?>/img/about/xhtml.jpg" alt="Flower">
                                      <p>formato básico de texto, enlaces y tipos de enlaces, listas numeradas y listas con viñetas,imágenes, tablas, formato avanzado de texto, formularios web. 29-9-11.</p>
                                    </div>

                                  </div>

                                  <!-- Left and right controls -->
                                  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                  </a>
                                </div>

                                <!--
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="<?php bloginfo('template_directory'); ?>/img/portfolio/dreams-preview.png" alt="">
                                <p>Dreams is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Dreams is a modern one page web template designed for almost any purpose. It’s a beautiful template that’s designed with the Bootstrap framework in mind.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/dreams-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                                -->
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- jQuery -->

<?php wp_footer(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
   <!-- jQuery End--> 
</body>

</html>