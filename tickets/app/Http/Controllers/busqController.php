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

class busqController extends BaseController
{
     public function buscar(Request $req)
     {

        $b=$req->input('buscar');
        $titulo;
        $contenido;

        $sql = DB::table('conocimiento')
                ->where('titulo', 'like', '%'.$b.'%')
                ->orWhere('conenido','like','%'.$b.'%')
                ->get();

        
               

        if(count($sql)  >0)
            {
                $datos=array();
                   
                   foreach ($sql as $r) 
                   {
                      $titulo=$r->titulo;
                      $contenido=$r->conenido;

                      $datos[]=$r->titulo;
                      $datos2[]=$r->conenido;



                       $data =  
                       [
                        'titulo' =>$r->titulo,
                        'contenido'=> $r->conenido
                        ];
                   }

                    return view('busqueda')->with('datos',$datos)->with('datos2',$datos2);
            }
        else
            {
                     $datos[0]="";
                     $datos2[0]="Su busqueda no ha producido resultados :(";

                return view('busqueda')->with('datos',$datos)->with('datos2',$datos2);
            }
     }
}

?>