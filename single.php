<?php include('header.php'); ?>

<!-- TOP CURSOS CAPACITACION SINGLE -->
    <section class="cont-top-single">
        <div class="top-single">
            <img src="images/iss-consultores-capacitaciones-landing-img.jpg" alt="ISS Consultores" />
            <div class="datos-single">
                <div class="txt-single">
                    <h2>Control estad&iacute;stico de Procesos</h2>
                    <p class="fecha">20 y 21 de Junio / 21 y 22 de Noviembre</p>
                    <p class="precio">$4,500</p>
                    <p class="lugar"><span>Lugar:</span> Por confirmar</p>
                    <p class="duracion"><span>Duraci&oacute;n:</span> 16 horas</p>
                    <h3>Tambi&eacute;n vamos a tu empresa</h3>
                    <div class="btn-single"><a href="#" target="_self">DESCARGAR TEMARIO</a></div>
                </div>
                <div class="form-single">
                    <p>Te mantendremos informado de nuestras pr&oacute;ximas capacitaciones y responderemos tus dudas.</p>
                    <form method="POST" action="#">
                        <input class="campos-single" type="txt" name="nombre" placeholder="Nombre" required />
                        <input class="campos-single" type="email" name="correo" placeholder="Correo electr&oacute;nico" required />
                        <select class="campos-single" name="servicio-interes" required>
                            <option selected>Servicio de Inter&eacute;s</option>
                            <option value="uno">Servicio uno</option>
                            <option value="dos">Servicio dos</option>
                            <option value="tres">Servicio tres</option>
                            <option value="cuatro">Servicio cuatro</option>
                        </select>
                        <textarea class="campos-single" name="mensaje" placeholder="Mensaje" required></textarea>
                        <input class="btn-enviar-single" type="submit" value="ENVIAR" />
                    </form>
                </div>
            </div>
            <div class="reservar-single">
                <h3>Paga en l&iacute;nea para obtener <span>10%</span></h3>
                <div class="btn-reservar-single"><a href="#" target="_self">RESERVAR</a></div>
                <p class="disp">10 lugares disponibles</p>
            </div>
        </div>
    </section>
<!-- TERMINA TOP CURSOS CAPACITACION SINGLE -->

<!-- AGENDA CAPACITACION -->
    <section class="cont-agenda-capacitacion">
        <div class="agenda-capacitacion">

            <div class="tabs-capacitacion">
                    <ul class="tabs">
                        <li><a href="#beneficios">Beneficios<br>&nbsp;</a></li>
                        <li><a href="#participantes">Los participantes<br>ser&aacute;n capaces de...</a></li>
                        <li><a href="#dirigido">El curso est&aacute;<br>dirigido a...</a></li>
                    </ul>
                    <div class="clr"></div>
                    <div class="block">
                        
                        <article id="beneficios" class="beneficios">
                            <ul>
                                <li><img src="images/iss-consultores-capacitaciones-landing-diversas-disciplinas-icono.png" alt="ISS Consultores" /><p>La oportunidad de compartir las experiencias con profesionales de diversas disciplinas</p></li>
                                <li><img src="images/iss-consultores-capacitaciones-landing-estacionamiento-icono.png" alt="ISS Consultores" /><p>Estacionamiento</p></li>
                                <li><img src="images/iss-consultores-capacitaciones-landing-diploma-icono.png" alt="ISS Consultores" /><p>Diploma de participaci&oacute;n</p></li>
                                <li><img src="images/iss-consultores-capacitaciones-landing-manual-icono.png" alt="ISS Consultores" /><p>Manual por participante</p></li>
                                <li><img src="images/iss-consultores-capacitaciones-landing-archivo-electronico-icono.png" alt="ISS Consultores" /><p>Acceso a las presentaciones y materiales en el archivo electr&oacute;nico</p></li>
                                <li><img src="images/iss-consultores-capacitaciones-landing-coffee-break-icono.png" alt="ISS Consultores" /><p>Coffee break ma&ntilde;ana y tarde</p></li>
                                <li><img src="images/iss-consultores-capacitaciones-landing-comida-icono.png" alt="ISS Consultores" /><p>Comida de mediod&iacute;a</p></li>
                            </ul>
                        </article>

                        <article id="participantes" class="participantes">
                            <h2>Los participantes ser&aacute;n capaces de:</h2>
                            <ul>
                                <li>Identificar la variabiidad de los procesos</li>
                                <li>Determinar las variables importantes que afectan a los productos y servicios</li>
                                <li>Identificar los tipos de variables de un proceso: continuas y discretas</li>
                                <li>Seleccionar la gr&aacute;fica para ejercer control en su proceso: Gr&aacute;ficas de control por variables o gr&aacute;fica de control por atributos</li>
                                <li>Determinar si el proceso tiene la capacidad requerida y mejorarla</li>
                            </ul>
                        </article>

                        <article id="dirigido" class="dirigido">
                            <h2>El curso est&aacute; dirigido a:</h2>
                            <p>Directivos de empresas interesados en mejorar o establecer estrategias y metodolog&iacute;as de control y mejora de los procesos. Gerentes de operaciones, Gerentes de Calidad, Gerentes de Producci&oacute;n, Gerentes de Distribuci&oacute;n, Gerentes de Mantenimiento, Gerentes de Ingenier&iacute;a de empresas interesados en mejorar el control de sus procesos.</p><br>
                            <p>Directores, gerentes, supervisores e ingenieros de empresas que ya iniciaron el cambio en la administración por calidad.</p><br>
                            <p>Responsables de instituciones que reúnan los intereses empresariales y cuya misión es elevar la competitividad  de las empresas socias: Gremios, Cámaras de Comercio, entre otras.</p><br>
                            <p>Consultores e Investigadores interesados en la calidad, productividad y competitividad empresarial, que quieran profundizar en los determinantes de la misma.</p>
                        </article>

                    </div>
                    
                    <script type="text/javascript">
                        $(function(){
                        $('ul.tabs li:first').addClass('active');
                        $('.block article').hide();
                        $('.block article:first').show();
                        $('ul.tabs li').on('click',function(){
                          $('ul.tabs li').removeClass('active');
                          $(this).addClass('active')
                          $('.block article').hide();
                          var activeTab = $(this).find('a').attr('href');
                          $(activeTab).show();
                          return false;
                          });
                        })
                    </script>
                </div>
        </div>
    </section>
<!-- TERMINA AGENDA CAPACITACION -->

<?php include('footer.php'); ?>