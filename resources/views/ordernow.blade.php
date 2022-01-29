@extends('master')
@section('content')
<div class="custom-product row container">
    <div class="col-sm-10">
        <table class="table table-striped">
            
            <tbody>
              <tr>
                <td>proizvodi</td>
                <td>${{$total}}</td>
              </tr>
              <tr>
                <td>tax</td>
                <td>$ 0</td>
              </tr>
              <tr>
                <td>dostava:</td>
                <td>$ 10</td>
              </tr>
              <tr>
                <td>Ukupno:</td>
                <td>${{$total+10}}</td>
              </tr>
            </tbody>
          </table>
          <div>
            <form action="{{URL::to('/orderplace')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label >Vaša adresa:</label><br><br>

                  <textarea name="address" class="address" placeholder="unesite vasu adresu" class="form-control" ></textarea>
                </div>
                <div class="form-group">
                  <label for="pwd">Način placanja:</label><br><br>
                  <input type="radio" value="cash" name="payment">online <br><br>
                  <input type="radio" value="cash"  name="payment">pri preuzimanju<br><br>

                </div>
                
                <button type="submit" class="button1">Kupi</button>
              </form> 
          </div>
    </div>
       
</div>
@endsection