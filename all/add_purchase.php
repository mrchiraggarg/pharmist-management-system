<?php
include "header.php";
?>
<!-- Start of product container -->
<div class="content">
	<div class="row">
		<div class="col-lg-12 col-md-12">
			<div class="card card-tasks">
				<div class="card-header ">
					<h6 class="title d-inline">Add new Purchase</h6>
					<p class="card-category d-inline">All fields are mandatory*</p>
					<!-- 					<div class="dropdown">
						<button type="button" class="btn btn-link dropdown-toggle btn-icon" data-toggle="dropdown">
						<i class="tim-icons icon-settings-gear-63"></i>
						</button>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
							<a class="dropdown-item" name="launch" href="operation/add_product.php">
								<label class="btn btn-sm btn-primary btn-simple active" id="0">
									<span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Launch</span>
									<span class="d-block d-sm-none">
															<i class="tim-icons icon-single-02"></i>
									</span>
								</label>
							</a>
							<a class="dropdown-item" name="discard" href="#pablo">
								<label class="btn btn-sm btn-primary btn-simple active" id="0">
									<span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Discard</span>
									<span class="d-block d-sm-none">
															<i class="tim-icons icon-single-02"></i>
									</span>
								</label>
							</a>
						</div>
					</div>
					-->
				</div>
				<div class="col-lg-12 col-md-12">
					<div class="card-body">
						<div class="table-full-width table-responsive">
							<table class="table">
								<tbody>
									<tr>
										<td>
											<form method="post" action="add_purchase.php">
												<?php
												include '../db.php';
												$s_qry = "SELECT * FROM company";
												$s_qry_run = mysqli_query($con,$s_qry);
												$s_qry_row = mysqli_num_rows($s_qry_run);
												$i=0;
												?>
												<div class="col-md-12 my-3">
													<label>Supplier Name</label>
													<select name="supplier_name"  class="custom-select mr-sm-2 my-1" required="">
														<option value="">Choose from List</option>
														<?php
														while ($c_name = mysqli_fetch_array($s_qry_run)) {
														?>
														<option value="<?php echo $c_name['company_name'];?>">
															<?php echo $c_name['company_name'];?>
														</option>
														$i++;
														<?php
														}
														?>
													</select>
												</div>
												<!-- 												<div class="form-group">
														<label>Supplier Name</label>
														<input type="text" class="form-control" placeholder="Supplier Name" name="supplier_name" required>
												</div> -->
<!-- 												<div class="form-group">
													<label>Description</label>
													<textarea placeholder="Description" class="form-control" name="purchase_description" required></textarea>
												</div> -->
												<div class="row">
													<?php
													include '../db.php';
													$s_qry = "SELECT * FROM medicines";
													$s_qry_run = mysqli_query($con,$s_qry);
													$s_qry_row = mysqli_num_rows($s_qry_run);
													$i=0;
													?>
													<div class="col-md-6">
														<label>Medicine Name</label>
														<select name="purchase_product"  class="custom-select mr-sm-2" required="">
															<option value="">Choose from List</option>
															<?php
															while ($m_name = mysqli_fetch_array($s_qry_run)) {
															?>
															<option value="<?php echo $m_name['medicine_name'];?>">
																<?php echo $m_name['medicine_name'];?>
															</option>
															$i++;
															<?php
															}
															?>
														</select>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Price</label>
															<input type="text" class="form-control" placeholder="Purchase Price" name="purchase_mrp" required>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Date</label>
															<input type="text" class="form-control" placeholder="Purchase Date" name="purchase_date" required>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Quantity</label>
															<input type="text" class="form-control" placeholder="Purchase Quantity" name="purchase_quantity" required>
														</div>
													</div>
												</div>
											</div>
											<button type="submit" class="btn" name="submit">Submit</button>
										</form>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!-- End of product container -->
		<?php
		include "footer.php";
		?>
		<?php
		include "../db.php";
		if (isset($_POST['submit'])) {
			$pid = bin2hex(random_bytes(10)) ?? "";
			$supplier_name = $_POST['supplier_name'] ?? "";
			// $purchase_description = $_POST['purchase_description'] ?? "";
			$purchase_mrp = $_POST['purchase_mrp'] ?? "";
			$purchase_date = $_POST['purchase_date'] ?? "";
			$purchase_product = $_POST['purchase_product'] ?? "";
			$purchase_quantity = $_POST['purchase_quantity'] ?? "";
			$insert_qry = "INSERT INTO purchase (pid,supplier_name,purchase_mrp,purchase_quantity,purchase_date,purchase_product) VALUES ('$pid','$supplier_name','$purchase_mrp','$purchase_quantity','$purchase_date','$purchase_product')";
			$insert_qry_run = mysqli_query($con, $insert_qry);
			if($insert_qry_run) {
			$s = "SELECT * FROM purchase WHERE pid ='$pid'";
			$q = mysqli_query($con,$s);
			$row = mysqli_fetch_array($q);
			if ($q)
			{
		?>
		<?php		

			$select = "SELECT * FROM medicines WHERE medicine_name='$purchase_product' ";
			$query12 = mysqli_query($con,$select);
			$rowData = mysqli_fetch_array($query12);
			if ($query12) 
			{
				$new_quantity_medicine = $purchase_quantity + $rowData['medicine_inventory'];
				$upd_qry = "UPDATE medicines SET medicine_inventory = '$new_quantity_medicine' WHERE medicine_name='$purchase_product'";
				$runQuery = mysqli_query($con,$upd_qry);
				if ($runQuery) {
					?>
					<script type="text/javascript">
						console.log("medicine_inventory Runs Successfully");
					</script>
					<?php
				}

			}


		?>
		<script>
		alert('Purchase Added Successfully:)');
		</script>
		<?php
		$id = $row['purchase_id'];
		// header("location:update_product.php?medicine_id='$id'");
		?>
		<script type="text/javascript">
		window.location.replace("update_purchase.php?purchase_id="+<?php echo $id; ?>);
		</script>
		<?php
		}
		}
		}
		?>