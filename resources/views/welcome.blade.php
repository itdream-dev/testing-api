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
                font-size: 84px;
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
              padding-top:20px;
              line-height:25px;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="top-left links">
                  <a href="{{ url('/') }}" style="font-weight:bold; color:#000">Home</a>
                </div>
                <div class="title m-b-md" style="padding-top:100px">
                    Welcome to Our Testing
                </div>

                <div class="row" style="padding-top:50px">
                  <div class="col-sm-6" style="justify-content:center;padding:10px 150px">
                    <div class="card" style="height: 380px; width:300px">
                      <img class="card-img-top" src="/images/linuxone.png" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">HyperLeger Fabric Blockchain on LINUXONE.</h5>
                        <!-- <p class="card-text">HyperLeger Fabric Blockchain on LINUXONE.</p> -->
                        <a href="/linuxone" class="btn btn-primary" style="margin-top:30px;font-weight: bold">Go to Test</a>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6" style="justify-content:center;padding:10px 150px">
                    <div class="card" style="height: 380px;width:300px">
                      <img class="card-img-top" src="/images/ibm_cloud.png" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">HyperLeger Fabric Blockchain on IBM Cloud Server.</h5>
                        <a href="/ibm_cloud" class="btn btn-primary" style="margin-top:30px;font-weight: bold" disabled>Go to Test</a>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </body>
</html>
