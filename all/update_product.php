<?php
include "header.php";
include '../db.php';
$medicine_id = $_GET['medicine_id'];
$select_query = "SELECT * FROM medicines WHERE medicine_id = '$medicine_id'";
$select_query_run = mysqli_query($con, $select_query);
$select_query_rows = mysqli_num_rows($select_query_run);
$data = mysqli_fetch_assoc($select_query_run);
?>
<!-- Start of product container -->
<div class="content">
	<div class="row">
		<div class="col-lg-12 col-md-12">
			<div class="card card-tasks">
				<div class="card-header ">
					<h6 class="title d-inline">Update Your Product</h6>
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
											<form method="post" action="update_product_details.php">
												<div class="form-group">
													<label>Medicine Name</label>
													<input type="text" class="form-control" placeholder="Medicine Name" value="<?php echo $data['medicine_name']; ?>" name="medicine_name" required>
												</div>
												<!-- 												<div class="form-group">
														<label>Description</label>
														<textarea placeholder="Description" class="form-control" name="medicine_description" required></textarea>
												</div> -->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Medicine Purpose</label>
															<input type="text" class="form-control" placeholder="Medicine Purpose" name="medicine_purpose" value="<?php echo $data['medicine_purpose']; ?>" required>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Batch No.</label>
															<input type="text" class="form-control" placeholder="Medicine Batch No." name="medicine_batch_no" value="<?php echo $data['medicine_batch_no']; ?>" required>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Price</label>
															<input type="text" class="form-control" placeholder="Medicine Price" name="medicine_mrp" value="<?php echo $data['medicine_mrp']; ?>" required>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Medicine Salt</label>
															<input type="text" class="form-control" placeholder="Medicine Salt" name="medicine_salt" value="<?php echo $data['medicine_salt']; ?>" required>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Date of Manufacture</label>
															<input type="text" class="form-control" placeholder="Date of Manufacture" name="medicine_dom" value="<?php echo $data['medicine_dom']; ?>" required>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Date of Expiry</label>
															<input type="text" class="form-control" placeholder="Date of Expiry" name="medicine_doe" value="<?php echo $data['medicine_doe']; ?>" required>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Medicine Inventory</label>
															<input type="text" class="form-control" placeholder="Medicine Inventory" name="medicine_inventory" value="<?php echo $data['medicine_inventory'];?>" required>
														</div>
													</div>
												</div>
												<?php
												include '../db.php';
												$s_qry = "SELECT * FROM company";
												$s_qry_run = mysqli_query($con,$s_qry);
												$s_qry_row = mysqli_num_rows($s_qry_run);
												$i=0;
												?>
												<div class="col-md-12 my-3">
													<label>Manufacturer Name</label>
													<select name="medicine_manufacturer" class="custom-select mr-sm-2 my-1" required>
														<option value="<?php echo $data['medicine_manufacturer'];?>"><?php echo $data['medicine_manufacturer'];?></option>
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
											</div>
											<input type="hidden" name="id" value="<?php echo $data['medicine_id']; ?>">
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