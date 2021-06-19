
@include('adminlte.start')
 
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
            
            @include('adminlte.filters')
                        
            <div class="card-body">
              <strong><h2>Products list:</h2></strong>
              @foreach($products as $product)
              <div class="product-list">
              <p class="name">{{$product->name}}</p>
              <a href="/product/{{$category}}/{{$product->id}}"><img src="data:image/jpg;base64,{{$product->image}}"/></a>                     
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

 
