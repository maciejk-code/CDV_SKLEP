@extends('layouts.app')

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
                        <div class="product-info">
                        <div class="product-photo">Product photo: <input type=file class="photo-input" accept="image/png"/></div>
                            <span>
                                <label for="product_name">Product name:</label><input name="product_name" type="text"/></span>
                            <span><label for="product_price">Product price: </label><input type="number" min="0" name="product_price" /></span>
                            <span><label for="category">Category: </label>
                                <select name="category" id="category">
                                    <option value="trousers"/>Trousers</option>
                            </select>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
