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

<div class="col-sm-9 col-md-10 affix-content">
    <div class="container">
       
        <div class="page-header">
 <center> <h3><span class="glyphicon glyphicon-folder-open"></span></h3></center>
</div>

         <div class="container">
 
<div class="row">
  <div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
      <div class="panel-heading"></div>
        <div class="panel-body">
        
          <form method="POST" action="/invent" accept-charset="UTF-8" enctype="multipart/form-data">
            
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <input type="text" name="user" class="form-control" placeholder="Usuario">
            <input type="text" name="job" class="form-control" placeholder="Título">
            <input type="text" name="area" class="form-control" placeholder="Area">
            <input type="text" name="manager" class="form-control" placeholder="Manejador">
            <input type="text" name="tipoh" class="form-control" placeholder="Hardware">
            <input type="text" name="marca" class="form-control" placeholder="Marca">
            <input type="text" name="model" class="form-control" placeholder="Modelo">
            <label>Fecha de compra</label>
            <input type="datetime-local" name="fcompra" class="form-control" placeholder="Fecha de compra">
            <label>Inicio de garantia</label>
            <input type="datetime-local" name="finicio" class="form-control" placeholder="Inicio de garantia">
            <label>Fin de garantia</label>
            <input type="datetime-local" name="fend" class="form-control" placeholder="Fin de garantia">
           
            <?php
            $todo=Session::get('todo1');
            $nom;
            $ap;
            $am;    
            $sql=DB::table('users')->where(['username'=>$todo])->get();

            foreach ($sql as $r) {
            $nom=$r->nombre;
            $ap=$r->ape_p;
            $am=$r->ape_m;
            }
            ?>
             <input type="hidden" name="nom" value="<?php  echo $nom; ?>">
             <input type="hidden" name="app" value="<?php  echo $ap; ?>">
             <input type="hidden" name="apm" value="<?php  echo $am; ?>">
            
            </br>
            <center>
            <div class="form-group">
              <div>
                <button type="submit" class="btn btn-success" >Guardar</button>
            
                <button type="submit" class="btn btn-primary" ><a href="inventario_ver">Inventario</a></button>
           
                <button type="submit" class="btn btn-info" >Informe</button>
              </div>
            </div>
            </center>

            

          </form>

          

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
			  

        <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
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