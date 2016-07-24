<link href="<?php echo base_url()?>template/AdminLTE/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
<link href="<?php echo base_url()?>template/AdminLTE/css/AdminLTE.css" rel="stylesheet" type="text/css" />

<div clasa="box">
		<div class="box-header">
				<h3 class="box-title">Data Produk</h3>
		</div>
		<?php  echo $this->session->flashdata('pesan');?>
		<?php
			echo anchor('admin/produk/post','Tambah Produk',array('class'=>'btn btn-primary btn-sm'));
		?>
		<div class="box-body table-responsive">
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Produk</th>
						<th>Kategori</th>
						<th>Harga</th>
						<th>#</th>
						<th>#</th>
					</tr>
				</thead>
				<tbody>
						<?php
							$no=1;
							foreach($r as $d){

								echo"<tr>
											<td>".$no."</td>
											<td>".$d->nama_product."</td>
											<td>".$d->nama_kategori."</td>
											<td>".$d->harga."</td>
											<td width='10'>".
											anchor("admin/produk/edit/".$d->product_id,"<span class='glyphicon glyphicon-tags' aria-hidden='true'></span>",array('title'=>'edit data'))."</td>
											<td width='10'>".
											anchor("admin/produk/delete/".$d->product_id,"<span class='glyphicon glyphicon-trash' aria-hidden='true'></span>",array('title'=>'hapus data'))."</td>
										
									</tr>";
								
							$no++;	
							}
						?>
				</tbody>
			</table>
		</div>
		
</div>
       <script src="<?php echo base_url()?>template/AdminLTE/js/jquery.min.js"></script>
        <script src="<?php echo base_url()?>template/AdminLTE/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>template/AdminLTE/js/jquery-ui.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="<?php echo base_url()?>template/AdminLTE/js/raphael-min.js"></script>       
        <!-- DATA TABES SCRIPT -->
        <script src="<?php echo base_url()?>template/AdminLTE/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>template/AdminLTE/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url()?>template/AdminLTE/js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url()?>template/AdminLTE/js/AdminLTE/demo.js" type="text/javascript"></script>
        <!-- page script -->
        <script type="text/javascript">
            $(function() {
                $("#example1").dataTable();
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
            });
        </script>