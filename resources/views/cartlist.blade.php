@extends('master')
@section('content')
<div class="custom-product row container">

        <div class="col-sm-4">
            <div class="treding-wrapper container">
                <h3>Vaša košarica:</h3>
                @foreach ($products as $item)
                    <div class=" row search-item cart-list">
                        <div class="col-sm-3">
                            <a href="detail/{{$item->id}}">
                                <img class="treding-img" src="{{$item->galery}}">
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="detail/{{$item->id}}">
                                <h2>{{$item->name}}</h2>
                                <p>{{$item->description}}</p>
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="removecart/{{$item->cart_id}}" class="button1">Izbriši</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <a href="ordernow" class="button1 naruci">Naruci</a><br>

    </div>
</div>
@endsection