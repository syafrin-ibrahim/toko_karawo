<div class="row">
				<div class="col-sm-3 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<?php echo form_open('cart/login_proses');?>
							<input type="text" name="nama" placeholder="Name">
							<input type="email" name="email" placeholder="Email Address">
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-3">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<?php echo form_open('cart/signup');?>
							<input type="text" placeholder="Name" name="nama" required>
							<input type="email" placeholder="Email Address" name="email" required>
							<input type="text" placeholder="No Hp" name="hp" required>
							<input type="text" placeholder="No Telpon" name="telpon" required>
							<textarea name="alamat" placeholder="alamat lengkap">
							</textarea><br/><br/>
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
</div>