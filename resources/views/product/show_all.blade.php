@include('adminLte.start');

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
                    <div class="card">
                        <div class="card-body">
                            @include('product.show_multiple')
                        </div>
                    </div>

                </section>
                <!-- /.Left col -->

            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@include('adminLte.end');
