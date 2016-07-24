        <link href="<?php echo base_url()?>template/AdminLTE/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url()?>template/AdminLTE/css/AdminLTE.css" rel="stylesheet" type="text/css" /> 
<!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Edit Kategori</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                               <table class="table table-brodered">
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
                               <div class="box-header">
                                    <div class="box-title">
                                            Riwayat Transaksi
                                    </div>
                               </div>
                               <table class="table table-bordered">
                                   <tr><th>No</th><th>No Resi</th><th>Tanggal</th><th>status</th></tr>
                                   <?php
                                 
                                   $no=1;
                                   foreach($order as $s){
                                          $status=$s->status==1?'PROSES':'SELESAI';
                                        echo"<tr><td>$no</td><td>$s->no_resi</td><td>$s->tanggal</td><td>$status</td></tr>";
                                          $no++;
                                   }
                                  
                                   ?>
                               </table>

                               
                                