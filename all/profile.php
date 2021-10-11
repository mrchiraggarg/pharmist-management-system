<?php include 'header.php'; ?>
<!-- Start of product container -->
<div class="content">
	<div class="row">
		<div class="col-lg-12 col-md-12">
			<div class="card card-tasks">
				<div class="card-header ">
					<h6 class="title d-inline">My Profile</h6>
					<p class="card-category d-inline">Below is all my required details*</p>
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
											<form method="post" action="add_product.php">
												<div class="form-group profile">
													<label>Creator Name</label>
													<input type="text" class="form-control" placeholder="Creator Name" name="creator_name" disabled="disabled" value="CHIRAG GARG">
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group profile">
															<label>Programme</label>
															<input type="text" disabled="disabled" class="form-control" placeholder="Programme" name="programme" value="MCA 4th Semester">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group profile">
															<label>Enrollment No.</label>
															<input type="text" disabled="disabled" class="form-control" placeholder="Enrollment No." name="enrollment_no" value="175975721">
														</div>
													</div>
												</div>
											</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group profile">
															<label>Course</label>
															<input type="text" disabled="disabled" class="form-control" placeholder="course" name="course" value="MCS044 - Mini Project">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group profile">
															<label>Topic</label>
															<input type="text" disabled="disabled" class="form-control" placeholder="Project Topic" name="project_topic" value="Medicine Store System">
														</div>
													</div>
												</div>
											</div>
												<div class="form-group profile">
													<label>Summary</label>
													<textarea placeholder="Summary About Project" disabled="disabled" class="form-control" name="project_summary">Hi! Myself CHIRAG GARG. This is my Mini Project which I created Individually on MEDICINE STORE SYSTEM as I gave a name to this MEDSTORE. In this you can maintain your Medicines, Buyers, Stocks, Suppliers and Bills.
													</textarea>
												</div>
										</form>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End of product container -->
<?php include 'footer.php'; ?>