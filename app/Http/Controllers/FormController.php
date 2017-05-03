<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\DB as DB;

use Redirect;

use Validator;

use Session;

use App\Form;

use App\Fechas;

use App\Horas;

use Idrd\Usuarios\Repo\Departamento;

use Idrd\Usuarios\Repo\Pais;

use Idrd\Usuarios\Repo\Ciudad;

use Idrd\Usuarios\Repo\Localidad;

use Idrd\Usuarios\Repo\Acceso;

use Mail;

class FormController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    var $url;

    public function index()
    {

      //$fechas = Fechas::with('horas')->get();
      $fechas = Fechas::all();
      $horas = Horas::all();

      //dd($fechas); exit();
      return view('form',["fechas"=>$fechas, "horas"=>$horas,]);
    }

    private function cifrar($M)

    {   
      $C="";

        $k = 18; 

      for($i=0; $i<strlen($M); $i++)$C.=chr((ord($M[$i])+$k)%255);

      return $C;

    }



    private function decifrar($C)

    {   

      $M="";

      $k = 18;

      for($i=0; $i<strlen($C); $i++)$M.=chr((ord($C[$i])-$k+255)%255);

      return $M;

    }

    public function listar_datos(){
$acceso = Form::whereYear('created_at', '=', date('Y'))->get(); 
    
    $tabla='<table id="lista">
        <thead>
           <tr>
             <th style="text-transform: capitalize;">id</th>
             <th style="text-transform: capitalize;">Tiene familiares con algún tipo de discapacidad</th>
             <th style="text-transform: capitalize;">Qué tipo de discapacidad</th>          
             <th style="text-transform: capitalize;">Su familiar hace parte de algún grupo social, deportivo o de formación académica</th>
             <th style="text-transform: capitalize;"> Por favor indique a que grupo pertenece </th>
             <th style="text-transform: capitalize;">En su espacio laboral ha presenciado exclusión a personas en condición de discapacidad</th>
             <th style="text-transform: capitalize;">En qué lugar</th>
             <th style="text-transform: capitalize;">Nombre</th>
             <th style="text-transform: capitalize;">Área</th>
            </tr>
        </thead>
        <tbody id="tabla">';
      foreach ($acceso as $key => $value) {
     

       $tabla.='<tr><td>'.$value->id.'</td>';
       $tabla.='<td>'.$value->discapacidad.'</td>';    
       $tabla.='<td>'.$value->tipo_discapacidad.'</td>';
       $tabla.='<td>'.$value->grupo.'</td>';
       $tabla.='<td>'.$value->tipo_grupo.'</td>';
       $tabla.='<td>'.$value->lugar.'</td>';
       $tabla.='<td>'.$value->tipo_lugar.'</td>';
       $tabla.='<td>'.$value->nombre.'</td>';
       $tabla.='<td>'.$value->area.'</td></tr>';
       

      }
      $tabla.='</tbody></table>';

      echo $tabla;

    }
  


    public function logear(Request $request){

      $usuario = $request->input('usuario');
 
      $pass = $request->input('pass');

      $acceso = Acceso::where('Usuario',$usuario)->where('Contrasena', sha1($this->cifrar($pass)) )->first();

      if (empty($usuario)) { return view('error',['error' => 'Usuario o contraseña invalida!'] ); exit(); }
       
       session_start() ;

       $_SESSION['id_usuario'] = json_encode($acceso);
      
      return view('admin'); exit(); 

      
    }

    private function obtener_edad($date) {

     list($Y,$m,$d) = explode("-",$date);

     return( date("md") < $m.$d ? date("Y")-$Y-1 : date("Y")-$Y );

    }

    public function insertar(Request $request){

      $post = $request->input();
       $formulario = new Form([]);

        $this->store($formulario, $request->input());
        //envio de correo

        return view('error', ['error' => 'Registro insertado!']);

    }


    public function listar_pais(){

        $lista="";

       $paises = Pais::orderBy('Nombre_Pais', 'asc')
                ->get();


    foreach ($paises as $pais) {
    $lista .= '<option value="'.$pais['Id_Pais'].'">'.$pais['Nombre_Pais'].'</option>';
    }

            echo $lista;

    }

    public function listar_ciudad(){

       
     $lista="";

     $paises = Ciudad::orderBy('Nombre_Ciudad', 'asc')
                ->get();

    foreach ($paises as $pais) {
      $lista .= '<option value="'.$pais['Id_Ciudad'].'">'.$pais['Nombre_Ciudad'].'</option>';
    }

            echo $lista;
    

    }

    public function listar_departamento(){

       
    $lista="";

    $paises = Departamento::orderBy('Nombre_Departamento', 'asc')
                ->get();

    foreach ($paises as $pais) {
      $lista .= '<option value="'.$pais['Id_Departamento'].'">'.$pais['Nombre_Departamento'].'</option>';
    }

    echo $lista;
    

    }

    private function inscritos($hora){
      $registros = Form::where('hora', $hora)->get();
      return $registros;
    }

    private function store($formulario, $input)
    {
        $formulario['discapacidad'] = $input['discapacidad'];
        $formulario['tipo_discapacidad'] = $input['tipo_discapacidad'];
        $formulario['grupo'] = $input['grupo'];
        $formulario['tipo_grupo'] = $input['tipo_grupo'];
        $formulario['lugar'] = $input['lugar'];
        $formulario['tipo_lugar'] = $input['tipo_lugar'];
        $formulario['nombre'] = $input['nombre'];
        $formulario['area'] = $input['area'];
        $formulario->save();

        return $formulario;
        
    }
}
