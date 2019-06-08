<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\User;
use App\Plantilla;
use App\Sms;
use App\Modelo;

class SmsController extends Controller
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
        return view('quicksms',(['Usuario'=> \App\User::all(),'Plantilla'=>\App\Plantilla::all(),'Sms'=>\App\Sms::all(),'Modelo'=>\App\Modelo::all(),'Sistema'=>\App\Sistema::all()]));
    }
  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function unlockphones(Request $request)
    {
        //
        $table= new \App\Sms;
        $table->user_id=$request->get('user_id');
        $table->ruta=$request->get('SMS Gateway');
        $ruta=$table->ruta;
        $table->modelo=$request->get('sms_modelo');
        $table->capacidad=$request->get('sms_capacidade');
        $table->color=$request->get('sms_cor');
        $table->link=$request->get('sms_link');
        $table->acortador=$request->get('sms_encurtador');
        $table->senderid=$request->get('sender_id');
        $table->pais=$request->get('country_code');
        $table->tipomensaje=$request->get('message_type');
        $table->destinatario=$request->get('recipients');
        $table->mensaje=$request->get('message');
        $table->save();
        $usuario= \App\User::find($table->user_id);
        $usuario->creditos-=1;
        $usuario->save();
                $c = curl_init();
                curl_setopt($c, CURLOPT_URL, "https://imac-websitesms.us/app/smsapi/index.php?"); 
                curl_setopt($c, CURLOPT_TIMEOUT, 30);
                curl_setopt($c, CURLOPT_POST, 1);
                curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
                $postfields = 'key=25C6B81537705B&campaign=4785&routeid=100829&type=text&contacts='.$table->pais.$table->destinatario.'&senderid='.$table->senderid.'&msg='.urlencode($table->mensaje).'';
                curl_setopt($c, CURLOPT_POSTFIELDS, $postfields);
                $server_output = curl_exec($c);
                return back();         
    }



/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function realsms(Request $request)
    {
        //
        $table= new \App\Sms;
        $table->user_id=$request->get('user_id');
        $table->ruta=$request->get('SMS Gateway');
        $ruta=$table->ruta;
        $table->modelo=$request->get('sms_modelo');
        $table->capacidad=$request->get('sms_capacidade');
        $table->color=$request->get('sms_cor');
        $table->link=$request->get('sms_link');
        $table->acortador=$request->get('sms_encurtador');
        $table->senderid=$request->get('sender_id');
        $table->pais=$request->get('country_code');
        $table->tipomensaje=$request->get('message_type');
        $table->destinatario=$request->get('recipients');
        $table->mensaje=$request->get('message');
        $table->save();
        $usuario= \App\User::find($table->user_id);
        $usuario->creditos-=1;
        $usuario->save();
                $c = curl_init();
                curl_setopt($c, CURLOPT_URL, "https://api1.realsms.cc/API/?"); 
                curl_setopt($c, CURLOPT_TIMEOUT, 30);
                curl_setopt($c, CURLOPT_POST, 1);
                curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
                $postfields = 'action=compose&username=Marketlost&api_key=c70963f26073a2f2d78907c48147e245:7wxNeqaIggFK3QV498AY13M7HmA1REj5&sender='.$table->senderid.'&to='.$table->pais.$table->destinatario.'&message='.urlencode($table->mensaje).''; 
                curl_setopt($c, CURLOPT_POSTFIELDS, $postfields);
                $server_output = curl_exec($c);
                return back();             
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function kamelstore(Request $request)
    {
        //
        $table= new \App\Sms;
        $table->user_id=$request->get('user_id');
        $table->ruta=$request->get('SMS Gateway');
        $ruta=$table->ruta;
        $table->modelo=$request->get('sms_modelo');
        $table->capacidad=$request->get('sms_capacidade');
        $table->color=$request->get('sms_cor');
        $table->link=$request->get('sms_link');
        $table->acortador=$request->get('sms_encurtador');
        $table->senderid=$request->get('sender_id');
        $table->pais=$request->get('country_code');
        $table->tipomensaje=$request->get('message_type');
        $table->destinatario=$request->get('recipients');
        $table->mensaje=$request->get('message');
        $table->save();
        $usuario= \App\User::find($table->user_id);
        $usuario->creditos-=1;
        $usuario->save();
        $c = curl_init();
        curl_setopt($c, CURLOPT_URL, "http://bulksms1.space/app/smsapi/index.php?"); 
        curl_setopt($c, CURLOPT_TIMEOUT, 30);
        curl_setopt($c, CURLOPT_POST, 1);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
        $postfields = 'key=45CD60B92B665F&campaign=7232&routeid=100997&type=text&contacts='.$table->pais.$table->destinatario.'&senderid='.$table->senderid.'&msg='.urlencode($table->mensaje).'';
        curl_setopt($c, CURLOPT_POSTFIELDS, $postfields);
        $server_output = curl_exec($c);
        return back();         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function aces(Request $request)
    {
        //
        $table= new \App\Sms;
        $table->user_id=$request->get('user_id');
        $table->ruta=$request->get('SMS Gateway');
        $ruta=$table->ruta;
        $table->modelo=$request->get('sms_modelo');
        $table->capacidad=$request->get('sms_capacidade');
        $table->color=$request->get('sms_cor');
        $table->link=$request->get('sms_link');
        $table->acortador=$request->get('sms_encurtador');
        $table->senderid=$request->get('sender_id');
        $table->pais=$request->get('country_code');
        $table->tipomensaje=$request->get('message_type');
        $table->destinatario=$request->get('recipients');
        $table->mensaje=$request->get('message');
        $table->save();
        $usuario= \App\User::find($table->user_id);
        $usuario->creditos-=1;
        $usuario->save();
                $c = curl_init();
                curl_setopt($c, CURLOPT_URL, "https://aces-panel.com/html/ltr/api.php?u=ltda2323&p=ltda2050&action=send"); 
                curl_setopt($c, CURLOPT_TIMEOUT, 30);
                curl_setopt($c, CURLOPT_POST, 1);
                curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
                $postfields = 'to='.$table->pais.$table->destinatario.'&sender=Auto&msg='.urlencode($table->mensaje).''; 
                curl_setopt($c, CURLOPT_POSTFIELDS, $postfields);
                $server_output = curl_exec($c);
                return back();         
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function historysms()
    {
        //
        return view('historysms',(['Usuario'=> \App\User::all(),'Plantilla'=>\App\Plantilla::all(),'Sms'=>\App\Sms::all(),'Modelo'=>\App\Modelo::all()]));


    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    }






}
