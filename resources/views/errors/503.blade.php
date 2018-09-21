<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RubiesTech | Empowering to Innovate </title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/blog.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        #error-div {
            width: 80%;
            background: #358CCE;
            color: #fff;
            margin: 0 auto;
            margin-top: 80px;
            margin-bottom: 40px;
            text-align: center;
            padding-top: 100px;
            padding-bottom: 100px;
            border-radius: 5px;
            height: 500px;
        }
        #error {
            font-size: 48px;
            color: #ff6700;
        }
        #sorry {
            font-size: 20px;
            margin-top: 10px;
        }
        body {
            background: #0b2132;
        }
        #back {
            background: transparent;
            color: #FF6700;
            border-color: #ff6700;
            padding: 10px 60px;
            border-radius: 20px;
            margin-top: 50px;
            font-weight: bold;
        }
        #back:hover {
            background: #FF6700;
            color: #fff;
            border-color: #fff;
        }
    </style>
</head>
<body>

<div id="error-div">
    <h2 id="error">Oops!!!</h2>
    <p id="sorry">Sorry, we are not able to find what you were looking for.</p>
    <a class="btn btn-info" href="{{url('/')}}" id="back">GO BACK TO THE HOMEPAGE</a>
</div>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>