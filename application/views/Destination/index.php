
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
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row el-element-overlay">
            
                <?php foreach($destinasi->result_array() as $row){ ?>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="el-card-item">
                            <div class="el-card-avatar el-overlay-1"> <img src="<?php echo base_url()?>style/images<?php echo $row["destination_image"];?>" alt="user" />
                                <div class="el-overlay">
                                    <ul class="list-style-none el-info">
                                        <li class="el-item"><a class="btn default btn-outline el-link" href="<?php echo base_url().'index.php/'?>Destination/invoice?id=<?php echo $row["destination_schedule_id"];?>"><i class="mdi mdi-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="el-card-content">
                                <h4 class="m-b-0"><?php echo $row["destination_name"];?></h4> <span class="text-muted"><?php echo $row["time_start"];?> - <?php echo $row["time_end"];?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            
        </div>
    </div>
    <footer class="footer text-center">
        All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
    </footer>
</div>

<?php if(isset($message)){ ?>
    <script>
        toastr.success('Pesanan Berhasil. Silahkan Lihat Transaksi Anda Untuk Melihat Kode Booking', 'Pesanan Berhasil');
    </script>
<?php } ?>
