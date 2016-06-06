    <link href="<?php echo base_url()?>template/AdminLTE/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url()?>template/AdminLTE/css/AdminLTE.css" rel="stylesheet" type="text/css" /> 
<div class="box">
		<div class="box-header">
				<h3 class="box-title">Input Data Produk</h3>
		</div>
		<?php
			echo form_open_multipart('admin/produk/post');
		?>
		<form role="form">
		<div class="box-body">	
			<div class="form-group">
 				<label>Nama Product</label>
 				<input type="text" name="nama" class="form-control" placeholder="Nama Produk">
 			</div>
 			<div class="form-group">
 				<label>Harga</label>
 				<input type="text" name="harga" class="form-control" placeholder="Harga">
 			</div>
 			<div class="form-group">
 			<label>Gambar</label>
 			<input type="file" name="userfile" class="form-control">
 			</div>
 			<div class="form-group">
	 			<label>Kategori</label>
	 			<select name="kategori" class="form-control">
	 					<option value='0' selected>Pilih Kategori</option>
	 					<?php
	 						foreach($kategori as $p){
	 							echo"<option value='".$p->kategori_id."'>".$p->nama_kategori."</option>";
	 						}
	 					?>
	 			</select>
 			</div>
		</div>
		<div class="box-footer">
			<button type="submit" name="simpan" class="btn btn-primary">simpan</button>
 			<?php
 					echo anchor('admin/produk','kembali',array('class'=>'btn btn-primary'));
 			?>
		</div>
		</form>
</div>