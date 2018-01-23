<!DOCTYPE html>
<html>
    <head>
        <title>Welcome come to Neo Zone</title>

        

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                
                <br><br>
                <div class="title"> {{$title}}<a href="{{$url}}">  <img src="{{asset('images/index/neo.png')}}"></a></div>
                <br>
                <label>{{$copyright}}</label>
            </div>
        </div>
    </body>
</html>
