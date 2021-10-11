<?php
include "header.php";
include '../db.php';
$company_id = $_GET['company_id'];
$select_query = "SELECT * FROM company WHERE company_id = '$company_id'";
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
					<h6 class="title d-inline">Update Your Company</h6>
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
											<form method="post" action="update_company_details.php">
												<div class="form-group">
													<label>Company Name</label>
													<input type="text" class="form-control" placeholder="Company Name" name="company_name" value="<?php echo $data['company_name'];?>" required>
												</div>
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label>Address</label>
															<input type="text" class="form-control" placeholder="Company Address" name="company_address" value="<?php echo $data['company_address'];?>" required>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Person</label>
															<input type="text" class="form-control" placeholder="Contact Person Name" name="company_person" value="<?php echo $data['company_person'];?>" required>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Mobile No.</label>
															<input type="text" class="form-control" placeholder="Company Mobile No." name="company_mobile" value="<?php echo $data['company_mobile'];?>" required>
														</div>
													</div>
												</div>
											</div>
											<input type="hidden" name="company_id" value="<?php echo $data['company_id']; ?>">
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