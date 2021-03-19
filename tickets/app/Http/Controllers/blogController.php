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

class blogController extends BaseController
{
     public function blog(Request $req)
     {
      		$titulo=$req->input('titulo');
            $contenido=$req->input('prob');
            
    $id = DB::table('conocimiento')->insertGetId(
    ['titulo' => $titulo, 'conenido' =>$contenido]
	);
           return view('index_admin');
           
     }
}

			
?>
