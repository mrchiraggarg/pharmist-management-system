<?php
include "header.php";
?>
<!-- Start of product container -->
<form class="content" action="delete_company.php" method="POST">
  <div class="row">
    <div class="col-lg-12 col-md-12">
      <div class="card card-tasks">
        <div class="card-header ">
          <h6 class="title d-inline">Company Details</h6>
          <p class="card-category d-inline">Here is all Details</p>
          <div class="dropdown">
            <button type="button" class="btn btn-link dropdown-toggle btn-icon" data-toggle="dropdown">
            <i class="tim-icons icon-settings-gear-63"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="add_company.php">
                <label class="btn btn-sm btn-primary btn-simple active" id="0">
                  <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Add new Company</span>
                  <span class="d-block d-sm-none">
                    <i class="tim-icons icon-single-02"></i>
                  </span>
                </label>
              </a>
              <button type="submit" name="delete" class="dropdown-item">
                <label class="btn btn-sm btn-primary btn-simple active" id="0">
                  <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Delete Companies</span>
                  <span class="d-block d-sm-none">
                    <i class="tim-icons icon-single-02"></i>
                  </span>
                </label>
              </button>
            </div>
          </div>
        </div>
        <?php
        include '../db.php';
        $select_qry = "SELECT * FROM company";
        $select_qry_run = mysqli_query($con, $select_qry);
        $row = mysqli_num_rows($select_qry_run);
        if ($row > 0) {
        while ($data = mysqli_fetch_array($select_qry_run)) {
        ?>
        <div class="card-body">
          <div class="table-full-width table-responsive">
            <table class="table">
              <tbody>
                <tr>
                  <td width="40px">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" name="check_item[]" type="checkbox" value=<?php echo $data['company_id'];?>>
                        <span class="form-check-sign">
                          <span class="check"></span>
                        </span>
                      </label>
                    </div>
                  </td>
                  <td>
                    <p class="title"><?php echo $data['company_name']; ?></p>
                    <p class="text-muted"><?php echo $data['company_person'];?></p>
                  </td>
                  <td class="td-actions text-right">
                    <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                    <a href="update_company.php?company_id=<?php echo $data['company_id']; ?>" >
                      <i class="tim-icons icon-pencil"></i>
                    </a>
                    </button>
                  </td>
                </tr>
                <?php
                }
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </form>
    <!-- End of product container -->
    <?php
    include "footer.php";
    ?>