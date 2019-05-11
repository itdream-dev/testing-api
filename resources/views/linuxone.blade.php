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
                  <a href="{{ url('/') }}">Home</a> / <a href="{{ url('/linuxone') }}" style="font-weight:bold; color:#000">LinuxOne</a>
                </div>
                <div class="top-info">
                  <p>Nodejs Backend is running on http://108.161.151.117:3033</p>
                  <p>Golang Backend is running on http://88.208.216.161:3033</p>
                  <p>Erlang Backend is running on http://18.219.10.175:8080</p>
                  <p>Java Backend is running on http://18.191.207.249:8080</p>
                </div>
                <div class="row" style="padding-top:10px">
                    <img class="card-img-top" src="/images/linuxone.png" alt="Card image cap">
                </div>
                <div class="title m-b-md row" style="padding-top:0px; margin-top:15px">
                    Linuxone HyperLeger Fabric
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
                        <label for="label_api_url">Blockchain Composer Rest Api URL (ex: http://148.100.245.200:3000/api/system/historian (transaction lists))</label>
                        <input type="text" class="form-control" id="api_url" name="api_url" placeholder="Enter api url" value="http://148.100.245.200:3000/api/system/historian">
                        <small id="url_help" class="form-text">You can see api lists on http://148.100.245.200:3000/explorer/ (linuone composer rest server)</small>
                      </div>

                      <div class="form-group" style="max-width:800px; padding-top:30px">
                        <label for="label_api_url">Result <span id="result-status"></span></label>
                        <textarea class="form-control" id="api_result" name="api_result" style="min-height:350px;font-weight:bold" disabled></textarea>
                      </div>

                      <div id="transaction-box" class="form-group" style="max-width:800px; display:none; padding-top:30px">
                        <label for="label_api_url">Extrat Transaction Ids</label>
                        <label class="form-control" id="transactions" name="transactions" style="min-height:350px;font-weight:bold"></label>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <script>
var _0x94a8=['#transaction-box','</p>','#transactions','(\x20SUCCESS\x20)','#0f0','(\x20FAILED\x20)','#f00','#api_url','split','\x22,\x22transactionType\x22','show','golang','http','ajax','json','application/json','<p\x20style=\x22color:red\x22>','get','log','nodejs','val','please\x20input\x20api\x20url!','#api_result','html','#result-status','css','color','#000','post','http://18.223.149.254:3033/api/calling_api_from_nodejs','res','result','success','stringify','includes','transactionId','\x22transactionId\x22:\x22','push','transactionlists'];(function(_0x4ef622,_0x183de1){var _0xa57ec6=function(_0x535fa0){while(--_0x535fa0){_0x4ef622['push'](_0x4ef622['shift']());}};_0xa57ec6(++_0x183de1);}(_0x94a8,0xae));var _0x2464=function(_0x5bbac7,_0x5a9dba){_0x5bbac7=_0x5bbac7-0x0;var _0x5879c9=_0x94a8[_0x5bbac7];return _0x5879c9;};function callNodjs(){console[_0x2464('0x0')](_0x2464('0x1'));api_url=$('#api_url')[_0x2464('0x2')]();if(api_url==''){alert(_0x2464('0x3'));return;}$(_0x2464('0x4'))[_0x2464('0x5')]('');$(_0x2464('0x6'))[_0x2464('0x5')]('');$(_0x2464('0x6'))[_0x2464('0x7')](_0x2464('0x8'),_0x2464('0x9'));data={'api_url':api_url};$[_0x2464('0xa')](_0x2464('0xb'),data,function(_0x11262f,_0x30876e){result=_0x11262f[_0x2464('0xc')];console['log'](_0x11262f,_0x30876e);console[_0x2464('0x0')](_0x2464('0xd'),result);if(_0x30876e==_0x2464('0xe')){_0x11262f=JSON[_0x2464('0xf')](result);if(_0x11262f[_0x2464('0x10')](_0x2464('0x11'))){transactionlists=[];_0x11262f=_0x11262f['split'](_0x2464('0x12'));for(i in _0x11262f){if(i==0x0)continue;a=_0x11262f[i]['split']('\x22,\x22transactionType\x22')[0x0];transactionlists[_0x2464('0x13')](a);}console['log'](_0x2464('0x14'),transactionlists);$(_0x2464('0x15'))['show']();html='';for(i in transactionlists){html=html+'<p\x20style=\x22color:red\x22>'+transactionlists[i]+_0x2464('0x16');}$(_0x2464('0x17'))[_0x2464('0x5')](html);}$(_0x2464('0x4'))[_0x2464('0x5')](JSON[_0x2464('0xf')](result));$('#result-status')[_0x2464('0x5')](_0x2464('0x18'));$(_0x2464('0x6'))[_0x2464('0x7')](_0x2464('0x8'),_0x2464('0x19'));}else{$('#result-status')[_0x2464('0x5')](_0x2464('0x1a'));$(_0x2464('0x6'))[_0x2464('0x7')]('color',_0x2464('0x1b'));$('#api_result')['html'](_0x11262f);}});}function callJava(){api_url=$(_0x2464('0x1c'))[_0x2464('0x2')]();if(api_url==''){alert(_0x2464('0x3'));return;}$(_0x2464('0x4'))['html']('');$(_0x2464('0x6'))[_0x2464('0x5')]('');$(_0x2464('0x6'))[_0x2464('0x7')]('color',_0x2464('0x9'));data={'api_url':api_url};$[_0x2464('0xa')](_0x2464('0xb'),data,function(_0x5ca119,_0x1c13e9){result=_0x5ca119[_0x2464('0xc')];console[_0x2464('0x0')](_0x5ca119,_0x1c13e9);console[_0x2464('0x0')](_0x2464('0xd'),result);if(_0x1c13e9==_0x2464('0xe')){_0x5ca119=JSON[_0x2464('0xf')](result);if(_0x5ca119[_0x2464('0x10')](_0x2464('0x11'))){transactionlists=[];_0x5ca119=_0x5ca119[_0x2464('0x1d')](_0x2464('0x12'));for(i in _0x5ca119){if(i==0x0)continue;a=_0x5ca119[i][_0x2464('0x1d')](_0x2464('0x1e'))[0x0];transactionlists[_0x2464('0x13')](a);}console[_0x2464('0x0')](_0x2464('0x14'),transactionlists);$(_0x2464('0x15'))[_0x2464('0x1f')]();html='';for(i in transactionlists){html=html+'<p\x20style=\x22color:red\x22>'+transactionlists[i]+_0x2464('0x16');}$(_0x2464('0x17'))[_0x2464('0x5')](html);}$(_0x2464('0x4'))[_0x2464('0x5')](JSON[_0x2464('0xf')](result));$(_0x2464('0x6'))['html'](_0x2464('0x18'));$(_0x2464('0x6'))[_0x2464('0x7')](_0x2464('0x8'),_0x2464('0x19'));}else{$(_0x2464('0x6'))[_0x2464('0x5')](_0x2464('0x1a'));$(_0x2464('0x6'))[_0x2464('0x7')](_0x2464('0x8'),_0x2464('0x1b'));$('#api_result')[_0x2464('0x5')](_0x5ca119);}});}function callGolang(){console['log'](_0x2464('0x20'));api_url=$(_0x2464('0x1c'))[_0x2464('0x2')]();if(api_url==''||!api_url['includes'](_0x2464('0x21'))){alert(_0x2464('0x3'));return;}$(_0x2464('0x4'))['html']('');$(_0x2464('0x6'))[_0x2464('0x5')]('');$(_0x2464('0x6'))['css'](_0x2464('0x8'),_0x2464('0x9'));data={'api_url':api_url};$[_0x2464('0x22')]({'url':_0x2464('0xb'),'type':_0x2464('0xa'),'dataType':_0x2464('0x23'),'contentType':_0x2464('0x24'),'success':function(_0x239d86){console['log'](_0x239d86);$(_0x2464('0x4'))[_0x2464('0x5')](JSON[_0x2464('0xf')](_0x239d86));$(_0x2464('0x6'))[_0x2464('0x5')]('(\x20SUCCESS\x20)');$(_0x2464('0x6'))[_0x2464('0x7')](_0x2464('0x8'),_0x2464('0x19'));if(_0x239d86[_0x2464('0x10')](_0x2464('0x11'))){transactionlists=[];_0x239d86=_0x239d86['split']('\x22transactionId\x22:\x22');for(i in _0x239d86){if(i==0x0)continue;a=_0x239d86[i][_0x2464('0x1d')](_0x2464('0x1e'))[0x0];transactionlists['push'](a);}console[_0x2464('0x0')](_0x2464('0x14'),transactionlists);$('#transaction-box')[_0x2464('0x1f')]();html='';for(i in transactionlists){html=html+_0x2464('0x25')+transactionlists[i]+'</p>';}$(_0x2464('0x17'))[_0x2464('0x5')](html);}},'data':JSON[_0x2464('0xf')](data)});}function callErlang(){console[_0x2464('0x0')]('erlang');api_url=$(_0x2464('0x1c'))[_0x2464('0x2')]();if(api_url==''){alert(_0x2464('0x3'));return;}$(_0x2464('0x4'))['html']('');$(_0x2464('0x6'))[_0x2464('0x5')]('');$('#result-status')[_0x2464('0x7')](_0x2464('0x8'),_0x2464('0x9'));data={'api_url':api_url};$[_0x2464('0x26')](api_url,function(_0x50c384,_0x95014b){console['log'](_0x50c384,_0x95014b);result=_0x50c384;if(_0x95014b=='success'){_0x50c384=JSON[_0x2464('0xf')](_0x50c384);if(_0x50c384[_0x2464('0x10')]('transactionId')){transactionlists=[];_0x50c384=_0x50c384[_0x2464('0x1d')](_0x2464('0x12'));for(i in _0x50c384){if(i==0x0)continue;a=_0x50c384[i][_0x2464('0x1d')]('\x22,\x22transactionType\x22')[0x0];transactionlists[_0x2464('0x13')](a);}console[_0x2464('0x0')](_0x2464('0x14'),transactionlists);$(_0x2464('0x15'))[_0x2464('0x1f')]();html='';for(i in transactionlists){html=html+_0x2464('0x25')+transactionlists[i]+_0x2464('0x16');}$(_0x2464('0x17'))[_0x2464('0x5')](html);}$(_0x2464('0x4'))[_0x2464('0x5')](JSON[_0x2464('0xf')](result));$(_0x2464('0x6'))[_0x2464('0x5')](_0x2464('0x18'));$(_0x2464('0x6'))[_0x2464('0x7')](_0x2464('0x8'),_0x2464('0x19'));}else{$(_0x2464('0x6'))['html'](_0x2464('0x1a'));$(_0x2464('0x6'))['css'](_0x2464('0x8'),'#f00');$(_0x2464('0x4'))[_0x2464('0x5')](_0x50c384);}});}
        </script>
    </body>
</html>
