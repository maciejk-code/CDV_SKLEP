@include('adminLte.start')



<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->

            <!-- /.row -->
            <!-- Main row -->
            <div style="display: flex">
                <!-- Left col -->
                <div class="flex-wrap">
                    <div class="product p-4">
                        <div class="image">
                            <h2>Galeria</h2>
                            <img src="data:image/jpg;base64,{{$product->image}}" width="100%" height="300px"/>
                        </div>
                        <div class="product-info">
                            <h2 class="product-name-single">{{$product->name}}</h2>
                            <h2 class="product-price-single">{{$product->prize}} PLN</h2>
                            <h4 class="p-4">Krótki opis produktu:</h4>
                            <p class="product-description p-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae dictum nibh. Aenean non vehicula sem. Aliquam dignissim sit amet neque euismod semper. Mauris dignissim dui ut vulputate aliquet. Proin aliquet dui vel urna semper dignissim. Nullam facilisis mauris ut augue pretium sollicitudin. Pellentesque at finibus enim. Mauris vitae quam eu metus pellentesque euismod in et eros. In tristique magna sit amet urna ultrices, at accumsan ex consequat. Proin suscipit, orci molestie lobortis vestibulum, justo velit finibus metus, vitae hendrerit ex nibh et orci. In quis tortor elementum, tristique nulla in, porttitor leo. Maecenas maximus varius pulvinar. Donec risus augue, fermentum pulvinar ante at, lobortis pulvinar felis. Nunc vitae libero aliquam, blandit mauris id, semper nibh.</p>
                            <div class="card">
                                <div class="card-body">
                                    <input type="number" min="1" placeholder="1" id="qty"/>
                                    <button type="submit" class="button-add-to-cart" data-name="{{$product->name}}" data-id="{{$product->id}}" data-category="{{$category}}">Dodaj do koszyka</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- /.Left col -->

            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>


<style>
    .product .image{
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
        width: 50%;
        height: 100%;
    }

    .product-info{
        width: 50%;
        text-align: center;
    }

    .product{
        display: flex;
    }

</style>

@include('adminLte.end')


<script>
    let mycart = localStorage.getItem("mycart");
    var basket = JSON.parse(mycart),
        array = [],
    product = {};

    if (basket == null) {
        basket = new Array();
    }

    $(".button-add-to-cart").click(function() {
        let id = $(this).attr("data-id"),
            category = $(this).attr("data-category"),
            qty = document.getElementById('qty').value;


        if(qty==0){
            qty=1;
        }

        alert("Dodano do koszyka "+qty+" sztuk!");

        product = [{
            category: category,
            id: id,
            qty: qty
        }];

        basket.push(product);

        localStorage.setItem("mycart", JSON.stringify(basket));

    });


</script>
