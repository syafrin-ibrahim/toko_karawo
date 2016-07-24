        <link href="<?php echo base_url()?>template/AdminLTE/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url()?>template/AdminLTE/css/AdminLTE.css" rel="stylesheet" type="text/css" /> 
<!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Edit Menu</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <?php
                                echo form_open('admin/menu/edit');
                                ?>
                               
                                <form role="form">
                                 <input type="hidden" name="idx" value="<?php echo $menu['menu_id']; ?>">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Nama Menu</label>
                                            <input type="text" class="form-control" value="<?php echo $menu['menu_title'];?>" name="nama">
                                        </div>
                                        <div class="form-group">
                                            <label>Link</label>
                                            <input type="text" class="form-control" value="<?php echo $menu['link'];?>" name="link">
                                        </div>
                                         <div class="form-group">
                                            <label>Parent</label>
                                            <select name="parent" class="form-control">
                                               <option value="0">Parent Menu</option>
                                                <?php
                                                    foreach($parent as $a){
                                                        echo"<option value='".$a->menu_id."'";
                                                        echo $menu['parent']==$a->menu_id?'selected':'';
                                                        echo ">".$a->menu_title."</option>";
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" name="ubah" class="btn btn-primary">Submit</button>
                                        <?php
                                        echo anchor('admin/menu','Kembali',array('class'=>'btn btn-primary'));
                                        ?>
                                    </div>
                                </form>
                            </div><!-- /.box -->