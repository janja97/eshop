<?php 
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

?>
@extends('admaster')
@section('content')
<div class="row container">
    {{-- <div class="col-sm-6">
      
    @foreach ($users as $item)
    <h2>{{$item['name']}}</h2>
    @endforeach
    
    </div> --}}
    <div class="col-sm-6">
        <form action="admregister" method="POST">
            @csrf
            <div class="mb-3">
                 @csrf
              <label for="exampleInputEmail1" class="form-label">Korisnicko ime:</label>
              <input type="text" name='name' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="User Name">
            </div>
            <div class="mb-3">
                @csrf
             <label for="exampleInputEmail1" class="form-label">Email address</label>
             <input type="email" name='email' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
           </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="md-3">
                <div class="form-group">
                    <label >Uloga:</label><br><br>
                    <input type="radio" value="1" name="uloga">Admin <br>
                    <input type="radio" value="2"  name="uloga">Administrator<br>
                    <input type="radio" value="3"  name="uloga">User<br>

                  </div>
            </div>
           
            
            <button type="submit" class="button1">Unesi</button>
          </form>
    </div>
    <div class="col-sm-6">
        <form action="addproduct" method="POST">
            @csrf
            <div class="mb-3">
                 @csrf
              <label for="exampleInputEmail1" class="form-label">Ime proizvoda</label>
              <input type="text" name='name' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="User Name">
            </div>
            <div class="mb-3">
                @csrf
             <label for="exampleInputEmail1" class="form-label">cijena proizvoda</label>
             <input type="text" name='price' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="User Name">
           </div>
           <div class="mb-3">
                @csrf
            <label for="exampleInputEmail1" class="form-label">opis</label>
            <input type="text" name='description' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="md-3">
            @csrf

            <div class="form-group">
                <label >kategorije</label><br><br>
                <input type="radio" value="laptop" name="category">laptop <br>
                <input type="radio" value="tablet"  name="category">tablet<br>
                <input type="radio" value="gaminglaptop"  name="category">gaming laptop<br>
                <input type="radio" value="monitor"  name="category"><br>
                



              </div>
        </div>
            <div class="mb-3">
                @csrf
            <label for="exampleInputEmail1" class="form-label">slika</label>
            <input type="text" name='galery' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="User Name">
        </div>
            
          
            
            <button type="submit" class="button1">Unesi</button>
          </form>
    </div>
    
    
    
</div>
@endsection