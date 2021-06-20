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
                <section class="col-lg-12 connectedSortable">
                    <div class="card">
                        <div class="card-body">
<h1>Shopping cart</h1>
                            <table width="100%" >
                                <tbody>
                                <th width="15%">Image</th><th>Name</th><th>Prize</th><th>Quantity</th>
                                @foreach($cart as $item)
                                    <tr>
                                <td><img width="150" height="150" src="data:image/jpg;base64,{{$item[0]->image}}"</td><td>{{$item[0]->name}}</td>
                                        <td>{{$item[0]->prize}}</td>
                                        <td>{{$item->qty}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body" style="justify-content: right">
                            <p>Razem do zapłaty: {{var_dump($total_amount)}}</p>
                            <a href="{{route('checkout')}}" id="checkout-btn">Checkout</a>
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

<style>
    table, td, th{
        border: 1px solid black;
        text-align: center;
    }

    #checkout-btn{
        display: block;
        padding: 5px;
        border: 1px solid;
        width: fit-content;
    }
</style>
@include('adminLte.end')
