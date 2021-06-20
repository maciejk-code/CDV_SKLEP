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
                    <div class="card">
                        <div class="card-body">
                            You have succesfully ordered the items! Amount to pay: {{$amount_to_pay}} PLN
{{--                            {{print_r($data)}}--}}
{{--                            {{$prize}}--}}
{{--                            {{print_r(get_object_vars($data))}}--}}
                        </div>
                    </div>
                    <!-- /.Left col -->

                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@include('adminLte.end')
