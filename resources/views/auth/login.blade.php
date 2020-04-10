<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Carpe Diem</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="{{ asset('js/linkednodes.js') }}" defer></script>
        <!-- Styles -- flex-center position-ref full-height-->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .title {
                font-size: 84px;
                text-align: center;
            }

            .m-b-md {
                margin-bottom: 10%;
                padding-top:15px;
            }
            .login-form{
                border: 1px solid #636b6f;
                padding:15px;
                border-radius: 30px;
                background-color:#e0e0e0;
            }
            .btn-wrapper{
                text-align: center;
            }
            #canvas{
                      
                position:absolute;
                width:100%;
                height:100%;
            }
        </style>
    </head>
    <body>
        <canvas id="canvas"></canvas>
        <div class="position-ref full-height">

            <div class="container">

                    <div class="title m-b-md">
                        Carpe Diem
                    </div>
 
                    <div class="row">
                        <div class="col-sm-5 login-form">
                            <h3 style="text-align: center;">Student</h3>
                            {!! Form::open( array('route' => 'login') ) !!}
                                <div class="form-group">
                                    {{Form::label('email','Email')}}
                                    {{Form::text('email','',['class'=>'form-control'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('password','Password')}}
                                    {{Form::password('password',['class'=>'form-control'])}}
                                </div>
                                    {{Form::hidden('_usertype','3')}}
                                <div class="btn-wrapper">
                                    <button type="submit" class="btn btn-secondary">Submit</button>
                                </div>
                            {!! Form::close() !!}
                        </div>
                        <div class="col-sm-5 login-form" style="margin-left:auto;">
                            <h3 style="text-align:center">Tutor</h3>
                            {!! Form::open( array('route' => 'login') ) !!}
                            <div class="form-group">
                                {{Form::label('email','Email')}}
                                {{Form::text('email','',['class'=>'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('password','Password')}}
                                {{Form::password('password',['class'=>'form-control'])}}
                            </div>
                                {{Form::hidden('_usertype','2')}}
                            <div class="btn-wrapper">
                                <button type="submit" class="btn btn-secondary">Submit</button>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <div class="row" style="margin-top:5%">
                        <div class="col-sm-12">
                            <div class="btn-wrapper">
                            <a href="{{route('authadmin')}}" role="button" class="btn btn-primary" style="color:white;cursor:pointer;">Administrator</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
