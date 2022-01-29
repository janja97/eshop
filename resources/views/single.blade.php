@extends('master')
@section('content')
<div class="custom-product">
    <h2>single</h2>
    {{-- popularni proizvodi --}}
    <div class="treding-wrapper container">
        <h3>popularni proizvodi</h3>
        @foreach ($products as $item)
            <div class="treding-item">
                <a href="detail/{{$item['category']}}">
                <img class="treding-img" src="{{$item['galery']}}">
                <div class="">
                    <h3>{{$item['name']}}</h3>
                </div>
            </a>
            </div>
       
        @endforeach
    </div>
</div>
@endsection