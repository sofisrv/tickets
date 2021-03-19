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

class updblogController extends BaseController
{
     public function bloger(Request $req)
     {
      		  $id=$req->input('elid');
            $btn1=$req->input('act');
            $bnt2=$req->input('eli');
            $titulo=$req->input('titulo');
            $contenido=$req->input('prob');
            
              if($btn1=="actualizar")
              {
                $id2 = DB::table('conocimiento')->where('id',$id)->update(['titulo'=>$titulo,'conenido'=>$contenido]);
                return view('index_admin');
              }
              else
              {
                DB::table('conocimiento')->where(['id'=>$id])->delete();
                return view('index_admin');
              }
    
     }
}

			
?>
