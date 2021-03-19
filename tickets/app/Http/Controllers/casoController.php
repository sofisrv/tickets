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

class casoController extends BaseController
{
     public function caso(Request $req)
     {
        
        $area=$req->input('prob');
        $nom=$req->input('nom');
        $ap=$req->input('app');
        $am=$req->input('apm');
        $pais=$req->input('pai');
        $pri=$req->input('alto');
        $pri2=$req->input('medio');
        $pri3=$req->input('bajo');
        $titulo=$req->input('titulo');
        $user=Session::get('todo1');

        $file = $req->file('foto');
 
       //obtenemos el nombre del archivo
       $nombre = $file->getClientOriginalName();

       $fecha=strftime( "%Y-%m-%d", time() );
 
       //indicamos que queremos guardar un nuevo archivo en el disco local
       \Storage::disk('local')->put($nombre,  \File::get($file));
      

      if($pri=="Alto"){
        $id = DB::table('mail')->insertGetId(
      ['username'=>$user,'nombre'=>$nom,'ape_p'=>$ap,'ape_m'=>$am,'pais'=>$pais,'tema'=>$titulo,'problema'=>$area,'prioridad'=>$pri,'image'=>$nombre,'estado'=>'Abierto','progeso'=>'0','createdate'=>$fecha]
      );

       $id = DB::table('ticket')->insertGetId(
      ['username'=>$user,'nombre'=>$nom,'ape_p'=>$ap,'ape_m'=>$am,'pais'=>$pais,'tema'=>$titulo,'problema'=>$area,'prioridad'=>$pri,'image'=>$nombre,'estado'=>'Abierto','progeso'=>'0','createdate'=>$fecha]
      );
        return view('index');


      }elseif($pri2=="Medio")
     
      {
          $id = DB::table('mail')->insertGetId(
      ['username'=>$user,'nombre'=>$nom,'ape_p'=>$ap,'ape_m'=>$am,'pais'=>$pais,'problema'=>$area,'prioridad'=>$pri2,'image'=>$nombre,'estado'=>'Abierto','progeso'=>'0','createdate'=>$fecha]
      );


         $id = DB::table('ticket')->insertGetId(
      ['username'=>$user,'nombre'=>$nom,'ape_p'=>$ap,'ape_m'=>$am,'pais'=>$pais,'problema'=>$area,'prioridad'=>$pri,'image'=>$nombre,'estado'=>'Abierto','progeso'=>'0','createdate'=>$fecha]
      );
          return view('index');


      }elseif($pri3=="Bajo")
      
      {
          $id = DB::table('mail')->insertGetId(
      ['username'=>$user,'nombre'=>$nom,'ape_p'=>$ap,'ape_m'=>$am,'pais'=>$pais,'problema'=>$area,'prioridad'=>$pri3,'image'=>$nombre,'estado'=>'Abierto','progeso'=>'0','createdate'=>$fecha]
      );

       $id = DB::table('ticket')->insertGetId(
      ['username'=>$user,'nombre'=>$nom,'ape_p'=>$ap,'ape_m'=>$am,'pais'=>$pais,'problema'=>$area,'prioridad'=>$pri,'image'=>$nombre,'estado'=>'Abierto','progeso'=>'0','createdate'=>$fecha]
      );

            return view('index');
      }

       /*echo "$nombre";
        

        echo "$nom"." "."$ap"." "."$am<br>";
        echo "$pri"."$pri2"."$pri3";*/


        
     }
}

?>
