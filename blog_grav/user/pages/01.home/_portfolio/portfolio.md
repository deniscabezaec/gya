---
title: Portafolio
menu: portfolio
portfolios:
    -
        title: Figuritas
        subtitle: 'Diseño de Figuritas'
        layout: default
        modalid: 1
        date: 1405641600
        img: f_asteriscos.jpg
        thumbnail: f_asteriscos.jpg
        alt: image-alt
        projectdate: 'Junio 2019'
        client: GyA
        category: Figuras
        description: '<label for="valor" class="mr-sm-2">Ingrese un número:</label><br><input type="text" id="valor" onkeyup="myFunction()"/><br><br><code id="figura" class="fig"></code>'
---

## PORTAFOLIO
### Actividades realizadas en clases.

<style type="text/css">
    div.modal-body  p{
        text-align: left;
    }
</style>

<script type="text/javascript">
    function myFunction() {
        var max = document.getElementById("valor").value;
        var dato = parseInt(max);
        
            if(Number.isInteger(dato)){
                var filas,columnas;
                var cadena = "";
                
                for (filas=0;filas<max;filas++){
                    for(columnas=0;columnas<=filas;columnas++){
                        cadena = cadena +"*";
                    }
                    cadena = cadena +"<br>"; 
                }
                for (filas=0;filas<max;filas++){
                    for(columnas=0;columnas<max;columnas++){
                        if(columnas<=filas){
                            cadena = cadena +"&nbsp";
                        }else{
                             cadena = cadena +"*";
                        }
                    }
                    cadena = cadena +"<br>"; 
                }
                document.getElementById("figura").innerHTML = cadena;
                document.getElementById("valor").value=" "; 
            }else{
                alert("El dato ingresado no es un numero entero");
                document.getElementById("valor").value=" "; 
            }
    }
</script>