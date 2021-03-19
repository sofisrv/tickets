<html>
<head>

     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Knowledge</title>
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
  <center><h3><span class="glyphicon glyphicon-globe"></span> </h3></center>
</div>


            
            


            <?PHP   
    $sql=DB::table('conocimiento')->get();

    foreach ($sql as $r) 
    {
        echo "<form method='POST' action='/faq' accept-charset='UTF-8' enctype='multipart/form-data'>";
        ?>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <?php
        echo "<input type='hidden' value='$r->id' name='elid'>";
        echo "<label class=col-md-4 control-label  >Titulo:</label>";
        echo "<input type=text name='titulo' class=form-control value='$r->titulo'>";
        echo "<label class=col-md-4 control-label  >Contenido:</label>";
        echo "<textarea class='form-control' class='ckeditor' rows='10' id='editor1'  cols='80' name='prob'>$r->conenido</textarea><p>";
        echo "<div class='form-group'>";
        echo "<div class='col-md-6 col-md-offset-4'>";
        echo "<button type='submit' class='btn btn-primary' style='width: 60%;' value='actualizar' name='act'>Actualizar</button><p>";
        echo "<p>";
        echo "<button type='submit' class='btn btn-default' style='width: 60%;'value='eliminar' name='eli'>Eliminar</button><p>";
        echo "</div>";
        echo "</div>";
        echo "</form>";
    }

?>




<div class="container">
 
<div class="row">
  <div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
      <div class="panel-heading">Agregar Tema</div>
        <div class="panel-body">
          <form method="POST" action="/elblog" accept-charset="UTF-8" enctype="multipart/form-data">
            
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <label class="col-md-4 control-label"  ">Titulo:</label>
            <input type="text" name="titulo" class="form-control">
            <label class="col-md-4 control-label"  ">Contenido:</label>
            <textarea class="form-control" class="ckeditor" rows="10" id="editor1"  cols="40" name="prob"></textarea>
            
            <?php
            $todo=Session::get('todo');
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
             <input type="hidden" name="nom" value='<?php  echo $nom; ?>'>
             <input type="hidden" name="app" value='<?php  echo $ap; ?>'>
             <input type="hidden" name="apm" value='<?php  echo $am; ?>'>
            
           
            

             

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
              <p></p>
                <button type="submit" class="btn btn-primary" style="width: 60%;">Agregar</button>

              </div>
            </div>
          </form>
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