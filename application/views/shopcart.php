<div class="col-sm-9 padding-right">
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<?php
					echo form_open('cart/updatestock');
				?>
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<?php
						$total=0;
							foreach($item as $i){
								$subtotal=$i->harga*$i->qty;
							
						?>

						<tr>
							<td class="cart_product">
								<a href=""><img src="<?php echo base_url()."gambarproduk/".$i->gambar; ?>" width="110" height="110" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?php echo $i->nama_product; ?></a></h4>
								<p><?php echo $i->product_id; ?></p>
							</td>
							<td class="cart_price">
								<p>Rp. <?php echo $i->harga; ?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input type="hidden" name="id<?php echo $i->detail_id;?>" value="<?php echo $i->detail_id;?>">
									<input class="cart_quantity_input" type="text" name="quantity<?php echo $i->detail_id;?>" value="<?php echo $i->qty; ?>" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">
								<?php  echo $subtotal;
										$total=$total+$subtotal;
								?></p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="<?php  echo base_url()."index.php/cart/delete/".$i->detail_id; ?>"><i class="fa fa-times"></i></a>
							</td>
						</tr>

						
						<?php
								}
						?>
					</tbody>
				</table>
			</div>
				
					<div class="total_area">
						<ul>
							
							<li>Total <span>Rp. <?php echo $total; ?></span></li>
						</ul>
							<a class="btn btn-default update" href="">Update</a>
							<a class="btn btn-default check_out" href="">Check Out</a>
							<button type="submit" class="btn btn-default check_out" >Update</button>
					</div>
				<?php
				echo form_close();
				?>

		</div>
	</section> <!--/#cart_items-->

	
				
		