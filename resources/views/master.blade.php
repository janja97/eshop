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
    <!-- reference your copy Font Awesome here (from our CDN or by hosting yourself) -->
  <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
</head>
<body>
    {{View::make('header')}}
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
    /*
    product page
    */

    /* slider*/
    .slider-img{
        height:400px !important;
    }
   
    .slider-title{
        padding: 0 !important ;
        margin: 0 !important ;
        text-transform: uppercase;
        color: #5ca4a9 !important    ;
        font-size:3rem;
        font-weight: 700;
    }
    .slider-p{
        color: #69abb0;

    }
    /*treding*/
   .treding-wrapper{
        padding-left: 50px;
        margin: 30px;
   }
   .treding-wrapper, h3{
       color: #4f9296;
       font-weight: 800;
       font-size:50px;
   }
    .treding-img{
        height: 100px;
    }
    .treding-item{
        float:left;
        width: 20%;
    }
    .treding-item, a{
        color:#69abb0;
    }
    .treding-item, a:hover{
        color:#4f9296;
    }
    .treding-wrapper,p{
        font-size=15px;
    }

    .detail-img{
        height: 400px;
    }
    .search-box{
        width:150px !important ;
    }
    /*derail page*/
    .button{
        background: #4f9296;
        padding: 7px 17px;
        border-radius: 5px;
        border:1px solid #4f9296;
    }
    /*login page*/
    .custom-login{
        height: 500px;
        padding-top: 100px;
    }
    .custom-login, .button{
        margin-top: 20px;
    }
    /*cardlist*/
    .cart-list{
        border-bottom:1px solid #bebbbb;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }
    .button1{
        background: #4f9296;
        padding: 7px 17px;
        border-radius: 5px;
        border:1px solid #4f9296;
        color:black;
        font-weight: 300;
    }
    .button1:hover{
        color: black;
    }
    .naruci{
        margin-left: 100px
    }
    /*ordernew*/
    
    .address{
        width: 400px;    
        height: 40px;
    }
    </style>

</html>
