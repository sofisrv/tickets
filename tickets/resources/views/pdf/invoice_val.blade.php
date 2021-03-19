<html>

<head>

  
<body>

                        <!-- Sales Chart Canvas -->
  
<style type="text/css">
  
  body
  {
    font-family: Arial;
  }

</style>

<div class="col-sm-9 col-md-10 affix-content">
    <div class="container">
       
        <div class="page-header">
  
</div>


<div class="box box-default" style="width: 200%; font-family: arial;">
                <div class="box-header with-border">
                  <h3 class="box-title">Informe validados  {{ $invoice }}</h3>
                  <div>Fecha: {{$date}}</div>
                  
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-8">
                      <ul class="chart-legend clearfix">
                        <li><i class="fa fa-circle-o text-red"></i>Correo: {{ $data['usuario'] }}</li>
                        <li><i class="fa fa-circle-o text-green"></i>Nombre: {{ $data['nombre'] }}</li>
                        <li><i class="fa fa-circle-o text-yellow"></i>Apellido Paterno: {{ $data['app'] }}</li>
                        <li><i class="fa fa-circle-o text-aqua"></i> Apellido Materno: {{ $data['apm'] }}</li>
                      </ul>
                    </div><!-- /.col -->
                    <div class="col-md-4">
                      <p> {{ $data['descripcion']}}</p>

                     <ul class="chart-legend clearfix">
                        <li><i class="fa fa-circle-o text-red"></i>Hardware: </li>
                          <p>Marca: {{ $data['marca'] }}</p>
                          <p>Modelo:  {{ $data['modelo'] }}</p>
                          <p>Fecha de compra: {{ $data['fcompra'] }}</p>
                          <p>Fecha de inicio de garantia: {{ $data['finicio'] }}</p>
                          <p>Fecha de fin de garantia:  {{ $data['ffin'] }}</p>
                        <li><i class="fa fa-circle-o text-green"></i>Casos abiertos: </li>
                          <p>{{$data['casoc']}}</p>
                        <li><i class="fa fa-circle-o text-yellow"></i>Casos cerrados: </li>
                          <p>{{$data['casoa']}}</p>
                       
                      </ul>
                        
                      </ul>
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- /.box-body -->
             

                </div><!-- /.footer -->
              </div><!-- /.box -->



	</div>

			  
			 
</body>

</html>