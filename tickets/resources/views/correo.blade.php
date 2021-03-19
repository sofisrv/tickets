<html>

<head>

     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Correo</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
 <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<body>
<?php
 include(app_path().'/includes/menu_a.php');
?>

                        <!-- Sales Chart Canvas -->
  
<style type="text/css">
  
  
</style>

<div class="col-sm-9 col-md-10 affix-content">
    <div class="container">
       
        <div class="page-header">
  <h3><span class="glyphicon glyphicon-envelope"></span> Correo</h3>
</div>


<?php



    $sql=DB::table('mail')->get();
    $user;
    $nom;
    $ap;
    $am;

    foreach ($sql as $r) {
        # code...
            $user=$r->username;
            $nom=$r->nombre;
            $ap=$r->ape_p;
            $am=$r->ape_m;


     echo"  <form method='POST' action='/corre'  >"; 
     
     ?>
     <input type="hidden" name="_token" value="{{ csrf_token() }}">
     <?php      
     echo"       <div class='box box-default' style='width: 100%;'> ";
     echo"           <div class='box-header with-border'>";
     echo"             <h3 class='box-title'>Correo No. $r->id</h3>";
     echo"             <div class='box-tools pull-right'>";
     echo"               <button class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-minus'></i></button>";
     echo"               <button class='btn btn-box-tool' data-widget='remove'><i class='fa fa-times'></i></button>";
     echo"         </div>";
     echo"           </div>";
     echo"           <div class='box-body'>";
     echo"             <div class='row'>";
     echo"               <div class='col-md-8'>";
     echo"                 <div class='col-md-4'>";
     echo"                 <ul class='chart-legend clearfix'>";
     echo"                   <li> Usuario: $r->username</li>";
     echo"                   <li> Nombre: $r->nombre</li>";
     echo"                   <li> Apellido Paterno: $r->ape_p</li>";
     echo"                   <li>Apellido Materno: $r->ape_m</li>";
     echo"                   <li><strong>Prioridad:</strong> $r->prioridad</li>";
                        
     echo"                 </ul>";

     echo"<input type='hidden' name='username' value='$r->username'>";
     echo"<input type='hidden' name='pais' value='$r->pais'>";
     echo"<input type='hidden' name='create' value='$r->createdate'>";
     echo"<input type='hidden' name='prob' value='$r->problema'>";
    
    

     echo"               </div>";
     echo"               </div>";
     
     echo"             </div>";

     echo"              <label class='col-md-4 control-label'  >Problema:</label>";
     echo"              <textarea  style='background-color: #fff;' class='form-control' rows='5' id='comment'  cols='10' readonly>$r->problema</textarea>";

     echo"              <label class='col-md-4 control-label'  >Capturas:</label>";
     echo"              <div>";

     echo"                   <img src='storage/$r->image' width='950px' height='450px' >";

     echo"              </div>";
     echo"              <label class='col-md-4 control-label'  >Estatus:</label>";
    
echo" <select class='form-control' name='casos' id='selector' onchange='seleccion();''>";

echo"                <option id='ab' value='Abierto' name='ab'>Abierto</option>";

echo"                <option id='ce' value='Cerrado' name='ce'>Cerrado</option>";

echo"                <option id='dif' value='Diferido' name='dif'>Diferido</option>";

echo"                <option id='completo' value='Completado' name='completo'>Completado</option>";
echo"                <option id='sin' value='Sin resolver' name='sin'>Sin resolver</option>";
echo" </select>";

     echo"               <br>";
     echo"              <p id='vista'>";
     echo"              </p>";
     echo"               <div id='textos'>";
     echo"               </div>";

     echo"           <button type='submit' class='btn btn-primary' style='width: 100%;'>Enviar</button>";
     echo"           </div>";
     echo"</form>";
     }

     ?>  

<script type="text/javascript">
   

   function seleccion()
   {
        var s=document.getElementById('selector').value;


    if (s === "Completado") 
    {
        vista.innerHTML =  '<label class="col-md-14 control-label"  >Ingresa la solucion:</label>';
        textos.innerHTML = '<textarea tyle="background-color: #fff;" name="comp" class="form-control" rows="5" cols="40"></textarea><br>';
    }
        else if(s === "Diferido")
        {
            vista.innerHTML =  '<label class="col-md-14 control-label"  >A quien?:</label>';
            textos.innerHTML = '<input type="text" name="destino" class="form-control"><br>';
        }
            else if (s==="Sin resolver") 
                                    {
            vista.innerHTML =  '<label class="col-md-14 control-label"  >Conclusion:</label>';
            textos.innerHTML = '<textarea tyle="background-color: #fff;" name="fallo" class="form-control" rows="5" cols="40"></textarea><br>';
                                    }
                                        else 
                                        {
                                            vista.innerHTML =  '';
                                            textos.innerHTML = '';
                                        }

   }
    
    

</script>

			  
			  <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="plugins/chartjs/Chart.min.js"></script>
	
    <script src="plugins/chartjs/Chart.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	
	 <script src="dist/js/demo.js"></script>
	
</body>

</html>