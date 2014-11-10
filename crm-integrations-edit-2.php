<!DOCTYPE html>

<?php $page_title = "CRM Integrations Edit"; $sub_page = "edit"; include_once("php_templates/header.php"); ?>

<!-- Begin Main Content Container -->

<div class="container">

  <?php include("php_templates/page-header.php"); ?>
  
  <div class="row">
    <div class="col-md-9 crm-edit">
     <div class="col-md-12 panel">
       <div class="col-md-12 panel-header"></div>
       <div class="row">
         <div class="col-md-12 vcentered">
          <div class="logo">
            <img src="images/company_logos/highrise.png">
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-4">
            <input type="text" placeholder="tlkjaldskfjalsdkjf">
          </div>
        </div>
        <div class="col-md-12"></div>
      </div>
    </div>
  </div>

<!-- PANEL BEGINS -->


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
