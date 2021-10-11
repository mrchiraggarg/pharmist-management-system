<?php
	require('../assets/vendor/autoload.php');
	$mpdf = new \Mpdf\Mpdf();
	include '../db.php';
	$customer_id = $_GET['customer_id'];
	$select_query = "SELECT * FROM customer WHERE customer_id = '$customer_id'";
	$select_query_run = mysqli_query($con, $select_query);
	$select_query_rows = mysqli_num_rows($select_query_run);
	$data = mysqli_fetch_assoc($select_query_run);


	$total1 = $data["customer_mrp1"]*$data["customer_quantity1"];
	$total2 = $data["customer_mrp2"]*$data["customer_quantity2"];
	$total3 = $data["customer_mrp3"]*$data["customer_quantity3"];
	$final = $total1+$total2+$total3;


	$html = '

	<style>
			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family:"Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
				color: #555;
			}
			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
			}
			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}
			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}
			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}
			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}
			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}
			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}
			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}
			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}
			.invoice-box table tr.item.last td {
				border-bottom: none;
			}
			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}
			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}
				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}
			/** RTL **/
			.rtl {
				direction: rtl;
				font-family: Tahoma, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
			}
			.rtl table {
				text-align: right;
			}
			.rtl table tr td:nth-child(2) {
				text-align: left;
			}
		</style>

	
		<div class="invoice-box">
			<table cellpadding="0" cellspacing="0">
				<tr class="top">
					<td colspan="4">
						<table>
							<tr>
								<td class="title">
								<h3>Medstore</h3>
								</td>
								<td>
									Invoice : MS-'.$data["customer_id"].'<br />
									Sell Date: '.$data["customer_date"].'<br />
									Payment Date: '.$data["customer_date"].'
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr class="information">
					<td colspan="4">
						<table>
							<tr>
								<td>
									Medstore<br />
									Shahdara<br />
									Delhi - 110032
								</td>
								<td>
									'.$data["customer_name"].'<br />
									'.$data["customer_address"].'<br />
									'.$data["customer_mobile"].'
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr class="heading">
					<td>Payment Method</td>
					<td></td>
					<td></td>
					<td> '.$data["customer_payment_method"].' </td>
				</tr>
				<tr class="heading">
					<td>Prescripted By : </td>
					<td> '.$data["customer_doctor_name"].' </td>
					<td> '.$data["customer_doctor_special"].' </td>
					<td> '.$data["customer_doctor_mobile"].' </td>
				</tr>
				<tr class="heading">
					<td>Medicine</td>
					<td>Quantity</td>
					<td>Price</td>
					<td>Total</td>
				</tr>
				<tr class="item">
					<td>'.$data["customer_medicine1"].'</td>
					<td>'.$data["customer_quantity1"].'</td>
					<td>Rs. '.$data["customer_mrp1"].'</td>
					<td>'.$total1.'</td>
				</tr>
				<tr class="item">
					<td>'.$data["customer_medicine2"].'</td>
					<td>'.$data["customer_quantity2"].'</td>
					<td>Rs. '.$data["customer_mrp2"].'</td>
					<td>'.$total2.'</td>
				</tr>
				<tr class="item last">
					<td>'.$data["customer_medicine3"].'</td>
					<td>'.$data["customer_quantity3"].'</td>
					<td>Rs. '.$data["customer_mrp3"].'</td>
					<td>'.$total3.'</td>
				</tr>
				<tr class="total">
					<td></td>
					<td></td>
					<td></td>
					<td>Final: '.$final.'</td>
				</tr>
			</table>
		</div>
	';
	
    $mpdf->WriteHTML($html);
    $mpdf->Output();
?>