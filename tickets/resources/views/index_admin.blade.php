<html>

<head>

     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Index</title>
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

  tr:hover
  {
    background: #E6E6E6;
  }

  
</style>

<div class="col-sm-9 col-md-10 affix-content">
    <div class="container">
       
        <div class="page-header">
  <center><h3><span class="glyphicon glyphicon-home"></span>  </h3></center>
</div>


  <?php
  $users = DB::table('users')->get();

echo"<div class=container>";
echo "<div class=table-responsive>";    
echo "<table class=table >"; 
echo"<thead>";
echo "<tr>";
echo "<th  >ID</th>";
echo "<th  >Nombre</th>";
echo "<th  >Apellido paterno</th>";
echo "<th  >Apellido materno</th>";
echo "<th  >Correo</th>";
echo "<th  >Pais</th>";
echo "<th  >Region</th>";
echo "<th  >Contraseña</th>";
echo "<th  >Informe</th>";
echo "</tr>";

echo"</thead>";
foreach ($users as $r)
        
{

echo "<form action='/informe_val' target='_blank' method='post'>"*/
?>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<?php
echo"<tbody>";
echo "<tr>";
echo "<td >$r->id</td>";
echo "<td >$r->nombre</td>";
echo "<td >$r->ape_p</td>";
echo "<td >$r->ape_m</td>";
echo "<td >$r->username</td>";
echo "<td >$r->pais</td>";
echo "<td >$r->region</td>"; 
echo "<td >$r->password</td>"; 
echo "<input type=hidden name=id  value='$r->id'>";
echo "<input type=hidden name=nom  value='$r->nombre'>";
echo "<input type=hidden name=app  value='$r->ape_p'>";
echo "<input type=hidden name=apm  value='$r->ape_m'>";
echo "<input type=hidden name=pai  value='$r->pais'>";
echo "<input type=hidden name=reg  value='$r->region'>";
echo "<input type=hidden name=user  value='$r->username'>";
echo "<input type=hidden name=pass  value='$r->password'>";
echo "<input type=hidden name=tipe  value='$r->tipo'>";
echo "<td><input type='submit' class='btn btn-primary' name=info value='Informe'></td>";
echo "</form>";
echo "</tr>";  
}
echo"</tbody>";
echo"</table>";       
echo"</div>";
echo"</div>";
?>

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