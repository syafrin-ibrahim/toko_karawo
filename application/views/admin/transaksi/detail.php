        <link href="<?php echo base_url()?>template/AdminLTE/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url()?>template/AdminLTE/css/AdminLTE.css" rel="stylesheet" type="text/css" /> 
<!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">detail transaksi</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                               <table class="table table-bordered">
                                    <tr>
                                        <td>Nama Lengkap</td><td><?php echo $member['nama_lengkap']; ?></td>
                                    </tr>
                                     <tr>
                                        <td>Email</td><td><?php echo $member['email']; ?></td>
                                    </tr>
                                     <tr>
                                        <td>No Hp / No Telpon</td><td><?php echo $member['no_hp']; ?> / <?php echo $member['no_telpon']; ?></td>
                                    </tr>
                                    <tr>
                                       <td>Alamat</td><td><?php echo $member['alamat']; ?></td>
                                    </tr>
                               </table>
                                <?php  echo form_open('admin/transaksi/detail');?>
                                <input type="hidden" name="idx" value="<?php echo $pesanan['transaksi_id'];?>">
                                <div class="box-header">
                                    <h3 class="box-title">informasi transaksi</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                               <table class="table table-bordered">
                                    <tr>
                                        <td>Tanggal Order</td><td><?php echo $pesanan['tanggal']; ?></td>
                                    </tr>
                                     <tr>
                                        <td>Status Order</td>
                                        <td>
                                          <?php
                                            $status=array(1=>'Proses',2=>'Sudah Dikirim');
                                            echo form_dropdown('status',$status,$pesanan['status'],array('class'=>'form-control'));
                                          ?>
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>No Resi</td><td><input type="text" name="resi" value="<?php echo $pesanan['no_resi']; ?>" class="form-control"> </td>
                                    </tr>
                                    <tr>
                                       <td><input type="submit" name="submit" class="btn btn-danger btn-sm" value="simpan perubahan"></td><td></td>
                                    </tr>
                               </table>
                               </form>

                               <div class="box-header">
                                    <div class="box-title">
                                            Riwayat Transaksi
                                    </div>
                               </div>
                               <table class="table table-bordered">
                                   <tr><th>No</th><th>Nama Product</th><th>Jumlah</th><th>harga</th><th>Total</th></tr>
                                   <?php
                                  $total=0;
                                   $no=1;
                                   foreach($order as $s){
                                          
                                        echo"<tr><td>$no</td><td>$s->nama_product</td><td>$s->qty</td><td>$s->harga</td><td>".$s->harga*$s->qty."</td></tr>";
                                          $no++;
                                          $total=$total+($s->harga*$s->qty);
                                   }
                                  
                                   ?>
                                   <tr><td colspan="4">Total</td><td><?php echo $total; ?></td></tr>
                               </table>

                               
                                