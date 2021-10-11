<?php
	include "../db.php";
		$customer_id = $_POST['customer_id'];
		$customer_name = $_POST['customer_name'] ?? "";
		$customer_disease = $_POST['customer_disease'] ?? "";
		$customer_mrp1 = $_POST['customer_mrp1'] ?? "";
		$customer_medicine1 = $_POST['customer_medicine1'] ?? "";
		$customer_quantity1 = $_POST['customer_quantity1'] ?? "";
		$customer_mrp2 = $_POST['customer_mrp2'] ?? "";
		$customer_medicine2 = $_POST['customer_medicine2'] ?? "";
		$customer_quantity2 = $_POST['customer_quantity2'] ?? "";
		$customer_mrp3 = $_POST['customer_mrp3'] ?? "";
		$customer_medicine3 = $_POST['customer_medicine3'] ?? "";
		$customer_quantity3 = $_POST['customer_quantity3'] ?? "";
		$customer_address = $_POST['customer_address'] ?? "";
		$customer_mobile = $_POST['customer_mobile'] ?? "" ;
		$customer_date = $_POST['customer_date'] ?? "";
		$customer_doctor_name = $_POST['customer_doctor_name'] ?? "";
		$customer_doctor_mobile = $_POST['customer_doctor_mobile'] ?? "" ;
		$customer_doctor_special = $_POST['customer_doctor_special'] ?? "";
		$customer_payment_method = $_POST['customer_payment_method'] ?? "";
		$customer_prescription = $_FILES['customer_prescription'] ['name'] ?? "";
		$customer_temp_prescription = $_FILES['customer_prescription'] ['tmp_name'] ?? "";

		if ($customer_prescription == "") 
		{
		$update_qry = "UPDATE customer SET
		customer_name = '$customer_name',
		customer_disease = '$customer_disease',
		customer_mrp1 = '$customer_mrp1',
		customer_medicine1 = '$customer_medicine1',
		customer_quantity1 = '$customer_quantity1',
		customer_mrp2 = '$customer_mrp2',
		customer_medicine2 = '$customer_medicine2',
		customer_quantity2 = '$customer_quantity2',
		customer_mrp3 = '$customer_mrp3',
		customer_medicine3 = '$customer_medicine3',
		customer_quantity3 = '$customer_quantity3',
		customer_address = '$customer_address',
		customer_mobile = '$customer_mobile',
		customer_date = '$customer_date',
		customer_doctor_name = '$customer_doctor_name',
		customer_doctor_mobile = '$customer_doctor_mobile',
		customer_doctor_special = '$customer_doctor_special',
		customer_payment_method = '$customer_payment_method'
		WHERE customer_id = '$customer_id'";
		}else{
		move_uploaded_file($customer_temp_prescription,"../resources/prescription/$customer_prescription");
		$update_qry = "UPDATE customer SET
		customer_name = '$customer_name',
		customer_disease = '$customer_disease',
		customer_mrp1 = '$customer_mrp1',
		customer_medicine1 = '$customer_medicine1',
		customer_quantity1 = '$customer_quantity1',
		customer_mrp2 = '$customer_mrp2',
		customer_medicine2 = '$customer_medicine2',
		customer_quantity2 = '$customer_quantity2',
		customer_mrp3 = '$customer_mrp3',
		customer_medicine3 = '$customer_medicine3',
		customer_quantity3 = '$customer_quantity3',
		customer_address = '$customer_address',
		customer_mobile = '$customer_mobile',
		customer_date = '$customer_date',
		customer_doctor_name = '$customer_doctor_name',
		customer_doctor_mobile = '$customer_doctor_mobile',
		customer_doctor_special = '$customer_doctor_special',
		customer_payment_method = '$customer_payment_method',
		customer_prescription = '$customer_prescription'
		WHERE customer_id = '$customer_id'";
		}
		
		$update_qry_run = mysqli_query($con, $update_qry);
		if($update_qry_run) {
		?>
		<script>
		alert('Sell Updated :)');
		window.open('update_sell.php?customer_id=<?php echo $customer_id;?>','_self');
		</script>
		<?php
		} else {
			echo mysqli_error($con);
		}
		?>