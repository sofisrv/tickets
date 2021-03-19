<html>

<head>

     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Perfil</title>
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
  .col-xs-3 select{
   
    width:327%;
}
  
</style>

<div class="col-sm-9 col-md-10 affix-content">
    <div class="container">
       
        <div class="page-header">
  <center><h3><span class="glyphicon glyphicon-user"></span> </h3></center>
</div>
        
     <?php
$nom;
$app;
$apm;
$pass;
$user;
$yolo=Session::get('todo1');
$data=DB::table('users')->where(['username'=>$yolo])->get();

foreach($data as $r)
{
$nom=$r->nombre;
$app=$r->ape_p;
$apm=$r->ape_m;
$pass=$r->password;
$user=$r->username;
}
?>


<div class="contenedor">
<form class="form-horizontal" method="post" action="#">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <label class="control-label col-xs-3">Correo:</label>
        <div class="col-xs-9">
            <input type="email" class="form-control" id="inputEmail" placeholder="Correo" name="username" value="<?php echo $user; ?>" >
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Contraseña:</label>
        <div class="col-xs-9">
            <input type="password" class="form-control" id="inputPassword" placeholder="Contraseña" name="password" value="<?php echo $pass; ?>">
        </div>
    </div>
    
    <div class="form-group">
        <label class="control-label col-xs-3">Nombre(s):</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" placeholder="Nombre" name="name" value="<?php echo $nom; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Apellido Paterno:</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" placeholder="Apellido paterno" name="apep" value="<?php echo $app; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3" >Apellido Materno:</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" placeholder="Apellido materono" name="apem" value="<?php echo $apm; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Pais:</label>
        <div class="col-xs-3">
            <select class="form-control" name="pais">
                <option value="Mexico" name="mexico">Mexico</option>
                <option value="Brasil" name="brasil">Brasil</option>
                <option value="USA" name="usa">America</option>
            </select>
        </div>
         </div>
         
    <div class="form-group">    
    <label class="control-label col-xs-3">Region:</label>   
        <div class="col-xs-3">
            <select class="form-control"  name="region">
                <option value="Noroeste" name="noroeste">Noroeste</option>
                <option value="Noreste" name="noreste">Noreste</option>
                <option value="Oeste" name="oeste">Oeste</option>
                <option value="Este" name="este">Este</option>
                <option value="Centronorte" name="centronorte">Centronorte</option>
                <option value="Centrosur" name="centrosur">Centrosur</option>
                <option value="Suroeste" name="suroeste">Suroeste</option>
                <option value="Sureste" name="sureste">Sureste</option>
            </select>
        </div>
        </div>
       
    <center>
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <input type="submit" class="btn btn-default" style="width: 50%;" value="Actualizar">
            <input type="reset" class="btn btn-default" style="width: 50%;" value="Limpiar">

            
        </div>
    </div>
    </center>
    
</form>
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