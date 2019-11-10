<?php include("cap.php"); ?>

<body id="contacto">
    <header id="header">
        <div>
                                  
            <h1>TheSimpleSign</h1>
            <h2>Porque menos es más</h2>  
        </div>
        
    </header>

    

    <main id="main">

<!-- MENU HAMBURGUESA + LOGO -->

<?php include("menu.php"); ?>

<!-- FIN DEL MENU HAMBURGUESA + LOGO -->
  
<!-- CUERPO  -->

        <section class="contenedor-col-sin form-maps">

<!-- CONTENEDOR MAPA + FORMULARIO -->
            <div class="contenedor-formulario-mapa">
                <h2>¿Quieres contactar con nosotros?</h2>

                <p>Nos ubicamos en: <br> Avinguda Diagonal, 188 <br> Llámanos al 933 555 444 si tienes alguna consulta.</p>
        
        
                <div class="mapa">
                    <p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d187.03582507141456!2d2.1929534504965122!3d41.40507429245819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4a3235c2acf57%3A0x81dc1d810262f472!2sAvinguda+Diagonal%2C+188%2C+08018+Barcelona!5e0!3m2!1sen!2ses!4v1563536915838!5m2!1sen!2ses" width="100%" height="250"  allowfullscreen></iframe>
                    </p>
                </div>
    
                <p>
                    También puedes enviarnos un correo siguiendo el formulario que tienes a continuación.
                </p>

        <!-- FORMULARIO -->
                <div class="form-style">
            
                <form action="mailto:aivan.lujan@gmail.com?Subject=Acerca de tu consulta" method="get" name="Respuesta" onsubmit="validateForm()">
                        <input type="text" name="field1" required placeholder="Nombre*" autofocus/>
                        <input type="text" name="field1" placeholder="Apellido" />
                        <input type="email" name="field2" required placeholder="Correo electrónico*" />
                        <textarea placeholder="Dinos qué te interesa saber*" ></textarea>
                
                    

                    <div class="checkbox-caja">  
                             
                        <input type="checkbox" name="Terminos" value="Terminos" required aria-placeholder=""> He leído y acepto la <a href="privacidad.php">política de privacidad y las condiciones de uso*</a>
                        <p>* Necesitamos que rellenes estos campos para poder ayudarte</p>
                    </div>


                    <p class="boton">
                        <input type="submit" value="Enviar" id="boton-enviar"/>
                    </p>
                </form>
                </div>


                <blockquote>- Ir sin rumbo no es un problema, pues todos los caminos llevan a Roma -</blockquote>

            </div>

        </section>

<!-- FIN CONTENEDOR MAPA + FORMULARIO -->

        <div class="flecha-arriba">
            <a href="#header"><img  src="img/flecha.png" alt=""></a>
        </div>
    
 
    </main>

    <script>
        function validateForm(){

            alert("Gracias por escribirnos, en breve recibirás nuestra respuesta :)")
            
        }

    </script>

    <?php include("peu.php"); ?>


