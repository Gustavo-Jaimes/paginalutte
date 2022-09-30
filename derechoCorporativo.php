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
            .laboral .banner .container-logo{
                position: relative; 
                top: -11em; 
                left: -20em;
            }
            .corporativo .container-logo img{
                height: 25em; 
                width: 25em; 
                margin-left: 3em; 
                margin-top: 1em;
            }
            .laboral .derecho-laboral .container-letrero p{
                font-size: 3em; 
                color: #4E4D4D;
            }
            .laboral .derecho-laboral .container-txt .features-group{
                width: 97.6%;
            }
            .laboral .derecho-laboral .container-txt .features-image img{
                width: 100%; 
                height: 38em; 
                object-fit: cover;
            }
            .laboral .derecho-laboral .container-txt .container-gen-txt{
                 z-index: 2; 
                 background-color: #E6E9EE; 
                 height: 90%; 
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
                font-size: 1.4em;
                text-align: left; 
                color: #4E4D4D;
            }

            /* Estilos personalizados de la pagina */
            .corporativo .banner{
                height: 45em;
            }
            .corporativo .container-banner{
                position: relative; 
                top: -8em; 
                left: 5em;
            }
            .corporativo .banner .container-banner img{
                height: 30em; 
                width: 30em; 
                object-fit: cover;
            }
            .corporativo .ayudamos{
                margin-top: .5em;
            }
            .ayudamos .container-letrero h1{
                font-size: var(--lg); color: var(--azul); 
                font-weight: bold; 
                letter-spacing: .1em;  
                font-family: TexgyretermesBold; 
                margin: 1.5em 0 .5em;
            }
            .ayudamos .container-img{
                max-width: 25em;
                max-height: 15em;
            }
            .ayudamos .container-img img{
                width: 100%;
                height: 100%;
                border: solid 3px var(--dorado);
            }
            .corporativo .contractual .container-img{
                height: 40em;
            }
            .contractual .container-img img{
                height: 38em; 
                width: 100%; 
                object-fit:cover;
            }
            .contractual .container-texto .titulo h1{
                text-align: left; 
                font-size: 2.5em; 
                font-weight: bold; 
                font-family: TexgyretermesBold;
            }
            .contractual .container-texto .titulo .container-raya .raya{
                border-bottom: 5px solid var(--dorado); 
                border-radius: 50%;
            }
            .contractual .container-texto .parrafo {
                text-align: left;
                
            }
            .contractual .container-texto .parrafo .container-item p{
                border-left: solid 1em var(--dorado); 
                border-radius: 50%; 
                height: .8em;
            }
            .contractual .container-texto .parrafo .container-item .txt{
                font-family: SourceSansProLight; 
                padding-left: .5em; 
                font-size: 1.4em;
                font-family: SourceSansProLight; 
                padding-left: .5em; 
                font-size: 1.4em;
            }
            .gestoria .container-texto{
                padding: 0 1.5em;
            }
            .gestoria .container-texto .container-titulo h1{
                text-align: left; 
                font-size: 2.5em; 
                font-weight: bold; 
                font-family: TexgyretermesBold;
            }
            .gestoria .container-texto .container-titulo .container-raya .raya{
                border-bottom: 5px solid var(--dorado); 
                border-radius: 50%;
            }
            .gestoria .container-texto .container-content {
                text-align: left;
            }  
            .gestoria .container-texto .container-content h4{
                text-align: center; 
                font-weight: bold;
            } 
            .gestoria .container-img-gestoria{
                height: 50em;
            }
            .gestoria .container-img-gestoria img{
                height: 100%; 
                width: 100%; 
                object-fit:cover;
            }
            .gestora .container-letrero h1{
                font-size: var(--lg); 
                color: var(--azul); 
                font-weight: bold; 
                letter-spacing: .1em;  
                font-family: TexgyretermesBold; 
                margin: 1.5em 0 .5em
            }
            .gestora .container-img img{
                border: solid 3px var(--dorado);
            }
            @media screen and (min-width: 601px) and (max-width: 1280px){
                .laboral .derecho-laboral .container-letrero p {
                    font-size: 2.5em;
                }
            }
            @media (max-width: 600px){
                .corporativo .banner{
                height: 20em;
                }
                .laboral .derecho-laboral .container-letrero p {
                font-size: 1.5em;
                }
                .laboral .derecho-laboral .container-txt .features-image img {
                    height: 20em;
                }    
                .laboral .derecho-laboral .container-txt .container-gen-txt{
                    margin-right: 0;
                }
                .laboral .derecho-laboral .container-txt .container-gen-txt .item-azul .txt{
                    font-size: .8em;
                }
                .ayudamos .container-letrero h1{
                    font-size: 1.5em;
                }
                .ayudamos .container-img img {
                    width: 80%;
                    height: 95%;
                }
                .contractual .container-img img{
                    height: 20em;
                }
                .contractual .container-texto .titulo h1{
                    font-size: 1.5em;
                    margin-bottom: .3em;
                }
                .contractual .container-texto .parrafo{
                    margin: 0 1.5em 0 1.5em;
                }
                .contractual .container-texto .parrafo .container-item .txt{
                    font-size: .9em
                }
                .contractual .container-texto .parrafo .container-item p{
                    height: .5em;
                }
                .gestoria .container-texto .container-titulo h1{
                    font-size: 1.5em;
                    margin-bottom: .3em;
                }
                .gestoria .container-img-gestoria{
                    height: 20em;
                }
                .gestoria .container-img-gestoria img{
                    height: 20em;
                }
                .corporativo .container-logo img{
                height: 5em; 
                width: 5em; 
                margin-left: 22em; 
                margin-top: 7em;
                }
                .corporativo .contractual .container-img {
                    height: 20em;
                }
                .gestora .container-letrero h1{
                font-size: 1.5em; 
                margin: 0 1em;
                }
                .gestora .container-img img {
                width: 15em;
                margin-bottom: 1em;
                }
            }
            
        </style>
    </head>
    <body>
        
        <?php include './vistas/menu.php';?> 

        <div class="uk-container-expand corporativo laboral">
            <div class="uk-text-center uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light banner" data-src="./image/bannerDerechoCorporativo.jpg" uk-img uk-grid>
                    <div class="uk-width-1-2@m">
                        <div class="uk-width-expand@m container-logo">
                            <a href="./index.php"><img data-src="./image/logoLute.png" alt="" uk-img></a>
                        </div>
                    </div>
            </div>
            
            <div class="uk-text-center derecho-laboral" uk-grid>
                <div class="uk-width-1-2@m">
                    <div class="uk-card container-letrero">
                        <p class="uk-margin-remove"><span style="font-weight: bold">DERECHO CORPORATIVO</span></p>
                        <p class="uk-margin-remove">CONTRACTUAL & GESTORIA</p>
                    </div>
                </div>
                <div class="uk-width-1-2@m"></div>
                <div class="uk-width-1-1@m uk-margin-remove container-txt">
                    <div class="features-group">
                        <div class="features-image inverted">
                                <img src="./banner-derecho-corporativo.jpg"/>
                        </div>
                        <div class="features-text inverted container-gen-txt">
                            <p>Nos enfocamos en regularizar y estructurar desde el centro de las empresas y sociedad, su organización y actividades desde la esfera legal, de acuerdo a la Ley de Sociedades Mercantiles, el Código Civil y demás correlativos, para el correcto desarrollo y funcionamiento de la misma.</p>
                            <p>Desde la constitución de tu sociedad, este ente jurídico nace con derechos y obligaciones y se relaciona, según su objeto social, con un mundo comercial, con exigencias legales. Es por ello que el Derecho Corporativo está ligado estrechamente a las relaciones contractuales, las gestiones comerciales y las gestiones administrativas, según el giro empresarial.</p>
                            <div class="uk-flex uk-flex-middle item-azul">
                                <p class="uk-margin-remove" ></p> <span class="txt"> Constitución de sociedades.</span>
                            </div>
                            <div class="uk-flex uk-flex-middle item-azul">
                                <p class="uk-margin-remove" ></p> <span class="txt"> Regularización de sociedades mercantiles.</span>
                            </div>
                            <div class="uk-flex uk-flex-middle item-azul">
                                <p class="" ></p> <span class="txt"> Elaboración de Asambleas ordinarias y extraordinarias.</span>
                            </div>
                            <div class="uk-flex uk-flex-middle item-azul">
                                <p class="uk-margin-remove" ></p> <span class="txt"> Fusión y escisión de sociedades.</span>
                            </div>
                            <div class="uk-flex uk-flex-middle item-azul">
                                <p class="uk-margin-remove" ></p> <span class="txt"> Liquidación de sociedades.</span>
                            </div>
                            <div class="uk-flex uk-flex-middle item-azul">
                                <p class="uk-margin-remove" ></p> <span class="txt"> Reforma de estatutos sociales.</span>
                            </div>
                            <div class="uk-flex uk-flex-middle item-azul">
                                <p class="uk-margin-remove" ></p> <span class="txt"> Admisión de nuevos socios.</span>
                            </div>  
                            <div class="uk-flex uk-flex-middle item-azul">
                                <p class="uk-margin-remove" ></p> <span class="txt"> Otorgamiento de poderes mediante Escritura Pública.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-text-center gestora" uk-grid>
                <div class="uk-width-1-1@m container-letrero">
                    <h1>ADEMÁS TE AYUDAMOS CON:</h1>
                </div>
                <div class="uk-width-auto@m">
                     <div class="uk-card"></div>
                </div>
                <div class="uk-width-expand@m uk-margin-remove uk-flex uk-flex-center container-img">
                    <img data-src="./image/1_c.jpg" alt="" uk-img>
                </div>
                <div class="uk-width-expand@m uk-margin-remove uk-flex uk-flex-center container-img">
                    <img data-src="./image/2_c.jpg" alt="" uk-img>
                </div>
                <div class="uk-width-expand@m uk-margin-remove uk-flex uk-flex-center container-img">
                    <img data-src="./image/3_c.jpg" alt="" uk-img>
                </div>
                <div class="uk-width-auto@m">
                    <div class="uk-card"></div>
                </div>
            </div>

            <div class="uk-text-center gestora" style="margin-top: .5em" uk-grid>
                <div class="uk-width-auto@m">
                     <div class="uk-card"></div>
                </div>
                <div class="uk-width-expand@m uk-margin-remove container-img"></div>
                <div class="uk-width-expand@m uk-margin-remove uk-flex uk-flex-center container-img">
                    <img data-src="./image/4_c.jpg" alt="" uk-img>
                </div>
                <div class="uk-width-expand@m uk-margin-remove container-img"></div>
                <div class="uk-width-auto@m">
                    <div class="uk-card"></div>
                </div>
            </div>
            
            <div class="uk-text-center contractual" style="margin-bottom: 5em" uk-grid>
                <div class="uk-width-1-2@m container-img">
                    <img data-src="./image/contractual.jpg" class="uk-padding-remove" alt="" uk-img>
                </div>
                
                <div class="uk-width-1-2@m container-texto">
                    <div class="uk-text-center" uk-grid>
                        <div class="uk-width-1-1@m titulo">
                            <h1>CONTRACTUAL</h1>
                            <div class="uk-text-center container-raya" uk-grid>
                                <div class="uk-width-auto@m"></div>
                                <div class="uk-width-expand@m raya"></div>
                                <div class="uk-width-auto@m"></div>
                            </div>
                        </div>
                        <div class="uk-width-1-1@m parrafo">
                            <p>Todas las sociedades se regulan por los derechos y obligaciones que suscriben mediante contratos para la consolidación de relaciones comerciales, a fin de cumplir con su objeto social.</p>
                            <p>Si bien es cierto, los despachos especializados en derecho corporativo realizan revisiones y asesorías sobre los contratos de las empresas, <span style="font-weight: bold">LA FIRMA DE UN CONTRATO</span> puede otorgar circunstancias de ventaja competitiva para un ganar-ganar. Logrando siempre la seguridad de nuestros clientes.</p>
                            <p>Dentro de estos derechos elaboramos y negociamos todo tipo de contrato:</p>
                            <div class="uk-text-center" uk-grid>
                                <div class="uk-width-1-2@m">
                                    <div class="uk-flex uk-flex-middle container-item">
                                        <p class="uk-margin-remove"></p> <span class="txt">Contratos mercantiles.</span>
                                    </div>
                                    <div class="uk-flex uk-flex-middle container-item">
                                        <p class="uk-margin-remove"></p> <span class="txt">Contratos de distribución.</span>
                                    </div>
                                    <div class="uk-flex uk-flex-middle container-item">
                                        <p class="uk-margin-remove"></p> <span class="txt">Contrato de compra venta</span>
                                    </div>
                                    <div class="uk-flex uk-flex-middle container-item">
                                        <p class="uk-margin-remove"></p> <span class="txt">Contrato de prestación de servicios</span>
                                    </div>
                                    <div class="uk-flex uk-flex-middle container-item">
                                        <p class="uk-margin-remove"></p> <span class="txt">Contrato de donación</span>
                                    </div>
                                </div>
                                <div class="uk-width-1-2@m">
                                    <div class="uk-flex uk-flex-middle container-item">
                                        <p class="uk-margin-remove"></p> <span class="txt">Contrato venta a consignación</span>
                                    </div>
                                    <div class="uk-flex uk-flex-middle container-item">
                                        <p class="uk-margin-remove"></p> <span class="txt">Contratos de suministro</span>
                                    </div>
                                    <div class="uk-flex uk-flex-middle container-item">
                                        <p class="uk-margin-remove"></p> <span class="txt">Contrato de arrendamiento</span>
                                    </div>
                                    <div class="uk-flex uk-flex-middle container-item">
                                        <p class="uk-margin-remove"></p> <span class="txt">Convenio de Confidencialidad</span>
                                    </div>
                                    <div class="uk-flex uk-flex-middle container-item">
                                        <p class="uk-margin-remove"></p> <span class="txt">Adendum</span>
                                    </div>
                                    <div class="uk-flex uk-flex-middle container-item">
                                        <p class="uk-margin-remove"></p> <span class="txt">Aviso de Privacidad</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
            </div> 
            
            <div class="uk-text-center gestoria" style="margin-bottom: 5em;" uk-grid>
                <div class="uk-width-expand@m">
                    <div class="uk-text-center container-texto" uk-grid>
                        <div class="uk-width-1-1@m container-titulo">
                            <h1>GESTORIA</h1>
                            <div class="uk-text-center container-raya" uk-grid>
                                <div class="uk-width-auto@m"></div>
                                <div class="uk-width-expand@m raya"></div>
                                <div class="uk-width-auto@m"></div>
                            </div>
                        </div>
                        <div class="uk-width-1-1@m container-content">
                            <p>Derivado del objeto social de cada sociedad, estas deben de cumplir con normas, lineamientos y disposiciones gubernamentales o administrativas.</p>
                            <h4 class="uk-margin-remove">NOSOTROS HACEMOS TUS TRAMITES</h4>
                            <p><span style="font-weight: bold">LICENCIAS MUNICIPALES:</span> Renovación y nuevas solicitudes.</p>
                            <div style="padding: 0 2em">
                                <p class="uk-margin-remove">Seguimiento de requisitos derivados del trámite de licencia:</p>
                                <p class="uk-margin-remove">Visita de inspección.</p>
                                <p class="uk-margin-remove">Contratos de recolección de basura, separación de residuos.</p>
                                <p class="uk-margin-remove">Impermeabilización de techos.</p>
                            </div>
                            <h4 style="font-weight: bold">INSPECCION Y REVISION DEL DEPARTAMENTO DE PROTECCION CIVIL A NEGOCIOS O ESCUELAS.</h4>
                            <div style="padding: 0 2em">
                                <p class="uk-margin-remove">Uso de extintores</p>
                                <p class="uk-margin-remove">Prevención de cables eléctricos.</p>
                            </div>
                            <h4 style="font-weight: bold">INCORPORACION DE PLANTELES EDUCATIVOS ANTE LA SEP.</h4>
                            <div style="padding: 0 2em">
                                <p class="uk-margin-remove">Dictamen estructural ante INFEJAL.</p>
                                <p class="uk-margin-remove">Programa interno de Protección Civil.</p>
                                <p class="uk-margin-remove">Tramite de Asignación Becas.</p>
                                <p class="uk-margin-remove">Plantillas de docentes y documentación.</p>
                                <p class="uk-margin-remove">Dictamen eléctrico.</p>
                                <p class="uk-margin-remove">Reglamento escolar.</p>
                                <p class="uk-margin-remove">Protocolo para prevenir y atender el hostigamiento y acoso sexual.</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="uk-width-1-2@m container-img-gestoria">
                    <img data-src="./image/imagenGestoria.jpg" class="uk-padding-remove" alt="" uk-img>
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