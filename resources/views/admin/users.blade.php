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
                   <h1>Registered users:</h1>
                    @foreach($users as $user)

                        @if($loop->even)
                            <div class="card-body bg-light" style="display: flex; justify-content: space-between">
                        @else
                            <div class="card-body bg-dark" style="display: flex; justify-content: space-between">
                        @endif
                                <span>{{$loop->iteration}}</span><span>{{$user->name}}</span><span> {{$user->email}} </span>
                        </div>
                    @endforeach
                </section>
                <!-- /.Left col -->

            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
    <strong>CDV_Sklep &copy; 2021-2021 .</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0.0
    </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@include('adminLte.end');
