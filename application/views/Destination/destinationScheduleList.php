<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Jadwal</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Jadwal</a></li>
                            <!-- <li class="breadcrumb-item active" aria-current="page">Library</li> -->
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
                    <a href="<?php echo base_url().'index.php/'?>Destination/addForm?destination_id=<?php echo $id?>" type="button" class="btn btn-primary btn-sm">Add</a>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Mulai</th>
                                    <th>Berakhir</th>
                                    <th>Slot</th>
                                    <th>Sisa</th>
                                    <th>Harga</th>
                                    <th>Pendaftaran Terakhir</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($destination->result_array() as $row){?>
                                <tr>
                                    <td><?php echo $row["time_start"]?></td>
                                    <td><?php echo $row["time_end"]?></td>
                                    <td><?php echo $row["slot"]?></td>
                                    <td><?php echo $row["remaining"]?></td>
                                    <td><?php echo $row["price"]?></td>
                                    <td><?php echo $row["last_register"]?></td>
                                    <td style="width:15%">
                                        <a href="<?php echo base_url().'index.php/'?>Menu/editForm?id=<?php echo $row["destination_schedule_id"]?>"  type="button" class="btn btn-cyan btn-sm">Edit</a>
                                        <a href="<?php echo base_url().'index.php/'?>Menu/delete?id=<?php echo $row["destination_schedule_id"]?>" data- type="button" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
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
