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
                top: -10em; 
                left: -20em;
            }
            .laboral .banner .container-logo img{
                height: 25em; 
                width: 25em;
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
                font-size: 1.4.em;
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

            /*Estilos del resto de la pagina*/

            .ayudamos{
                margin-top: .5em;
            }
            .ayudamos .container-letrero h1{
                font-size: var(--lg); 
                color: var(--azul); 
                font-weight: bold; 
                letter-spacing: .1em; 
                margin: 2em 0 .5em 0;  
                font-family: TexgyretermesBold;
            }
            .ayudamos .container-img img{
                height: 100%; 
                width: 100%; 
                border: solid 3px var(--dorado);
            }
            @media screen and (min-width: 601px) and (max-width: 1280px){
                .laboral .banner .container-logo img {
                    height: 65%;
                    width: 65%;
                }
                .laboral .banner .container-logo {
                    position: relative;
                    top: -10em;
                    left: -17em;
                }
            }   


            @media (max-width: 600px){
                .laboral .banner {
                    height: 20em;
                }
                .laboral .banner .container-logo img {
                    height: 5em;
                    width: 5em;
                    margin-left: 22em;
                    margin-top: 5em;
                }
                .laboral .derecho-laboral .container-letrero p{
                    font-size: 1.5em;
                }
                .laboral .derecho-laboral .container-txt .features-image img{
                    height: 20em;
                    width: 100%;
                }
                .laboral .derecho-laboral .container-txt .container-gen-txt{
                    margin-right: 0;
                }
                .ayudamos .container-letrero h1{
                    font-size: 1.5em;
                    padding: 0 1em;
                } 
                .ayudamos .container-img img{
                    height: 11em;
                    width: 15em;
                    object-fit: cover;
                    margin-top: .5em;
                }
                .laboral .derecho-laboral .container-txt .container-gen-txt .item-azul .txt{
                    font-size: 1em;
                }
            }
        </style>
    </head>
    <body>

         <?php include './vistas/menu.php';?> 

        <div class="uk-container-expand laboral">
            <div class="uk-text-center uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light banner" data-src="./image/bannerDerechoLaboral.jpg" uk-img uk-grid>
                <div class="uk-width-1-2@m">
                    <div class="uk-width-expand@m container-logo">
                        <a href="./index.php"><img data-src="./image/logoLute.png" alt="" uk-img></a>
                    </div>
                </div>
            </div>

            <div class="uk-text-center derecho-laboral" uk-grid>
                <div class="uk-width-1-2@m">
                    <div class="uk-card container-letrero">
                        <p class="uk-margin-remove"><span style="font-weight: bold">DERECHO </span>LABORAL</p>
                        <p class="uk-margin-remove"><span style="font-weight: bold">Y SEGURIDAD </span>SOCIAL</p>
                    </div>
                </div>
                <div class="uk-width-1-2@m"></div>
                <div class="uk-width-1-1@m uk-margin-remove container-txt">
                    <div class="features-group">
                        <div class="features-image inverted">
                                <img src="./banner-derecho-laboral.jpg"/>
                        </div>
                        <div class="features-text inverted container-gen-txt">
                            <p>Esta área de especialización se enfoca en procesos y revisión de documentos vigentes al área de capital humano, a efecto de detectar áreas de oportunidades, y proponer opciones viables que garanticen a la compañía la disminución de contingencias.</p>
                            <p>Ofrecemos mejorar su posición en futuras negociaciones, así como, la debida preparación preventiva, para la defensa en caso de suscitarse algún conflicto laboral; así mismo, cumplimentar los procesos necesarios de acuerdo a la normatividad laboral vigente.</p>
                            <div class="uk-flex uk-flex-middle item-azul">
                                <p class="uk-margin-remove" ></p> <span class="txt"> Negociación en la terminación de relación laboral.</span>
                            </div>
                            <div class="uk-flex uk-flex-middle item-azul">
                                <p class="uk-margin-remove" ></p> <span class="txt"> Integración de salarios.</span>
                            </div>
                            <div class="uk-flex uk-flex-middle item-azul">
                                <p class="" ></p> <span class="txt"> Asesorías y solución en el cumplimiento de obligaciones patronales para la seguridad social.</span>
                            </div>
                            <div class="uk-flex uk-flex-middle item-azul">
                                <p class="uk-margin-remove" ></p> <span class="txt"> Actas administrativas.</span>
                            </div>
                            <div class="uk-flex uk-flex-middle item-azul">
                                <p class=""></p> <span class="txt" > Seguimiento y desahogo a visitas de inspección y/o requerimientos por parte de la Secretaria de Trabajo y Prevención Social.</span>
                            </div>  
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            
            <div class="uk-text-center ayudamos" uk-grid>
                <div class="uk-width-1-1@m container-letrero">
                    <h1 >ADEMAS TE AYUDAMOS CON:</h1>
                </div>
                <div class="uk-width-auto@m">
                     <div class="uk-card uk-card-body uk-visible@m"></div>
                </div>
                <div class="uk-width-expand@m uk-margin-remove uk-flex uk-flex-center container-img">
                    <img data-src="./1_.jpg" alt="" uk-img>
                </div>
                <div class="uk-width-expand@m uk-margin-remove uk-flex uk-flex-center container-img">
                    <img data-src="./image/2_.jpg" alt="" uk-img>
                </div>
                <div class="uk-width-expand@m uk-margin-remove uk-flex uk-flex-center container-img">
                    <img data-src="./image/3_.jpg" alt="" uk-img>
                </div>
                <div class="uk-width-auto@m">
                    <div class="uk-card uk-card-body uk-visible@m"></div>
                </div>
            </div>

            <div class="uk-text-center ayudamos bottom" style="margin-top: .5em; margin-bottom: 1em; " uk-grid>
                <div class="uk-width-auto@m">
                     <div class="uk-card uk-card-body uk-visible@m"></div>
                </div>
                <div class="uk-width-expand@m uk-margin-remove uk-flex uk-flex-center container-img">
                    <img data-src="./image/4_.jpg" alt="" uk-img>
                </div>
                <div class="uk-width-expand@m uk-margin-remove uk-flex uk-flex-center container-img">
                    <img data-src="./image/5_.jpg" alt="" uk-img>
                </div>
                <div class="uk-width-expand@m uk-margin-remove uk-flex uk-flex-center container-img">
                    <img data-src="./image/6_.jpg" alt="" uk-img>
                </div>
                <div class="uk-width-auto@m">
                     <div class="uk-card uk-card-body uk-visible@m"></div>
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