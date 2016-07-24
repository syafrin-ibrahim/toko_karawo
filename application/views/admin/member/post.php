 <link href="<?php echo base_url()?>template/AdminLTE/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
 <link href="<?php echo base_url()?>template/AdminLTE/css/AdminLTE.css" rel="stylesheet" type="text/css" />
 <div class="box box-primary">
 	<div class="box box-header">
 		<h3 class="title">Input Data Kategori</h3>
 	</div>
 	<?php echo form_open('admin/kategori/post');?>
 	<form role="form">
 		<div class="box-body">
 			<div class="form-group">
 				<label>Nama Kategori</label>
 				<input type="text" name="nama" class="form-control" placeholder="Nama Kategori">
 			</div>
 			<div class="form-group">
 				<label>Link</label>
 				<input type="text" name="link" class="form-control" placeholder="Link">
 			</div>
 			<div class="form-group">
	 			<label>Parent</label>
	 			<select name="parent" class="form-control">
	 					<option value='0' selected>Parent Menu</option>
	 					<?php
	 						foreach($parent as $p){
	 							echo"<option value='".$p->kategori_id."'>".$p->nama_kategori."</option>";
	 						}
	 					?>
	 			</select>
 			</div>
 		</div>
 		<div class="box-footer">
 			<button type="submit" name="simpan" class="btn btn-primary">simpan</button>
 			<?php
 					echo anchor('admin/kategori','kembali',array('class'=>'btn btn-primary'));
 			?>
 		</div>
 	</form>   
 </div>