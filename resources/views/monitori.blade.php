@extends('master')
@section('content')
<div class="custom-product">
  
    
    {{-- popularni proizvodi --}}
    <div class="treding-wrapper container">
        <h3>Monitori:</h3>
        @foreach ($product as $item)
            
              <div class="treding-item">
                <a href="detail/{{$item['id']}}">
                <img class="treding-img" src="{{$item['galery']}}">
                <div class="">
                    <h4>{{$item['name']}}</h4>
                </div>
                </a>
              </div>
             
        @endforeach
    </div>
    </div>
    
</div>
@endsection