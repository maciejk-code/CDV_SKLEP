<div class="products-list" style="width: 100%">
                        <div class="card-body" style="word-break: break-all">
                            <strong><h2>Products list:</h2></strong>
                            <div class="t-shirts list"></div>
                            <h4>T-Shirts:</h4>
                            <div style="display: flex; flex-wrap: wrap">
                            @foreach($products['shirts'] as $product)
                                    <div style="display: flex; flex-direction: column" class="product-list">
                                        <a href="{{$link = 'product/shirts/'.$product->id_shirt}}">
                                <img src="data:image/jpg;base64,{{$product->image}}" width="150px" height="150px" href="{{$link = 'product/hoodies/'.$product->id_shirt}}"/>
                                        </a>
                                        <p class="product-name"><a href="{{$link = 'product/shirts/'.$product->id_shirt}}">{{$product->name}}</a></p>
                                    </div>
                            @endforeach
                            </div>
                            <h4>Hoodies: </h4>
                            <div style="display: flex; flex-wrap: wrap">
                            @foreach($products['hoodies'] as $product)
                                <div style="display: flex; flex-direction: column" class="product-list">
                                    <a href="{{$link = 'product/hoodies/'.$product->id_hoodie}}">
                                    <img src="data:image/jpg;base64,{{$product->image}}" width="150px" height="150px" />
                                    </a>
                                    <p class="product-name"><a href="{{$link = 'product/hoodies/'.$product->id_hoodie}}">{{$product->name}}</a></p>
                                </div>
                            @endforeach
                            </div>

                                <div style="display: flex; flex-wrap: wrap">
                            @foreach($products['accessories'] as $product)
                                        <div style="display: flex; flex-direction: column" class="product-list">
                                            <a href="{{$link = 'product/accessories/'.$product->id_accessories}}">
                                    <img src="data:image/jpg;base64,{{$product->image}}" width="150px" height="150px"/>
                                            </a>
                                    <p class="product-name"><a href="{{$link = 'product/accessories/'.$product->id_accessories}}">{{$product->name}}</a></p>
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
</style>
