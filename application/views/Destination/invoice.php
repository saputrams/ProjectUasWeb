<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Invoice</h4>
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
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-body printableArea">
                    <h3><b>INVOICE</b></h3>
                    <hr>
                    <form method="post" action="<?php echo base_url().'index.php/'?>Destination/transaction">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pull-left">
                                    <img src="<?php echo base_url()?>style/images<?php echo $destination->destination_image ?>" alt="user" />
                                    <h3> &nbsp;<b class="text-danger"><?php echo $destination->destination_name ?></b></h3>
                                    <div class="col-sm-12">
                                        <p class="col-sm-6"><?php echo $destination->destination_description ?></p>
                                    
                                    </div>
                                    
                                </div>
                                <div class="pull-right text-right">
                                    
                                    <h5><?php echo $destination->destination_address ?></h5>
                                    <p class="text-muted m-l-30">Slot: <?php echo $destination->slot ?></p>
                                    <p class="text-muted m-l-30">Tersisa: <?php echo $destination->remaining ?></p>
                                    <p class="m-t-30"><b>Tanggal Trip :</b> <i class="fa fa-calendar"></i> <?php echo $destination->time_start ?></p>
                                    <p><b>Sampai :</b> <i class="fa fa-calendar"></i> <?php echo $destination->time_end ?></p>
                                    <br/>
                                    
                                    <p><b>Pendaftaran Terakhir :</b><?php echo $destination->last_register ?></p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="pull-right m-t-30 text-right">
                                    <input type="hidden" name="id" value="<?php echo $destination->destination_schedule_id ?>"/>
                                    <input type="hidden" id="harga" value="<?php echo $destination->price ?>"/>
                                    <p>Harga Per  Orang: Rp.<?php echo $destination->price ?></p>
                                    <button type="button" id="min" class="btn btn-danger">-</button>
                                    <input type="text" style="text-align:center;" name="size" id="size" readonly/>
                                    <button type="button" id="plus" class="btn btn-danger">+</button>
                                    <hr>
                                    <h3 id="total">Total : $13,986</h3>
                                </div>
                                <div class="clearfix"></div>
                                <hr>
                                <div class="text-right">
                                    <button class="btn btn-danger" type="submit"> Proceed to payment </button>
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
<?php if(isset($message)){ ?>
    <script>
        toastr.error('<?php echo $message ?>', 'Pesanan Gagal');
    </script>
<?php } ?>

<script>
    

    $(document).ready(function(){
        $("#size").val(1) ;
        var total = $("#harga").val();
        $("#total").html("Total : Rp. "+total);
    });

    $("#plus").on("click",function(){
        var size = Number($("#size").val()) ;
        var total = Number($("#harga").val());
        size = size + 1;
        total *= size;
        
        $("#size").val(size) ;
        $("#total").html("Total : Rp. "+total);
        
    })

    $("#min").on("click",function(){
        var size = Number($("#size").val()) ;
        var total = Number($("#harga").val());
        size = size - 1;
        if(size < 1){
            size = 1;
        }
        total *= size;
        
        $("#size").val(size) ;
        $("#total").html("Total : Rp. "+total);
        
    })
</script>