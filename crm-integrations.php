<!DOCTYPE html>

<?php $page_title = "CRM Integrations"; include_once("php_templates/header.php"); ?>

<!-- Begin Main Content Container -->

<div class="container">

  <?php include("php_templates/page-header.php"); ?>
  
  <div class="row no-margin">
    <div class="col-md-4">
      <?php $company_name = "Google Contacts"; $company_logo = "google-contacts.png"; include("php_templates/thumbnails/crm.php"); ?>
      <?php $company_name = "Batchbook"; $company_logo = "batchbook.png"; include("php_templates/thumbnails/crm.php"); ?>
      <?php $company_name = "CRM"; $company_logo = "crm-1.png"; include("php_templates/thumbnails/crm.php"); ?>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <div class="btn-close"></div>
        <div class="logo">
          <img src="images/company_logos/highrise.png" alt="highrise">
        </div>
        <div class="caption">
          <p>Lorem ipsum dolor sit amet, consectetur aipscin elit. Vivamus luctus urna sed urna ultices. Lorem ipsum dolor sit amet, consectetur aipscin elit. Vivamus luctus urna sed urna ultices. Lorem ipsum dolor sit amet, consectetur aipscin elit. Vivamus luctus urna sed urna ultices.</p>
        </div>
      </div>
      <?php $company_name = "Zoho CRM"; $company_logo = "zoho.png"; include("php_templates/thumbnails/crm.php"); ?>
      <?php $company_name = "CRM"; $company_logo = "crm-2.png"; include("php_templates/thumbnails/crm.php"); ?>
    </div>
    <div class="col-md-4">

    </div>
  </div>

</div> <!-- /container -->


<?php $page_title = "Users"; include_once("php_templates/footer.php"); ?>
