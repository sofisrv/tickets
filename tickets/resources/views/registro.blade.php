<html>
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">

    <title>Registro</title>
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
<style>
input[type=text],
input[type=date],
input[type=datetime],
input[type=number],
input[type=search],
input[type=time],
input[type=url],
input[type=email],
input[type=password]
{
   
    width:70%;
}

.col-xs-3 select{
   
    width:237%;
}

input[type=submit],
input[type=reset]
{
   
    width:40%;
	padding: .5em 0em;
	margin: .5em 50%;
	
}
.account-wall2
	{

	-webkit-border-radius: 20px 20px 20px 20px;
	-moz-border-radius: 20px 20px 20px 20px;
	border-radius: 20px 20px 20px 20px;
	margin-top: 20px;
    
    padding: 0px 0px 0px 0px;
    background-color: #fafafa;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	}
	
    .container
    {
        float: left;
        position: relative;
       left: 25%;
       right: : 25%;
       width: 55%;
    }
    .contenedor
    {
        width: 50%;
        height: 500px;
        background-color: #fafafa;
        display: inline-block;
        vertical-align: top;
        margin-left: 0%;
        margin-right: 0%;
        margin-top: 1%;
    }
	#fondo{
	position: absolute; 
	top: 0; 
	left: 0; 
	width: 100%; 
	z-index: -1
}
#tb{
   margin-left:25px;
   width: 300px;
   height:45px;
}
#lada{
   margin-left:25px;
   width: auto;
   height:45px;
   display; inline-block ;
}
#tel{
   width: 130px;
   height:45px;
}
#caja{
   margin-top:40px;
   margin-left:-100px;
   height: 600px;
   width: 350px;
   background-color: white;
   opacity: .9;
    filter: alpha(opacity=20);
}
#cajax{
   margin-top:35px;
}
#boton{
   background-color: #FACC2E;
}
#texto{
   color: white;
}
#txt{
	margin-left:25px;
   color: black;
}
</style>
<body onload="cambiafondo(); setInterval('cambiafondo()', 100);" class="fondos" id="todo">


<div class="container" >
    <div class="row" >
        <div  class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="account-wall" id="caja">

                <form  method="post" action="/guardaruser" >
                 <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                 
                 <input id="tb"  class="form-control" type="email" id="inputEmail" placeholder="Correo" name="username">

                 <input id="tb"  class="form-control" type="password" id="inputPassword" placeholder="Contraseña" name="password" >
                 
                 <input id="tb"  class="form-control"text type="text" placeholder="Nombre" name="name" >
                 

                 <input id="tb"  class="form-control"type="text" placeholder="Apellido paterno" name="apep" >
                 <input id="tb"  class="form-control" type="text" placeholder="Apellido materno" name="apem" >
	             <select id="tb" class="form-control" name="pais">
	                <option value="Mexico" name="mexico">Mexico</option>
					<option value="Brasil" name="brasil">Brasil</option>
					<option value="USA" name="usa">America</option>
	             </select>
		            <select id="tb" class="form-control" name="region">
						<option value="Noroeste" name="noroeste">Noroeste</option>
						<option value="Noreste" name="noreste">Noreste</option>
						<option value="Oeste" name="oeste">Oeste</option>
						<option value="Este" name="este">Este</option>
						<option value="Centronorte" name="centronorte">Centronorte</option>
						<option value="Centrosur" name="centrosur">Centrosur</option>
						<option value="Suroeste" name="suroeste">Suroeste</option>
						<option value="Sureste" name="sureste">Sureste</option>
		            </select>
		       
