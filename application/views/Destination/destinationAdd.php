<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Input Destinasi Baru</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">New Destination</a></li>
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
                            <form method="post" class="form-horizontal" action="<?php echo base_url().'index.php/'?>Destination/destinationAdddd">
                                <div class="card-body">
                                    <h4 class="card-title">Input Data</h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nama Destinasi</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="destination_name" name="destination_name" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Image Location</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="destination_image" name="destination_image" placeholder="ex : /dieng.jpg">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Alamat Destinasi</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="destination_address" name="destination_address" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Deskripsi</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="destination_description" name="destination_description" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
            </div>
            </div>
        </div>
    </div>
</div>
