@include('adminlte.start')
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
                <div class="flex-wrap" style="width: 100%">
                            <div class="card">
                                <div class="card-body" style="width: 100%">
                                    <table width="100%">
                                        <tbody>
                                    <th>user ID</th><th>Paid:</th><th>Amount to pay:</th><th>Payment method</th><th>Date:</th>
                                    @foreach($data as $order)
                                        <tr>
                                            <td>
                                                {{$order->user}}
                                            </td>
                                            <td>@if($order->is_paid == 0) no
                                                @else yes</td>
                                            @endif
                                            <td>{{$order->prize}}</td>
                                            <td>{{$order->payment_method}}</td>

                                            <td>{{$order->date_ordered}}</td>
                                        </tr>
                                    @endforeach
                                        </tbody>
                                    </table>
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
@include('adminLte.end')
