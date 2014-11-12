<!DOCTYPE html>

<?php $page_title = "Billing History"; include_once("php_templates/external-header.php"); ?>

<?php include("php_templates/page-header.php"); ?>

<div class="row no-margin">

    <table id="billing-history" class="table table-condensed panel panel-default">
      <thead>
        <tr>
          <th class="col-1" style="width: 95px">Date</th>
          <th class="col-2" style="width: 150px">Type</th>
          <th class="col-3" style="width: 430px">Description</th>
          <th class="col-4" style="width: 95px">Amount</th>
          <th class="col-5">Status</th>
        </tr>
      </thead>
      <tbody>

        <?php $date = "03/27/2012"; $type = "Payment"; $description = "Prorated credit for (Ringio) New Base Subscription"; $amount = "$1000"; $status = "successful";  include("php_templates/table_rows/row-billing-history.php"); ?>
        <?php $date = "03/27/2012"; $type = "Charge"; $description = "Extra User: 6 Users"; $amount = "$150"; $status = "failed"; include("php_templates/table_rows/row-billing-history.php"); ?>
        <?php $date = "03/27/2012"; $type = "Charge"; $description = "Extra User: 6 Users"; $amount = "$150"; $status = "successful";  include("php_templates/table_rows/row-billing-history.php"); ?>
        <?php $date = "03/27/2012"; $type = "Charge"; $description = "Extra User: 6 Users"; $amount = "$150"; $status = "successful"; include("php_templates/table_rows/row-billing-history.php"); ?>
        <?php $date = "03/27/2012"; $type = "Charge"; $description = "Extra User: 6 Users"; $amount = "$150"; $status = "successful";  include("php_templates/table_rows$150/row-billing-history.php"); ?>
        <?php $date = "03/27/2012"; $type = "Charge"; $description = "Extra User: 6 Users"; $amount = "$150"; $status = "successful"; include("php_templates/table_rows/row-billing-history.php"); ?>

      </tbody>
    </table>

    <div class="button-container">
      <div class="btn">Email History</div>
      <div class="btn">Export as CSV</div>
    </div>

</div>

</div> <!-- /container -->


<?php $page_title = "Users"; include_once("php_templates/footer.php"); ?>
