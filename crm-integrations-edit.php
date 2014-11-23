<!DOCTYPE html>

<?php $page_title = "CRM Integrations Edit"; $sub_page = "edit"; include_once("php_templates/header.php"); ?>

<?php include("php_templates/page-header.php"); ?>

<!-- Begin Main Content Container -->

<div class="row no-margin">
  <div class="col-md-8">
    <div class="row no-margin option">
     <div id="crm-integrations-status" class="panel">
       <div class="logo">
        <img src="images/company_logos/highrise.png">
      </div>
      <div class="status-authorization">
        <p class="authorized"><span class="ringio-icon icon-check-green"></span>Authorized</p>
        <p class="date">03/28/2012 12:35AM</p>
      </div>
      <div class="btn btn-revoke-access" role="button">Revoke Access</div>
    </div>
  </div>

  <div class="row no-margin">
   <div id="crm-integrations-edit" class="panel">
    <div class="panel-heading"><span class="ringio-icon icon-key"></span>Tokens & Users</div>
    <div class="panel-body">
      <?php $key = "123laks13djflakjl1kj23897lksjfalk"; $email = "sam@ringio.com"; include("php_templates/table_rows/rows-crm-edit.php"); ?>
      <?php $key = "42y4lkaks13djflakjl1kj2389lkjlakd"; $email = "daniel@ringio.com"; include("php_templates/table_rows/rows-crm-edit.php"); ?>
      <?php $key = "z23laks1312l3kj97lksjfadslkfjl3alk"; $email = "jon@ringio.com"; include("php_templates/table_rows/rows-crm-edit.php"); ?>
    </div>
  </div>
</div>

</div>
<div class="col-md-4">
  <div class="row no-margin">
    <div class="panel panel-side">
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
</div>

</div> <!-- /container -->

<?php $page_title = "Users"; include_once("php_templates/footer.php"); ?>
