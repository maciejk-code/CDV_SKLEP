@extends('layouts.app')
<link href="{{ asset('css/add_product.css') }}" rel="stylesheet">
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                        {{--                    @if (session('status'))--}}
                        {{--                    <div class="alert alert-success" role="alert">--}}
                        {{--                        {{ session('status') }}--}}
                        {{--                    </div>--}}
                        {{--                    @endif--}}

                        {{ __('Add your product!') }}
                    </div>
                    <div class="card-body">
                        <form name="addproducts-form" id="addproducts-form" method="post" enctype="multipart/form-data" action="{{url('addproduct-form')}}">
                            @csrf
                        <div class="product-info">
                        <div class="product-photo">Product photo: <input name="image" type="file" class="photo-input" accept="image/png"/></div>
                            <span>
                                <label for="product_name">Product name:<input name="product_name" type="text"/></label></span>
                                <span><label for="product_price">Product price: </label><input type="number" min="0" name="product_price" /></span>
                                <span><label for="category">Category: </label>
                                <select name="category" id="category">
                                    <option value="shirts">Shirts</option>
                                    <option value="trousers">Trousers</option>
                                    <option value="hoodies">Hoodies</option>
                                    <option value="sneakers">Sneakers</option>
                                    <option value="accessories">Accessories</option>
                                </select></span>
                                    <span><label for="color">Color: </label>
                                        <select name="color" id="color">
                                            <option value="red">Red</option>
                                            <option value="blue">Blue</option>
                                            <option value="black">Black</option>
                                            <option value="grey">Grey</option>
                                            <option value="white">White</option>
                                            <option value="Green">Green</option>
                                            <option value="Orange">Orange</option>
                                            <option value="Pink">Pink</option>
                                        </select></span>
                            <label for="size">Size</label>
                            <select name="size" id="size">
                                <option value="S">Small</option>
                                <option value="M">Medium</option>
                                <option value="L">Large</option>
                            </select>

                            <label>
                                Material</label>
                                <select name="material">
                                    <option value="cotton">Cotton</option>
                                            <option value="leather">Leather</option>
                                            <option value="denim">Denim</option>
                                            <option value="polyester">Polyester</option>
                                </select>
                            <label for="brand">Brand</label><input type="text" name="brand">

                            <button type="submit">Dodaj</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
