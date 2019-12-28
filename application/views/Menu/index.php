<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Tables</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Management Menu</a></li>
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
                    <a href="<?php echo base_url().'index.php/'?>Menu/addForm" type="button" class="btn btn-primary btn-sm">Add</a>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama Menu</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($dataMenu->result_array() as $row){?>
                                <tr>
                                    <td><?php echo $row["menu_name"]?></td>
                                    <td style="width:15%">
                                        <a href="<?php echo base_url().'index.php/'?>Menu/editForm?id=<?php echo $row["menu_id"]?>"  type="button" class="btn btn-cyan btn-sm">Edit</a>
                                        <a href="#"  type="button" class="btn btn-danger btn-sm">Delete</a>
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