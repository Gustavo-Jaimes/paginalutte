<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         :root {
            --azul:#003A5D;
            --white: #FFFFFF;
            --black: #000000;
            --dorado: #AD8400;
            --piel: #E5CEAD;
            --sm: 1.2em;
            --md: 2em;
            --mdg: 3.5em;
            --lg: 4em;
            }
            footer .container-footer{
                height: 25em;
            }
            footer .container-footer h1{
                font-family: TexgyretermesBold; 
                font-size: 3.8em; 
                margin-top: 0.5em;
            }
            footer .container-footer .texto-left{
                text-align: left; 
                padding-left:6em;
            }
            footer .container-footer .texto-left p{
                font-family:SourceSansProLight; 
                font-size: 1.2em;
            }
            footer .container-footer .texto-right h5{
                font-family: SourceSansProLight; 
                font-size: 1.2em; 
                margin-bottom: .5em; 
                text-align: left; 
                font-weight: bold; 
                padding-left: 1em;
            }
            footer .container-footer .texto-right .container-items{
                text-align: left;
                padding-left: 1em; 
                border-left: solid .3em var(--dorado);
            }
            footer .container-footer .texto-right .container-items p{
                font-family:SourceSansProLight; 
                font-size: 1.2em; 
                margin: .3em 0 0 0;
            }
            .raya-footer{
                border-bottom: 2px solid var(--white); 
                border-radius: 50%;
            }
            .derechos-footer{
                font-family:SourceSansProLight; 
                font-size: 1.2em; 
                color: var(--white);
            }
            footer .container-footer img{
                width: 10em; 
                height: 6em; 
                margin-top: 1em; 
                object-fit: cover;
            }

            @media (max-width: 600px){
                footer .container-footer{
                    height: 100%;
                    padding: 0em 1em;
                }
                footer .container-footer h1{
                    font-size: 2em;
                }
                footer .container-footer .texto-left{
                    padding-left: 4em;
                    font-size: .8em;
                }
                footer .container-footer .texto-right h5{
                    padding-left: 4em;
                    font-size: 1em;
                    margin-top: 1em;
                }
                footer .container-footer .texto-right .container-items p{
                    margin: 0;
                    font-size: .8em;
                    padding-left: 2em;
                }
                footer .container-footer .texto-right .container-items{
                    border: none;
                }
                footer .container-footer .texto-right .container-items p {
                    padding:0;
                }
                footer .container-footer .texto-right .item-derecho{
                    padding-left: 3em;
                }
                footer .container-footer img {
                    width: 8em;
                    height: 5em;
                }        
            }
    </style>
</head>
<body>
    <footer>
        <div class="uk-text-center uk-height-medium uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light container-footer" data-src="./image/footer.jpg" uk-img uk-grid>
            <div class="uk-width-1-2@m uk-flex uk-flex-center">
                <img src="./image/logo-footer.png" alt="">
            </div>
            <div class="uk-width-1-2@m"></div>

            <div class="uk-width-1-2@m uk-margin-remove texto-left">
                <p class="uk-margin-remove">Tu seguridad, nuestra presencia y la eficiencia en la solución de conflictos son nuestra prioridad.</p>
                <p class="uk-margin-remove">Consolidamos proyectos a largo plazo y duraderos.</p>
            </div>
            <div class="uk-width-1-5@m uk-margin-remove uk-padding-remove texto-right">
                <h5>SERVICIOS</h5>
                <div class="container-items item-derecho">
                    <a href="./derechoLaboral.php"><p>Derecho laboral y seguridad social</p></a>
                    <a href="./derechoCorporativo.php"><p>Derecho Corporativo</p></a>
                    <a href="./derechoPropiedad.php"><p>Derechos de propiedad: industrial e intelectual</p></a>
                </div>
            </div>
            <div class="uk-width-1-5@m uk-margin-remove texto-right">
                <h5>CONTACTENOS</h5>
                <div class="container-items">
                    <a href="tel:+523300000000" class="btn-phone" target="_blank"><p>33 0000 0000</p></a>   
                    <a href="https://goo.gl/maps/yNNFVAGLKsKezoaP7" target="_blank"><p>Circulación del Menhir Sur 689 Col. Altamira C.P. 45160 Zapopan Jalisco</p></a> 
                </div>
            </div>

            <div class="uk-width-1-4@m "></div>
            <div class="uk-width-1-2@m">
                 <div class="raya-footer"></div>
            </div>
            <div class="uk-width-1-4@m uk-visible@m"></div>

            <div class="uk-width-1-4@m uk-visible@m"></div>
            <div class="uk-width-1-2@m uk-margin-remove">
                <p class="derechos-footer">Copyright © 2021.LUTTE. Derechos Reservados</p>
            </div>
            <div class="uk-width-1-4@m"></div>
        </div>
    </footer>
</body>
</html>