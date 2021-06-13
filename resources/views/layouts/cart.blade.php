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
                    <!-- NIKE -->
                    <div class="card">
                        <div class="card-body">
<h1>Shopping cart</h1>
                            <table>
                                <tbody>
                                </tbody>
                            </table>
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
@include('adminLte.end')

<script>
    let mycart = JSON.parse(localStorage.getItem("mycart"));
    var check = null;

    mycart.forEach(function(item, index, value){
        check = item;
        let tr = document.createElement('tr');
        // let dodaj = tr.appendChild();
        tr.innerHTML = item[0].id;
        document.getElementsByTagName('tbody')[0].appendChild(tr);
    });
</script>
