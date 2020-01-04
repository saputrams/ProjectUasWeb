<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Transaksi</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page">Transaksi</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Destinasi</th>
                                    <th>Kode Booking</th>
                                    <th>Tanggal Booking</th>
                                    <th>Harga</th>
                                    <th>Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($transaction->result_array() as $row){?>
                                <tr>
                                    <td><?php echo $row["destination_name"]?></td>
                                    <td><?php echo $row["booking_code"]?></td>
                                    <td><?php echo $row["booking_date"]?></td>
                                    <td><?php echo $row["price"]?></td>
                                    <td><?php echo $row["count"]?></td>
                                </tr>
                            <?php }?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            </div>
        </div>
    </div>
</div>