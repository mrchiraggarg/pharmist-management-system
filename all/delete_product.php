<?php
include '../db.php';
if(isset($_POST['delete'])) {
$medicine_check_item = $_POST['check_item'];
foreach ($medicine_check_item as $medicine_id) {
$delete_qry = "DELETE FROM medicines WHERE medicine_id = '$medicine_id' ";
$delete_qry_run = mysqli_query($con, $delete_qry);
}
if ($delete_qry_run)
{
?>
<script type="text/javascript">
	alert('Item Deleted Successfully:)');
	window.location.replace('./product.php');
</script>
<?php
}
}
?>