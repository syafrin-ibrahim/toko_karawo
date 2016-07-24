    <link href="<?php echo base_url()?>template/AdminLTE/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url()?>template/AdminLTE/css/AdminLTE.css" rel="stylesheet" type="text/css" /> 
<div class="box">
		<div class="box-header">
				<h3 class="box-title">Edit Data Produk</h3>
		</div>
		<?php
			echo form_open_multipart('admin/produk/edit');
		?>
		<input type="hidden" name="idp" value="<?php echo $produk['product_id'];?>">
		<form role="form">
		<div class="box-body">	
			<div class="form-group">
 				<label>Nama Kategori</label>
 				<input type="text" name="nama" class="form-control" value="<?php echo $produk['nama_product']; ?>">
 			</div>
 			<div class="form-group">
 				<label>Harga</label>
 				<input type="text" name="harga" class="form-control" value="<?php echo $produk['harga'];?>">
 			</div>
 			<div class="form-group">
 			<img src="../../../../gambarproduk/<?php echo $produk['gambar']; ?>" width="100" height="100">
 			</div>
 			<div class="form-group">
 				<label>Gambar <?php echo $produk['gambar']; ?></label>
 				<input type="file" name="userfile">
 			</div>
 			<div class="form-group">
	 			<label>Kategori</label>
	 			<select name="kategori" class="form-control">
	 					
	 					<?php
	 						foreach($kategori as $p){
	 							echo"<option value='".$p->kategori_id."'";
	 							echo $p->kategori_id==$produk['kategori_id']?'selected':'';
	 							echo">".$p->nama_kategori."</option>";
	 						}
	 					?>
	 			</select>
 			</div>
		</div>
		<div class="box-footer">
			<button type="submit" name="update" class="btn btn-primary">update</button>
 			<?php
 					echo anchor('admin/produk','kembali',array('class'=>'btn btn-primary'));
 			?>
		</div>
		</form>
</div>