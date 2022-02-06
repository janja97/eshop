@extends('master')
@section('content')
<div class="custom-product">
    
    {{-- popularni proizvodi --}}
    <div class=" row custom-product">
        <div class="col-sm-4">
           
        </div>
        <div class="col-sm-4">
            <div class="treding-wrapper container">
                <h3>rezultat</h3>
                @foreach ($products as $item)
                    <div class="search-item">
                        <a href="detail/{{$item['id']}}">
                        <img class="treding-img" src="{{$item['galery']}}">
                        <div class="">
                            <h2>{{$item['name']}}</h2>
                            <h4>{{$item['description']}}</h4>
        
                        </div>
                    </a>
                    </div>
               
                @endforeach
            </div>
        </div>
    </div>

    
</div>
@endsection
