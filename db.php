<?php
// Create connection
$con = mysqli_connect('sql108.epizy.com', 'epiz_28591561', 'IQcTpCtwCZtuW9', 'epiz_28591561_medical_store_system');
// Check connection
if ($con == false) {
?>
<script type="text/javascript">
alert ("Connection Establishment Error :(");
</script>
<?php
}
?>