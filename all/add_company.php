<?php
include "header.php";
?>
<!-- Start of product container -->
<div class="content">
	<div class="row">
		<div class="col-lg-12 col-md-12">
			<div class="card card-tasks">
				<div class="card-header ">
					<h6 class="title d-inline">Add new Company</h6>
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
											<form method="post" action="add_company.php">
												<div class="form-group">
													<label>Company Name</label>
													<input type="text" class="form-control" placeholder="Company Name" name="company_name" required>
												</div>
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label>Address</label>
															<input type="text" class="form-control" placeholder="Company Address" name="company_address" required>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Person</label>
															<input type="text" class="form-control" placeholder="Contact Person Name" name="company_person" required>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Mobile No.</label>
															<input type="text" class="form-control" placeholder="Company Mobile No." name="company_mobile" required>
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
		$cid = bin2hex(random_bytes(10)) ?? "";
		$company_name = $_POST['company_name'] ?? "";
		$company_address = $_POST['company_address'] ?? "";
		$company_person = $_POST['company_person'] ?? "";
		$company_mobile = $_POST['company_mobile'] ?? "";
		$insert_qry = "INSERT INTO company (cid,company_name,company_address,company_person,company_mobile) VALUES ('$cid','$company_name','$company_address','$company_person','$company_mobile')";
		$insert_qry_run = mysqli_query($con, $insert_qry);
				if($insert_qry_run) {
		$s = "SELECT * FROM company WHERE cid ='$cid'";
		$q = mysqli_query($con,$s);
		$row = mysqli_fetch_array($q);
		if ($q)
		{
	?>
	<script>
	alert('Company Added Successfully:)');
	</script>
	<?php
	$id = $row['company_id'];
	// header("location:update_product.php?medicine_id='$id'");
	?>
	<script type="text/javascript">
	window.location.replace("update_company.php?company_id="+<?php echo $id; ?>);
	</script>
	<?php
	}
	}
	}
	?>