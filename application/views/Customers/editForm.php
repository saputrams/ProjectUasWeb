
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Edit</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Data Anda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit</li>
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
                <form method="post" action="<?php echo base_url().'index.php/'?>Customers/edit" class="form-horizontal">
                    <div class="card-body">
                        <h4 class="card-title">Personal Info</h4>
                        <div class="form-group row">
                            <label class="col-sm-3 text-right control-label col-form-label">Nomor Identitas</label>
                            <div class="col-sm-9">
                                <label class="col-sm-6 control-label col-form-label">: <?php echo $customer->customer_identity?></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 text-right control-label col-form-label">Nama</label>
                            <div class="col-sm-9">
                                <label class="col-sm-6 control-label col-form-label">: <?php echo $customer->full_name?></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-sm-3 text-right control-label col-form-label">Alamat</label>
                            <div class="col-sm-9">
                                <textarea id="address" name="address" class="form-control"><?php echo $customer->customer_address?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 text-right control-label col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <div class="custom-control custom-radio">
                                    <input type="radio" value="L" class="custom-control-input" id="gender1" name="gender" <?php echo $customer->customer_gender == "L"? "checked":""; ?>>
                                    <label class="custom-control-label" for="gender1">Laki-laki</label>
                                </div>
                                    <div class="custom-control custom-radio">
                                    <input type="radio" value="P" class="custom-control-input" id="gender2" name="gender" <?php echo $customer->customer_gender== "P"? "checked":"";?>>
                                    <label class="custom-control-label" for="gender2">Perempuan</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email1" class="col-sm-3 text-right control-label col-form-label">Nomor Handphone</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="phone" id="phone" value="<?php echo $customer->customer_phone?>"/>
                            </div>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $customer->customer_id?>"/>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
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
