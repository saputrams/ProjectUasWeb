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
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#forms" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Form</span></a> </li>
                        <?php if(isset($id)){ ?>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#role" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Role</span></a> </li>
                        <?php } ?>
                    </ul>
                    <!-- Tab panes -->
                    <form id="menuForm" class="form-horizontal" method="post" action="<?php echo base_url().'index.php/'?>Menu/add">
                        <div class="tab-content tabcontent-border">
                            <div class="tab-pane active" id="forms" role="tabpanel">
                                <div class="p-20">
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-2 text-right control-label col-form-label">Menu Name</label>
                                        <div class="col-sm-9">
                                            <input type="hidden" name="id" value="<?php echo isset($menu)? $menu->menu_id : "" ?>">
                                            <input type="text" class="form-control" id="name" name="name" value="<?php echo isset($menu)? $menu->menu_name : "" ?>" placeholder="Menu Name Here" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="urls" class="col-sm-2 text-right control-label col-form-label">Urls</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="urls" name="urls" value="<?php echo isset($menu)? $menu->urls : "" ?>" placeholder="Urls Here" required>
                                        </div>
                                    </div>
                                        
                                </div>
                            </div>
                            <?php if(isset($id)){ ?>
                            <div class="tab-pane  p-20" id="role" role="tabpanel">
                                <div class="p-20">
                                    <h3>Role</h3>
                                    <div class="col-md-9">
                                        <?php foreach($role->result_array() as $row){ ?>
                                            <div class="custom-control custom-checkbox mr-sm-2">
                                                <input type="checkbox" class="custom-control-input" <?php echo $row["menu_id"] == $id? "checked":""?> id="customControlAutosizing<?php echo $row["user_role_id"];?>" name="role[]" value="<?php echo $row["user_role_id"];?>">
                                                <label class="custom-control-label" for="customControlAutosizing<?php echo $row["user_role_id"];?>"><?php echo $row["rolename"];?></label>
                                            </div>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
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
<script>
    $('#menuForm :checkbox').change(function() {
        var roleid = $(this).attr("value");    
        var menuid = <?php echo $id ?>  ;
        if (this.checked) {
            SetRole(roleid,menuid,"<?php echo base_url().'index.php/'?>Menu/setRole")
        } else {
            SetRole(roleid,menuid,"<?php echo base_url().'index.php/'?>Menu/deleteRole")
        }
    });
    function SetRole(role_id,menuid,urls){
        $.ajax({
            url: urls,
            type: "POST",
            dataType: 'json',
            data: {role_id: role_id, menuid: menuid},
            onSuccess: function(e){

            }
        })
    }
</script>
