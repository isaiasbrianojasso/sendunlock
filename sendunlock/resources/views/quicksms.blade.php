@extends('layouts.app')
@extends('menu')
@section('menu')
@section('html')
<script type="text/javascript" src="js/script.js"></script>

<body>

<!-- Modal -->
<div class="modal fade" id="modalenviar" tabindex="-1" role="dialog" aria-labelledby="modalenviar" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">SMS Enviado</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        Enviado
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
  @if(Auth::user()->creditos==0)  
                    <!-- Modal -->
                    <div class="modal fade" id="modalsincreditos" tabindex="-1" role="dialog" aria-labelledby="modalsincreditos" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Creditos Agotados</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                              Creditos Agotados contacte al administrador para mas creditos
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                              <a class="btn btn-primary" href="/">Aceptar</a>
                            </div>
                          </div>
                        </div>
                      </div>
<script>
  window.onload = function() {
  $('#modalsincreditos').modal('show')
  }
</script>
@endif
@if(Auth::user()->creditos<=10)  
<!-- Modal -->
<div class="modal fade" id="modalsincreditos" tabindex="-1" role="dialog" aria-labelledby="modalsincreditos" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Aviso</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
          Los creditos se estan agotando restan {{Auth::user()->creditos}} creditos
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
<script>
window.onload = function() {
$('#modalsincreditos').modal('show')
}
</script>
@endif
  @if(Auth::user()->creditos>=1)
  <div class="container">
      <div class="row">
            <section class="wrapper-bottom-sec">
                    <div class="p-30">
                        <h2 class="page-title">Enviar SMS</h2>
                    </div>
                    <div class="p-30 p-t-none p-b-none">
                                    <div class="row">
                            <div class="col-lg-6">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Enviar SMS</h3>
                                    </div>
                                    <div class="panel-body" style="strong, b{
                                      font-weight: bold;
                                  }">
                                        <form  role="form"  name="smsenviar" id="smsenviar"  enctype="multipart/form-data">
                                         @method('POST')
                                           @csrf
                                           <input type="hidden" value={{Auth::user()->id}} name="id" id="id">
                                           <input type="hidden" value={{Auth::user()->id}} name="user_id" id="user_id">
                                           <div class="form-group">
                                            <label class="TitulosEnviaSMS  mt-4" >Gateway</label>
                                            <select class="btn-group bootstrap-select form-control" onchange="hourChange(this);" name="SMS Gateway" id="SMS Gateway">
                                                    <option value="">Selecciona una ruta</option>
                                                    <option value="unlockphones">Ruta 1</option>
                                                    <option value="realsms">Ruta 2</option>
                                                    <option value="kamelstore">Ruta 3</option>
                                                    <option value="aces">Ruta 4</option>

                                            </select>
                                        </div>
                                            <div class="form-group">
                                                    <label class="TitulosEnviaSMS  mt-4" >Selecionar o Aparelho</label>
                                                    <select data-id="sms_modelo" class="btn-group bootstrap-select form-control" name="sms_modelo"  data-live-search="true" id="sms_modelo">
                                                        <option value="">Selecionar o Aparelho</option>
                                                        <option value="lPHONE 4">lPHONE 4</option>
                                                        <option value="lPHONE 4S">lPHONE 4S</option>
                                                        <option value="lPHONE 5">lPHONE 5</option>
                                                        <option value="lPHONE 5C">lPHONE 5C</option>
                                                        <option value="lPHONE 5S">lPHONE 5S</option>
                                                        <option value="lPHONE 6">lPHONE 6</option>
                                                        <option value="lPHONE 6 Plus">lPHONE 6 Plus</option>
                                                        <option value="lPHONE 6S">lPHONE 6S</option>
                                                        <option value="lPHONE 6S Plus">lPHONE 6S Plus</option>
                                                        <option value="lPHONE SE">lPHONE SE</option>
                                                        <option value="lPHONE 7">lPHONE 7</option>
                                                        <option value="lPHONE 7 Plus">lPHONE 7 Plus</option>
                                                        <option value="lPHONE 8">lPHONE 8</option>
                                                        <option value="lPHONE 8 Plus">lPHONE 8 Plus</option>
                                                        <option value="lPHONE X">lPHONE X</option>
                                                        <option value="lPHONE XR">lPHONE XR</option>
                                                        <option value="lPHONE XS">lPHONE XS</option>
                                                        <option value="lPHONE XS MAX">lPHONE XS MAX</option>
                                                        <option value="lPAD">lPAD</option>
                                                        <option value="lPOD">lPOD</option>
                                                        <option value="lPHONE">lPHONE</option>                                                      @foreach ($Modelo as $mo)
                                                    <option value="{{$mo->modelo}}">{{$mo->modelo}}</option>
                                                    @endforeach   
                                                    </select>
                                                </div>
                                            
                                                <div class="form-group">
                                                        <label class="TitulosEnviaSMS  mt-4" >Capacidade</label>
                                                        <select data-id="sms_modelo" name="sms_capacidade" data-live-search="true" id="sms_capacidade" class="btn-group bootstrap-select form-control">
                                                            <option value="">Selecionar a Capacidade</option>
                                                            <option value="8GB">8GB</option>
                                                            <option value="16GB">16GB</option>
                                                            <option value="32GB">32GB</option>
                                                            <option value="64GB">64GB</option>
                                                            <option value="128GB">128GB</option>
                                                            <option value="256GB">256GB</option>
                                                                @foreach ($Modelo as $cap)
                                                                <option value="{{$cap->capacidad}}">{{$cap->capacidad}}</option>
                                                                @endforeach   
                                                        </select>
                                                    </div>
                                                
                                  
                                                    <div class="form-group">
                                                            <label class="TitulosEnviaSMS  mt-4" >Cor</label>
                                                            <select data-id="sms_modelo" name="sms_cor" data-live-search="true" id="sms_cor" class="btn-group bootstrap-select form-control">
                                                                <option value="">Selecionar a Cor</option>
                                                                <option value="Silver">Silver</option>
                                                                <option value="Space Gray">Space Gray</option>					  
                                                                <option value="Gold">Gold</option>
                                                                <option value="Rose Gold">Rose Gold</option>
                                                                <option value="Black">Black</option>
                                                                <option value="Jet Black">Jet Black</option>
                                                                <option value="Red">Red</option>
                                                                <option value="White">White</option>
                                                                <option value="Blue">Blue</option>
                                                                <option value="Green">Green</option>
                                                                <option value="Yellow">Yellow</option>
                                                                <option value="Pink">Pink</option>
                                                                @foreach ($Modelo as $cor)
                                                                <option value="{{$cor->color}}">{{$cor->color}}</option>
                                                                @endforeach    
                                
                                                            </select>
                                                        </div>
                                                    
                                    
                                            <div class="form-group">
                                                <label class="TitulosEnviaSMS">Link Página</label>
                                                <input type="text" class="selectpicker form-control" name="sms_link" id="sms_link" placeholder="Ex: http://www.suapagina.com">
                                            </div>
                             

                                            <div class="form-group">
                                                    <label class="TitulosEnviaSMS  mt-4" >Encurtador</label>
                                                    <select data-id="sms_modelo"  name="sms_encurtador" data-live-search="true" id="sms_encurtador" class="btn-group bootstrap-select form-control">
                                                            <option value="https://ios.appIeid-lbusca.com">https://ios.appIeid-lbusca.com</option>
                                                    </select>
                                                </div>
                                            
                                                <div class="form-group">
                                                        <label class="TitulosEnviaSMS  mt-4" >Mensagens Prontas</label>
                                                        <select data-id="sms_template" name="sms_template" data-live-search="true" id="sms_template" class="btn-group bootstrap-select form-control">
                                                                <option>Select Template</option>
                                                                @foreach ($Plantilla as $pla)
                                                        <option value="{{$pla->plantilla}}">{{$pla->nombreplantilla}}</option>
                                                                @endforeach    
                                
                                                        </select>
                                                    </div>

                                            
                        
            
                                                    <div class="form-group">
                                                            <label class="TitulosEnviaSMS  mt-4" >Sender ID</label>
                                                            <select data-id="sms_modelo" name="sender_id" data-live-search="true" class="btn-group bootstrap-select form-control">
                                                                @foreach ($Sistema as $sis)
                                                            <option value="{{$sis->senderid}}">{{$sis->senderid}}</option>
                                                              @endforeach
                                                            </select>
                                                        </div>
                                   
            
                                                        @if ($errors->any())
                                                        {{ implode('', $errors->all('<div>:message</div>')) }}
                                                @endif
                                            <div class="form-group">
                                                    <label class="TitulosEnviaSMS  mt-4" >País</label>
                                                    <select data-id="sms_modelo" name="country_code" data-live-search="true" class="btn-group bootstrap-select form-control">
                                                            <option value="">Exist on phone number</option>
                                                            <option value="55" selected="selected">Brazil (55)</option>
                                                    </select>
                                                </div>


                                            <div class="form-group">
                                                <label class="TitulosEnviaSMS">Destinatário</label>
                                                <textarea class="form-control" rows="4" name="recipients" id="recipients" autocomplete="off"></textarea>
                                                <!--<span class="help text-uppercase">Inserir números separados por vírgula (,) Ex. 8801721900000,8801721900001</span>-->
                                                <span class="help text-uppercase">DDD+Número [Ex: 11991544588]</span>
                                                <span class="help text-uppercase pull-right">Número Total De Destinatários
                                                    : <span class="number_of_recipients bold text-success m-r-5">0</span></span>
                                            </div>
                                            <div class="form-group">
                                                    <label class="TitulosEnviaSMS  mt-4" >Tipo de Mensagem</label>
                                                    <select data-id="sms_modelo" name="message_type" id="message_type" class="btn-group bootstrap-select form-control">
                                                            <option value="plain" selected="selected">Plain</option>    
                                                            <option>Select Template</option>
                                                            <option value="voice">Voice</option>
                                                            <option value="mms">MMS</option>
                                                        </select>
                                                </div>

                                            <div class="form-group">
                                                <label class="TitulosEnviaSMS">Mensagem</label>
                                                <textarea class="form-control" name="message" rows="5" id="message"></textarea>
                                                <span class="help text-uppercase" id="remaining"></span>
                                                <span class="help text-success" id="messages"></span>
                                            </div>
                  

                                            <button type="submit" name="enviar" id="enviar" class="btn btn-success btn-sm"><i class="fa fa-send"></i> Enviar </button>
                                        </form>
            
                                    </div>
                                </div>
                            </div>
            
                        </div>
                        <script>
                          /*
                            document.getElementById("SMS Gateway").onchange = function() {myFunction()};
                            function myFunction() {
                              var res = this.value;
                               alert(this.value);
                               console.log(res);
                            }

                          */

  function hourChange(selectObj) {
   var selectIndex=selectObj.selectedIndex;
   var selectValue=selectObj.options[selectIndex].text;
   //console.log(selectValue);
   
   if (selectValue == "Ruta 1") 
   {
    $("#smsenviar").attr("action",("{{ action('SmsController@unlockphones') }} "));
    $('#myModal').modal('show');
  
  }
       
    
    if (selectValue == "Ruta 2") 
   {
    $("#smsenviar").attr("action",("{{ action('SmsController@realsms') }} "));   
    console.log(smsenviar);
  }
  if (selectValue == "Ruta 3") 
   {
    $("#smsenviar").attr("action",("{{ action('SmsController@kamelstore') }} "));  
    console.log(smsenviar);

  }

  if (selectValue == "Ruta 4") 
   {
   $("#smsenviar").attr("action",("{{ action('SmsController@aces') }} "));
   console.log(smsenviar);

  }

 }
                            </script>
                    </div>
                  </body>

                    <script type="text/javascript">
                        /**
                        $( document ).ready(function() {
                        $('#myModal').modal({show:true});
                        });
                        <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background: currentColor;">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="modal-title" style="color: white;text-align: center;">Rota Alternativa</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12">
            Atenção! A Rota 1 está em manutenção!<br>
            Colocamos uma Rota Alternativa no momento.<br>
            Utilizem o Encurtador e Palavras como "iPhone e Apple" estão bloqueadas.
            A Rota Alternativa bloqueia algumas palavras!<br>
            Por isso sempre que enviar um SMS, verifique o Status no Histórico!</div> 
          </div>
        </div>
      </div>
    </div>
  </div>
                **/		
                    </script>
                    
                    <script>
                      $(document).ready(function () {
                
                        var number_of_recipients_ajax = 0,
                          number_of_recipients_manual = 0,
                          $get_msg = $("#message"),
                          $remaining = $('#remaining'),
                          $messages = $remaining.next(),
                          message_type = 'plain',
                          maxCharInitial = 160,
                          maxChar = 157,
                          messages = 1;
                        $("#sms_template").change(function () 
                        {  
                          var Modelo = $('#sms_modelo').val();
                          var Capacidade = $('#sms_capacidade').val();
                          var Cor = $('#sms_cor').val();
                          var link = $('#sms_link').val();
                          var now = new Date(Date.now());
                          var date = now.getHours() + ":" + now.getMinutes() + ":" + now.getSeconds();
                          var id = $(this).val();
                          var _url = $("#_url").val();
                          var dataString = id;
                          console.log(dataString);

                              $("#message").val(dataString);
                
                              var str = dataString;
                              var res = str.replace('[Modelo]', Modelo);
                              
                              var str2 = res;
                              var res2 = str2.replace('[Capacidade]', Capacidade);
                               
                              var str3 = res2;
                              var res3 = str3.replace('[Cor]', Cor);
                              
                              var str4 = res3;
                              var res4 = str4.replace('[Link]', link);

                              var str5 = res4;
                              var res5 = str5.replace('[Date]', date);
                              
                              var totalChar = $get_msg.val(res5).val().length;
                              
                              var remainingChar = maxCharInitial;
                
                              if (totalChar <= maxCharInitial) {
                                remainingChar = maxCharInitial - totalChar;
                                messages = 1;
                              } else {
                                totalChar = totalChar - maxCharInitial;
                                messages = Math.ceil(totalChar / maxChar);
                                remainingChar = messages * maxChar - totalChar;
                                messages = messages + 1;
                              }
                
                                $remaining.text(remainingChar + " caracteres restantes");
                                $messages.text(messages + " Mensagem"+ '(s)');
                        
                        });
                        
                        function get_character() {
                          var totalChar = $get_msg[0].value.length;
                          var remainingChar = maxCharInitial;
                
                          if ( totalChar <= maxCharInitial ) {
                            remainingChar = maxCharInitial - totalChar;
                            messages = 1;
                          } else {
                            totalChar = totalChar - maxCharInitial;
                            messages = Math.ceil( totalChar / maxChar );
                            remainingChar = messages * maxChar - totalChar;
                            messages = messages + 1;
                          }
                
                            $remaining.text(remainingChar + " caracteres restantes");
                            $messages.text(messages + " Mensagem"+ '(s)');
                        }
                
                        $('.send-mms').hide();
                        $('.message_type').on('change', function () {
                          message_type = $(this).val()
                
                          if (message_type == 'unicode') {
                            maxCharInitial = 70
                            maxChar = 67
                            messages = 1
                            $('.send-mms').hide();
                            get_character()
                          }
                
                          if (message_type == 'plain' || message_type == 'voice') {
                            maxCharInitial = 160
                            maxChar = 160
                            messages = 1
                            $('.send-mms').hide();
                            get_character()
                          }
                
                          if (message_type == 'mms'){
                            $('.send-mms').show();
                          }
                
                        })
                
                        $get_msg.keyup(get_character);
                
                
                        $('#recipients').on('keyup', function () {
                
                          if ($(this).val().trim()) {
                            number_of_recipients_manual = splitMulti($(this).val(),[',','\n',';']).length;
                          } else {
                            number_of_recipients_manual = 0;
                          }
                          var total = number_of_recipients_manual + Number(number_of_recipients_ajax);
                
                          $('.number_of_recipients').text(total);
                
                        });
                        
                        $( "#enviar" ).click(function() {
  alert( "SMS Enviado" );
});
                      });
                    </script>
                </section>
      </div>

  </div>
  @endif

    @endsection

