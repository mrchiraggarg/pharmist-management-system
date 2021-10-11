<?php
	include "../db.php";
	
		$purchase_id = $_POST['purchase_id'];
		$supplier_name = $_POST['supplier_name'] ?? "";
		// $purchase_description = $_POST['purchase_description'] ?? "";
		$purchase_mrp = $_POST['purchase_mrp'] ?? "";
		$purchase_date = $_POST['purchase_date'] ?? "";
		$purchase_product = $_POST['purchase_product'] ?? "";
		$purchase_quantity = $_POST['purchase_quantity'] ?? "";
		$update_qry = "UPDATE purchase SET
		supplier_name = '$supplier_name',
		purchase_mrp = '$purchase_mrp',
		purchase_date = '$purchase_date',
		purchase_product = '$purchase_product',
		purchase_quantity = '$purchase_quantity'
		WHERE purchase_id = '$purchase_id'";
		$update_qry_run = mysqli_query($con, $update_qry);
					if($update_qry_run) {
?>
<script>
alert('Purchase Updated :)');
window.open('update_purchase.php?purchase_id=<?php echo $purchase_id;?>','_self');
</script>
<?php
		}
	
?>