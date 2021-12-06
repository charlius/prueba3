<?php

    include "logic.php";
    if(isset($_SESSION['id'])){
        header('location: controller/redirec.php');
      }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" type="image/png" href="img/icono2.png">
    <link rel="stylesheet"type="text/css" href="css/main.css">
</head>
<body>
    <header>

    <div class="content-header">
       
    <div class="logo"><img src="img/icono2.png"></div>
        <div class="item"><a href="#inicio"> Inicio</a></div>
        <div class="item"><a href="#productos">Post</a></div>
        <div class="item"><a href="#contacto">Contacto</a></div>
        
        
    </div>

</header>

<section>
    <div class="content-banner">
        <div class="banner-text">
            <h1>MuySocial</h1>
            <p>Tu Blog Moderno.</p>
           
            <center><button><a href="login.php">Comenzamos!!</a></button></center>
        </div>
    
        <div class="banner-img">
            <img src="img/svg.png" width="1200" height="500" alt="">

        </div>
    </div>
</section>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffd700" fill-opacity="1" d="M0,64L80,80C160,96,320,128,480,149.3C640,171,800,181,960,181.3C1120,181,1280,171,1360,165.3L1440,160L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
</svg>

<!-- body-->
<div class="contents">
    <section id="inicio">
        <h1>Elecciones 2021</h1>
        <div class="div-flex">
                <div class="parts">
                    <div class="content-img">
                        <div class="img"> <img src="" alt=""></div>

                        </div>
                      </div>
                      <div class="parts">
                          <h2><a href="noticias.php"> Comenta...</a></h2>
                          <p>Franja electoral retornó de cara a la segunda vuelta presidencial y se mantendrá por 12 días consecutivos</p>


                      </div>
                </div>

                <h1>El mundial se acerca.. </h1>
        <div class="div-flex">
                <div class="parts">
                    <div class="content-img">
                        <div class="img"> <img src="img/qatar.jpg" alt=""></div>
      
                        </div>
                      </div>
                      <div class="parts">
                          <h2>Actualidad..</h2>
                          <p>Oceanía definió la ruta de sus Clasificatorias a Qatar 2022.</p>


                      </div>
                </div>

                <h1>Universo Cinematografico</h1>
        <div class="div-flex">
                <div class="parts">
                    <div class="content-img">
                        <div class="img"><img src="img/superheroe.jpg" alt=""></div>

                        </div>
                      </div>
                      <div class="parts">
                          <h2>Cual es tu personaje favorito!!</h2>
                          <p>Confirmado: Charlie Cox será Daredevil en el Universo Cinematográfico de Marvel.</p>


                      </div>
                </div>

        
    </section>


    <section id="productos">
        <h1>Temas Populares</h1>

        <div class="div-grid">
            <div class="grid-item">
                <div class="content-img-pro">
                    <img src="img/cambio.jpg" alt="">
                    </div>
                    <h3>Cambio climatico</h3>
                    <p>Lorem ipsum dolor sit, amet consm ipsam maxime</p>
            </div>
            <div class="grid-item">
                <div class="content-img-pro">
                    <img src="img/climatico.jpg" alt="">
                    </div>
                    <h3>Sequia</h3>
                    <p>Lorem ipsum dolor sit, amet consm ipsam maxime</p>
            </div>
            <div class="grid-item">
                <div class="content-img-pro">
                    <img src="img/elecciones2.jpg" alt="">
                    </div>
                    <h3>Elecciones 2021</h3>
                    <p>Lorem ipsum dolor sit, amet consm ipsam maxime</p>
            </div>
            <div class="grid-item">
                <div class="content-img-pro">
                    <img src="img/universo.jpg" alt="">
                    </div>
                    <h3>Universo Cinematografico</h3>
                    <p>Lorem ipsum dolor sit, amet consm ipsam maxime</p>
            </div>
        </div>
    
    </section>
   
    <section id="servicios">
        <h1>Temas Para debatir--</h1>

        <div class="div-grid">
            <div class="grid-item">
                <div class="content-img-pro">
                    <img src="img/energia.jpg" alt="">
                    </div>
                    <h3>Cambio energetico</h3>
                    <p>Lorem ipsum dolor sit, amet consm ipsam maxime</p>
            </div>
            <div class="grid-item">
                <div class="content-img-pro">
                    <img src="img/superheroe.jpg" alt="">
                    </div>
                    <h3>Nuevos superheroes</h3>
                    <p>Lorem ipsum dolor sit, amet consm ipsam maxime</p>
            </div>
            <div class="grid-item">
                <div class="content-img-pro">
                    <img src="img/climatico.jpg" alt="">
                    </div>
                    <h3>Cada vez menos agua</h3>
                    <p>Lorem ipsum dolor sit, amet consm ipsam maxime</p>
            </div>
            
        </div>
    
    </section>

    <section id="contacto">
        <h1>Comunicate Con nosotros</h1>
        <div class="div-flex">
            <div class="parts">
                <h2>Tienes pensado </h2>
                <p>dejanos in mensaje con lo que neesitas</p>
                <h4>correo: prueba@gmail.com</h4>
                <h4>celulares : 999 999 888 / 444 555 555</h4>
            </div>
            <div class="parts">
                <h2 style="margin-bottom: 10px;">Envia tu consulta ahora!</h2>
                <form>
                    <label>Nombre</label>
                    <input type="text" id="nombre" placeholder="Nombre">
                    <br>
                    <label>RUT</label>
                    <input type="number" id="rut" placeholder="RUT">
                    <br>
                    <label>Correo</label>
                    <input type="text" id="correo" placeholder="Correo">
                    <br>
                    <label>Celular</label>
                    <input type="number" id="celular" placeholder="Ceular">
                    <br>
                    <label>Consulta</label>
                    <textarea id="consulta"></textarea>
                    <br>
                    <button onclick="send_mensaje()">Enviar mensaje</button>
                </form>
            </div>

        </div>
    </section>

 
</div>
<footer>
    <center><p>MuySocial | 2021.</p></center>
</footer>
<script type="text/javascript">
    function send_mensaje(){
        if(document.getElementById("nombre").value=="" || 
           document.getElementById("rut").value=="" || 
           document.getElementById("correo").value=="" || 
           document.getElementById("celular").value=="" || 
           document.getElementById("consulta").value=="") {
            alert("Debe completar sus datos");
            return;
        }
    var fd=new FormData();
    fd.append('nombre',document.getElementById("nombre").value);
    fd.append('rut',document.getElementById("rut").value);
    fd.append('correo',document.getElementById("correo").value);
    fd.append('celular',document.getElementById("celular").value);
    fd.append('consulta',document.getElementById("consulta").value);
    var request=new XMLHttpRequest();
    request.open('POST','api/api_save_mensaje.php');
    
    request.onload=function(){
        console.log(request);
        if (request.readyState==4 && request.status==200){
            if(request.responseText=="1"){
                alert("se envio el mensaje correctamente");
            }else{
                alert("Hubo un error, intente más tarde");
            }
           
    }
}
    request.send(fd);
}
</script>
</body>
</html>