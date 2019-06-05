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
        return view('quicksms',(['Usuario'=> \App\User::all(),'Plantilla'=>\App\Plantilla::all(),'Sms'=>\App\Sms::all(),'Modelo'=>\App\Modelo::all()]));
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
    public function store(Request $request)
    {
        //
        $table= new \App\Sms;
        $table->user_id=$request->get('user_id');
        $table->ruta=$request->get('SMS Gateway');
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
         
        /*
        $key = "4383f164-c150-4d34-a697-5b6a32c5bfd2";    
        $secret = "2RYiagEX+0SvSAypgPBnaw=="; 
        $phone_number = $table->destinatario;
        $user = "application\\" . $key . ":" . $secret;    
        $message = array("message"=>$table->mensaje);    
        $data = json_encode($message);    
        $ch = curl_init('https://messagingapi.sinch.com/v1/sms/' . $phone_number);    
        curl_setopt($ch, CURLOPT_POST, true);    
        curl_setopt($ch, CURLOPT_USERPWD,$user);    
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);    
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);    
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);    
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));    
        $result = curl_exec($ch);    
        if(curl_errno($ch)) {    
            echo 'Curl error: ' . curl_error($ch);    
        }
        $resp = json_decode($result, true);
        curl_close($ch);*/

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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sinch(Request $request, $id)
    {
        $key = "4383f164-c150-4d34-a697-5b6a32c5bfd2";    
        $secret = "2RYiagEX+0SvSAypgPBnaw=="; 
        $phone_number = $number;
        $user = "application\\" . $key . ":" . $secret;    
        $message = array("message"=>$message);    
        $data = json_encode($message);    
        $ch = curl_init('https://messagingapi.sinch.com/v1/sms/' . $phone_number);    
        curl_setopt($ch, CURLOPT_POST, true);    
        curl_setopt($ch, CURLOPT_USERPWD,$user);    
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);    
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);    
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);    
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));    
        $result = curl_exec($ch);    
        if(curl_errno($ch)) {    
            echo 'Curl error: ' . curl_error($ch);    
        }
        $resp = json_decode($result, true);
        curl_close($ch);

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
