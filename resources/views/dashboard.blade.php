

<html>
    <head>
        @extends ('layout.app')
        <title>Dashboard of my Guest</title>
    </head>

    <body>
        <head>
            <style>
                 html, body {
                    background-color: #fff;
                    color: #636b6f;
                    font-family: 'Nunito', sans-serif;
                    font-weight: 200;
                    height: 100vh;
                    margin: 0;
                }
            </style>
        </head>
        
        <div class="container">
            <div class="m-auto p-5">
                <h1>So far we have {{$gview->count()}} people ! ! !</h1>

                <div class="row m-0">
                    <div class="col-12">
                        <table class="table text-center">
                            <tr>
                                <td></td>
                                <td>Nama</td>
                                <td>Nickname</td>
                                <td>Instagram</td>
                                <td>Action</td>
                            </tr>

                            @foreach ($gview as $key => $data)
                            <tr id="datadat{{$data->id}}">
                                    <td  style="cursor:pointer" class="text-danger">        
                                        <a onclick="myFunction({{$data->id}});" href="{{route('delete', $data->id)}}" class="text-danger">
                                            X
                                        </a>
                                    </td>
                                <td>{{$data->nama}}</td>
                                <td>{{$data->nickname}}</td>
                                <td>{{$data->instagram_id}}</td>
                                <td><a href="/edit?id={{$data->id}}">Edit</a></td>
                            </tr>
                            @endforeach

                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function myFunction(args){
                var e = "#datadat"+args;
                $(e).hide();
            }
        </script>
    </body>

</html>

