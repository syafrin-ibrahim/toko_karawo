 <link href="<?php echo base_url()?>template/AdminLTE/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
 <link href="<?php echo base_url()?>template/AdminLTE/css/AdminLTE.css" rel="stylesheet" type="text/css" />
 <div class="box box-primary">
 	<div class="box box-header">
 		<h3 class="title">Input Halaman statis</h3>
 	</div>
 	<?php echo form_open('admin/Halaman/post');?>
 	<form role="form">
 		<div class="box-body">
 			<div class="form-group">
 				<label>judul</label>
 				<input type="text" name="judul" class="form-control" placeholder="Judul">
 			</div>
 			
 			<div class="form-group">
 				<label>Content</label><br/>
 				<textarea name="content" id="editor1">
 					
 				</textarea>
 			</div>
 		</div>
 		<div class="box-footer">
 			<button type="submit" name="submit" class="btn btn-primary">simpan</button>
 			<?php
 					echo anchor('admin/halaman','kembali',array('class'=>'btn btn-primary'));
 			?>
 		</div>
 	</form>
 </div>
 <script src="<?php echo base_url()?>/template/AdminLTE/js/ckeditor.js"></script>
 <script>
 CKEDITOR.replace('editor1');
 </script>