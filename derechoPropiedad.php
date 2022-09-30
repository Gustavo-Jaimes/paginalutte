<!DOCTYPE html>
<html>
    <head>
        <title>Lutte</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/uikit.min.css" />
        <link rel="shortcut icon" href="./image/favicon.png">
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
        <style>
            :root {
            --azul:#003A5D;
            --white: #FFFFFF;
            --black: #000000;
            --dorado: #AD8400;
            --piel: #E5CEAD;
            --sm: 1em;
            --md: 2em;
            --mdg: 3.5em;
            --lg: 4em;
            }


            /*Estilos para el contenido de Derecho laboral, No moverle !!!! */
            @import url("https://fonts.googleapis.com/css?family=Roboto:400,400i,700");
            body {
            font-family: Roboto, sans-serif;
            }

            img {
            display: block;
            }

            #features {
            padding: 2rem;
            }
            @media (min-width: 600px) {
            #features {
                padding: 5rem;
            }
            }

            .features-group {
            background: gray;
            margin-bottom: 4rem;
            margin-top: 2em;
            }
            @media (min-width: 1200px) {
            .features-group {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                margin-bottom: 8rem;
                max-height: 40em;
            }
            }
            .features-group:last-child {
            margin-bottom: 0;
            }

            .features-image img {
            box-shadow: 0 2px 30px 0 rgba(0, 0, 0, 0.3);
            }
            @media (min-width: 1200px) {
            .features-image {
                grid-row: 1;
                grid-column: 1/3;
                transform: scale(1.2);
                margin: 0 2rem;
                align-self: center;
            }
            .features-image.inverted {
                grid-column: 3/span 2;
            }
            }
            .features-text {
            padding: 2rem;
            }
            .features-text h1,
            .features-text p {
            color: #444;
            }
            .features-text p {
            line-height: 1.5;
            font-size: 1.2rem;
            }
            @media (min-width: 1200px) {
            .features-text {
                grid-column: 3/span 2;
                grid-row: 1;
                place-self: center;
            }
            .features-text.inverted {
                grid-column: 1/span 2;
            }
            }

            /*Estilos del contenido y banner encimados, personalizacion */

            .laboral .banner{
                height: 45em;
            }
            .corporativo .container-banner{
                position: relative; 
                top: -8em; 
                left: 5em;
            }
            .laboral .banner .container-logo img{
                height: 30em; 
                width: 30em;
            }
            .laboral .derecho-laboral .container-letrero p{
                font-size: 3em; 
                color: #4E4D4D;
            }
            .laboral .derecho-laboral .container-txt .features-group{
                width: 97.6%;
            }
            .laboral .derecho-laboral .container-txt .features-image img{
                width: 97.5%; 
                height: 43em; 
                object-fit: cover;
            }
            .laboral .derecho-laboral .container-txt .container-gen-txt{
                 z-index: 2; 
                 background-color: #E6E9EE; 
                 height: 91%; 
                 margin-right: -10em;
            }
            .laboral .derecho-laboral .container-txt .container-gen-txt p{
                text-align: left;
                font-size: 1.2em;
            }
            .laboral .derecho-laboral .container-txt .container-gen-txt .item-azul{
                text-align: left;
            }
            .laboral .derecho-laboral .container-txt .container-gen-txt .item-azul p{
                border-left: solid 2.3em var(--azul); 
                height: .8em;
            }
            .laboral .derecho-laboral .container-txt .container-gen-txt .item-azul .txt{
                font-weight: bold; 
                font-family: SourceSansProLight; 
                padding-left: .5em; 
                font-size: 1.5em;
                text-align: left; 
                color: #4E4D4D;
            }




            .propiedad .banner{
                height: 45em;
            }
            .propiedad .banner .container-logo img{
                height: 25em; 
                width: 25em;
            }
            .propiedad .container-imagen-propiedad{
                width: 100%; 
                height: 45em;
            }
            .propiedad .container-imagen-propiedad img{
                width: 100%; 
                height: 45em;
            }
             .container-letrero-ayuda p{
                font-size: var(--lg); 
                color: var(--azul); 
                font-weight: bold; 
                letter-spacing: .1em; 
                margin: .5em 0;  
                font-family: TexgyretermesBold;
                margin-top: 3em;
            }
            .propiedad .banner .container-logo{
                position: relative; 
                top: -10em; 
                left: -12em;
            }
            .ayudamos .container-img {
                border: solid var(--dorado) 3px;
                margin: 1em; 
                max-width: 20em;
                max-height: 18em; 
                padding: 0;
            }
            .ayudamos .container-img .uk-card-media-top{
                max-width:14em; 
                max-height: 14em;
            }
            .ayudamos .container-img .uk-card-media-top img{
                width:8em; 
                height: 8em;
            }
            .ayudamos .container-letrero h3{
                font-weight: bold; 
                color: var(--azul); 
                margin: 1em 0 0; 
                font-size: 1em;
            }
            .ayudamos .container-letrero p{
                color: var(--azul); 
                font-size: .8em;
            }
            .container-item-imagen img{
                height: 100%; 
                width: 25em; 
                border: solid 3px var(--dorado);
            }
            .registro-marca .container-img{
                max-height: 45em
            }
            .registro-marca .container-img img{
                height: 100%;
                width: 100%; 
                object-fit:cover;
            }
            .container-registro-texto .titulo h1{
                text-align: left; 
                font-size: 2.5em; 
                font-weight: bold; 
                font-family: TexgyretermesBold;
            }
            .container-registro-texto .titulo .container-raya .raya{
                border-bottom: 5px solid var(--dorado); 
                border-radius: 50%;
            }
            .container-registro-texto .texto{
                text-align: justify;
                font-size: 1.2em;
                margin-right: 1em;
            }
            .container-registro-texto .texto h2{
                text-align: center; 
                font-size: 2.5em;
                color: var(--azul);
                font-weight: bold; 
                font-family: TexgyretermesBold;
            }
            .container-leyenda p{
                font-size: 2.5em; 
                font-family: SourceSansProLight;
            }
            .container-leyenda h1{
                font-size: var(--lg); 
                color: var(--dorado); 
                font-weight: bold; 
                letter-spacing: .1em; 
                margin: .5em 0;  
                font-family: TexgyretermesBold;
            }
            .container-subbanner{
                background-color: var(--azul);
            }
            .container-subbanner p{
                font-size: 3.5em; 
                font-family: SourceSansProLight; 
                color: var(--white); margin: 1em 0 0 0;
            }
            .container-subbanner h1{
                font-size: 3.5em; 
                font-weight: bold; 
                font-family: TexgyretermesBold; 
                color: var(--white); 
                margin-top: 0;
            }
            .container-subbanner .container-raya .raya{
                border-bottom: 5px solid var(--white); 
                border-radius: 50%;
            }
            .patente .container-patente{
                padding: 0 1.5em;
            }
            .patente .container-patente .container-titulo h1{
                text-align: left; 
                font-size: 2.5em; 
                font-weight: bold; 
                font-family: TexgyretermesBold;
            }
            .patente .container-patente .container-titulo .container-raya .raya{
                border-bottom: 5px solid var(--dorado); 
                border-radius: 50%;
            }
            .patente .container-patente .container-texto{
                text-align: justify;
                font-size: 1.2em;
            }
            .patente .container-patente .container-texto .container-item{
                padding: 0 0 0 3em;
            }
            .patente .container-patente .container-texto .container-item h4{
                text-align: center; 
                font-weight: bold;
            }
            .patente .imagen-patente{
                height: 50em;
            }
            .patente .imagen-patente img{
                height: 100%; 
                width: 100%; 
                object-fit: cover;
            }
            .autor .imagen-autor{
                height: 48em;
            }
            .autor .imagen-autor img{
                height: 48em; 
                width: 100%; 
                object-fit:cover;
            }
            .autor .container-info .titulo h1{
                text-align: left; 
                font-size: 2.5em; 
                font-weight: bold; 
                font-family: TexgyretermesBold;
            }
            .autor .container-info .container-texto{
                text-align: left;
                font-size: 1.2em;

            }
            .autor .container-info .container-texto .container-item{
                padding: 0 0 0 3em;
            }
            .autor .container-info .container-texto .container-item h4{
                text-align: center; 
                font-weight: bold;
            }
            .autor .container-info .titulo .container-raya .raya{
                border-bottom: 5px solid var(--dorado); 
                border-radius: 50%;
            }
            @media screen and (min-width: 601px) and (max-width: 1280px){
                .propiedad .banner .container-logo {
                    top: -10em;
                    left: -15em;
                }
                .laboral .derecho-laboral .container-letrero p {
                    font-size: 2.5em;
                }
            }   
            @media (max-width: 600px){
                .propiedad .banner {
                    height: 20em;
                }
                .container-letrero-ayuda p{
                    font-size: 1.5em;
                }
                .container-item-imagen img{
                    height: 100%;
                    width: 17em;
                }
                .registro-marca .container-img img{
                    height: 70%;
                    width: 100%
                }
                .registro-marca .container-img {
                    height: 50%;
                }
                .container-registro-texto .titulo h1{
                    font-size: 1.5em;
                    padding-left: 1em;
                    margin-bottom: .3em;
                }
                .container-registro-texto .texto{
                    margin: 1em;
                    font-size: .8em;
                }
                .container-registro-texto .texto h2{
                    font-size: 1.5em;
                }
                .container-leyenda p{
                    font-size: 1.5em;
                }
                .container-leyenda h1{
                    font-size: 1.5em;
                }
                .container-subbanner p{
                    font-size: 1.5em;
                }
                .container-subbanner h1{
                    font-size: 1.5em;
                    margin-bottom: 1em;
                }
                .patente .container-patente .container-titulo h1{
                    font-size: 1.5em;
                }
                .patente .container-patente .container-texto {
                    font-size: .8em;
                }
                .patente .imagen-patente {
                    height: 20em;
                }
                .autor .imagen-autor {
                    height: 20em;
                }
                .autor .container-info .titulo h1{
                    font-size: 1.5em;
                    padding-left: 1em;
                }
                .autor .container-info .container-texto{
                    font-size: .8em;
                    padding-left: 3em;
                    margin: 0;
                }
                .autor .container-info .container-texto .container-item h4{
                    font-size: 1em;
                }
                .laboral .derecho-laboral .container-letrero p{
                    font-size: 1.5em;
                }
                .laboral .derecho-laboral .container-txt .container-gen-txt{
                    margin-right:0;
                }
                .laboral .derecho-laboral .container-txt .features-image img{
                    height: 20em;
                }
                .registro-marca .container-img img{
                    height: 20em;
                }
                .laboral .derecho-laboral .container-txt .container-gen-txt .item-azul .txt{
                    font-size: .7em;
                }
                .laboral .derecho-laboral .container-txt .features-image img{
                    height: 20em;
                }
                .corporativo .container-logo img{
                height: 5em; 
                width: 5em; 
                margin-left: 22em; 
                margin-top: 6em;
                }
                .propiedad .banner .container-logo img{
                    height: 5em;
                    width: 5em;
                    margin-left: 15em;
                }
                .container-letrero-ayuda p{
                    margin:0;
                }
                .autor .imagen-autor img {
                    height:20em;
                }
                .ayudamos .container-img{
                    margin: 0;
                }
                .propiedad .banner .container-logo {
                    position: relative;
                    top: -8em;
                    left: -12em;
                }
            }
        </style>
    </head>
    <body>

        <?php include './vistas/menu.php';?>

        <div class="uk-container-expand propiedad laboral">

            <div class="uk-text-center uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light banner" data-src="./image/bannerDerechoPropiedad.jpg" uk-img uk-grid>
                <div class="uk-width-1-2@m">
                    <div class="uk-width-expand@m container-logo" style="">
                        <a href="./index.php"><img data-src="./image/logoLute.png" alt="" uk-img></a>
                    </div>
                </div>
            </div>

            <div class="uk-text-center derecho-laboral" uk-grid>
                <div class="uk-width-1-2@m">
                    <div class="uk-card container-letrero">
                        <p class="uk-margin-remove"><span style="font-weight: bold">DERECHO DE PROPIEDAD </span></p>
                        <p class="uk-margin-remove">INDUSTRIAL E INTELECTUAL</p>
                    </div>
                </div>
                <div class="uk-width-1-2@m"></div>
                <div class="uk-width-1-1@m uk-margin-remove container-txt">
                    <div class="features-group">
                        <div class="features-image inverted">
                                <img src="./banner-derecho-propiedad.jpg"/>
                        </div>
                        <div class="features-text inverted container-gen-txt">
                            <p>Los Derechos de Propiedad, son una especialización muy importante, con matices únicos y específicos respecto de la tramitación de estos derechos. Un derecho de propiedad, nace al momento de su creación, pero no surte efectos frente a terceros hasta su registro.</p>
                            <p>Cada país, tiene su oficina de Marcas y Patentes, y Derechos de Autor en las que se llevan a cabo todas las gestiones de registrabilidad. En México cada oficina trabaja independiente, ya que en otros países se concentran en una misma.</p>
                            <p>Los abogados especializados en esta área como LUTTE, a través de su experiencia, ofrecemos asesoría confiable para el registro de marcas, patentes y derechos de autor, consiguiendo con ello que tu empresa o negocio obtenga activos que la hagan valer y aumentar su valor en el mundo comercial que vivimos.</p>
                            <div class="uk-flex uk-flex-middle item-azul">
                                <p class="uk-margin-remove" ></p> <span class="txt"> Contratos de Licencia de Uso de Marca.</span>
                            </div>
                            <div class="uk-flex uk-flex-middle item-azul">
                                <p class="uk-margin-remove" ></p> <span class="txt"> Contratos de cesión de Derechos.</span>
                            </div>
                            <div class="uk-flex uk-flex-middle item-azul">
                                <p class="uk-margin-remove" ></p> <span class="txt"> Resultados de búsquedas de vialidad.</span>
                            </div>
                            <div class="uk-flex uk-flex-middle item-azul">
                                <p class="uk-margin-remove" ></p> <span class="txt"> Solicitudes administrativas de nulidad.</span>
                            </div>
                            <div class="uk-flex uk-flex-middle item-azul">
                                <p class="uk-margin-remove"></p> <span class="txt" > Solicitud de infracción por uso no autorizado de marcas registradas.</span>
                            </div>  
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            
            <div class="uk-text-center uk-margin-remove ayudamos uk-flex uk-flex-center" uk-grid>
                <div class="uk-width-1-1@m container-letrero-ayuda" style="margin-bottom: 2em;">
                    <p>ADEMÁS TE AYUDAMOS CON:</p>
                </div>
                <div class="uk-width-auto@m uk-visible@m">
                     <div class="uk-card uk-card-body uk-visible@m"></div>
                </div>
                <div class="uk-width-expand@m container-img uk-flex uk-flex-middle" uk-grid>
                    <div>
                        <div class="uk-card " style="padding: 1em;">
                            <div class="uk-card-media-top uk-flex uk-flex-middle uk-flex-center">
                                <img src="./image/14-l.png" alt="">
                            </div>
                            <div class="uk-card-body uk-padding-remove container-letrero">
                                <h3 class="uk-card-title">TRAMITACION DE SOLICITUDES</h3>
                                <p class="uk-margin-remove">DE REGISTRO DE MARCAS</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-expand@m container-img uk-flex uk-flex-middle" uk-grid>
                    <div>
                        <div class="uk-card " style="padding: 1em;">
                            <div class="uk-card-media-top uk-flex uk-flex-middle uk-flex-center">
                                <img src="./image/16-l.png" alt="">
                            </div>
                            <div class="uk-card-body uk-padding-remove container-letrero">
                                <h3 class="uk-card-title" >CONTESTACIONES DE OFICIOS DE AUTORIDAD:</h3>
                                <p class="uk-margin-remove">REQUISITOS Y ANTERIORIDADES</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-expand@m container-img uk-flex uk-flex-middle" uk-grid>
                    <div>
                        <div class="uk-card " style="padding: 1em;">
                            <div class="uk-card-media-top uk-flex uk-flex-middle uk-flex-center">
                                <img src="./image/17-l.png" alt="">
                            </div>
                            <div class="uk-card-body uk-padding-remove container-letrero">
                                <h3 class="uk-card-title" >OPOSICIONES A REGISTROS</h3>
                                <p class="uk-margin-remove">DE MARCAS</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-expand@m container-img uk-flex uk-flex-middle" uk-grid>
                    <div>
                        <div class="uk-card " style="padding: 1em;">
                            <div class="uk-card-media-top uk-flex uk-flex-middle uk-flex-center">
                                <img src="./image/19-l.png" alt="">
                            </div>
                            <div class="uk-card-body uk-padding-remove container-letrero">
                                <h3 class="uk-card-title"> RENOVACIONES DE</h3>
                                <p class="uk-margin-remove" >REGISTROS DE MARCAS</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-auto@m">
                    <div class="uk-card uk-card-body uk-visible@m"></div>
                </div>
            </div>
            
            <div class="uk-text-center registro-marca" style="margin-top: 5em;" uk-grid>
                <div class="uk-width-1-2@m container-img">
                    <img data-src="./image/imagenRegistroMarca.jpg" class="uk-padding-remove" alt="" uk-img>
                </div>
                <div class="uk-width-expand@m container-registro-texto">
                    <div class="uk-text-center" uk-grid>
                        <div class="uk-width-1-1@m titulo">
                            <h1>REGISTRO DE MARCA</h1>
                            <div class="uk-text-center container-raya" uk-grid>
                                <div class="uk-width-auto@m"></div>
                                <div class="uk-width-expand@m raya"></div>
                                <div class="uk-width-auto@m"></div>
                            </div>
                        </div>
                        <div class="uk-width-1-1@m texto">
                            <p>Sin duda, en los derechos de propiedad, LA MARCA es el nombre más conocido.</p>
                            <p>La marca, es el conjunto de palabras, figuras o formas que constituyen una imagen de la empresa.</p>
                            <p>La marca es la cara, la faz, el semblante a través del cual protegemos productos o servicios. Es el nombre con que se identifica una empresa o negocio.</p>
                            <p>La marca es el activo más importante comercial que tiene tu empresa y su valor aumenta conforme tu reconocimiento crece entre los clientes y consumidores.</p>
                            <div>
                                <h2>!LO MEJOR QUE PUEDES HACER POR TU NEGOCIO ES REGISTRAR LA MARCA!</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-1@m container-leyenda">
                    <p>En <span style="font-weight: bold; color: var(--black)">LUTTE Corporativo Legal</span>, estamos capacitados y especializados en llevar a cabo:</p>
                    <h1>REGISTROS INTERNACIONALES:</h1>
                </div>
                <div class="uk-width-1-1@m container-subbanner">
                    <p>Registro de Marca por país</p>
                    <h1>ESTADOS UNIDOS, CANADA, EUROPA.</h1>
                    <div class="uk-text-center container-raya" uk-grid>
                        <div class="uk-width-1-3@m"></div>
                        <div class="uk-width-expand@m">
                            <div class="raya"></div>
                        </div>
                        <div class="uk-width-1-3@m"></div>
                    </div>
                    <p class="uk-margin-remove">Registro de Marca a través del</p>
                    <h1>PROTOCOLO DE MADRID.</h1>
                 </div>
            </div> 

            <div class="uk-text-center patente" style="margin-top: 4em" uk-grid>
                <div class="uk-width-expand@m">
                    <div class="uk-text-center container-patente" uk-grid>
                        <div class="uk-width-1-1@m container-titulo">
                            <h1>LA PATENTE</h1>
                            <div class="uk-text-center container-raya" uk-grid>
                                <div class="uk-width-auto@m"></div>
                                <div class="uk-width-expand@m raya"></div>
                                <div class="uk-width-auto@m"></div>
                            </div>
                        </div>
                        <div class="uk-width-1-1@m container-texto">
                            <p>Las patentes en México de acuerdo a la Ley Federal de Protección a la propiedad Industrial, regula y especifica los lineamientos a seguir para la tramitación de un registro de patente, su vigencia y en qué casos la autoridad no podrá otorgar un registro de patente.</p>
                            <p>La materia de patentes es bastante amplia ya que encontramos modalidades de esta, como: el modelo de utilidad, el modelo industrial y el diseño industrial.</p>
                            <p>Cada gestión es un proceso diverso, con tiempos de tramitación diferentes.</p>

                            <div class="container-item">
                                <h4>SABEMOS DE:</h4>
                                <p class="uk-margin-remove">Formatos y lineamientos para la tramitación de Patentes.</p>
                                <p class="uk-margin-remove">Lineamientos para la tramitación de Modelos de Utilidad.</p>
                                <p class="uk-margin-remove">Lineamientos para la tramitación de Diseños Industriales.</p>
                                <p class="uk-margin-remove">Contestación de requisitos de examen de forma y fondo de tramites.</p>
                                <p class="uk-margin-remove">Pago de anualidad por registro de patentes.</p>
                                <p class="uk-margin-remove">Procedimientos de declaración administrativa de infracción por uso no autorizado de patentes.</p>
                                <p class="uk-margin-remove">Procedimientos de declaración administrativas de nulidad por uso anterior de patentes.</p>
                            </div>
                        </div>
                     </div>
                </div>
                <div class="uk-width-1-2@m imagen-patente">
                    <img data-src="./image/imagenPatente.jpg" class="uk-padding-remove" alt="" uk-img>
                </div>
            </div>
            
            <div class="uk-text-center autor"  style="margin-top: 6em; margin-bottom: 3em;" uk-grid>
                <div class="uk-width-1-2@m imagen-autor">
                    <img data-src="./image/imagenDerechoMarca.jpg" class="uk-padding-remove" alt="" uk-img>
                </div>
                <div class="uk-width-expand@m container-info">
                    <div class="uk-text-center" style="margin-bottom: 1em;" uk-grid>
                        <div class="uk-width-1-1@m titulo">
                            <h1>DERECHO DE AUTOR</h1>
                            <div class="uk-text-center container-raya" uk-grid>
                                <div class="uk-width-auto@m"></div>
                                <div class="uk-width-expand@m raya"></div>
                                <div class="uk-width-auto@m"></div>
                            </div>
                        </div>
                        <div class="uk-width-1-1@m container-texto">
                            <p>Los <span style="font-weight: bold">Derechos de Autor</span> en México son una materia con poco reconocimiento de entre las empresas.</p>
                            <p>Muchas veces pensamos o creemos que solo son susceptibles de derecho de autor las canciones, la música y los libros. Nos olvidamos que la Ley Federal de Derechos de Autor, regula diversas creaciones otorgando derechos amplios a sus titulares por un largo plazo.</p>
                            
                            <div class="container-item"> 
                                <h4>SON SUSCEPTIBLES DE REGISTRO COMO DERECHO DE AUTOR:</h4>
                                <p class="uk-margin-remove">Obra Arquitectónicas.</p>
                                <p class="uk-margin-remove">Programas de Software.</p>
                                <p class="uk-margin-remove">Obras de Teatro-Musicales.</p>
                                <p class="uk-margin-remove">Esculturas.</p>
                                <p class="uk-margin-remove">Obras de carácter plástico.</p>
                                <p class="uk-margin-remove">Las fotografías.</p>
                                <p class="uk-margin-remove">Los dibujos de las marcas.</p>
                                <p class="uk-margin-remove">Libros, manuales, Escritos.</p>
                                <p class="uk-margin-remove">Música con o sin letra.</p>
                                <p class="uk-margin-remove">Programas de radio.</p>
                                <p class="uk-margin-remove">Programas de televisión.</p>
                                <p class="uk-margin-remove">Caricaturas e historias</p>
                                <p class="uk-margin-remove">Cualquier dibujo inédito.</p>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
        </div>

        <?php include './vistas/footer.php';?>

        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.9.4/dist/css/uikit.min.css" />

        <!-- UIkit JS -->
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.9.4/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.9.4/dist/js/uikit-icons.min.js"></script>
    </body>
</html>