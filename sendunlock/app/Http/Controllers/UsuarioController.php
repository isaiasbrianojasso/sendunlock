<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Usuario;
use App\User;
use App\Plantilla;

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
        return view('home',(['Usuario'=> \App\User::all(),'Plantilla'=>\App\Plantilla::all()]));
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( Request $request)
    {
      

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
        $usuario->password=$request->get('password');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        //

        $usuario= \App\User::find($id);
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
    public function borrarplantilla($id)
    {
        //

        $table = \App\Plantilla::findOrFail($id);
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
        $usuario->nombreplantilla=$request->get('nombreplantilla5');
        $usuario->plantilla=$request->get('plantilla5');
        $usuario->save();
        return back();
    }
}
