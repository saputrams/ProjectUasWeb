
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Full Width</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                <form class="form-horizontal">
                    <div class="card-body">
                        <h4 class="card-title">Personal Info</h4>
                        <div class="form-group row">
                            <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Nomor Identitas</label>
                            <div class="col-sm-9">
                                <label class="col-sm-6 control-label col-form-label">: <?php echo $customer->customer_identity?></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nama</label>
                            <div class="col-sm-9">
                                <label class="col-sm-6 control-label col-form-label">: <?php echo $customer->full_name?></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Alamat</label>
                            <div class="col-sm-9">
                                <label class="col-sm-6 control-label col-form-label">: <?php echo $customer->customer_address?></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <label class="col-sm-6 control-label col-form-label">: <?php echo $customer->customer_gender?></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email1" class="col-sm-3 text-right control-label col-form-label">Nomor Handphone</label>
                            <div class="col-sm-9">
                                <label class="col-sm-6 control-label col-form-label">: <?php echo $customer->customer_phone?></label>
                            </div>
                        </div>
                        <a href="<?php echo base_url().'index.php/'?>Customers/editForm?id=<?php echo $customer->customer_id?>" class="btn btn-primary">Edit</a>
                    </div>
                </form>
                </div>
            </div>
        </div>
     </div>

    <footer class="footer text-center">
        All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
    </footer>
</div>