<div >
  <div >
      <div >
        <label id="txt">Nro. Telefonico</label>
        <div class="input-group">
               <select id="lada" class="form-control" name="ext">
						<option value="1907">Alaska       +1907</option>
						<option value="355">Albania        +355</option>
						<option value="49">Alemania        +49</option>
						<option value="376">Andorra        +376</option>
						<option value="244">Angola         +244</option>
						<option value="966">Arabia Saudíta+966</option>
						<option value="213">Argelia        +213</option>
						<option value="54">Argentina        +54</option>
						<option value="374">Armenia        +374</option>
						<option value="61">Australia        +61</option>
						<option value="43">Austria          +43</option>

						<option value="973">Bahreim +973</option>
						<option value="880">Bangladesh +880</option>
						<option value="32">Bélgica +32</option>
						<option value="591">Bolivia +591</option>
						<option value="387">Bosnia +387</option>
						<option value="55">Brasil +55</option>
						<option value="359">Bulgaria +359</option>

						<option value="238">Cabo verde +238</option> 
						<option value="855">Camboya +855</option> 
						<option value="237">Camerún +237</option> 
						<option value="1">Canad+a +1</option> 
						<option value="236">Centroa.,R. +236</option> 
						<option value="420">Checa. R. +420</option> 
						<option value="56">Chile +56</option> 
						<option value="86">China +86</option> 
						<option value="357">Chipre +357</option> 
						<option value="57">Colombia +57</option> 
						<option value="242">Congo, R. del +242</option> 
						<option value="+243">Congo, R.. +243</option> 
						<option value="+82">Corea, R. +82</option> 
						<option value="225">Costa de Marfíl +225</option> 
						<option value="506">Costa Rica +506</option> 
						<option value="385">Croacia +385</option> 
						<option value="53">Cuba +53</option>

						<option value="45">Dinamarca +45 </option>
						<option value="1809">R Dominicana +1809 </option>

						<option value="593">Ecuador +593 </option>
						<option value="20">Egipto +20 </option>
						<option value="503">El Salvador +503 </option>
						<option value="971">E.Árabes U.+971 </option>
						<option value="421">Eslovaca, R. +421 </option>
						<option value="386">Eslovenia +386 </option>
						<option value="34">España +34 </option>
						<option value="1">Estados Unidos +1 </option>
						<option value="372">Estonia +372</option>
						<option value="251">Etiopía	 +251 </option>

						<option value="63">Filipinas +63 </option>
						<option value="358">Finlandia +358 </option>
						<option value="33">Francia +33 </option>


						<option value="9567">Gibraltar +9567 </option>
						<option value="30">Grecia +30 </option>
						<option value="299">Groenlandia +299 </option>
						<option value="502">Guatemala +502 </option>
						<option value="240">Guinea  +240 </option>

						<option value="509">Haití +509</option>
						<option value="1808">Hawai +1808 </option>
						<option value="504">Honduras +504 </option>
						<option value="852">Hong Kong +852 </option>
						<option value="36">Hungría +36 </option>

						<option value="91">India +91 </option>
						<option value="62">Indonesia +62 </option>
						<option value="98">Irán +98 </option>
						<option value="964">Irak +964</option>
						<option value="353">Irlanda +353 </option>
						<option value="354">Islandia +354</option>
						<option value="972">Israel +972 </option>
						<option value="39">Italia +39</option>

						<option value="1876">Jamaica +1876 </option>
						<option value="81">Japón +81 </option>
						<option value="39">Jordania +962 </option>

						<option value="254">Kenia +254 </option>
						<option value="965">Kuwait +965 </option>

						<option value="856">Laos +856 </option>
						<option value="371">Letonia +371 </option>
						<option value="961">Líbano +961 </option>
						<option value="231">Liberia +231 </option>
						<option value="218">Libia +218 </option>
						<option value="41">Liechtenstein +41 </option>
						<option value="370">Lituania +370 </option>
						<option value="352">Luxemburgo +352 </option>

						<option value="261">Madagascar +261 </option>
						<option value="60">Malasia +60 </option>
						<option value="356">Malta +356</option>
						<option value="212">Marruecos +212 </option>
						<option value="596">Martinica +596</option>
						<option value="222">Mauritania +222</option>
						<option value="52">México +52 </option>
						<option value="373">Moldavia +373 </option>
						<option value="377">Mónaco +377 </option>
						<option value="976">Mongolia +976 </option>
						<option value="258">Mozambique +258</option>

						<option value="264">Namibia +264 </option>
						<option value="977">Nepal +977 </option>
						<option value="505">Nicaragua +505 </option>
						<option value="234">Nigeria +234 </option>
						<option value="47">Noruega +47 </option>
						<option value="64">Nueva Zelanda +64</option>

						<option value="31">Países Bajos +31 </option>
						<option value="92">Pakistán +92</option>
						<option value="507">Panamá +507</option>
						<option value="595">Paraguay +595 </option>
						<option value="51">Perú +51 </option>
						<option value="48">Polonia +48 </option>
						<option value="351">Portugal +351 </option>
						<option value="1787">Puerto Rico +1787 </option>

						<option value="974">Qatar +974 </option>

						<option value="44">Reino Unido +44 </option>
						<option value="40">Rumania +40 </option>
						<option value="7">Rusia +7 </option>

						<option value="387">San Marino +387 </option>
						<option value="221">Senegal +221 </option>
						<option value="65">Singapur +65 </option>
						<option value="963">Siria +963 </option>
						<option value="252">Somalia +252 </option>
						<option value="94">Sri-Lanka +94 </option>
						<option value="27">Sudáfrica +27 </option>
						<option value="249">Sudán +249 </option>
						<option value="46">Suecia +46 </option>
						<option value="41">Suiza +41 </option>

						<option value="66">Tailandia +66 </option>
						<option value="886">Taiwan +886 </option>
						<option value="255">Tanzania +255 </option>
						<option value="216">Túnez +216 </option>
						<option value="90">Turquía +90 </option>

						<option value="380">Ucrania +380 </option>
						<option value="256">Uganda +256 </option>
						<option value="598">Uruguay +598</option>

						<option value="39">Vaticano +39 </option>
						<option value="58">Venezuela +58</option>
						<option value="84">Vietnam +84 </option>

						<option value="967">Yemen +967 </option>
						<option value="381">Yugoslavia +381 </option>

						<option value="260">Zambia +260</option>
						<option value="263">Zimbawe +263 </option>
						</select>
          <input id="tel"  class="form-control"type="text" placeholder="Telefono" name="tel" >
         
        </div>
    </div>
  </div>
