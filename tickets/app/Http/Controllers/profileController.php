<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use DB;

class profileController extends BaseController
{
     public function profile(Request $req)
     {
      $username = $req->input('username');
      $password = $req->input('password');
	  $nombre = $req->input('name');
	  $ape_p = $req->input('apep');
	  $ape_m = $req->input('apem');
	  $pais = $req->input('pais');
	  $region = $req->input('region');
	  $tipo="user";
	  $estado="pendiente";
	  
    $id = DB::table('users')->where(['username'=>$username])->update(
    ['username' => $username, 'password' =>$password,'nombre'=>$nombre,'ape_p'=>$ape_p,'ape_m'=>$ape_m,'pais'=>$pais,'region'=>$region]
	);
	
	return view('index');
	
	  
     }
}

?>
