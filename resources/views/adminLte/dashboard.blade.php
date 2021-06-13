@include('adminLte.start');

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
            <!-- NIKE -->
            <div class="card bg-gradient-red">
              <div class="card-body">
                <div class="row">
                  <div style=" flex:30%;  margin-left:40px">
                    <h1>Discover Nike</h1>
                    <p>Rediscover Nike products for every season</p>
                    <a href="/nike" style="text-decoration: underline; color: white"><p>Click for more</p></a>
                  </div>
                  <div>
                    <a href="/nike"><img src="{{asset('img/airmax270.jpg')}}"  style="float:right; margin-right:40px; border-radius: 25px;" alt="airmax"></a>
                  </div>
                </div>
              </div>
            </div>
            {{-- ADIDAS --}}
            <div class="card bg-gradient-info">
              <div class="card-body">
                <div class="row">
                  <div style=" flex:70%;  margin-left:40px">
                    <img src="{{asset('img/adidas.jpg')}}"  style="float:left; margin-left:40px; border-radius: 25px;" height="550px" alt="adidas_model">
                  </div>
                  <div style="float:right; margin-right:40px">
                    <h1>New ADIDAS products</h1>
                    <p>Search for new products avaible only on our site</p>
                    <p>Click for more</p>
                  </div>
                </div>
              </div><!-- /.card-body -->
            </div>
            {{-- SPORT --}}
            <div class="card bg-gradient-green">
              <div class="card-body">
                <div class="row">
                  <div style=" flex:30%;  margin-left:40px">
                    <h1>Everything for SPORT fans</h1>
                    <p>Football? Basketball? Or even Slaps? We have EVERYTHING</p>
                    <a href=""><p>Click for more</p></a>
                  </div>
                  <div>
                    <img src="{{asset('img/lewy.jpg')}}"  style="float:right; margin-right:40px; border-radius: 25px;" height="500px" alt="lewy">
                  </div>
                </div>
              </div>
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
  <!-- /.content-wrapper -->
  @include('adminLte.end');
