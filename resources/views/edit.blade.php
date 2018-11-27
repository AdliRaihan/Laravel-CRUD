<!doctype html>
@extends('layout.app')

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Monday</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
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

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height container">
            <div class="row w-100">
                    <div class="col-12 w-100">
                        
                    {!! Form::open(['action' => ['GuestsDBController@update'] ,'method' => 'get'] ) !!}
                        <div class="form-group">
                            {!! Form::label('NameInformation','User ID') !!}
                            {!! Form::text('updateID', $viewer->id , ['class' => 'form-control' , 'placeholder' => 'Nama Lengkap' , 'autocomplete' => 'off'])!!}
                        </div>
                    
                        <div class="form-group">
                            {!! Form::label('NameInformation','Nama Lengkap Anda') !!}
                            {!! Form::text('Nama', $viewer->nama , ['class' => 'form-control' , 'placeholder' => 'Nama Lengkap' , 'autocomplete' => 'off'])!!}
                            
                            @if ($errors->has('Nama'))
                                <span class="info-form text-danger">Maksimal nama 25 (text)</span>
                            @endif
                        </div>
                        <div class="form-group">
                            {!! Form::label('NicknameInformation','Username') !!}
                            {!! Form::text('Nick',$viewer->nickname, ['class' => 'form-control' , 'placeholder' => 'Nickname','autocomplete'=>'off']) !!}
                            
                            @if ($errors->has('Nick'))
                                <span class="info-form text-danger">Maksimal username 12 (text)</span>
                            @endif
                        </div>
                        <div class="form-group">
                            {!! Form::label('NicknameIGInformation','Instagram') !!}
                            {!! Form::text('igNick',$viewer->instagram_id, ['class' => 'form-control' , 'placeholder' => '@Adli.raihan']) !!}
                            
                            @if ($errors->has('igNick'))
                                <span class="info-form text-danger">Tolong diisi. </span>
                            @endif
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Explore ! ! !', ['class' => 'btn btn-outline-primary form-control'])!!}
                        </div>
                    {!! Form::close() !!}


                    @if ($errors->all() && $errors->has('Name') && $errors->has('Nick'))
                        <div class="text-danger">
                            Tolong isi seluruh data yang diperlukan gengs !!
                        </div>
                    @endif
            </div>
        </div>
        </div>
    </body>
</html>
