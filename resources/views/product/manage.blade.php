@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <p>Here you can manage your products!</p>
                    </div>
                    <div class="products-list">
                        @foreach($products as $product)
                            <div class="product-list">
{{--                            <p class="name">{{$product->name}}</p>--}}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
