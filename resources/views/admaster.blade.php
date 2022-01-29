<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tehnoshop</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     <!--Optional theme-->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
</head>
<body>
    {{View::make('adnav')}}
    @yield('content')
    {{View::make('footer')}}
</body>
<style>
    /*basis*/
    a{
        text-decoration: none;
    }
    a:hover{
        text-decoration: none;
    }
    /*
    nav */
    nav{
        background: #e6ebe0;
        text-transform: uppercase
    }
    .navbar-brand{
        text-transform: uppercase;
        font-size: 2rem;
        font-weight: 800;
        color: #5ca4a9 !important;
    }
    /*body*/
    .row{
        margin-left: 20px;
    }
    .button1{
        background: #4f9296;
        padding: 7px 17px;
        border-radius: 5px;
        border:1px solid #4f9296;
        color:black;
        font-weight: 300;
        margin-top: 20px;
    }

</style>

</html>