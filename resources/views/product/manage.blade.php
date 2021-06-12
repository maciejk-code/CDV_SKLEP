@include('adminLte.start');
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- /.content-header -->

    <!-- Main content -->
    <h1 style="text-align: center">Products management</h1>
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->

            <!-- /.row -->
            <!-- Main row -->
            <div style="display: flex; flex-direction: column">
                <div class="products-list">
                    <strong><h2>Products list:</h2></strong>
                    <div class="card-body" style="display: flex; flex-wrap: wrap">
                        @foreach($products as $product)
                            <div class="product-list">
                                <p class="name">{{$product->name}}</p>
                                <img src="data:image/jpg;base64,{{$product->image}}" width="300" height="300"/>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="card-body">
                <form name="addproducts-form" id="addproducts-form" method="post" enctype="multipart/form-data" action="{{url('addproduct-form')}}">
                    <h2>Add product</h2>
                    @csrf
                    <div class="product-info" style="text-align: center; display: flex; flex-direction: column; justify-content: center; max-width: 50%; margin: 0 auto">
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
                        <span><label for="color">Color: </label><input name="color" type="text"/></span>
                        <label for="size">Size</label>
                        <select name="size" id="size">
                            <option value="S">Small</option>
                            <option value="M">Medium</option>
                            <option value="L">Large</option>
                        </select>

                        <label>
                            Material</label>
                        <input name="material" type="text"/>
                        <label for="brand">Brand</label><input type="text" name="brand">
                        <label for="type">Type: </label>
                        <select name="type_shirts" id="type_shirts" class="type">
                            <option value="basic">Basic</option>
                            <option value="With text">With text</option>
                            <option value="With picture">With picture</option>
                            <option value="Polo">Polo</option>
                            <option value="Sport">Sport</option>
                            <option value="long_sleeve">Long sleeve</option>
                        </select>
                        <select name="type_hoodies" id="type_hoodies" class="type" style="display: none">
                            <option value="hoodie">Hoodie</option>
                            <option value="Basic">Basic</option>
                            <option value="With slider">With slider</option>
                        </select>
                        <select name="type_trousers" id="type_trousers" class="type" style="display: none">
                            <option value="trousers">Trousers</option>
                            <option value="shorts">Shorts</option>
                            <option value="Sport">Sport</option>
                        </select>
                        <select name="type_sneakers" id="type_sneakers" class="type" style="display: none">
                            <option value="Sneakers">Sneakers</option>
                            <option value="High">Basic</option>
                            <option value="Low">With slider</option>
                            <option value="Sport">Sport</option>
                        </select>
                        <select name="type_accessories" id="type_accessories" class="type" style="display: none">
                            <option value="watch">Watch</option>
                            <option value="Caps">Caps</option>
                            <option value="Jewellery">Jewellery</option>
                            <option value="sunglasses">Sunglasses</option>
                        </select>
                        <label for="description">Description: </label>
                        <textarea name="description"></textarea>
                        <button type="submit">Submit</button>
                    </div>
                </form>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>


            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>




@include('adminLte.end');

<script>

    let input_category = document.getElementById('category');
    let type_inputs = document.getElementsByClassName('type');

    input_category.addEventListener("change", function () {

        for(let input of type_inputs){

            if (input.id != 'type_'+input_category.value) {
                input.style.display = "none";
            }else{
                input.style.display= "block";
            }
        }
    });
</script>
