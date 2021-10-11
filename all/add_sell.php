<?php
include "header.php";
?>
<!-- Start of sell container -->
<div class="content">
	<div class="row">
		<div class="col-lg-12 col-md-12">
			<div class="card card-tasks">
				<div class="card-header ">
					<h6 class="title d-inline">Add new Sell</h6>
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
				-->				</div>
				<div class="col-lg-12 col-md-12">
					<div class="card-body">
						<div class="table-full-width table-responsive">
							<table class="table">
								<tbody>
									<tr>
										<td>
											<form method="post" action="add_sell.php" enctype="multipart/form-data">
												<div class="form-group">
													<label>Customer Name</label>
													<input type="text" class="form-control" placeholder="Customer Name" name="customer_name" required>
												</div>
												<div class="form-group">
													<label>Disease</label>
													<textarea placeholder="Disease" class="form-control" name="customer_disease" required></textarea>
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="form-group">
															<label>Address</label>
															<input type="text" class="form-control" placeholder="Customer Address" name="customer_address" required>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<label>Mobile No.</label>
															<input type="text" class="form-control" placeholder="Customer Mobile No." name="customer_mobile" required>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<label>Date</label>
															<input type="text" class="form-control" placeholder="Date of Purchase" name="customer_date" required>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="form-group">
															<label>Doctor's Name</label>
															<input type="text" class="form-control" placeholder="Doctor's Name" name="customer_doctor_name" required>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<label>Specialist</label>
															<input type="text" class="form-control" placeholder="Doctor Special" name="customer_doctor_special">
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<label>Doctor's Mobile No.</label>
															<input type="text" class="form-control" placeholder="Doctor's Mobile No." name="customer_doctor_mobile">
														</div>
													</div>
												</div>
												<div class="row">
													<?php
													include '../db.php';
													$s_qry = "SELECT * FROM medicines";
													$s_qry_run = mysqli_query($con,$s_qry);
													$s_qry_row = mysqli_num_rows($s_qry_run);
													$i=0;
													?>
													<div class="col-md-4">
														<label>Medicine</label>
														<select name="customer_medicine1"  class="custom-select mr-sm-2" required="">
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
													<div class="col-md-4">
														<div class="form-group">
															<label>Quantity</label>
															<input type="text" class="form-control" placeholder="Medicine Quantity" name="customer_quantity1" value="0" required>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<label>Price</label>
															<input type="text" class="form-control" placeholder="Medicine Price" name="customer_mrp1" value="0" required>
														</div>
													</div>
												</div>
												<div class="row">
													<?php
													include '../db.php';
													$s_qry = "SELECT * FROM medicines";
													$s_qry_run = mysqli_query($con,$s_qry);
													$s_qry_row = mysqli_num_rows($s_qry_run);
													$i=0;
													?>
													<div class="col-md-4">
														<label>Medicine</label>
														<select name="customer_medicine2"  class="custom-select mr-sm-2">
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
													<div class="col-md-4">
														<div class="form-group">
															<label>Quantity</label>
															<input type="text" class="form-control" placeholder="Medicine Quantity" name="customer_quantity2" value="0">
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<label>Price</label>
															<input type="text" class="form-control" placeholder="Medicine Price" name="customer_mrp2" value="0">
														</div>
													</div>
												</div>
												<div class="row">
													<?php
													include '../db.php';
													$s_qry = "SELECT * FROM medicines";
													$s_qry_run = mysqli_query($con,$s_qry);
													$s_qry_row = mysqli_num_rows($s_qry_run);
													$i=0;
													?>
													<div class="col-md-4">
														<label>Medicine</label>
														<select name="customer_medicine3"  class="custom-select mr-sm-2">
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
													<div class="col-md-4">
														<div class="form-group">
															<label>Quantity</label>
															<input type="text" class="form-control" placeholder="Medicine Quantity" name="customer_quantity3" value="0">
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<label>Price</label>
															<input type="text" class="form-control" placeholder="Medicine Price" name="customer_mrp3" value="0">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6 mb-3">
														<label>Payment Method</label>
														<select name="customer_payment_method"  class="custom-select mr-sm-2" required>
															<option value="Choose From List">Choose from List</option>
															<option value="Cash">Cash</option>
															<option value="Paytm">Paytm</option>
															<option value="PhonePe">PhonePe</option>
															<option value="Google Pay">Google Pay</option>
															<option value="Amazon Pay">Amazon Pay</option>
															<option value="Net Banking">Net Banking</option>
															<option value="Cheque">Cheque</option>
														</select>
													</div>
													<div class="col-md-6">
														<div>
															<label>Doctor's Prescription</label>
															<input type="file" class="form-control-file" placeholder="Doctor's Prescription" name="customer_prescription" style="border: 1px solid #344675;
															border-radius: 0.4285rem;
															font-size: 0.75rem;
															padding:7px 18px 7px 18px;" required>
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
		<!-- End of sell container -->
		<?php
		include "footer.php";
		?>
		<?php
		include "../db.php";
		if (isset($_POST['submit'])) {
			$cid = bin2hex(random_bytes(10)) ?? "";
			$customer_name = $_POST['customer_name'] ?? "";
			$customer_disease = $_POST['customer_disease'] ?? "";
			$customer_mrp1 = $_POST['customer_mrp1'] ?? "";
			$customer_medicine1 = $_POST['customer_medicine1'] ?? "";
			$customer_quantity1 = $_POST['customer_quantity1'] ?? "";
			$customer_mrp2 = $_POST['customer_mrp2'] ?? "";
			$customer_medicine2 = $_POST['customer_medicine2'] ?? "";
			$customer_quantity2 = $_POST['customer_quantity2'] ?? "";
			$customer_mrp3 = $_POST['customer_mrp3'] ?? "";
			$customer_medicine3 = $_POST['customer_medicine3'] ?? "";
			$customer_quantity3 = $_POST['customer_quantity3'] ?? "";
			$customer_address = $_POST['customer_address'] ?? "";
			$customer_mobile = $_POST['customer_mobile'] ?? "" ;
			$customer_date = $_POST['customer_date'] ?? "";
			$customer_doctor_name = $_POST['customer_doctor_name'] ?? "";
			$customer_doctor_mobile = $_POST['customer_doctor_mobile'] ?? "" ;
			$customer_doctor_special = $_POST['customer_doctor_special'] ?? "";
			$customer_payment_method = $_POST['customer_payment_method'] ?? "";
			$customer_prescription = $_FILES['customer_prescription'] ['name'] ?? "";
			$customer_temp_prescription = $_FILES['customer_prescription'] ['tmp_name'] ?? "";
			move_uploaded_file($customer_temp_prescription, "../resources/prescription/$customer_prescription");
			$insert_qry = "INSERT INTO customer
			(cid,customer_name, customer_disease, customer_mrp1, customer_medicine1, customer_quantity1, customer_mrp2, customer_medicine2, customer_quantity2, customer_mrp3, customer_medicine3, customer_quantity3, customer_prescription, customer_address, customer_mobile, customer_date, customer_payment_method, customer_doctor_name, customer_doctor_mobile, customer_doctor_special)
				VALUES
				('$cid','$customer_name', '$customer_disease', '$customer_mrp1', '$customer_medicine1', '$customer_quantity1', '$customer_mrp2', '$customer_medicine2', '$customer_quantity2', '$customer_mrp3', '$customer_medicine3', '$customer_quantity3', '$customer_prescription', '$customer_address', '$customer_mobile', '$customer_date', '$customer_payment_method', '$customer_doctor_name', '$customer_doctor_mobile', '$customer_doctor_special')";
			$insert_qry_run = mysqli_query($con, $insert_qry);
			if($insert_qry_run) {
			$s = "SELECT * FROM customer WHERE cid ='$cid'";
			$q = mysqli_query($con,$s);
			$row = mysqli_fetch_array($q);
			if ($q)
			{
				$s1 = "SELECT * FROM medicines WHERE medicine_name='$customer_medicine1' ";
				$q2 = mysqli_query($con,$s1);
				$data1 = mysqli_fetch_array($q2);
				$newQunatity1 = $data1['medicine_inventory'] - $customer_quantity1;
				$update1 = "UPDATE medicines SET medicine_inventory = '$newQunatity1' WHERE medicine_name='$customer_medicine1'";
				$qmain = mysqli_query($con,$update1);
				if ($qmain) {
					$s2 = "SELECT * FROM medicines WHERE medicine_name='$customer_medicine2' ";
					$q3 = mysqli_query($con,$s2);
					$data1 = mysqli_fetch_array($q3);
					$newQunatity2 = $data1['medicine_inventory'] - $customer_quantity2;
				$update2 = "UPDATE medicines SET medicine_inventory = '$newQunatity2' WHERE medicine_name='$customer_medicine2'";
				$qmain1 = mysqli_query($con,$update2);

					if ($qmain1) {
						$s3 = "SELECT * FROM medicines WHERE medicine_name='$customer_medicine3' ";
						$q4 = mysqli_query($con,$s3);
						$data1 = mysqli_fetch_array($q4);
						$newQunatity3 = $data1['medicine_inventory'] - $customer_quantity3;
				$update3 = "UPDATE medicines SET medicine_inventory = '$newQunatity3' WHERE medicine_name='$customer_medicine3'";
				$qmain2 = mysqli_query($con,$update3);
					}

				}

		?>
		<script>
		alert('Customer Added Successfully:)');
		</script>
		<?php
		$id = $row['customer_id'];
		// header("location:update_product.php?medicine_id='$id'");
		?>
		<script type="text/javascript">
		window.location.replace("update_sell.php?customer_id="+<?php echo $id; ?>);
		</script>
		<?php
		}
		}
		}
		?>