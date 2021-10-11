<?php
include "header.php";
include '../db.php';
$customer_id = $_GET['customer_id'];
$select_query = "SELECT * FROM customer WHERE customer_id = '$customer_id'";
$select_query_run = mysqli_query($con, $select_query);
$select_query_rows = mysqli_num_rows($select_query_run);
$data = mysqli_fetch_assoc($select_query_run);
$customer_prescription = $data['customer_prescription'];
?>
<!-- Start of purchase container -->
<div class="content">
	<div class="row">
		<div class="col-lg-12 col-md-12">
			<div class="card card-tasks">
				<div class="card-header ">
					<h6 class="title d-inline">Update Your Sell</h6>
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
											<form method="post" action="update_sell_details.php" enctype="multipart/form-data">
												<div class="form-group">
													<label>Customer Name</label>
													<input type="text" class="form-control" placeholder="Customer Name" name="customer_name" value="<?php echo $data['customer_name']; ?>" required>
												</div>
												<div class="form-group">
													<label>Disease</label>
													<textarea placeholder="Disease" class="form-control" name="customer_disease" required><?php echo $data['customer_disease']; ?></textarea>
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="form-group">
															<label>Address</label>
															<input type="text" class="form-control" placeholder="Customer Address" name="customer_address" value="<?php echo $data['customer_address']; ?>" required>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<label>Mobile No.</label>
															<input type="text" class="form-control" placeholder="Customer Mobile No." name="customer_mobile" value="<?php echo $data['customer_mobile']; ?>" required>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<label>Date</label>
															<input type="text" class="form-control" placeholder="Date of Purchase" name="customer_date" value="<?php echo $data['customer_date']; ?>" required>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="form-group">
															<label>Doctor's Name</label>
															<input type="text" class="form-control" placeholder="Doctor's Name" name="customer_doctor_name" value="<?php echo $data['customer_doctor_name'];?>" required>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<label>Specialist</label>
															<input type="text" class="form-control" placeholder="Doctor Special" name="customer_doctor_special" value="<?php echo $data['customer_doctor_special'];?>">
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<label>Doctor's Mobile No.</label>
															<input type="text" class="form-control" placeholder="Doctor's Mobile No." name="customer_doctor_mobile" value="<?php echo $data['customer_doctor_mobile'];?>">
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
														<select name="customer_medicine1"  class="custom-select mr-sm-2" required>
															<option value="<?php echo $data['customer_medicine1']; ?>"><?php echo $data['customer_medicine1']; ?></option>
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
															<input type="text" class="form-control" placeholder="Medicine Quantity" name="customer_quantity1" value="<?php echo $data['customer_quantity1']; ?>" required>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<label>Price</label>
															<input type="text" class="form-control" placeholder="Medicine Price" name="customer_mrp1" value="<?php echo $data['customer_mrp1']; ?>" required>
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
															<option value="<?php echo $data['customer_medicine2']; ?>"><?php echo $data['customer_medicine2']; ?></option>
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
															<input type="text" class="form-control" placeholder="Medicine Quantity" name="customer_quantity2" value="<?php echo $data['customer_quantity2']; ?>">
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<label>Price</label>
															<input type="text" class="form-control" placeholder="Medicine Price" name="customer_mrp2" value="<?php echo $data['customer_mrp2']; ?>">
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
															<option value="<?php echo $data['customer_medicine3']; ?>"><?php echo $data['customer_medicine3']; ?></option>
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
															<input type="text" class="form-control" placeholder="Medicine Quantity" name="customer_quantity3" value="<?php echo $data['customer_quantity3']; ?>">
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<label>Price</label>
															<input type="text" class="form-control" placeholder="Medicine Price" name="customer_mrp3" value="<?php echo $data['customer_mrp3']; ?>">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6 mb-3">
														<label>Payment Method</label>
														<select name="customer_payment_method"  class="custom-select mr-sm-2" required>
															<option value="<?php echo $data['customer_payment_method'];?>"><?php echo $data['customer_payment_method']; ?></option>
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
															<div class="">
																<label>Doctor's Prescription</label>
																<input type="file" class="form-control-file" placeholder="Doctor's Prescription" name="customer_prescription" value="<?php echo $customer_prescription; ?>" style="border: 1px solid #344675;
																border-radius: 0.4285rem;
																font-size: 0.75rem;
																padding:7px 18px 7px 18px;">
															</div>
														</div>
													</div>
												</div>
												<input type="hidden" name="customer_id" value="<?php echo $data['customer_id'];?>">
												<button type="submit" class="btn" name="update">Update</button>
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