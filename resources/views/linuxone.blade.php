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
                        <label for="label_api_url">Blockchain Composer Rest Api URL (ex: http://148.100.98.30:3000/api/org.acme.sample.Sensor/1 )</label>
                        <input type="text" class="form-control" id="api_url" name="api_url" placeholder="Enter api url" value="http://148.100.98.30:3000/api/org.acme.sample.Sensor/1">
                        <small id="url_help" class="form-text">You can see api lists on http://148.100.98.30:3000/explorer/ (linuone composer rest server)</small>
                      </div>

                      <div class="form-group" style="max-width:800px; padding-top:30px">
                        <label for="label_api_url">Result <span id="result-status"></span></label>
                        <textarea class="form-control" id="api_result" name="api_result" style="min-height:350px;font-weight:bold" disabled></textarea>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <script>
          function callNodjs(){
            console.log('nodejs');
            api_url = $('#api_url').val();
            if (api_url == '') {
                alert('please input api url!');
                return;
            }

            $('#api_result').html('');
            $('#result-status').html('');
            $('#result-status').css('color', '#000');
            data = {
              api_url: api_url
            }

            $.post('http://108.161.151.117:3033/api/calling_api_from_nodejs', data, function(res ,status){
                result = res.res;
                console.log(res, status);
                console.log('result', result);
                if (status == 'success'){

                    $('#api_result').html(JSON.stringify(result));
                    $('#result-status').html('( SUCCESS )')
                    $('#result-status').css('color', '#0f0');

                } else {
                  $('#result-status').html('( FAILED )')
                  $('#result-status').css('color', '#f00');
                  $('#api_result').html(res);
                }
            })
          }

          function callGolang(){
            console.log('golang');
            api_url = $('#api_url').val();
            if (api_url == '' || !api_url.includes('http')) {
                alert('please input api url!');
                return;
            }

            $('#api_result').html('');
            $('#result-status').html('');
            $('#result-status').css('color', '#000');
            data = {
              "api_url": api_url
            }


            $.ajax({
              url: 'http://88.208.216.161:3033/api/v1/blockchain/callingapi',
              type: 'post',
              dataType: 'json',
              contentType: 'application/json',
              success: function (res) {
                console.log(res);
                $('#api_result').html(JSON.stringify(res));
                $('#result-status').html('( SUCCESS )')
                $('#result-status').css('color', '#0f0');
              },
              data: JSON.stringify(data)
            });
          }

          function callErlang(){
            console.log('erlang');
            api_url = $('#api_url').val();
            if (api_url == '') {
                alert('please input api url!');
                return;
            }

            $('#api_result').html('');
            $('#result-status').html('');
            $('#result-status').css('color', '#000');
            data = {
              api_url: api_url
            }

            $.get(api_url, function(res, status){
              console.log(res, status);
              result= res;
              if (status == 'success'){
                  $('#api_result').html(JSON.stringify(result));
                  $('#result-status').html('( SUCCESS )')
                  $('#result-status').css('color', '#0f0');
              } else {
                $('#result-status').html('( FAILED )')
                $('#result-status').css('color', '#f00');
                $('#api_result').html(res);
              }
            });
          }
        </script>
    </body>
</html>
