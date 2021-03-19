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

class inventarioController extends BaseController
{
     public function inventario(Request $req)
     {

       $user=$req->input('user');
       $job=$req->input('job');
       $area=$req->input('area');
       $manager=$req->input('manager');
       $tipoh=$req->input('tipoh');
       $marca=$req->input('marca');
       $model=$req->input('model');
       $fcompra=$req->input('fcompra');
       $finicio=$req->input('finicio');
       $fend=$req->input('fend');


		     DB::table('inventario')->insertGetId(
		    ['usuario' => $user, 'job_ti' =>$job,'area'=>$area,'manager'=>$manager,'tipo_hard'=>$tipoh,'marca'=>$marca,'modelo'=>$model,'fecha_compra'=>$fcompra,'fecha_inicio_garan'=>$finicio,'fecha_fin_garan'=>$fend]
			);

		    return view('index');

     }
}

?>