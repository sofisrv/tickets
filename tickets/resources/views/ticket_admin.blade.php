<html>
<?php

?>
<head>

     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Ticket</title>
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
  
  body
  {
    text-align: justify;
  }
  
</style>

<div class="col-sm-9 col-md-10 affix-content">
    <div class="container">
       
        <div class="page-header">
  <center><h3><span class="glyphicon glyphicon-credit-card"></span> </h3></center>
</div>

              <?php
        
         $sql=DB::table('ticket')->get();
    $user;
    $nom;
    $ap;
    $am;
    $timer;

    foreach ($sql as $r) {
        # code...
            $user=$r->username;
            $nom=$r->nombre;
            $ap=$r->ape_p;
            $am=$r->ape_m;
            $timer=$r->createdate;


     echo"  <form method='POST' action='/tickets'  >"; 
     
     ?>
     <input type="hidden" name="_token" value="{{ csrf_token() }}">
     <?php      
     echo"       <div class='box box-default' > ";
     echo"           <div class='box-header with-border'>";
     echo"             <h3 class='box-title'>Ticket No. $r->id  $timer </h3>";
     echo"             <div class='box-tools pull-right'>";
     echo"               <button class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-minus'></i></button>";
     echo"               <button class='btn btn-box-tool' data-widget='remove'><i class='fa fa-times'></i></button>";
     echo"         </div>";
     echo"           </div>";
     echo"           <div class='box-body'>";
     echo"             <div class='row'>";
     echo"               <div class='col-md-14'>";
     echo"                 <div class='col-md-12'>";
     echo"                 <ul class='chart-legend clearfix'>";
     echo"                   <li>Usuario:<input type='text' name='user' class='form-control' value='$r->username'> </li>";
     echo"                   <li> Nombre: <input type='text' name='user' class='form-control' value='$r->nombre'></li>";
     echo"                   <li> Apellido Paterno: <input type='text' name='user' class='form-control' value='$r->ape_p'></li>";
     echo"                   <li>Apellido Materno:<input type='text' name='user' class='form-control' value='$r->ape_m'></li>";
     echo"                   <li>Prioridad: $r->prioridad</li>";
                        
     echo"                 </ul>";

     echo"               </div>";
     echo"               </div>";
     
     echo"             </div>";



     echo"              <label class='col-md-14 control-label'  >Problema:</label>";
     echo"              <p>$r->problema</p>";

    echo "<input type=hidden name=username  value='$r->username'>";
    echo "<input type=hidden name=nom  value='$r->nombre'>";
    echo "<input type=hidden name=app  value='$r->ape_p'>";
    echo "<input type=hidden name=apm  value='$r->ape_m'>";
    echo "<input type=hidden name=data  value='$r->createdate'>";
    echo "<input type=hidden name='prob'  value='$r->problema'>";
    
    echo "<input type=hidden name=est  value='$r->estado'>";

    
     
     ?>

<label class='col-md-14 control-label'  >Progeso:</label>
<div class="progress progress-striped active">
  <div class="progress-bar" role="progressbar"
       aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"
       style="width: <?php echo $r->progeso;?>%;">
    <span class="sr-only">45% completado</span>
  </div>
</div>
<P> <input type='text' name='prog' class='form-control' value='<?php echo $r->progeso;?>'>% completado</P>
     <?php
     echo"              <label class='col-md-14 control-label'  >Estatus:</label>";
    
   
     echo"              <input type='text' class='form-control' name='estatus' value='$r->estado'>";

     echo"               <br>";
     echo"              <input type=submit class='btn btn-primary' name='act' value='Actualizar' style='width:100%;'>";
     echo"               <br>";

     //echo"           <button type='submit' class='btn btn-primary' style='width: 30%;'>Generar Ticket</button>";
     echo"           </div>";
     echo"</form>";
     }
             ?>  
         

	</div>
</div>
			  
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