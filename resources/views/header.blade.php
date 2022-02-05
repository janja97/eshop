<?php 
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user')){
  $total= ProductController::cartItem();

}
?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{url('/index')}}">tehnoshop</a>
      </div>
  
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="{{url('/index')}}" >Home</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">IT OPREMA <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a  href="{{url('/laptop')}}" >laptopi</a></li>
              <li><a href="{{url('/tableti')}}">tableti</a></li>
              <li><a href="{{url('/gaming')}}">gaming laptopi</a></li>
              <li><a href="{{url('/monitori')}}">monitori</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">sve</a></li>

            </ul>
          </li>
         
          
          
        </ul>
        {{-- pretraga --}}
        <form action="{{URL::to('/search')}}" method="GET" class="navbar-form navbar-left">
          <div class="form-group">
            <input type="search" name="query" class="form-control" placeholder="Search">
          </div>
        
          <button type="submit" class="btn btn-default">Search</button>
        </form>
        
        
        <ul class="nav navbar-nav navbar-right">
          <li><a href="{{url('/cartlist')}}">Košarica({{$total}})</a></li>
          @if(Session::has('user'))
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="{{url('/logout')}}">logout</a></li>
            </ul>
          </li>
          @else
          <li><a href="{{url('/login')}}">Login</a></li>
          <li><a href="{{url('/register')}}">Register</a></li>

          @endif
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
