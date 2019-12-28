<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item"> 
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url().'index.php/'?>/Home" aria-expanded="false">
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <?php foreach ($row->result_array() as $rows){?>
                    <li class="sidebar-item"> 
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url().'index.php/'.$rows["urls"]?>" aria-expanded="false">
                            <span class="hide-menu"><?php echo $rows["menu_name"];?></span>
                        </a>
                    </li>
                <?php }?>
                
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>