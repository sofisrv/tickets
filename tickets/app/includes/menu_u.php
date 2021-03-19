<html>

<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">

    <title>Inicio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


<style>
@media (min-width: 768px){
	.affix-content .container {
    width: 700px;
	
  }   

  html,body{
    background-color: #f8f8f8;
    height: 100%;
    overflow: hidden;
  }
    .affix-content .container .page-header{
    margin-top: 0;
	
  }
  .sidebar-nav{
        position:fixed; 
        width:100%;
  }
  .affix-sidebar{
    padding-right:0; 
    font-size:small;
    padding-left: 0;
  }  
  .affix-row, .affix-container, .affix-content{
    height: 100%;
	
    margin-left: 0;
    margin-right: 0;
	
  } 
  .affix-content{
	float:right;
    background-color:white; 
	width:83%;
	right:0%;
  } 
  .sidebar-nav .navbar .navbar-collapse {
    padding: 0;
    max-height: none;
  }
  .sidebar-nav .navbar{
    border-radius:0; 
    margin-bottom:0; 
    border:0;
  }
  .sidebar-nav .navbar ul {
    float: none;
    display: block;
  }
  .sidebar-nav .navbar li {
    float: none;
    display: block;
  }
  .sidebar-nav .navbar li a {
    padding-top: 12px;
    padding-bottom: 12px;
  }  
}

@media (min-width: 769px){
  .affix-content .container {
    width: 600px;
  }
    .affix-content .container .page-header{
    margin-top: 0;
  }  
}

@media (min-width: 992px){
  .affix-content .container {
  width: 900px;
  }
    .affix-content .container .page-header{
    margin-top: 0;
  }
}

@media (min-width: 1220px){
  .affix-row{
    overflow: hidden;
  }

  .affix-content{
    overflow: auto;
  }

  .affix-content .container {
    width: 1000px;
  }

  .affix-content .container .page-header{
    margin-top: 0;
  }
  .affix-content{
    padding-right: 30px;
    padding-left: 30px;
  }  
  .affix-title{
    border-bottom: 1px solid #ecf0f1; 
    padding-bottom:10px;
  }
  .navbar-nav {
    margin: 0;
  }
  .navbar-collapse{
    padding: 0;
  }
  .sidebar-nav .navbar li a:hover {
    background-color: #428bca;
    color: white;
  }
  .sidebar-nav .navbar li a > .caret {
    margin-top: 8px;
  }  


  .input-group
  {
    width: 17%;
    height: 10%;
  }

  #search-btn
  {
    height: 100%;
  }
   #fondox{
  	background-color:#03485F;

  }
  #fondo{
  	background-color:#14627C  ;

  }

#fondo1{
  	background-color:white  ;

  }    
    #txt{
    font-size: 100%;
  	color:A8D2DF   ;
  }
  #txt1{
    font-size: 100%;
  	color:#2797B0;
}
#txt2{
  	color:white;
  	font-size: 120%;
}
#txt3{
    font-size: 100%;
  	color:A8D2DF   ;
  }
  #bara{
    height:50px;
  }
   #pos{
    margin-top:-45px;
    margin-left:75%;
  }
  #G{
    font-size:150%;
  }
  #txt4{
  	margin-left:250px;
  	color:white;
  	font-size: 300%;
}
</style>

<body >
	<div class="row affix-row" style="" id="fondo">
	<form id="bara">
	<a id="txt4" >Tickets</a>
         <form action="#" method="get" class="sidebar-form" >
            <div class="input-group" id="pos">
              <input type="text" name="q" class="form-control" placeholder="Buscar...">
              <span class="input-group-btn" id="txt1">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
    </form>
    <div class="col-sm-3 col-md-2 affix-sidebar"  >

		<div class="sidebar-nav"  >
  <div class="navbar navbar-default" role="navigation" id="fondox" >
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse" >
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <span class="visible-xs navbar-brand">Desplegar Menu</span>
    </div>
    <div class="navbar-collapse collapse sidebar-navbar-collapse" >
      <ul class="nav navbar-nav" id="sidenav01" >
        <li class="active" >
          <a  id="fondo1" href="#" data-toggle="collapse" data-target="#toggleDemo0" data-parent="#sidenav01" class="collapsed">
          <h4  id="txt1" id="G">
         <span id="G" class="glyphicon glyphicon-align-justify" ></span>  Usuario
          <br>
          </h4>
          </a>
          <div class="collapse" id="toggleDemo0" style="height: 0px;" >
            <ul class="nav nav-list">
				      <li><?php 

              $var=Session::get('todo1');
              echo "$var";
              ?></a></li>
              <li><a id="txt3" href="perfil"><span class="glyphicon glyphicon-user" id="txt2"></span> Mi perfil</a></li>
              <li><a id="txt3" href="/"><span class="glyphicon glyphicon-off" id="txt2"></span> Cerrar sesión</a></li>
             
            </ul>
          </div>
        <li><a id="txt" href="index"><span class="glyphicon glyphicon-home" id="txt2"></span>  Inicio</a></li>
        <li><a id="txt" href="inventario"><span class="  glyphicon glyphicon-folder-open" id="txt2"></span>  Inventario</a></li>
        <li><a id="txt" href="ticket"><span class="glyphicon glyphicon-credit-card" id="txt2"></span>  Ticket</a></li>
        <li><a id="txt" href="caso"><span class="glyphicon glyphicon-comment" id="txt2"></span>  Caso</a></li>
        <li><a id="txt" href="knowledge"><span class="glyphicon glyphicon-globe" id="txt2"></span>  Knowledge</a></li>
      </ul> 
      </div><!--/.nav-collapse -->
    </div>
  </div>
	</div>
	
</body>

</html>