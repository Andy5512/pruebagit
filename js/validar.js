function validar(e) {
   key = e.keyCode || e.which;
      tecla = String.fromCharCode(key).toLowerCase();
              letras = "abcdefghijklmnñopqrstuvwxyz";
              especiales="8-37-38-46-164-32"
              teclado_especial=false;

              for(var i in especiales){
                if(key==especiales[i]){
                  teclado_especial=true;break;
                }
              }

              if(letras.indexOf(tecla)==-1 && !teclado_especial){
                  return false;
              }
        }