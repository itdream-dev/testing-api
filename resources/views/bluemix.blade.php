<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Testing Call API</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" href="/assets/vendor/font-awesome/css/font-awesome.css" />

        <script src="/assets/vendor/jquery/jquery.js"></script>
        <script src="/assets/vendor/bootstrap/js/bootstrap.js"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                /* align-items: center; */
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 60px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .card{
              border:1px solid #9ba0a2 !important;
              padding-top:50px;
            }
            .card-title{
              color:#000 !important;
              font-weight:bold;
              font-size:15px;
              padding-top:20px
            }
            button {
              font-weight: bold !important;
              font-size:15px;
              text-align: left !important;
              width:215px;
            }
            label, input, small {
              font-weight: 1000 !important;
            }
            .top-info{
              position:absolute;
              top:50px;
              left:30px;
              text-align: left;
            }
            .top-info p{
              font-weight: 510 !important;
              color:#c3c0c0;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content" style="width:100%; padding-top:50px">
                <div class="top-left links">
                  <a href="{{ url('/') }}">Home</a> / <a href="{{ url('/ibm_cloud') }}" style="font-weight:bold; color:#000">IBM Cloud</a>
                </div>
                <div class="top-info">
                  <p>Nodejs Backend is running on http://18.191.207.249:3033</p>
                  <p>Golang Backend is running on http://18.191.207.249:3000</p>
                  <p>Erlang Backend is running on http://18.191.207.249:8000</p>
                  <p>Java Backend is running on http://18.191.207.249:8080</p>
                </div>
                <div class="row" style="padding-top:10px">
                    <img class="card-img-top" src="/images/ibm_cloud.png" alt="Card image cap">
                </div>
                <div class="title m-b-md row" style="padding-top:0px; margin-top:15px">
                    HyperLeger Fabric
                </div>

                <div class="row" style="padding-top:30px">
                  <div class="col-sm-4">
                    <div class="row" style="">
                      <button class="btn btn-primary" onclick="callNodjs()"><img src="/images/nodejs.png" style="width:35px; margin-right:5px"/> Call Api From NodeJS</button>
                    </div>
                    <div class="row" style="padding-top:30px">
                      <button class="btn btn-primary" onclick="callGolang()"><img src="/images/golang.png" style="width:35px; margin-right:5px"/> Call Api From Golang</button>
                    </div>
                    <div class="row" style="padding-top:30px">
                      <button class="btn btn-primary" onclick="callErlang()"><img src="/images/erlang.png" style="width:35px; margin-right:5px"/> Call Api From Erlang</button>
                    </div>
                    <div class="row" style="padding-top:30px">
                      <button class="btn btn-primary" onclick="callJava()" style="height:58px"><img src="/images/java.jpg" style="width:35px; margin-right:5px"/> Call Api From Java</button>
                    </div>
                    <div class="row" style="padding-top:30px">
                      <button class="btn btn-primary" disabled><img src="/images/cics.png" style="width:35px; margin-right:5px" /> Call Api From CICS </button>
                    </div>
                    <div class="row" style="padding-top:30px">
                      <button class="btn btn-primary" disabled><img src="/images/ims.png" style="width:35px; margin-right:5px" /> Call Api From IMS</button>
                    </div>
                    <div class="row" style="padding-top:30px">
                      <button class="btn btn-primary" disabled><img src="/images/cobol.png" style="width:35px; margin-right:5px" /> Call Api From COBOL</button>
                    </div>
                    <div class="row" style="padding-top:30px;padding-bottom:30px">
                      <button class="btn btn-primary" disabled><img src="/images/pl.png" style="width:35px; margin-right:5px" /> Call Api From PL/1</button>
                    </div>
                  </div>
                  <div class="col-sm-8" style="text-align:left;padding: 0px 50px 0px 20px">
                    <div class="row">
                      <div class="form-group" style="max-width:800px">
                        <label for="label_api_url">Blockchain Composer Rest Api URL (ex: https://vehicle-manufacture-rest-busy-gelada.mybluemix.net/api/Order (order lists))</label>
                        <input type="text" class="form-control" id="api_url" name="api_url" placeholder="Enter api url" value="https://vehicle-manufacture-rest-busy-gelada.mybluemix.net/api/Order">
                        <small id="url_help" class="form-text">You can see api lists on https://vehicle-manufacture-rest-busy-gelada.mybluemix.net/explorer/ (bluemix composer rest server)</small>
                      </div>

                      <div class="form-group" style="max-width:800px; padding-top:30px">
                        <label for="label_api_url">Result <span id="result-status"></span></label>
                        <textarea class="form-control" id="api_result" name="api_result" style="min-height:350px;font-weight:bold" disabled></textarea>
                      </div>

                      <div id="transaction-box" class="form-group" style="max-width:800px; display:none; padding-top:30px">
                        <label for="label_api_url">Extract Transaction Ids</label>
                        <label class="form-control" id="transactions" name="transactions" style="min-height:350px;font-weight:bold"></label>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <script>
var _0xf884=['please\x20input\x20api\x20url!','#api_result','#result-status','color','#000','post','http://18.223.149.254:3033/api/calling_api_from_nodejs','result','success','stringify','includes','transactionId','split','\x22transactionId\x22:\x22','\x22,\x22transactionType\x22','push','transactionlists','#transaction-box','show','</p>','#transactions','html','(\x20SUCCESS\x20)','css','#0f0','(\x20FAILED\x20)','#f00','res','<p\x20style=\x22color:red\x22>','golang','http','ajax','json','erlang','get','log','#api_url','val'];(function(_0x231c6a,_0x5cf4ba){var _0x949582=function(_0xad7f37){while(--_0xad7f37){_0x231c6a['push'](_0x231c6a['shift']());}};_0x949582(++_0x5cf4ba);}(_0xf884,0xe1));var _0x2f0f=function(_0x27c62a,_0x131612){_0x27c62a=_0x27c62a-0x0;var _0x9f8cf5=_0xf884[_0x27c62a];return _0x9f8cf5;};function callNodjs(){console[_0x2f0f('0x0')]('nodejs');api_url=$(_0x2f0f('0x1'))[_0x2f0f('0x2')]();if(api_url==''){alert(_0x2f0f('0x3'));return;}$(_0x2f0f('0x4'))['html']('');$(_0x2f0f('0x5'))['html']('');$(_0x2f0f('0x5'))['css'](_0x2f0f('0x6'),_0x2f0f('0x7'));data={'api_url':api_url};$[_0x2f0f('0x8')](_0x2f0f('0x9'),data,function(_0x4457cb,_0x5f8ba6){result=_0x4457cb['res'];console[_0x2f0f('0x0')](_0x4457cb,_0x5f8ba6);console[_0x2f0f('0x0')](_0x2f0f('0xa'),result);if(_0x5f8ba6==_0x2f0f('0xb')){_0x4457cb=JSON[_0x2f0f('0xc')](result);if(_0x4457cb[_0x2f0f('0xd')](_0x2f0f('0xe'))){transactionlists=[];_0x4457cb=_0x4457cb[_0x2f0f('0xf')](_0x2f0f('0x10'));for(i in _0x4457cb){if(i==0x0)continue;a=_0x4457cb[i][_0x2f0f('0xf')](_0x2f0f('0x11'))[0x0];transactionlists[_0x2f0f('0x12')](a);}console[_0x2f0f('0x0')](_0x2f0f('0x13'),transactionlists);$(_0x2f0f('0x14'))[_0x2f0f('0x15')]();html='';for(i in transactionlists){html=html+'<p\x20style=\x22color:red\x22>'+transactionlists[i]+_0x2f0f('0x16');}$(_0x2f0f('0x17'))['html'](html);}$(_0x2f0f('0x4'))[_0x2f0f('0x18')](JSON[_0x2f0f('0xc')](result));$(_0x2f0f('0x5'))[_0x2f0f('0x18')](_0x2f0f('0x19'));$('#result-status')[_0x2f0f('0x1a')](_0x2f0f('0x6'),_0x2f0f('0x1b'));}else{$(_0x2f0f('0x5'))[_0x2f0f('0x18')](_0x2f0f('0x1c'));$(_0x2f0f('0x5'))[_0x2f0f('0x1a')]('color',_0x2f0f('0x1d'));$(_0x2f0f('0x4'))[_0x2f0f('0x18')](_0x4457cb);}});}function callJava(){api_url=$('#api_url')[_0x2f0f('0x2')]();if(api_url==''){alert(_0x2f0f('0x3'));return;}$('#api_result')[_0x2f0f('0x18')]('');$('#result-status')['html']('');$('#result-status')['css'](_0x2f0f('0x6'),'#000');data={'api_url':api_url};$[_0x2f0f('0x8')](_0x2f0f('0x9'),data,function(_0xf78c65,_0xa40053){result=_0xf78c65[_0x2f0f('0x1e')];console[_0x2f0f('0x0')](_0xf78c65,_0xa40053);console[_0x2f0f('0x0')](_0x2f0f('0xa'),result);if(_0xa40053==_0x2f0f('0xb')){_0xf78c65=JSON[_0x2f0f('0xc')](result);if(_0xf78c65[_0x2f0f('0xd')](_0x2f0f('0xe'))){transactionlists=[];_0xf78c65=_0xf78c65[_0x2f0f('0xf')](_0x2f0f('0x10'));for(i in _0xf78c65){if(i==0x0)continue;a=_0xf78c65[i][_0x2f0f('0xf')](_0x2f0f('0x11'))[0x0];transactionlists[_0x2f0f('0x12')](a);}console[_0x2f0f('0x0')]('transactionlists',transactionlists);$(_0x2f0f('0x14'))[_0x2f0f('0x15')]();html='';for(i in transactionlists){html=html+_0x2f0f('0x1f')+transactionlists[i]+_0x2f0f('0x16');}$(_0x2f0f('0x17'))[_0x2f0f('0x18')](html);}$(_0x2f0f('0x4'))[_0x2f0f('0x18')](JSON[_0x2f0f('0xc')](result));$('#result-status')[_0x2f0f('0x18')]('(\x20SUCCESS\x20)');$(_0x2f0f('0x5'))[_0x2f0f('0x1a')](_0x2f0f('0x6'),_0x2f0f('0x1b'));}else{$('#result-status')[_0x2f0f('0x18')](_0x2f0f('0x1c'));$(_0x2f0f('0x5'))[_0x2f0f('0x1a')]('color',_0x2f0f('0x1d'));$(_0x2f0f('0x4'))[_0x2f0f('0x18')](_0xf78c65);}});}function callGolang(){console[_0x2f0f('0x0')](_0x2f0f('0x20'));api_url=$(_0x2f0f('0x1'))[_0x2f0f('0x2')]();if(api_url==''||!api_url[_0x2f0f('0xd')](_0x2f0f('0x21'))){alert(_0x2f0f('0x3'));return;}$(_0x2f0f('0x4'))[_0x2f0f('0x18')]('');$(_0x2f0f('0x5'))[_0x2f0f('0x18')]('');$(_0x2f0f('0x5'))[_0x2f0f('0x1a')](_0x2f0f('0x6'),_0x2f0f('0x7'));data={'api_url':api_url};$[_0x2f0f('0x22')]({'url':'http://18.223.149.254:3033/api/calling_api_from_nodejs','type':_0x2f0f('0x8'),'dataType':_0x2f0f('0x23'),'contentType':'application/json','success':function(_0x224949){console[_0x2f0f('0x0')](_0x224949);$(_0x2f0f('0x4'))[_0x2f0f('0x18')](JSON[_0x2f0f('0xc')](_0x224949));$(_0x2f0f('0x5'))[_0x2f0f('0x18')]('(\x20SUCCESS\x20)');$('#result-status')['css'](_0x2f0f('0x6'),_0x2f0f('0x1b'));if(_0x224949[_0x2f0f('0xd')](_0x2f0f('0xe'))){transactionlists=[];_0x224949=_0x224949[_0x2f0f('0xf')]('\x22transactionId\x22:\x22');for(i in _0x224949){if(i==0x0)continue;a=_0x224949[i]['split'](_0x2f0f('0x11'))[0x0];transactionlists[_0x2f0f('0x12')](a);}console['log'](_0x2f0f('0x13'),transactionlists);$(_0x2f0f('0x14'))[_0x2f0f('0x15')]();html='';for(i in transactionlists){html=html+_0x2f0f('0x1f')+transactionlists[i]+_0x2f0f('0x16');}$(_0x2f0f('0x17'))['html'](html);}},'data':JSON[_0x2f0f('0xc')](data)});}function callErlang(){console['log'](_0x2f0f('0x24'));api_url=$('#api_url')['val']();if(api_url==''){alert(_0x2f0f('0x3'));return;}$(_0x2f0f('0x4'))['html']('');$(_0x2f0f('0x5'))[_0x2f0f('0x18')]('');$(_0x2f0f('0x5'))[_0x2f0f('0x1a')]('color',_0x2f0f('0x7'));data={'api_url':api_url};$[_0x2f0f('0x25')](api_url,function(_0x4d17db,_0x5a1874){console[_0x2f0f('0x0')](_0x4d17db,_0x5a1874);result=_0x4d17db;if(_0x5a1874==_0x2f0f('0xb')){_0x4d17db=JSON[_0x2f0f('0xc')](_0x4d17db);if(_0x4d17db[_0x2f0f('0xd')]('transactionId')){transactionlists=[];_0x4d17db=_0x4d17db[_0x2f0f('0xf')](_0x2f0f('0x10'));for(i in _0x4d17db){if(i==0x0)continue;a=_0x4d17db[i]['split'](_0x2f0f('0x11'))[0x0];transactionlists[_0x2f0f('0x12')](a);}console['log'](_0x2f0f('0x13'),transactionlists);$(_0x2f0f('0x14'))[_0x2f0f('0x15')]();html='';for(i in transactionlists){html=html+_0x2f0f('0x1f')+transactionlists[i]+_0x2f0f('0x16');}$(_0x2f0f('0x17'))[_0x2f0f('0x18')](html);}$(_0x2f0f('0x4'))[_0x2f0f('0x18')](JSON['stringify'](result));$('#result-status')[_0x2f0f('0x18')](_0x2f0f('0x19'));$(_0x2f0f('0x5'))[_0x2f0f('0x1a')]('color',_0x2f0f('0x1b'));}else{$('#result-status')[_0x2f0f('0x18')]('(\x20FAILED\x20)');$(_0x2f0f('0x5'))[_0x2f0f('0x1a')](_0x2f0f('0x6'),_0x2f0f('0x1d'));$('#api_result')['html'](_0x4d17db);}});}
        </script>
    </body>
</html>
