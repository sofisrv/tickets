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

class ticketController extends BaseController
{
     public function ticket(Request $req)
     {
     	$username=$req->input('username');
     	$nom=$req->input('nom');
     	$app=$req->input('app');
     	$apm=$req->input('apm');
     	$data=$req->input('data');
     	$estado=$req->input('estatus');
     	$progreso=$req->input('prog');
     	$problema=$req->input('prob');
     	
     	
     	$sql = DB::table('ticket')->where('problema',$problema)->update(['username'=>$username,'nombre'=>$nom,'ape_p'=>$app,'ape_m'=>$apm,'progeso'=>$progreso,'estado'=>$estado]);

                return view('ticket_admin');
     	
			
     }
}

?>