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

class informe_valController extends BaseController
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
            $marca="";
            $modelo="";
            $fc="";
            $fi="";
            $fg="";
	    $admi=Session::get('todo');
	  
	  


 $sql=DB::table('inventario')->where(['usuario'=>$username])->get();

  $cac=DB::table('etapas')->where(['username'=>$username ])->where('caso','Abierto')->count();
   $cab=DB::table('etapas')->where(['username'=>$username ])->where('caso','Abierto')->count();

            

        foreach ($sql as $r) 
        {
            $marca=$r->marca;
            $modelo=$r->modelo;
            $fc=$r->fecha_compra;
            $fi=$r->fecha_inicio_garan;
            $fg=$r->fecha_fin_garan;
        }

       $data =  [
            'usuario' =>$username,
            'nombre'  => $nombre,
            'app'     => $ape_p,
            'apm'     => $ape_m,
            'descripcion' => 'Usuario validado sin problemas',
            'marca'   =>$marca,
            'modelo'  =>$modelo,
            'fcompra' =>$fc,
            'finicio' =>$fi,
            'ffin'    =>$fg,
            'casoc'   =>$cac,
            'casoa'   =>$cab

        ];
        $date = date('Y-m-d');
        $invoice = "02310";
        $view =  \View::make('pdf.invoice_val', compact('data', 'date', 'invoice'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('invoice');
		
		
     }
}
?>
