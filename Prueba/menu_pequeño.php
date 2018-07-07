 
        <script>
            function abrir() {
                document.getElementById("sbarraMenu").style.display = "block";
            }

            function cerrar() {
                document.getElementById("sbarraMenu").style.display = "none";
            }
            
            function muestraregistro() {
                document.getElementById("s_registro").style.display = "block";
                document.getElementById("s_carrusel").style.display = "none";
                document.getElementById("s_login").style.display = "none";
            }
            function muestralogin() {
                document.getElementById("s_login").style.display = "block";
                document.getElementById("s_registro").style.display = "none";
                document.getElementById("s_carrusel").style.display = "none";
                
            }
            
            function ocultaregistro() {
                document.getElementById("s_carrusel").style.display = "block";
                document.getElementById("s_registro").style.display = "none";
                document.getElementById("s_login").style.display = "none";
            }
            function iralogin(){
                 document.getElementById("s_login").style.display = "block";
                 document.getElementById("s_registro").style.display = "none";
                 document.getElementById("s_carrusel").style.display = "none";   
            }
            function iraregistro(){
                 document.getElementById("s_registro").style.display = "block";
                 document.getElementById("s_login").style.display = "none";
                 document.getElementById("s_carrusel").style.display = "none";   
            }
            /*formulariooooooooooooooooooooooooooooo
            formulariooooooooooooooooooooooooooooo*/
    function s_validarform()
    {
     console.log("Flujo intro here"); 
    
    }
 

            
            /*formulariooooooooooooooooooooooooooooo*/
            /*formulariooooooooooooooooooooooooooooo*/
            
        </script>
 <nav>
          
    <div class="seleccion">
        <div class="sel1" onclick="abrir()">
            <p> &#9776; </p>
        </div>

      <!-- BOTONES
      menu2
      menu21
      menu22
      menu3
      -->
        <div class="sel2" id="sbarraMenu">
            <div class="cuadro">
                <ul>
                    <li>  <input type="checkbox" id="btn-menu2"/>
                         <a href="#">Nosotros<span class="flecha"><label for="btn-menu2">&#9660 </label></span></a>
                        <ul>
                            <li><a href="#">Mision<span class="flecha">&#9660</span></a></li>
                            <li><a href="#">Vision<span class="flecha">&#9660</span></a></li>
                            <li><a href="#">Valores<span class="flecha">&#9660</span></a></li>
                            <li><a href="#">Objetivo<span class="flecha">&#9660</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            
            <div class="cuadro">
                <ul>
                    <li>  <input type="checkbox" id="btn-menu21"/>
                         <a href="#">contacto<span class="flecha"><label for="btn-menu21">&#9660 </label></span></a>
                        <ul>
                            <li><a href="#">Facebook<span class="flecha">&#9660</span></a></li>
                            <li><a href="#">Correo<span class="flecha">&#9660</span></a></li>
                            <li><a href="#">Telefono<span class="flecha">&#9660</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            
            
            <div class="cuadro">
                <ul>
                    <li>  <input type="checkbox" id="btn-menu22"/>
                         <a href="#">Servicios<span class="flecha"><label for="btn-menu22">&#9660 </label></span></a>
                        <ul>
                            <li><a href="#">Atencion a profesores<span class="flecha">&#9660</span></a></li>
                            <li><a href="#">Atencion a estudiantes<span class="flecha">&#9660</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>


            <p onclick="cerrar()">cerrar<p>
        </div>
    </div><!--seccion-->
    
    
    <div class="menu2">
        <div class="botones" onclick="muestraregistro()">
            <p>Registrarse</p>
        </div>
        <div class="botones" onclick="muestralogin()">
            <p>Ingresar</p>
        </div>

    </div><!--seccion-->
</nav>
      
       


