<!DOCTYPE html>

<?php $page_title = "CRM Integrations"; include_once("php_templates/header.php"); ?>

<?php include("php_templates/page-header.php"); ?>

<!-- Begin Main Content Container -->
  
  <div class="row no-margin">
    <div class="col-md-4">
      <?php $company_name = "Google Contacts"; $company_logo = "google-contacts.png"; include("php_templates/thumbnails/crm.php"); ?>
      <?php $company_name = "Batchbook"; $company_logo = "batchbook.png"; include("php_templates/thumbnails/crm.php"); ?>
      <?php $company_name = "CRM"; $company_logo = "crm-1.png"; include("php_templates/thumbnails/crm.php"); ?>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <div class="btn-close btn ringio-icon"></div>
        <div class="logo-small">
        <a href="crm-integrations-edit.php">
          <img src="images/company_logos/highrise.png" alt="highrise">
        </a>
        </div>
        <div class="caption">
          <p>Lorem ipsum dolor sit amet, consectetur aipscin elit. Vivamus luctus urna sed urna ultices. Lorem ipsum dolor sit amet, consectetur aipscin elit. Vivamus luctus urna sed urna ultices. Lorem ipsum dolor sit amet, consectetur aipscin elit. Vivamus luctus urna sed urna ultices. Lorem ipsum dolor sit amet, consectetur aipscin elit. Lorem ipsum dolor sit amet.</p>
        </div>
      </div> 
      <?php $company_name = "Zoho CRM"; $company_logo = "zoho.png"; include("php_templates/thumbnails/crm.php"); ?>
      <?php $company_name = "CRM"; $company_logo = "crm-2.png"; include("php_templates/thumbnails/crm.php"); ?>
    </div>
    <div class="col-md-4">
    <div class="row no-margin">
      <div class="panel panel-side">
        <div class="panel-heading">
          CRM Information
        </div>
        <div class="panel-body" style="height: 400px">


        </div>
</div>
      </div>
    </div>
  </div>
</div>

</div> <!-- /container -->


<?php $page_title = "Users"; include_once("php_templates/footer.php"); ?>
