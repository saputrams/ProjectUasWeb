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
                                    <th>No Identitas</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Alamat</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Nomor Telepon</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($customer->result_array() as $row){?>
                                <tr>
                                    <td><?php echo $row["customer_identity"]?></td>
                                    <td><?php echo $row["full_name"]?></td>
                                    <td><?php echo $row["customer_address"]?></td>
                                    <td><?php echo $row["customer_gender"]?></td>
                                    <td><?php echo $row["customer_phone"]?></td>
                                    <td><?php echo $row["email"]?></td>
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