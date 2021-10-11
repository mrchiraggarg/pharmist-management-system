<?php
include '../db.php';
if(isset($_POST['delete'])) {
$customer_check_item = $_POST['check_item'];
foreach ($customer_check_item as $customer_id) {
$delete_qry = "DELETE FROM customer WHERE customer_id = '$customer_id' ";
$delete_qry_run = mysqli_query($con, $delete_qry);
}
if ($delete_qry_run)
{
?>
<script type="text/javascript">
	alert('Item Deleted Successfully:)');
	window.location.replace('./sell.php');
</script>
<?php
}
}
?>