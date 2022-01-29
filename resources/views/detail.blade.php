@extends('master')
@section('content')
<div class="contsiner">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['galery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="{{ url()->previous() }}">Go back</a>
            <h2>{{$product['name']}}</h2>
            <h3>Price: {{$product['price']}}</h3>
            <h4>Details: {{$product['description']}}</h4>
            <h4>Kategorija: {{$product['category']}}</h4>
            <br><br>
            <form action="{{URL::to('/add_to_cart')}}" method="POST">
                @csrf
                <input type="hidden" name="product_id" value={{$product['id']}}>
                <button class="btn btn-prinary">Add to card</button>
            </form>
            <br><br>
            <button class="button">Buy new</button>


        </div>

    </div>
    
</div>
@endsection