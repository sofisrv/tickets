<html>
<head>

     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Inventario</title>
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
 include(app_path().'/includes/menu_u.php');

?>

                        <!-- Sales Chart Canvas -->
  
<style type="text/css">
  
  body
  {
    text-align: justify;
  }
  
</style>
<?php /*
    $todo=Session::get('todo1');
    $query=DB::table('inventario')->where(['usuario'=>$todo])->get();

    foreach ($query as $row) 
    {
       $user=$row->usuario;
       $job=$row->job_ti;
       $area=$row->area;
       $manager=$row->manager;
       $tipoh=$row->tipo_hard;
       $marca=$row->marca;
       $model=$row->modelo;
       $fcompra=$row->fecha_compra;
       $finicio=$row->fecha_inicio_garan;
       $fend=$row->fecha_fin_garan;
    }
*/
?>


<div class="col-sm-9 col-md-10 affix-content">
    <div class="container">
       
        <div class="page-header">
  <h3><span class="glyphicon glyphicon-folder-open"></span> Inventario</h3>
</div>

         <div class="container">
 
<div class="row">
  <div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
      <div class="panel-heading">Equipo</div>
        <div class="panel-body">
        
       

            <label class="col-md-14 control-label"  ">Usuario:</label>
            <p><?/*php echo $user;*/?></p>
            <label class="col-md-14 control-label"  ">Job tittle:</label>
            <p><?/*php echo $job;*/?></p>
            <label class="col-md-14 control-label"  ">Area:</label>
            <p><?/*php echo $area;*/?></p>
            <label class="col-md-14 control-label"  ">Manager:</label>
            <p><?/*php echo $manager;*/?></p>
            <label class="col-md-14 control-label"  ">Modelo:</label>
            <p><?/*php echo $model;*/?></p>
            <label class="col-md-14 control-label"  ">Fecha de compra:</label>
            <p><?/*php echo $fcompra;*/?></p>
            <label class="col-md-14 control-label"  ">Fecha de inicio garantia:</label>
            <p><?/*php echo $finicio;*/?></p>
            <label class="col-md-14 control-label"  ">Fecha fin garantia:</label>
            <p><?/*php echo $fend;*/?></p>
           
            <?php
            /*
            $nom;
            $ap;
            $am;
            $sql=DB::table('users')->where(['username'=>$todo])->get();

            foreach ($sql as $r) {
            $nom=$r->nombre;
            $ap=$r->ape_p;
            $am=$r->ape_m;
            }*/
            ?>
             <input type="hidden" name="nom" value="<?php  echo $nom; ?>">
             <input type="hidden" name="app" value="<?php  echo $ap; ?>">
             <input type="hidden" name="apm" value="<?php  echo $am; ?>">
            
            <br>
            
            </div>

         
        </div>
      </div>
    </div>
  </div>
</div>
    </div>
</div>
         

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