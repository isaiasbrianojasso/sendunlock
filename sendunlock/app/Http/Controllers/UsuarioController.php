<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Usuario;
use App\User;
use App\Plantilla;
use App\Sms;
use App\Modelo;
use App\Sistema;
class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
       $this->middleware('auth'); //si no esta logueado no puede entrar
    }
    public function index()
    {
        //
        return view('home',(['Usuario'=> \App\User::all(),'Plantilla'=>\App\Plantilla::all(),'Sms'=>\App\Sms::all(),'Modelo'=>\App\Modelo::all(),'Sistema'=>\App\Sistema::all()]));
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( Request $request)
    {
      

    }
    public function profile()
    {
        //
        return view('profile',(['Usuario'=> \App\User::all(),'Plantilla'=>\App\Plantilla::all(),'Sms'=>\App\Sms::all(),'Modelo'=>\App\Modelo::all()]));
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $usuario= new \App\User();
        $usuario->name=$request->get('name');
        $contraseñaantigua=$request->get('password');
        $usuario->password=bcrypt($contraseñaantigua);
        $usuario->email=$request->get('email');
        $usuario->creditos=$request->get('creditos');
        $usuario->rol=$request->get('rol');
        $usuario->fechaactivo=$request->get('fechaactivo');
        $usuario->fechafinal=$request->get('fechafinal');
        $usuario->save();
        return back();

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function senderid(Request $request)
    {
        //
        $usuario= new \App\Sistema();
        $usuario->senderid=$request->get('senderid');
        $usuario->save();
        return back();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function plantilla(Request $request)
    {
        //
        $usuario= new \App\Plantilla();
        $usuario->nombreplantilla=$request->get('nombreplantilla');
        $usuario->plantilla=$request->get('plantilla');
        $usuario->save();
        return back();
    }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function agregarmodelo(Request $request)
    {
        //
        $modelo= new \App\Modelo();
        $modelo->modelo=$request->get('modelo');
        $modelo->color=$request->get('color');
        $modelo->capacidad=$request->get('capacidad');
        $modelo->save();
        return back();

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        //

        $usuario= \App\User::find($id);
        $contraseñaantigua=$request->get('password2');
        $usuario->password=bcrypt($contraseñaantigua);
        $usuario->name=$request->get('name2');
        $usuario->email=$request->get('email2');
        $usuario->creditos=$request->get('creditos2');
        $usuario->rol=$request->get('rol2');
        $usuario->fechaactivo=$request->get('fechaactivo2');
        $usuario->fechafinal=$request->get('fechafinal2');
        $usuario->save();
        return back();
    }
 /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editsenderid(Request $request,$id)
    {
        //

        $usuario= \App\Sistema::find($id);
        $usuario->senderid=$request->get('senderid1');
        $usuario->save();
        return back();
    }

        /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editprofile(Request $request,$id)
    {
        //
        $usuario= \App\User::find($id);
        $usuario->name=$request->get('name');
        $usuario->email=$request->get('email');
        $usuario->password=$request->get('password');
        $usuario->sobrenombre=$request->get('sobrenombre');
        $usuario->empresa=$request->get('empresa');
        $usuario->website=$request->get('website');
        $usuario->telefono=$request->get('telefono');
        $usuario->direccion=$request->get('direccion');
        $usuario->direccion2=$request->get('direccion2');
        $usuario->estado=$request->get('estado');
        $usuario->ciudad=$request->get('ciudad');
        $usuario->cp=$request->get('cp');
        $usuario->save();
        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $table = \App\User::findOrFail($id);
        $table->delete();
        return redirect('/admin');
    }

        /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminarsenderid($id)
    {
        //

        $table = \App\Sistema::findOrFail($id);
        $table->delete();
        return redirect('/admin');
    }
       /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function borrarplantilla($id)
    {
        //
        $table = \App\Plantilla::findOrFail($id);
        $table->delete();
        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function borrarmodelo($id)
    {
        //

        $table = \App\Modelo::findOrFail($id);
        $table->delete();
        return redirect('/admin');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editaplantilla(Request $request,$id)
    {
        //
        $usuario= \App\Plantilla::find($id);
        $usuario->nombreplantilla=$request->get('nombreplantilla1');
        $usuario->plantilla=$request->get('plantilla1');
        $usuario->save();
        return back();
    }
}
