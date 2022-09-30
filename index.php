<?php

    //check if form was sent
    if($_POST){
        $to = 'gjaimes@galletamkt.com';
        
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $mail = $_POST['mail'];
        $texto = $_POST['texto'];
        $subject = "Informes clientes";
        $contenido = "Este mensaje fue enviado por: " . $name ."\nE-mail: " . $mail . "\nTelefono: " . $phone .  "\nNecesito informes sobre: " . $texto;
        //honey pot field
        $honeypot = $_POST['firstname'];
        //check if the honeypot field is filled out. If not, send a mail.
        if( ! empty( $honeypot ) ){
            return; //you may add code here to echo an error etc.
        }else{
        
            mail( $to, $subject, $contenido);
            echo'<script type="text/javascript">
        alert("Formulario enviado correctamente, Gracias por ponerte en contacto con nosotros.");
        window.location.href="index.php";
        </script>';
        }
    }
?>
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
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        
        <style>
            html {
                scroll-behavior: smooth;
            }
            :root {
            --azul:#003A5D;
            --white: #FFFFFF;
            --black: #000000;
            --dorado: #AD8400;
            --piel: #E5CEAD;
            --sm: 1em;
            --md: 2em;
            --mdg: 3.5em;
            --lg: 4.5em;
            }
            .inicio .banner{
                height: 45em;
            }
            .inicio .banner .container-banner{
                position: absolute; 
                top: -1em; 
                left: -30em;
            }
            .inicio .banner .container-banner img{
                height: 27em; 
                width: 27em;
                object-fit: none;
            }
            .inicio .banner .container-letrero{
                position: absolute; 
                left: 5em;
                top: 30em;
            }
            .inicio .banner .container-letrero p{
                color: white; 
                font-size: 1.5em;
                text-align: center;
            }
            .letrero-especialista .container-letrero p{
                font-size: 4.5em;
                color: var(--azul); 
                font-weight: bold; 
                letter-spacing: .1em; 
                margin: .5em 0;  
                font-family: TexgyretermesBold;
            }
            .container-logos-derecho img{
                height: 85%;
                width: 85%;
                object-fit: contain;
                padding: 1em;
                background-color: var(--azul);
            }
            .container-logos-derecho img:hover{
                background-color: var(--dorado);
            }
            .container-raya .raya-grande{
                border-bottom: 5px solid var(--dorado); 
                border-radius: 50%;
            }
            .derecho .container-button{
                padding-left: 5em;
            }
            .derecho .container-button p{
                font-size: 2.8em; 
                text-align:left; 
                font-family: SourceSansProBlack;
            }
            .derecho .container-button .button{
                margin-top: 2em;
            }
            .derecho .container-button .button2{
                margin-top: 14em;
            }
            .derecho .container-button .button button{
                background-color: var(--dorado); 
                font-size: var(--md); 
                border-radius: 5em; 
                color: var(--white); 
                font-weight: bold; 
                border: none; 
                padding: .5em 1.2em;
            }
            .derecho .container-button .button2 button{
                background-color: var(--dorado); 
                font-size: var(--md); 
                border-radius: 5em; 
                color: var(--white); 
                font-weight: bold; 
                border: none; 
                padding: .5em 1.2em;
            }
            .derecho .container-txt{
                text-align: left;
            }
            .derecho .container-txt p{
                font-family: SourceSansProLight; 
                font-size: 1.4em;
            }
            .derecho .container-txt .item-azul p{
                border-left: solid 2.3em var(--azul); 
                height: .8em;
            }
            .derecho .container-txt .item-azul .txt{
                font-weight: bold; 
                font-family: SourceSansProLight; 
                padding-left: .5em; 
                font-size: 1.4em;
            }
            .container-raya .banner-7anos{
                height: 25em;
            }
            .container-raya .banner-7anos h1{
                font-family: TexgyretermesBold; 
                font-size: 4.5em;
                margin-top: .5em;
            }
            .container-raya .banner-7anos h3{
                font-family: TexgyretermesBold; 
                font-size: 2.5em
            }
            .container-raya .banner-7anos p{
                font-family: TexgyretermesItalica; 
                font-size: 1.5em
            }
            .container-nuestro-trabajo .trabajo p{
                font-size: var(--lg); 
                color: var(--azul); 
                font-weight: bold; 
                letter-spacing: .1em; 
                font-family: TexgyretermesBold;
            }
            .container-nuestro-trabajo .container-img img{ 
                object-fit: cover;
               
            }
            .container-nuestra-marca p{
                font-size: var(--lg); 
                color: var(--azul); 
                font-weight: bold; 
                letter-spacing: .1em; 
                margin: .5em 0;  
                font-family: TexgyretermesBold;
            }
            .formulario .container-img{
                max-height: 41em;
            }
            .formulario .container-img img{
                height: 100%; 
                width: 100%; 
                object-fit: cover;
            }
            .formulario .container-formulario{
                background-color: var(--piel);
                max-height: 41em;
            }
            .formulario .container-formulario .content{
                padding: .5em 3em;
            }
            .formulario .container-formulario .content .form legend{
                font-size: 2.5em; 
                font-family: SourceSansProBlack; 
                color: var(--azul); 
                font-weight: bold;
            }
            .formulario .container-formulario .content .form h2{
                font-size: 2.5em; 
                font-family: SourceSansProBlack; 
                color: var(--azul); 
                font-weight: bold;
            }
            .formulario .container-formulario .content .form p button{
                background-color: var(--dorado); 
                font-size: var(--sm);
                border-radius: 5em; 
                color: var(--white); 
                padding: 0 3.5em;
            }
            .container-nuestro-trabajo .container-img{
                border: solid var(--dorado) 3px;
                margin: 1em; max-width: 
                20em;max-height: 18em; 
                padding: 0;
            }
            .container-nuestro-trabajo .container-img .container-card{
                padding: 1em;
            }
            .container-nuestro-trabajo .container-img .container-card .uk-card-media-top{
                max-width:14em; 
                max-height: 14em;
            }
            .container-nuestro-trabajo .container-img .container-card .uk-card-media-top img{
                width:8em; 
                height: 8em;
            }
            .container-nuestro-trabajo .container-img .container-card .container-letrero h3{
                font-weight: bold; 
                color: var(--azul); 
                margin: 1em 0 0; 
                font-size: 1.3em;
            }
            .container-nuestro-trabajo .container-img .container-card .container-letrero p{
                color: var(--azul); 
                font-size: 1em;
            }
            @media screen and (min-width: 601px) and (max-width: 1280px){
                .inicio .banner .container-banner {
                    position: absolute;
                    top: -4em;
                    left: -23em;
                }
                .inicio .banner .container-banner img {
                    height: 40%;
                    width: 40%;
                    object-fit: none;
                }

            }   
            @media (max-width: 600px) {
                .inicio .banner {
                height: 20em;
                }
                .letrero-especialista .container-letrero p{
                    font-size: 1.5em;
                }
                .inicio .banner .container-letrero{
                    top: 6em;
                    left: -6em;
                    padding:  4em 6em;
                }
                .inicio .banner .container-letrero p{
                    font-size: .6em;
                    text-align: center;
                    margin: 0 1em;
                }
                .container-logos-derecho img{
                    width: 70%;
                    padding: 0 0 1em;
                    height: 15em;
                }
                .derecho .container-button p{
                    font-size: 1.5em;
                }
                .derecho .container-button .button button{
                    font-size: 1em;
                }
                .derecho .container-txt p{
                    font-size: .8em;
                    padding: 0 1em;
                }
                .derecho .container-txt .item-azul .txt{
                    font-size: .8em;
                } 
                .derecho .container-txt{
                    text-align: left;
                }
                .derecho .container-button .button2{
                    margin-top: 2em;
                }
                .derecho .container-button .button2 button{
                    font-size: 1em;
                }
                .container-raya .banner-7anos h1{
                    font-size: 1.2em;
                }
                .container-raya .banner-7anos p{
                    font-size: .8em;
                }
                .container-raya .banner-7anos h3{
                    font-size: 1.2em;
                }
                .container-nuestro-trabajo .trabajo p{
                    font-size: 1.5em;
                }
                .container-nuestro-trabajo .container-img img{
                    height: 11em;
                    width: 15em;
                    object-fit: cover;
                    margin-top: .5em;
                }
                .container-nuestra-marca p {
                    font-size: 1.5em;
                    margin: 0;
                }
                .formulario .container-img img{
                    height: 15em;
                    object-fit: cover;
                }
                .formulario .container-formulario .content .form legend{
                    font-size: 1.5em;
                }
                .formulario .container-formulario .content .form h2{
                    font-size: 1.5em;
                }
                .formulario .container-formulario .content .form p button{
                    font-size: 1em;
                }
                .container-raya .banner-7anos {
                    height: 16em;
                }
                .inicio .banner .container-banner img {
                    height: 6em;
                    width: 6em;
                    margin-left: 32em;
                    object-fit: cover;
                }
                .inicio .banner .container-banner {
                    top: 0em;
                }
            }
        </style>
    </head>
    <body>

        <?php include './vistas/menu.php';?>
        
        <div class="uk-container-expand inicio">
            
            <div class="uk-text-center uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light banner" data-src="./image/bannerInicio.jpg" uk-img uk-grid>
                <div class="uk-width-1-2@m">
                    <div class="uk-width-expand@m container-banner">
                        <a href="./index.php"><img data-src="./image/logoLute.png" alt="" uk-img></a>
                    </div>
                    <div class="uk-width-1-3@m container-letrero">
                       <p>Enfocados en dar al cliente la seguridad de planear y solucionar sus necesidades legales con eficacia, responsabilidad y proactividad.</p>
                    </div>
                </div>
                <div class="uk-width-1-2@m"></div>
            </div>
            <div class="uk-width-1-2@m"></div>
            </div>



            <div class="uk-text-center letrero-especialista" uk-grid>
                <div class="uk-width-1-1@m container-letrero" id="especialistas">
                    <p>ESPECIALISTAS EN</p>
                </div>
                <div class="uk-width-1-3@m container-logos-derecho uk-margin-remove">
                    <a data-scroll href="#laboral" onclick="show('Section1')"><img class="activa" data-src="./image/4.png" alt="" uk-img></a>
                </div>
                <div class="uk-width-1-3@m container-logos-derecho uk-margin-remove">
                    <a data-scroll href="#corporativo" onclick="show('Section2')"><img data-src="./image/2.png" alt="" uk-img></a>
                </div>
                <div class="uk-width-1-3@m container-logos-derecho uk-margin-remove">
                    <a data-scroll href="#propiedad" onclick="show('Section3')"><img data-src="./image/3.png" alt="" uk-img></a>
                </div>
                <div class="uk-width-1-1@m container-raya">
                    <div class="uk-text-center" uk-grid>
                        <div class="uk-width-1-4@m"></div>
                        <div class="uk-width-expand@m">
                            <div class="raya-grande"></div>
                        </div>
                        <div class="uk-width-1-4@m"></div>
                    </div>
                </div>

            <!-- Derecho laboral y seguridad social -->  
            <div id="Section1" class="uk-text-center derecho" uk-grid>    
                <div class="uk-width-1-3@m container-button" id="laboral">
                    <p><span style="font-weight: bold;">DERECHO</span> LABORAL <span style="font-weight: bold;">Y SEGURIDAD</span> SOCIAL</p>
                    <div class="uk-flex uk-flex-left button">
                        <a href="./derechoLaboral.php"><button type="button">Consultar</button></a>
                    </div>
                </div>
                <div class="uk-width-expand@m container-txt">
                    <p>Esta área de especialización se enfoca en procesos y revisión de documentos vigentes al area de capital humano, a efectos de detectar áreas de oportunidad, y proponer opciones viables que garantice a la compañía la disminución de contingencias.</p>
                    <p>Ofrecemos mejorar su posición en futuras negociaciones, así como, la debida preparación preventiva, para la defensa legal en caso de suscitarse algún conflicto laboral; así mismo, cumplimentar los procesos necesarios de acuerdo a la normatividad laboral vigente.</p>
                    <div class="uk-flex uk-flex-middle item-azul">
                         <p class="uk-margin-remove"></p> <span class="txt"> Negociación en la terminación de relación laboral.</span>
                    </div>
                    <div class="uk-flex uk-flex-middle item-azul">
                         <p class="uk-margin-remove"></p> <span class="txt"> Integración de salarios.</span>
                    </div>
                    <div class="uk-flex uk-flex-middle item-azul">
                         <p class="uk-margin-remove"></p> <span class="txt"> Asesorías y solución en el cumplimiento de obligaciones patronales para la seguridad social.</span>
                    </div>
                    <div class="uk-flex uk-flex-middle item-azul">
                         <p class="uk-margin-remove"></p> <span class="txt"> Actas administrativas.</span>
                    </div>
                    <div class="uk-flex uk-flex-middle item-azul">
                         <p class=""></p> <span class="txt"> Seguimiento y desahogo a visitas de inspección y/o requerimientos por parte de la Secretaria de Trabajo y Prevención Social.</span>
                    </div>
                </div>
            </div>
            <!-- Derecho Corporativo -->  
            <div id="Section2" style="display: none;" class="uk-text-center derecho"  uk-grid>    
                <div class="uk-width-1-3@m container-button" id="corporativo">
                    <p><span style="font-weight: bold;">DERECHO</span> CORPORATIVO</p>
                    <div class="uk-flex uk-flex-left button2">
                        <a href="./derechoCorporativo.php"><button type="button">Consultar</button></a>
                    </div>
                </div>
                <div class="uk-width-expand@m container-txt">
                    <p>Nos enfocamos en regularizar desde el centro de las empresas y sociedad, su organización y actividades desde la esfera legal, de acuerdo a la ley de Sociedades Mercantiles, el Código Civil y demás correlativos, para el correcto desarrollo y funcionamiento de la misma.</p>
                    <p>Desde la constitución de tú sociedad, este ente jurídico nace con derechos y obligaciones y se relaciona, según su objeto social, con un mundo comercial, con exigencias legales. Es por ello que el Derecho Corporativo está ligado estrechamente a las relaciones contractuales, las gestiones comerciales y las gestiones administrativas, según el giro empresarial.</p>
                    <div class="uk-flex uk-flex-middle item-azul">
                         <p class="uk-margin-remove"></p> <span class="txt"> Constitución de sociedades.</span>
                    </div>
                    <div class="uk-flex uk-flex-middle item-azul">
                         <p class="uk-margin-remove"></p> <span class="txt"> Regularización de sociedades mercantiles..</span>
                    </div>
                    <div class="uk-flex uk-flex-middle item-azul">
                         <p class="uk-margin-remove"></p> <span class="txt"> Elaboración de Asambleas ordinarias y extraordinarias.</span>
                    </div>
                    <div class="uk-flex uk-flex-middle item-azul">
                         <p class="uk-margin-remove"></p> <span class="txt"> Fusión y escisión de sociedades.</span>
                    </div>
                    <div class="uk-flex uk-flex-middle item-azul">
                         <p class=""></p> <span class="txt"> Liquidación de sociedades.</span>
                    </div>
                    <div class="uk-flex uk-flex-middle item-azul">
                         <p class=""></p> <span class="txt"> Reforma de estatutos sociales.</span>
                    </div>
                    <div class="uk-flex uk-flex-middle item-azul">
                         <p class=""></p> <span class="txt"> Admisión de nuevos socios.</span>
                    </div>
                    <div class="uk-flex uk-flex-middle item-azul">
                         <p class=""></p> <span class="txt"> Otorgamiento de poderes mediante Escritura Pública.</span>
                    </div>
                </div>
            </div>
            <!-- Derechode Propiedad Industrial e Intelectual -->  
            <div id="Section3" style="display: none;" class="uk-text-center derecho" uk-grid>    
                <div class="uk-width-1-3@m container-button" id="propiedad">
                    <p><span style="font-weight: bold;">DERECHO DE</span> PROPIEDAD <span style="font-weight: bold;">INDUSTRIAL E</span> INTELECTUAL</p>
                    <div class="uk-flex uk-flex-left button">
                        <a href="./derechoPropiedad.php"><button type="button">Consultar</button></a>
                    </div>
                </div>
                <div class="uk-width-expand@m container-txt">
                    <p>Los Derechos de Propiedad, son una especialización muy importante, con matices únicos y específicos respecto de la tramitación de estos derechos. Un derecho de propiedad, nace al momento de su creación, pero no surte efectos frente a terceros hasta su registro.</p>
                    <p>Cada país, tiene su oficina de Marcas y Patentes, & Derechos de Autor en las que se llevan a cabo todas las gestiones de registrabilidad. En México cada oficina trabaja independiente, ya que en otros países se concentran en una misma.</p>
                    <p>Los abogados especializados en esta área como LUTTE, a través de su experiencia, ofrecemos asesorías confiables para el registro de marcas, patentes y derechos de autor, consiguiendo con ello que tu empresa o negocio obtenga activos que la hagan valer y aumentar su valor en el mundo comercial que vivimos.</p>
                    <div class="uk-flex uk-flex-middle item-azul">
                         <p class="uk-margin-remove"></p> <span class="txt"> Negociación en la terminación de relación laboral.</span>
                    </div>
                    <div class="uk-flex uk-flex-middle item-azul">
                         <p class="uk-margin-remove"></p> <span class="txt"> Integración de salarios.</span>
                    </div>
                    <div class="uk-flex uk-flex-middle item-azul">
                         <p class="uk-margin-remove"></p> <span class="txt"> Asesorías y solución en el cumplimiento de obligaciones patronales para la seguridad social.</span>
                    </div>
                    <div class="uk-flex uk-flex-middle item-azul">
                         <p class="uk-margin-remove"></p> <span class="txt"> Actas administrativas.</span>
                    </div>
                    <div class="uk-flex uk-flex-middle item-azul">
                         <p class=""></p> <span class="txt"> Seguimiento y desahogo a visitas de inspección y/o requerimientos <br> por parte de la Secretaria de Trabajo y Prevención Social.</span>
                    </div>
                </div>
            </div>




            <div class="uk-width-1-1@m container-raya uk-visible@m">
                    <div class="uk-text-center" uk-grid>
                        <div class="uk-width-1-4@m uk-visible@m"></div>
                        <div class="uk-width-expand@m">
                            <div class="raya-grande"></div>
                        </div>
                        <div class="uk-width-1-4@m uk-visible@m"></div>
                        <div class="uk-width-1-1@m uk-text-center uk-flex uk-flex-center uk-background-cover uk-light banner-7anos" data-src="./image/Banner7Anos.jpg" uk-img>
                            <div class="uk-width-1-4@m uk-width-1-1@s"></div>
                                <div class="uk-width-expand@m 7anosexpertise">
                                    <h1 class="">7 Años De Expertise</h1>
                                    <h3 class="uk-margin-remove">en cada una de nuestras ramas</h3><br>
                                    <p class="uk-margin-remove">Creemos en la importancia de lograr estabilidad desde el centro de tu emprea o negocio, para poder transmitirla a tus clientes-proveedores.</p>
                                    <p>Sabemos que tu imagen, tu marca, tu icono empresarial habla por ti.</p>
                                </div>
                                <div class="uk-width-1-4@m uk-visible@m"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              
            <!-- banner movil -->
            <div class="uk-text-center@m container-raya uk-hidden@m">
                <div class="uk-width-1-1@m uk-text-center uk-flex uk-flex-center uk-background-cover uk-light banner-7anos" data-src="./image/Banner7Anos.jpg" uk-img>
                        <div class="uk-width-1-1@m 7anosexpertise" style="margin: 2em;">
                            <h1 class="uk-margin-remove">7 Años De Expertise</h1>
                            <h3 class="uk-margin-remove">en cada una de nuestras ramas</h3><br>
                            <p class="uk-margin-remove" style="text-align: left">Creemos en la importancia de lograr estabilidad desde el centro de tu emprea o negocio, para poder transmitirla a tus clientes-proveedores.</p>
                            <p style="text-align: left">Sabemos que tu imagen, tu marca, tu icono empresarial habla por ti.</p>
                        </div>
                </div>
            </div>

            <div class="uk-text-center container-nuestro-trabajo uk-flex uk-flex uk-flex-between@m uk-flex-center" style="margin-top: .5em;" uk-grid>
                <div class="uk-width-1-1@m trabajo">
                    <p style="margin: 1em 0">NUESTRO TRABAJO:</p>
                </div>
                <div class="uk-width-auto@m">
                     <div class="uk-card uk-card-body uk-visible@m"></div>
                </div>
                <div class="uk-width-expand@m uk-margin-remove container-img uk-flex uk-flex-middle container-img" uk-grid>
                    <div>
                        <div class="uk-card container-card">
                            <div class="uk-card-media-top uk-flex uk-flex-middle uk-flex-center">
                                <img src="./image/1-l.png" alt="">
                            </div>
                            <div class="uk-card-body uk-padding-remove container-letrero">
                                <h3 class="uk-card-title">AUDITORIA LEGAL</h3>
                                <p class="uk-margin-remove">DE TU EMPRESA</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-expand@m uk-margin-remove container-img uk-flex uk-flex-middle" style="border: solid var(--dorado) 3px;margin: 1em; max-width: 20em;max-height: 18em; padding: 0;" uk-grid>
                    <div>
                        <div class="uk-card container-card">
                            <div class="uk-card-media-top uk-flex uk-flex-middle uk-flex-center">
                                <img src="./image/2-l.png" style="width:8em; height: 8em;" alt="">
                            </div>
                            <div class="uk-card-body uk-padding-remove container-letrero">
                                <h3 class="uk-card-title">ENCONTRAMOS TU</h3>
                                <p class="uk-margin-remove" style="color: var(--azul); font-size: 1em;">ÁREA DE OPORTUNIDAD.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-expand@m uk-margin-remove container-img uk-flex uk-flex-middle" style="border: solid var(--dorado) 3px;margin: 1em; max-width: 20em;max-height: 18em; padding: 0;" uk-grid>
                    <div>
                        <div class="uk-card container-card">
                            <div class="uk-card-media-top uk-flex uk-flex-middle uk-flex-center">
                                <img src="./image/3-l.png" style="width:8em; height: 8em;" alt="">
                            </div>
                            <div class="uk-card-body uk-padding-remove container-letrero">
                                <h3 class="uk-card-title">NEGOCIAMOS SOLUCIONES Y</h3>
                                <p class="uk-margin-remove" style="color: var(--azul); font-size: 1em;">EVITAMOS CONTIGENCIAS.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-auto@m">
                    <div class="uk-card uk-card-body uk-visible@m"></div>
                </div>
            </div>
            <div class="uk-text-center container-nuestro-trabajo uk-flex uk-flex-between@m uk-flex-center" style="margin-top: .5em;" uk-grid>
                <div class="uk-width-auto@m">
                     <div class="uk-card uk-card-body uk-visible@m"></div>
                </div>
                <div class="uk-width-expand@m uk-margin-remove container-img uk-flex uk-flex-middle" style="border: solid var(--dorado) 3px;margin: 1em; max-width: 20em;max-height: 18em; padding: 0;" uk-grid>
                    <div>
                        <div class="uk-card container-card">
                            <div class="uk-card-media-top uk-flex uk-flex-middle uk-flex-center">
                                <img src="./image/4-l.png" style="width:8em; height: 8em;" alt="">
                            </div>
                            <div class="uk-card-body uk-padding-remove container-letrero">
                                <h3 class="uk-card-title">OFRECEMOS</h3>
                                <p class="uk-margin-remove" style="color: var(--azul); font-size: 1em;">ACTIVOS.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-expand@m uk-margin-remove container-img uk-flex uk-flex-middle" style="border: solid var(--dorado) 3px;margin: 1em; max-width: 20em;max-height: 18em; padding: 0;" uk-grid>
                    <div>
                        <div class="uk-card container-card">
                            <div class="uk-card-media-top uk-flex uk-flex-middle uk-flex-center">
                                <img src="./image/5-l.png" style="width:8em; height: 8em;" alt="">
                            </div>
                            <div class="uk-card-body uk-padding-remove container-letrero">
                                <h3 class="uk-card-title">REGULARIZAMOS LA</h3>
                                <p class="uk-margin-remove" style="color: var(--azul); font-size: 1em;">SITUACION  DE TU SOCIEDAD.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-expand@m uk-margin-remove container-img uk-flex uk-flex-middle" style="border: solid var(--dorado) 3px;margin: 1em; max-width: 20em;max-height: 18em; padding: 0;" uk-grid>
                    <div>
                        <div class="uk-card container-card">
                            <div class="uk-card-media-top uk-flex uk-flex-middle uk-flex-center">
                                <img src="./image/6-l.png" style="width:8em; height: 8em;" alt="">
                            </div>
                            <div class="uk-card-body uk-padding-remove container-letrero">
                                <h3 class="uk-card-title">ESPECIALISTAS EN</h3>
                                <p class="uk-margin-remove" style="color: var(--azul); font-size: 1em;">PROCESOS CONTENCIOSOS.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-auto@m">
                     <div class="uk-card uk-card-body uk-visible@m"></div>
                </div>
            </div>
            <div class="uk-text-center container-nuestro-trabajo uk-flex uk-flex-between@m uk-flex-center" style="margin-top: .5em;" uk-grid>
                <div class="uk-width-auto@m">
                     <div class="uk-card uk-card-body uk-visible@m"></div>
                </div>
                <div class="uk-width-expand@m uk-margin-remove container-img uk-flex uk-flex-middle" style="border: solid var(--dorado) 3px;margin: 1em; max-width: 20em;max-height: 18em; padding: 0;" uk-grid>
                    <div>
                        <div class="uk-card container-card">
                            <div class="uk-card-media-top uk-flex uk-flex-middle uk-flex-center">
                                <img src="./image/7-l.png" style="width:8em; height: 8em;" alt="">
                            </div>
                            <div class="uk-card-body uk-padding-remove container-letrero">
                                <h3 class="uk-card-title">PROTECCION AL PATRON DE</h3>
                                <p class="uk-margin-remove" style="color: var(--azul); font-size: 1em;">LA FUENTE DE TRABAJO.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-expand@m uk-margin-remove container-img uk-flex uk-flex-middle" style="border: solid var(--dorado) 3px;margin: 1em; max-width: 20em;max-height: 18em; padding: 0;" uk-grid>
                    <div>
                        <div class="uk-card container-card">
                            <div class="uk-card-media-top uk-flex uk-flex-middle uk-flex-center">
                                <img src="./image/8-l.png" style="width:8em; height: 8em;" alt="">
                            </div>
                            <div class="uk-card-body uk-padding-remove container-letrero">
                                <h3 class="uk-card-title">HACEMOS DE TU EMPRESA UNA</h3>
                                <p class="uk-margin-remove" style="color: var(--azul); font-size: 1em;">FORTALEZA SIN PASIVOS Y CON ACTIVOS</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-expand@m uk-visible@m uk-margin-remove container-img uk-flex uk-flex-middle" style="margin: 1em; max-width: 20em;max-height: 18em; padding: 0;border: none" uk-grid>
                    
                </div>
                <div class="uk-width-auto@m">
                     <div class="uk-card uk-card-body uk-visible@m"></div>
                </div>
            </div>
            
            <div class="uk-text-center container-nuestra-marca" uk-grid>
                <div class="uk-width-1-1@m">
                    <p>NUESTRAS MARCAS</p>
                </div>
                <div class="uk-width-1-6@m">
                    <div class="uk-card uk-card-body uk-visible@m"></div>
                </div>
                <div class="uk-width-expand@m uk-margin-remove">
                    <div uk-slider="center: false; autoplay: true; autoplay-interval: 1000;">
                        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-ligh">
                            <li style="padding: 2em" class="uk-transition-toggle" tabindex="0">
                                <img style="width: 100%; height:100%;" src="./image/logoPlanum.jpg" alt="">
                            </li>
                            <li style="padding: 2em" class="uk-transition-toggle" tabindex="0">
                                <img style="width: 100%; height:100%;" src="./image/logoGalleta.jpg" alt="">
                            </li>
                            <li style="padding: 2em" class="uk-transition-toggle" tabindex="0">
                                <img style="width: 100%; height:100%; " src="./image/logoZitra.jpg" alt="">
                            </li>
                            <li style="padding: 2em" class="uk-transition-toggle" tabindex="0">
                                <img style="width: 100%; height:100%; " src="./image/logoRodmart.jpg" alt="">
                            </li>
                            <li style="padding: 2em" class="uk-transition-toggle" tabindex="0">
                                <img style="width: 100%; height:100%; " src="./image/logoin2.jpg" alt="">
                            </li>
                            <li style="padding: 2em" class="uk-transition-toggle" tabindex="0">
                                <img style="width: 100%; height:100%; " src="./image/logoAndaluz.jpg" alt="">
                            </li>
                            <li style="padding: 2em" class="uk-transition-toggle" tabindex="0">
                                <img style="width: 100%; height:100%; " src="./image/logoGaleria88.jpg" alt="">
                            </li>
                            <li style="padding: 2em" class="uk-transition-toggle" tabindex="0">
                                <img style="width: 100%; height:100%; " src="./image/logoLaVoz.jpg" alt="">
                            </li>
                            <li style="padding: 2em" class="uk-transition-toggle" tabindex="0">
                                <img style="width: 100%; height: 100%;" src="./image/logoBranche.jpg" alt="">
                            </li>
                            <li style="padding: 2em" class="uk-transition-toggle" tabindex="0">
                                <img style="width: 100%; height: 100%;" src="./image/logoBranda.jpg" alt="">
                            </li>
                            <li style="padding: 2em" class="uk-transition-toggle" tabindex="0">
                                <img style="width: 100%; height: 100%;" src="./image/logoEspacio.jpg" alt="">
                            </li>
                        </ul>

                        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
                    </div>
                </div>
                <div class="uk-width-1-6@m uk-visible@m">
                    <div class="uk-card uk-card-body"></div>
                </div>
            </div>


            <div class="uk-text-center formulario" id="contacto" uk-grid>
                <div class="uk-width-1-2@m container-img">
                    <img data-src="./image/FORMULARIO.jpg" class="uk-padding-remove" alt="" uk-img>
                </div>
                <div class="uk-width-expand@m container-formulario">
                    <div class="uk-padding content">
                        <form class="form" name="formulario" action="#my-form" method="post" id="my-form">
                            <fieldset class="uk-fieldset form">
                                <legend class="uk-legend">¿ Necesitas una asesoría ?</legend>
                                <h2 class="uk-margin-remove">CONTÁCTENOS</h2>
                                <div class="uk-margin">
                                    <input class="uk-input" name="name" type="text" placeholder="NOMBRE" required>
                                </div>

                                <input style="display: none;" name="firstname" type="text" id="firstname" class="hide-robot">

                                <div class="uk-margin">
                                    <input class="uk-input" name="phone" type="text" placeholder="TELÉFONO" required>
                                </div>
                                <div class="uk-margin">
                                    <input class="uk-input" name="mail" type="text" placeholder="CORREO ELECTRÓNICO" required>
                                </div>
                                <div class="uk-margin">
                                    <textarea class="uk-textarea" name="texto" type="text"  rows="5" placeholder="MENSAJE" required></textarea>
                                </div>
                                
                                <p uk-margin>
                                    <button type="submit" class="uk-button uk-button-default uk-button-large">ENVIAR</button>
                                </p>
                            
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <?php include './vistas/footer.php';?>

        <script type="text/javascript">
            var divs = ["Section1", "Section2", "Section3"];
            var visibleId = null;
            function show(id) {
                if(visibleId !== id) {
                visibleId = id;
                } 
                hide();
            }
            function hide() {
                var div, i, id;
                for(i = 0; i < divs.length; i++) {
                id = divs[i];
                div = document.getElementById(id);
                if(visibleId === id) {
                    div.style.display = "flex";
                } else {
                    div.style.display = "none";
                }
                }
            }  
        </script>
      
        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.9.4/dist/css/uikit.min.css" />

        <!-- UIkit JS -->
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.9.4/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.9.4/dist/js/uikit-icons.min.js"></script>
    </body>
</html>