<!DOCTYPE html>

<?php $page_title = "CRM Integrations Edit"; $sub_page = "edit"; include_once("php_templates/header.php"); ?>

<!-- Begin Main Content Container -->

<div class="container">

  <?php include("php_templates/page-header.php"); ?>
  
  <div class="row no-margin">
    <div class="col-md-9 crm-edit">
      <!-- <table class="table table-condensed panel panel-default one-row-table">
        <thead>
          <th style="width: 80px"></th>
          <th style="width: 300px"></th>
          <th></th>
        </thead>
      </table> -->
      <div class="col-md-12 option">
      <div class="row">
        <div class="col-md-3">
          <div class="logo">
            <img src="images/company_logos/highrise.png">
          </div>
        </div>
        <div class="col-md-6 vcentered">
          <div>
            <span></span><span>Authorized</span>
            <p>03/28/2012 12:35AM</p>
          </div>
        </div>
        <div class="col-md-3 vcentered">
          <button class="btn btn-revoke-access">Revoke Access</button>
        </div>
      </div>
      </div>
      <table class="table table-condensed panel panel-default one-row-table">
        <thead>
          <th class="panel-heading"><span class="ringio-icon icon-key"></span>Tokens & Users</th>
        </thead>
        <tbody>
          <?php $key = "123laks13djflakjl1kj23897lksjfalk"; $email = "sam@ringio.com"; include("php_templates/table_rows/crm-edit.php"); ?>
          <?php $key = "42y4lkaks13djflakjl1kj2389lkjlakd"; $email = "daniel@ringio.com"; include("php_templates/table_rows/crm-edit.php"); ?>
          <?php $key = "z23laks1312l3kj97lksjfadslkfjl3alk"; $email = "jon@ringio.com"; include("php_templates/table_rows/crm-edit.php"); ?>
        </tbody>
      </table>
    </div>
    <div class="col-md-3">
      <div class="panel">
        <div class="panel-heading">
          CRM Plugin Configuration
        </div>
        <div class="panel-body">

          <table>
            <tr>
              <td class="table-image">
                <span class="ringio-icon bulb"></span>
              </td>
              <td class="table-text">
                Click on Authorize to give the plugin access to your account data.
              </td>
            </tr>
          </table>

        </div>
        <div class="panel-body">

          <table>
            <tr>
              <td class="table-image">
                <span class="ringio-icon bulb"></span>
              </td>
              <td class="table-text">
                Click Revoke Access to uninstall and revoke access from your data.
              </td>
            </tr>
          </table>

        </div>

      </div>
    </div>
  </div>
</div>

</div> <!-- /container -->

<?php $page_title = "Users"; include_once("php_templates/footer.php"); ?>
