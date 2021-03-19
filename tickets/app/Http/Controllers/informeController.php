<?php
namespace tickets\Http\Controllers;
use Session;
use App;
use PDF;
use Auth;
use redirect;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use DB;

class informeController extends BaseController
{
     public function informe(Request $req)
     {
      $btn1=$req->input('yes');
      $btn2=$req->input('not');
      $username = $req->input('user');
      $password = $req->input('pass');
	    $nombre = $req->input('nom');
	    $ape_p = $req->input('app');
	    $ape_m = $req->input('apm');
	    $pais = $req->input('pai');
	    $region = $req->input('reg');
	    $tipo=$req->input('tipe');

	  $admi=Session::get('todo');
	  
	  

	  if($btn1=="Si"){


	  	//$verval = DB::table('users')->where(['username'=>$username])->get();

	$id = DB::table('users')->insertGetId(
    ['username' => $username, 'password' =>$password,'nombre'=>$nombre,'ape_p'=>$ape_p,'ape_m'=>$ape_m,'pais'=>$pais,'region'=>$region,'tipo'=>$tipo,'valpor'=>$admi]
	);
	DB::table('rip')->where(['username'=>$username])->delete();

	return view('index_admin');
	
   		}
   		else
   		{
		
    	$data =  [
			'usuario' =>$username,
            'nombre'      => $nombre,
            'app'   => $ape_p,
            'apm'   => $ape_m,
            'descripcion'     => 'La solicitud de este usuario fue rechazada por estar bien pinche feo alv'

        ];
        $date = date('Y-m-d');
        $invoice = "0000";
        $view =  \View::make('pdf.invoice', compact('data', 'date', 'invoice'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('invoice');
		
		}
     }
}
?>
