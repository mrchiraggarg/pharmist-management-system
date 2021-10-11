<?php
include "../db.php";
		$medicine_id = $_POST['id'];
		$medicine_name = $_POST['medicine_name'] ?? "";
		$medicine_mrp = $_POST['medicine_mrp'] ?? "";
		$medicine_salt = $_POST['medicine_salt'] ?? "";
		$medicine_purpose = $_POST['medicine_purpose'] ?? "";
		$medicine_batch_no = $_POST['medicine_batch_no'] ?? "";
		$medicine_dom = $_POST['medicine_dom'] ?? "";
		$medicine_doe = $_POST['medicine_doe'] ?? "";
		$medicine_manufacturer = $_POST['medicine_manufacturer'] ?? "";
		$medicine_inventory = $_POST['medicine_inventory'] ?? "";
		$update_qry = "UPDATE medicines SET
		medicine_id = '$medicine_id',
		medicine_name = '$medicine_name',
		medicine_mrp = '$medicine_mrp',
		medicine_salt = '$medicine_salt',
		medicine_purpose = '$medicine_purpose',
		medicine_batch_no = '$medicine_batch_no',
		medicine_dom = '$medicine_dom',
		medicine_doe = '$medicine_doe',
		medicine_manufacturer = '$medicine_manufacturer',
		medicine_inventory = '$medicine_inventory'
		WHERE medicine_id = '$medicine_id'";
		$update_qry_run = mysqli_query($con, $update_qry);
					if($update_qry_run) {
?>
<script>
alert('Product Updated :)');
window.open('update_product.php?medicine_id=<?php echo $medicine_id;?>','_self');
</script>
<?php
		} else {
			echo mysqli_error($con);
		}
	
?>