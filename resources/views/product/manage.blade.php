@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <h1>Here you can manage your products!</h1>
                        <a href="{{route('view_add_product')}}"><button>Add product</button></a>
                    </div>
                    <div class="products-list">
                        <div class="card-body">
                            <strong><h2>Products list:</h2></strong>
                            @foreach($products as $product)
                            <div class="product-list">
                            <p class="name">{{$product->name}}</p>
                            <img src="data:image/jpg;base64,{{$product->image}}"/>                           
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
@endsection
