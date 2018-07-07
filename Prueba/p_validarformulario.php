<script>
 function s_validarform()
    {
     var curp,contrasena ;
     curp=document.getElementById("nombre").value;
     contrasena=document.getElementById("contrasena").value;
      var expresioncurp=/
     ^[A-Z]{1}[AEIOU]{1}[A-Z]{2}
     [0-9]{2}(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])
     [HM]{1}
     (AS|BC|BS|CC|CS|CH|CL|CM|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)
     [B-DF-HJ-NP-TV-Z]{3}
     [0-9A-Z]{1}
     [0-9]{1}$/;
    
    
    if(curp=="")
      {
       alert("El campo CURP esta vacio");   
       return false;
      }
    else if(contrasena=="")
    {
      alert("El campo contrasena esta vacio");   
     return false;  
    }
    
    else if(curp.length>18){
     alert("La CURP tiene solo 18 caracteres");   
     return false; 
    }
    else if(!expresioncurp.test(curp)
    {
      alert("La CURP no es valida");   
     return false;   
    }
    }
</script>


