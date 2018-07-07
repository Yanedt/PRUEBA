
<html>
    <head>
        <meta charset="UTF-8">
        <title>PIT</title>
        <!--PARA CARRUSEL-->
        <meta name="viewport" content="width=device-width, initial-scale=1">                                                  <!--228 pequño-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!--PARA CARRUSEL-->
        <link rel="stylesheet" type="text/css" href="css/estilos280.css">
        <link rel="stylesheet" type="text/css" href="css/estilos800.css">
    </head>
    <body>
        <nav>
          <?php include( 'encabezado.php' ); ?>
        </nav> 
        
        <main>
        
            
           
            
            
        <div class="contenido">
            <div class="carruselnada">&nbsp;</div>
            <!-- 0000000000000000000000000000000-->  
            
            <div class="logeo" id="s_logeo">
                <form action="validar.php" method="post">
                  <h2> REGISTRO</h2> 
                    <div class="usu">
                       &nbsp;
                    </div>
     
                  <input type="text" class="per" placeholder=" CURP"   name="usuario">    
                  <input type="password" placeholder="&#128273; **********" name="contrasena">
            
                 <div class="botoneslogeo">
                     
                     <div class="separacion">    
                     <input type="submit"value="Registrase">
                     </div>
                     
                     <div class="separacion" >
                         <div class="btnsalir" onclick="ocultarlogin()">Salir</div>
                      <!-- 
                     volver atras----<input type="button" onclick="history.back()" name="volver atrás" value="volver atrás">
                     <input type="image" src="bot.jpg" width="88" height="26"/>
                     -->
                     </div>
                     
                     <div id="link">
                        <p>¿Ya tienes una cuenta? <span><a href="ingresar.php">Ingresar</a></span></p>
                     </div>
                 </div>
                 
                </form>          
            </div>   
            
        <div class="carrusel" id="s_carrusel">
             <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
             <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
             <li data-target="#myCarousel" data-slide-to="1"></li>
             <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            
            
            <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="images/la.jpg" alt="Los Angeles" style="width:100%;">
                  </div>

                  <div class="item">
                    <img src="images/chicago.jpg" alt="Chicago" style="width:100%;">
                  </div>

                  <div class="item">
                    <img src="images/ny.jpg" alt="New york" style="width:100%;">
                  </div>
                </div>

            <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a>
        </div>   
     </div>
            <div class="carruselnada">&nbsp;</div>
   </div>
   <!-- 0000000000000000000000000000000-->                  

         
            
            <div class="redes">
                <div class="rf">
                    <img src="corel/facebook.png" alt="facebook" name="facebook"/> 
                </div>
                <div class="rw">
                    <img src="corel/whatsapp.png" alt="whatsapp" name="whatsapp"/> 
                </div>
                <div class="rt">
                    <img src="corel/TWITTER.png" alt="twitter" name="twitter"/> 
                </div>
                <div class="ri">
                    <img src="corel/instagram1.png" alt="instagram" name="instagram"/> 
                </div>
            </div>
          
        </main>
      
        
        
        
    </body>
</html>
