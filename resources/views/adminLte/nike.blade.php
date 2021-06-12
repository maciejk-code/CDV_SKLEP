
@include('adminlte.start');
<!-- Content Wrapper. Contains page content -->
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
        <section class="col-lg-12 connectedSortable">
          <div>
            <form action="">
              <select id="color" name="color">
                <option value="all">all colors</option>
                <option value="red">red</option>
                <option value="blue">blue</option>
                <option value="black">black</option>
                <option value="grey">grey</option>
                <option value="white">white</option>
                <option value="green">green</option>
                <option value="orange">orange</option>
                <option value="pink">pink</option>
              </select>
              <select id="size" name="size">
                <option value="all">all sizes</option>
                <option value="s">S</option>
                <option value="m">M</option>
                <option value="l">L</option>
              </select>
              <select id="brand" name="brand">
                <option value="all">all brands</option>
                <option value="nike">NIKE</option>
                <option value="adidas">ADIDAS</option>
                <option value="champion">Champion</option>
                <option value="armani">Armani</option>
                <option value="vans">Vans</option>
                <option value="converse">Converse</option>
                <option value="kappa">Kappa</option>
                <option value="tommy">Tommy Hilfiger</option>
                <option value="timberland">Timberland</option>
                <option value="puma">Puma</option>
              </select>
              <select id="material" name="material">
                <option value="all">all materials</option>
                <option value="cotton">Cotton</option>
                <option value="leather">Leather</option>
                <option value="denim">Denim</option>
                <option value="polyester">Polyester</option>
              </select>
              
              <button type="submit">Click Me!</button> 
            </form>
          </div>
          

          
          <div class="card-body">
            <strong><h2>Products list:</h2></strong>
            @foreach($products as $product)
            <div class="product-list">
            <p class="name">{{$product->name}}</p>
            <img src="data:image/jpg;base64,{{$product->image}}"/>                        
            </div>
        @endforeach
        </div>
        
          <!-- TO DO List -->
          
          <!-- /.card -->
        </section>
        <!-- /.Left col -->
        
      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@include('adminlte.end');