</div>

		             <input id="tb"  class="form-control"type="text" placeholder="Celular" name="apep" >
		            
                 </br>
                 <center>
                 <div >
				        <div >
				            <input type="submit" class="btn btn-default" value="Registrarse" id="boton">
				            <input type="reset" class="btn btn-default" value="Limpiar" id="boton">
				        </div>
                 </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
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
<script type="text/javascript">
segundos = 0;
function cambiafondo()
{

segundos = segundos + 1;
if (segundos == 1)
{
document.body.style.backgroundImage='url(http://fondosg.com/wp-content/uploads/2011/08/pez-HD-1600x1200.jpg)';
}
else if (segundos == 50)
document.body.style.backgroundImage='url(http://k43.kn3.net/5CDB0798E.jpg)';
else if (segundos == 100)
document.body.style.backgroundImage='url(http://www.fondospantallagratis.com/wp-content/uploads/2009/01/joshua_tree.jpg)';
else if (segundos == 150)
document.body.style.backgroundImage='url(http://3.bp.blogspot.com/-q-PK1OYO1KI/TWWZq-a0DJI/AAAAAAAAYJY/JSU_plcOnvc/s1600/www.BancodeImagenesGratuitas.com%2B-%2BLos%2Bcolores%2Bde%2Bnuestro%2Bplaneta%2B-%2BPaisajes%2B17.jpg)';
else if (segundos == 200)
document.body.style.backgroundImage='url(http://citywallpaperhd.com/uploads/photo/original/444-fondos-de-pantalla-de-alta-definicion-nueva-york.jpg)';
else if (segundos == 250)
document.body.style.backgroundImage='url(https://k37.kn3.net/taringa/5/5/0/6/2/6/2/rmoya29/E5A.jpg?1779)';
else if (segundos == 300)
document.body.style.backgroundImage='url(http://k40.kn3.net/091BE6770.jpg)';
else if (segundos == 350)
document.body.style.backgroundImage='url(http://k38.kn3.net/C93BF30D1.jpg)';
else if (segundos == 400)
{
document.body.style.backgroundImage='url(http://citywallpaperhd.com/uploads/photo/original/444-fondos-de-pantalla-de-alta-definicion-nueva-york.jpg)';
segundos = 0;
}
}
</script>