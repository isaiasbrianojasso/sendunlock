@extends('layouts.app')
@extends('menu')
@section('menu')
@section('html')
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
                                    <div class="panel-body">
                                        <form  role="form"  action="{{ action('SmsController@store') }}" enctype="multipart/form-data">
                                         @method('POST')
                                           @csrf
                                           <input type="hidden" value={{Auth::user()->id}} name="id" id="id">
                                           <input type="hidden" value={{Auth::user()->id}} name="user_id" id="user_id">
                                           <div class="form-group">
                                            <label class="TitulosEnviaSMS  mt-4">SMS Gateway</label>
                                            <select class="btn-group bootstrap-select form-control" name="SMS Gateway">
                                                    <option value="unlockphones">Ruta 1</option>
                                                    <option value="realsms">Ruta 2</option>
                                                    <option value="kamelstore">Ruta 3</option>
                                                    <option value="aces">Ruta 4</option>

                                            </select>
                                        </div>
                                            <div class="form-group">
                                                    <label class="TitulosEnviaSMS  mt-4" >Selecionar o Aparelho</label>
                                                    <select data-id="sms_modelo" class="btn-group bootstrap-select form-control" name="sms_modelo"  data-live-search="true" id="sms_modelo">
                                                    @foreach ($Modelo as $mo)
                                                    <option value="{{$mo->modelo}}">{{$mo->modelo}}</option>
                                                    @endforeach   
                                                    </select>
                                                </div>
                                            
                                                <div class="form-group">
                                                        <label class="TitulosEnviaSMS  mt-4" >Capacidade</label>
                                                        <select data-id="sms_modelo" name="sms_capacidade" data-live-search="true" id="sms_capacidade" class="btn-group bootstrap-select form-control">
                                                                @foreach ($Modelo as $cap)
                                                                <option value="{{$cap->capacidad}}">{{$cap->capacidad}}</option>
                                                                @endforeach   
                                                        </select>
                                                    </div>
                                                
                                  
                                                    <div class="form-group">
                                                            <label class="TitulosEnviaSMS  mt-4" >Cor</label>
                                                            <select data-id="sms_modelo" name="sms_cor" data-live-search="true" id="sms_cor" class="btn-group bootstrap-select form-control">
                                                                <option value="">Seleciona Color</option>
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
                                   
            

                                            <div class="form-group">
                                                    <label class="TitulosEnviaSMS  mt-4" >País</label>
                                                    <select data-id="sms_modelo" name="country_code" data-live-search="true" class="btn-group bootstrap-select form-control">
                                                            <option value="0">Exist on phone number</option>
                                                            <option value="55" selected="selected">Brazil (55)</option>
                                                    </select>
                                                </div>


                                            <div class="form-group">
                                                <label class="TitulosEnviaSMS">Destinatário</label>
                                                <textarea class="form-control" rows="4" name="recipients" id="recipients"></textarea>
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
                  

                                            <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-send"></i> Enviar </button>
                                        </form>
            
                                    </div>
                                </div>
                            </div>
            
                        </div>
            
                    </div>
                    <script type="text/javascript">
                        /**
                        $( document ).ready(function() {
                        $('#myModal').modal({show:true});
                        });
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
                              
                              var totalChar = $get_msg.val(res4).val().length;
                              
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
                      });
                    </script>
                </section>
      </div>

  </div>
  @endif

    @endsection

