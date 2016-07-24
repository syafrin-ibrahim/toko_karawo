        <link href="<?php echo base_url()?>template/AdminLTE/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url()?>template/AdminLTE/css/AdminLTE.css" rel="stylesheet" type="text/css" /> 
<!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Edit Halaman</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <?php
                                echo form_open('admin/halaman/edit');
                                ?>
                               
                                <form role="form">
                                 <input type="hidden" name="idx" value="<?php echo $halaman['pages_id']; ?>">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input type="text" class="form-control" value="<?php echo $halaman['judul'];?>" name="judul">
                                        </div>
                                         <div class="form-group">
                                            <label>Content</label><br/>
                                            <textarea name="content" id="editor1">
                                                <?php
                                                echo $halaman['content'];

                                                ?>
                                            </textarea>
                                          
                                        </div>
                                        
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" name="ubah" class="btn btn-primary">update</button>
                                        <?php
                                        echo anchor('admin/halaman','Kembali',array('class'=>'btn btn-primary'));
                                        ?>
                                    </div>
                                </form>
                            </div><!-- /.box -->
                            <script src="<?php echo base_url()?>/template/AdminLTE/js/ckeditor.js"></script>
                             <script>
                             CKEDITOR.replace('editor1');
                             </script>