<?php
include "header.php";
?>
<!-- Start of stock table -->
<div class="content">
  <div class="row">
    <div class="col-lg-12 col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Medicines Stock</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <?php
            include "../db.php";
            $select_qry = "SELECT * FROM medicines";
            if($select_qry_run = mysqli_query($con, $select_qry)) {
            if(mysqli_num_rows($select_qry_run) > 0) {
            ?>
            <table class="table tablesorter " id="">
              <thead class=" text-primary">
                <tr>
                  <th>
                    Inventory
                  </th>
                  <th>
                    Name
                  </th>
                  <th>
                    Purpose
                  </th>
                  <th class="text-center">
                    MRP
                  </th>
                </tr>
              </thead>
              <?php
              while($data = mysqli_fetch_assoc($select_qry_run)) {
              ?>
              <tbody>
                <tr>
                  <td>
                    <?php echo $data['medicine_inventory']; ?>
                  </td>
                  <td>
                    <?php echo $data['medicine_name']; ?>
                  </td>
                  <td>
                    <?php echo $data['medicine_purpose']; ?>
                  </td>
                  <td class="text-center">
                    <?php echo $data['medicine_mrp']; ?>
                  </td>
                </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
            <?php
            // Free result set
            mysqli_free_result($select_qry_run);
            } else {
            echo "No records matching your query were found.";
            }
            } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
            }
            // Close connection
            mysqli_close($con);
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End of stock table -->
<?php
include "footer.php";
?>