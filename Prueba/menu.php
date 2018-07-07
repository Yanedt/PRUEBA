<html>
    <head>
        <title>
            MENU DESPLEGABLE
        </title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <style>
        body, html, * {
            margin:  0 ;
            padding: 0 ;
        }
        
        .conPrincipal {
            background-color: coral ;
            display: flex  ;
            flex-wrap: wrap ;
            margin:    0em auto 0em ;
            position:        static ;
            width:             100% ;
        }
        
        .encabezado {
            background-color: lightblue ;
            margin:    0em auto 0em ;
            position:        static ;
            width:             100% ;
        }
        
        .contenedorMenu {
            background-color: aquamarine ;
            margin:         0em auto 0em ;
            position:           relative ;
            width:                   80% ;
        }
        
        .contenedorMenu .menu {
            background-color: burlywood ;
            margin:        0em auto 0em ;
            position:          relative ;
            width:                  80% ;
        }
        
        ul {
            display:         flex ;
            flex-wrap:       wrap ;
            margin:  0em auto 0em ;
            list-style-type: none ;
            width:           100% ;
        }
        
        ul li {
            width: 20% ;
        }
        
        ul li a {
            background: darkolivegreen ;
            color: #ffffff ;
            display:        block ;
            padding:      1em 0em ;
            text-align: center ;
            text-decoration: none ;
        }
        
        .menuMovil {
            background:   gold ;
            display: flex ;
            flex-wrap: wrap ;
            padding: 1em 0em ;
            box-sizing: border-box;
            position: relative ;
            width:        100% ;
        }
        
        .menuMovil p {
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
            font-size:   1em ;
            
            width: 100% ;
        }
        
        .botonMenu {
            background: hotpink ;
            box-sizing: border-box;
            color:      #ffffff ;
            padding:   1em 0em ;
            position:  absolute ;
            right: 0 ;
            top:              0 ;
            width:          15% ;
        }
        
        .botonMenu p {
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
            font-size:     1em ;
            
            text-align: center ;
            width: 100% ;
        }
    </style>    
    </head>
    <body>
        <div class="conPrincipal">
            <div class="encabezado">
                ENCABEZADO LOGOS
            </div>
            <div class="contenedorMenu">
                <div class="menu">
                    <ul>
                        <li>
                            <a href="#">
                                Opcion1
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Opcion2
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Opcion3
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Opcion4 
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Opcion5
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="menuMovil">
            <p>
                &nbsp;
            </p>
            <div class="botonMenu">
                <p>
                    &#9776;
                </p>
            </div>
        </div>
    </body>
</html>

