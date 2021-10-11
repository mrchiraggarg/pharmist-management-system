<?php
include '../db.php';
if(isset($_POST['delete'])) {
$company_check_item = $_POST['check_item'];
foreach ($company_check_item as $company_id) {
$delete_qry = "DELETE FROM company WHERE company_id = '$company_id' ";
$delete_qry_run = mysqli_query($con, $delete_qry);
}
if ($delete_qry_run)
{
?>
<script type="text/javascript">
	alert('Company Deleted Successfully:)');
	window.location.replace('./company.php');
</script>
<?php
}
}
?>