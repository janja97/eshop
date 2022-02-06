@extends('admaster')
@section('content')
<div class="container">
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
            <input type="radio" value="laptop" name="category">Laptop <br>
            <input type="radio" value="tablet"  name="category">Tablet<br>
            <input type="radio" value="gaminglaptop"  name="category">Gaming laptop<br>
            <input type="radio" value="monitor"  name="category">Monitor<br>
            



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
@endsection
