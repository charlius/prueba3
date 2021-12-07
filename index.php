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

    <!-- css para las tarjetas de los post-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">

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

<!--prueba -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v12.0" nonce="cJ4MQI2h"></script>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v12.0" nonce="mAP5BCY0"></script>
   
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v12.0" nonce="LTvy1QOM"></script>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v12.0" nonce="My2CVNwn"></script>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v12.0" nonce="iQYGchnh"></script>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v12.0&appId=686868776030694&autoLogAppEvents=1" nonce="p35IhJ8W"></script>
<!-- fin prueba-->

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
         <!-- MOSTRAR LOS DATOS Display posts from database -->
         <div class="row">
            <?php foreach($query as $q){ ?>
                <div class="col-12 col-lg-4 d-flex justify-content-center">
                    <div class="card text-white bg-dark mt-5" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $q['title'];?></h5>
                            <p class="card-text"><?php echo substr($q['content'], 0, 50);?>...</p>
                            <!--  <img class="card-img" src="img/fondo.png"  alt=""> -->
                                <img src="<?php echo $q['img']; ?>" alt="" title=" ?>" width="250" height="200" class="img-responsive" />
                                
                            
                            <a href="view.php?id=<?php echo $q['id']?>" class="btn btn-light">Lee mas <span class="text-danger">&rarr;</span></a>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
          <!-- Display any info -->
          <?php if(isset($_REQUEST['info'])){ ?>
            <?php if($_REQUEST['info'] == "added"){?>
                <div class="alert alert-success" role="alert">
                <!-- La publicación se ha agregado correctamente -->
                </div>
            <?php }?>
        <?php } ?>
   
    <section id="servicios">
        <h1>Temas Para debatir--</h1>

        <div class="div-grid">
            <div class="grid-item">
                    <div class="content-img-pro">
                        <a href="https://energia.gob.cl/">
                        <img src="img/energia.jpg" alt=""></a>
                    </div>
                    <h3>Cambio energetico</h3>
                    <p>Lorem ipsum dolor sit, amet consm ipsam maxime</p>
            </div>
            <div class="grid-item">
                <div class="content-img-pro">
                    <a href="https://www.marvel.com/">
                    <img src="img/superheroe.jpg" alt="">
                    </a>
                    </div>
                    <h3>Nuevos superheroes</h3>
                    <p>Lorem ipsum dolor sit, amet consm ipsam maxime</p>
            </div>
            <div class="grid-item">
                <div class="content-img-pro">
                    <a href="https://www.nationalgeographic.es/medio-ambiente/que-es-el-calentamiento-global">
                    <img src="img/climatico.jpg" alt="">
                    </a>
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
                <h2>Tienes pensado Hacer reuniones con mas gente!! </h2>
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
<!-- -->
<div class="ctn-lbl-comentar"> <label class="lbl-comentar">Lista de comentarios</label></div>
       <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="100%" data-numposts="1"></div>
       <div class="fb-post" data-href="https://www.facebook.com/20531316728/posts/10154009990506729/" data-width="500" data-show-text="true"><blockquote cite="https://www.facebook.com/20531316728/posts/10154009990506729/" class="fb-xfbml-parse-ignore">Publicado por <a href="https://www.facebook.com/facebookapp/">Facebook App</a> en&nbsp;<a href="https://www.facebook.com/20531316728/posts/10154009990506729/">Jueves, 27 de agosto de 2015</a></blockquote></div>
       <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>
       <div class="fb-group" data-href="https://www.facebook.com/groups/ayearofrunning/" data-width="280" data-show-metadata="false"><blockquote cite="https://www.facebook.com/groups/ayearofrunning/" class="fb-xfbml-parse-ignore">A Year of Running</blockquote></div>
       <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="" data-layout="standard" data-action="like" data-size="small" data-share="true"></div>
       <div class="fb-login-button" data-width="" data-size="large" data-button-type="continue_with" data-layout="default" data-auto-logout-link="false" data-use-continue-as="false"></div>
<!-- -->
 

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