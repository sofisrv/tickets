<?php
namespace tickets\Http\Controllers;
use Session;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use DB;

class valController extends BaseController
{
     public function validar(Request $req)
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
	DB::table('pend')->where(['username'=>$username])->delete();

	return view('index_admin');
	  /*echo "$btn1<br>";
	  echo "$username<br>";
	  echo "$nombre<br>";
	  echo "$ape_p<br>";
	  echo "$ape_m<br>";
	  echo "$pais<br>";
	  echo "$region<br>";
	  echo "$tipo<br>";
	  echo "$password<br>";
	  echo "$admi<br>";
	  echo "validado";*/
   		}
   		else
   		{
   			$estado="No validado";

   			$id = DB::table('rip')->insertGetId(
    ['username' => $username, 'password' =>$password,'nombre'=>$nombre,'ape_p'=>$ape_p,'ape_m'=>$ape_m,'pais'=>$pais,'region'=>$region,'tipo'=>$tipo,'estado'=>$estado]
	);
   			DB::table('pend')->where(['username'=>$username])->delete();
   			return view('index_admin');
	 /* echo "$btn2<br>";
	  echo "$username<br>";
	  echo "$nombre<br>";
	  echo "$ape_p<br>";
	  echo "$ape_m<br>";
	  echo "$pais<br>";
	  echo "$region<br>";
	  echo "$tipo<br>";
	  echo "$password<br>";
	  echo "$admi<br>";
	  echo "rechazado";*/
   		}

	
	  
     }
}

?>
