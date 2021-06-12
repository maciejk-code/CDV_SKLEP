<div class="products-list" style="width: 100%">
                        <div class="card-body" style="word-break: break-all">
                            <div class="t-shirts list"></div>
                            <div style="display: flex; flex-wrap: wrap">
                            @foreach($products['shirts'] as $product)
                                    @if ($loop->first)
                                        <h4>Shirts:</h4>
                                    @endif
                                    <div style="display: flex; flex-direction: column" class="product-list">
                                        <a href="{{'http://'.request()->getHttpHost().'/product/shirts/'.$product->id}}">
                                <img src="data:image/jpg;base64,{{$product->image}}" width="150px" height="150px" href="{{$link = 'product/hoodies/'.$product->id}}"/>
                                        </a>
                                        <p class="product-name"><a href="{{$link = 'product/shirts/'.$product->id}}">{{$product->name}}</a></p>
                                    </div>
                            @endforeach
                            </div>
                            <div style="display: flex; flex-wrap: wrap">
                            @foreach($products['hoodies'] as $product)
                                @if ($loop->first)
                                    <h4>Hoodies:</h4>
                                @endif
                                <div style="display: flex; flex-direction: column" class="product-list">
                                    <a href="{{'http://'.request()->getHttpHost().'product/hoodies/'.$product->id}}">
                                    <img src="data:image/jpg;base64,{{$product->image}}" width="150px" height="150px" />
                                    </a>
                                    <p class="product-name"><a href="{{$link = 'product/hoodies/'.$product->id}}">{{$product->name}}</a></p>
                                </div>
                            @endforeach
                            </div>

                                <div style="display: flex; flex-wrap: wrap">
                            @foreach($products['accessories'] as $product)
                                        <div style="display: flex; flex-direction: column" class="product-list">
                                            <a href="{{'http://'.request()->getHttpHost().'product/accessories/'.$product->id}}">
                                    <img src="data:image/jpg;base64,{{$product->image}}" width="150px" height="150px"/>
                                            </a>
                                    <p class="product-name"><a href="{{$link = 'product/accessories/'.$product->id}}">{{$product->name}}</a></p>
                                </div>
                            @endforeach
                                </div>

                        </div>
</div>

<style>

    .product-list{
        margin: 5px 10px;
    }

    .t-shirts.list{
        text-align: left;
    }

    .card-body{
        text-align: left;
    }

    .product-name{
        text-align: center;
    }

    h4{
        width: 100%;
    }
</style>
