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
            --letraLight: font-family: SourceSansProLight;
            --letraNegra: font-family: SourceSansProBlack;
            --letraItalica: font-family: TexgyretermesItalica;
            --letraItalicaNegra: font-family: TexgyretermesBold;;
            }
        .header{
            position: absolute; 
            z-index: 4; 
            top: 2em; 
            right: 25em; 
        }
        .header .menu-container .header-nav{
            background-color: transparent;
        }
        .header .menu-container .header-nav .container-ul li{
            margin-right: 3em; 
            font-weight: bold;
        }
        .header .menu-container .header-nav .container-ul li a{
            color:var(--white); 
            font-size: var(--sm);
            font-family: var(--SourceSansProBlack);
        }
        .header .menu-container .header-nav .container-ul li .container-submenu{
            background-color: transparent; 
            color: var(--white); 
            padding: 0px;
        }
        .header .menu-container .header-nav .container-ul li .container-submenu ul li a{
            color:var(--white); 
            font-size: .9em;
        }
        @media (max-width: 600px){
            .header{
            left: 40%;
            top: 0%;
            }
            .header .menu-container .header-nav .container-ul li a{
                font-size:.7em;
                padding: .6em;
            }
            .header .menu-container .header-nav .container-ul li{
                margin: 0;
            }
            .header .menu-container .header-nav .container-ul li .container-submenu ul li a{
                font-size: .5em
            }
            .header .menu-container .header-nav .container-ul li .container-submenu ul{
                margin-top: -2em
            } 
            .container-logos-derecho img{
                margin: 1em;  
            }
        }
        
    </style>
</head>
<body>
        <header class="header">
            <div uk-grid>
                <div class="uk-width-1-2@m"></div>
                
                <div class="uk-width-1-2@m uk-padding-remove menu-container">
                    <nav class="uk-navbar-container header-nav" uk-navbar>
                        <div class="uk-navbar-center">
                            <ul class="uk-navbar-nav container-ul">
                                <li><a href="./index.php">INICIO</a></li>
                                <li><a href="./nosotros.php">NOSOTROS</a></li>
                                <li>
                                    <a href="#">SERVICIOS</a>
                                    <div class="uk-navbar-dropdown uk-margin-remove container-submenu">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li><a href="./derechoLaboral.php">DERECHO LABORAL</a></li>
                                            <li><a href="./derechoCorporativo.php">DERECHO CORPORATIVO</a></li>
                                            <li><a href="./derechoPropiedad.php">DERECHO DE PROPIEDAD</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="./index.php#contacto">CONTACTO</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
</html>