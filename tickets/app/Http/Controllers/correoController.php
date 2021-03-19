<?php

namespace tickets\Http\Controllers;
use Session;
use Auth;
use redirect;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use DB;

class correoController extends BaseController
{
     public function correo(Request $req)
     {
     	$username=$req->input('username');
     	$pais=$req->input('pais');
     	$dates=$req->input('create');
     	$caso=$req->input('casos');
     	$aux=$req->input('comp');
     	$aux2=$req->input('destino');
     	$aux3=$req->input('fallo');
     	$prob=$req->input('prob');
     	
     	$fecha=strftime( "%Y-%m-%d", time() );

     	function dias_transcurridos($fecha_i,$fecha_f)
		{
			$dias	= (strtotime($fecha_i)-strtotime($fecha_f))/86400;
			$dias 	= abs($dias); $dias = floor($dias);		
			return $dias;
		}

		
		$nuevo=dias_transcurridos($dates,$fecha);
		

			
				$id = DB::table('etapas')->insertGetId(
			    ['username' => $username, 'pais' =>$pais,'caso'=>$caso,'dias'=>$nuevo,'fecha_ini'=>$dates,'fecha_fin'=>$fecha,'diferido'=>$aux2,'conclusion'=>$aux3,'solucion'=>$aux]
				);

				DB::table('mail')->where(['problema'=>$prob])->delete();
			
			return view('index_admin');
     }
}

?>