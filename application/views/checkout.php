<div class="col-sm-3">
						<div class="shopper-info">
							<p>Shopper Information</p>
							<?php 
								echo form_open('cart/checkout');
							?>
								<input type="text" name="nama"placeholder="Nama Lengkap" value="<?php  echo $member['nama_lengkap']?>">
								<input type="email" name="email" placeholder="email" value="<?php  echo $member['email']?>">
								<input type="text" name="hp" placeholder="Nomor hp" value="<?php  echo $member['no_hp']?>">
								<input type="text" name="telpon" placeholder="Nomor Telpon" value="<?php  echo $member['no_telpon']?>">
								<textarea name="alamat">
									<?php  echo $member['alamat']?>
								</textarea>
							
							<button type="submit" name="submit" class="btn btn-primary" href="">selesai</button>
							</form>
						</div>
</div>