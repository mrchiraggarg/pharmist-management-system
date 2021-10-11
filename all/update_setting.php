<?php
	include "../db.php";
		$username = $_POST['username'];
		$password = $_POST['password'];
		$update_qry = "UPDATE admin SET admin_username = '$username', admin_password = '$password'";
		$update_qry_run = mysqli_query($con, $update_qry);
		if($update_qry_run) {
?>
<script type="text/javascript">
	alert('Setting Updated :)');
	window.location.replace('../exit.php');
</script>
<?php
}
?>