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

class loginController extends BaseController
{
     public function login(Request $req)
     {
      $username = $req->input('username');
      $password = $req->input('password');
      /*$nom;
      $ap;
      $am;*/
     //session::put('username',Input::get('username'));

      $checkLogin = DB::table('users')->where(['username'=>$username,'password'=>$password])->get();
      if(count($checkLogin)  >0)
      {


      
	
          $type="admin";
          $tipo = DB::table('users')->where(['username'=>$username,'tipo'=>$type])->get();
      if(count($tipo)  >0)
      {

        foreach ($checkLogin as $user)
      {
      
      $nom=$user->nombre;
      
      $ap=$user->ape_p;
     
      $am=$user->ape_m;
      }

      $todo=$nom." ".$ap." ".$am;
          
          Session::put('todo', $username);
          return view('index_admin');
      }else
      { 
            
            foreach ($checkLogin as $user)
      {
      
      $nom=$user->nombre;
      
      $ap=$user->ape_p;
     
      $am=$user->ape_m;
      }

      $todo1=$nom." ".$ap." ".$am;
            Session::put('todo1', $username);
           return view('index');
      }
      
     //->with('username', $username)->with('nombre',$nom)->with('ape_p',$ap)->with('ape_m',$am);
      }
      else
      {

       return view('login');
      }
     }
}

?>
