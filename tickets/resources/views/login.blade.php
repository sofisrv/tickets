<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">

    <title>Iniciar sesion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="css/bootstrap.css " rel="stylesheet" type="text/css">
<!--<script type="text/javascript" src="js/bootstrap.js"></script>-->
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
         // window.parent.postMessage( iframe_height, 'http://bootsnipp.com');
        });
    </script>
</head>
<style>

#fondo{
    position: absolute; 
    top: 0; 
    left: 0; 
    width: 100%; 
    z-index: -1
}
#caja{
    margin-top:120px;
   background-color: white;
   opacity: .9;
    filter: alpha(opacity=20);
}
#tb{
   margin-left:25px;
   width: 300px;
}
#boton{
   background-color: #FACC2E;
}
#txt{
   margin-top:-10px;
   height: 32px;
   width: 256px;
}
a
{
    font-size:15px;
}
label
{
    font-size:15px;
}
input[type=button]
{
        font-size:15px;

}


</style>
</head>
<body onload="cambiafondo(); setInterval('cambiafondo()', 100);" class="fondos" id="todo">
<!-- <img id="fondo" src="assets/images/fondo1.jpg" alt="background image" />-->
<div class="container" >
    <div class="row" >
        <div  class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="account-wall" id="caja">
                <img class="profile-img" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png"
                    alt="" >

                <form class="form-horizontal" method="post" action="/loginme">


                <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                <input id="tb"  class="form-control" type="text"  name="username" placeholder="Correo" required autofocus id="txt">

                 <input id="tb"  class="form-control" type="password" name="password" placeholder="Contrase&ntilde;a" required id="txt">

                </br>
                 <center><button class="btn btn-default" type="submit" value="login" name="login" id="boton"><a>
                    Iniciar Sesion</a></button></center>
                                <a href="registro" class="text-center new-account" >Registrarse </a>

                </form>

            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
	</script>
</body>
</html>

<script type="text/javascript">
segundos = 0;
function cambiafondo()
{

segundos = segundos + 1;
if (segundos == 1)
{
document.body.style.backgroundImage='url(http://www.fondobook.com/wp-content/uploads/2012/10/fondo_hd_169_paisaje_lago_barmsee.jpg)';
}
else if (segundos == 50)
document.body.style.backgroundImage='url(https://www.mactualidad.com/wp-content/uploads/2013/06/fondo-pantalla-mac-13.jpg)';
else if (segundos == 100)
document.body.style.backgroundImage='url(http://k46.kn3.net/4/7/6/9/B/6/06F.jpg)';
else if (segundos == 150)
document.body.style.backgroundImage='url(https://k61.kn3.net/taringa/7/0/F/F/8/2/chavezss/2F9.png)';
else if (segundos == 200)
document.body.style.backgroundImage='url(https://s-media-cache-ak0.pinimg.com/originals/92/51/5f/92515f875a20f479b22b6577cff8a7bb.jpg)';
else if (segundos == 250)
document.body.style.backgroundImage='url(http://k41.kn3.net/taringa/3/3/8/1/3/7//aadamm/1B1.jpg?9915)';
else if (segundos == 300)
document.body.style.backgroundImage='url(http://4.bp.blogspot.com/-m9BYKxpUvmE/Tc2EHiu_N3I/AAAAAAAAAxQ/DEqRxRHMMGQ/s1600/PB280126.JPG)';
else if (segundos == 350)
document.body.style.backgroundImage='url(https://i.ytimg.com/vi/LiYOa60JSh8/maxresdefault.jpg)';
else if (segundos == 400)
{
document.body.style.backgroundImage='url(https://i.ytimg.com/vi/LiYOa60JSh8/maxresdefault.jpg)';
segundos = 0;
}
}
</script>