<?php
include '../db.php';
if(isset($_POST['delete'])) {
$purchase_check_item = $_POST['check_item'];
foreach ($purchase_check_item as $purchase_id) {
$delete_qry = "DELETE FROM purchase WHERE purchase_id = '$purchase_id' ";
$delete_qry_run = mysqli_query($con, $delete_qry);
}
if ($delete_qry_run)
{
?>
<script type="text/javascript">
	alert('Item Deleted Successfully:)');
	window.location.replace('./purchase.php');
</script>
<?php
}
}
?>