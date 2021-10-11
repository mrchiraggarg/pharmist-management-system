<?php
include "header.php";
include '../db.php';
$purchase_id = $_GET['purchase_id'];
$select_query = "SELECT * FROM purchase WHERE purchase_id = '$purchase_id'";
$select_query_run = mysqli_query($con, $select_query);
$select_query_rows = mysqli_num_rows($select_query_run);
$data = mysqli_fetch_assoc($select_query_run);
?>
<!-- Start of purchase container -->
<div class="content">
	<div class="row">
		<div class="col-lg-12 col-md-12">
			<div class="card card-tasks">
				<div class="card-header ">
					<h6 class="title d-inline">Update Your Purchase</h6>
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
											<form method="post" action="update_purchase_details.php">
												<?php
												include '../db.php';
												$s_qry = "SELECT * FROM company";
												$s_qry_run = mysqli_query($con,$s_qry);
												$s_qry_row = mysqli_num_rows($s_qry_run);
												$i=0;
												?>
												<div class="col-md-12 my-3">
													<label>Supplier Name</label>
													<select name="supplier_name"  class="custom-select mr-sm-2 my-1" required>
														<option value="<?php echo $data['supplier_name'];?>"><?php echo $data['supplier_name'];?></option>
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
													<label>Description</label>
													<textarea placeholder="Description" class="form-control" name="purchase_description" required><?php echo $data['purchase_description']; ?></textarea>
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
														<select name="purchase_product" class="custom-select mr-sm-2" required="">
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
															<input type="text" class="form-control" placeholder="Purchase Price" name="purchase_mrp" value="<?php echo $data['purchase_mrp']; ?>" required>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Date</label>
															<input type="text" class="form-control" placeholder="Purchase Date" name="purchase_date" value="<?php echo $data['purchase_date']; ?>" required>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Quantity</label>
															<input type="text" class="form-control" placeholder="Purchase Quantity" name="purchase_quantity" value="<?php echo $data['purchase_quantity']; ?>" required>
														</div>
													</div>
												</div>
											</div>
											<input type="hidden" name="purchase_id" value="<?php echo $data['purchase_id'];?>">
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