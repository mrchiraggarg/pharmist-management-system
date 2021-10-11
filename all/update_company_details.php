<?php
	include "../db.php";
		$company_id = $_POST['company_id'];
		$company_name = $_POST['company_name'];
		$company_address = $_POST['company_address'];
		$company_person = $_POST['company_person'];
		$company_mobile = $_POST['company_mobile'];
		$update_qry = "UPDATE company SET company_id = '$company_id', company_name = '$company_name', company_address = '$company_address', company_person = '$company_person', company_mobile = '$company_mobile' WHERE company_id = '$company_id'";
		$update_qry_run = mysqli_query($con, $update_qry);
		if($update_qry_run) {			
?>
<script>
alert('Company Updated :)');
window.open('update_company.php?company_id=<?php echo $company_id;?>','_self');
</script>
<?php
		}
	
?>