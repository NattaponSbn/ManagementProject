<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            }

        body {
            font-size: 12%;
            background: #582B9E;
        }

        .header {
            width: 30%;
            margin: 10px auto 25px;
            color: white;
            text-align: center;
        }

        .header h2 {
            font-size: 30px;

        }

        p {
            color: white;
            font-size: 15px;
        }

        form, .content {
            width: 30%;
            margin: 150px auto 25px;
            padding: 30px;
            border: 1px solid #D9A327;
            
        }

        .input-group {
            margin: 10px 0px 10px 0px ;
        }

        .input-group label {
            display: block;
            text-align: left;
            margin: 3px;
            color: white;
            font-size: 15px;
            
        }

        .input-group input {
            height: 20px;
            width: 40%;
            padding: 5px 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid gray;
        }

        

        .btn {
            padding: 10px;
            font-size: 15px;
            color: white;
            background: #5f9ea0;
            border: none;
            border-radius: 5px;
        }

        .btn_next {
            color: red;
            font-size: 15px;
        }

        

        
    </style>
</head>
<body>
    @yield('content')
</body>
</html>