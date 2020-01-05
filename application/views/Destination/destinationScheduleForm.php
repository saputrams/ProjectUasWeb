
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Jadwal Form</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Jadwal</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Jadwal Form</li>
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
                <form method="post" action="<?php echo base_url().'index.php/'?>Destination/add" class="form-horizontal">
                    <div class="card-body">
                        <h4 class="card-title">Jadwal</h4>
                        <div class="form-group row">
                            <label class="col-sm-3 text-right control-label col-form-label">Mulai</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="mulai" id="mulai" placeholder="mm/dd/yyyy"> 
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 text-right control-label col-form-label">Sampai</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="sampai" id="sampai" placeholder="mm/dd/yyyy"> 
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 text-right control-label col-form-label">Slot</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="slot" > 
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 text-right control-label col-form-label">Harga</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="harga" > 
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 text-right control-label col-form-label">Pendaftaran Terakhir</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="last" placeholder="mm/dd/yyyy" name="last"> 
                            </div>
                        </div>
                        <input type="hidden" name="id" value=""/>
                        <input type="hidden" name="destination_id" value="<?php echo $destination_id?>"/>
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
<script>
    jQuery('#mulai').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    jQuery('#sampai').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    jQuery('#last').datepicker({
        autoclose: true,
        todayHighlight: true
    });
</script>