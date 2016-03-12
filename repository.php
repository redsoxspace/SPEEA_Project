	<?php  			

		$this->load->model('Purchase');

		$product_info = array(
			'id' => $product['id'],
			'product_name' => $product['product_name'],
			'price' => $product['price'],
			);

		$this->session->set_userdata($product_info);

			?>		

	<h3 class = "locations">Ready To Check Out?</h3>

			<table class="table table-striped">
			<thead>
				<tr>
					<th colspan="2">SPEEA Staff</th>
				</tr>
			</thead>
				<tr>
					<td>
						<h5>Ray Goforth</h5>
						<p>Executive Director</p>
					</td>
					<td>
						<h5>(206) 433-0991 x 1301</h5>
						<p><a href="a">rayg@speea.org</a></p>
					</td>
				</tr>
			</table>