<!DOCTYPE html>

<?php $page_title = "Dashboard"; include_once("php_templates/external-header.php"); ?>

<div class="row no-margin">
  <div class="col-md-7">
    <div class="row">
      <div class="col-md-6">
        <div id="dashboard-users" class="panel panel-ringio">
          <div class="panel-heading">Users<a href="users.php" class="btn ringio-icon right-side icon-users"></a></div>
          <ul class="panel-body">
            <?php $name = "Jack Bingham"; $status = "green"; include("php_templates/table_rows/dashboard-users.php"); ?>
            <?php $name = "Sam Aparicio"; $status = "green"; include("php_templates/table_rows/dashboard-users.php"); ?>
            <?php $name = "Valentina Genevive"; $status = "green"; include("php_templates/table_rows/dashboard-users.php"); ?>
            <?php $name = "Admin User"; $status = "red"; include("php_templates/table_rows/dashboard-users.php"); ?>
            <?php $name = "Admin User"; $status = "red"; include("php_templates/table_rows/dashboard-users.php"); ?>
          </ul>
        </div>
      </div>
      <div class="col-md-6">
       <div id="dashboard-departments" class="panel panel-ringio">
        <div class="panel-heading">Departments<a href="departments.php" class="btn ringio-icon right-side icon-departments"></a></div>
        <ul class="panel-body">
          <?php $name = "Sales"; $status = "green"; include("php_templates/table_rows/dashboard-departments.php"); ?>
          <?php $name = "Technical Support"; $status = "green"; include("php_templates/table_rows/dashboard-departments.php"); ?>
          <?php $name = "Reseller Programs"; $status = "green"; include("php_templates/table_rows/dashboard-departments.php"); ?>
          <?php $name = "Customer Service"; $status = "green"; include("php_templates/table_rows/dashboard-departments.php"); ?>
          <?php $name = "Administration"; $status = "red"; include("php_templates/table_rows/dashboard-departments.php"); ?>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="col-md-5">
 <div id="dashboard-phone-numbers" class="panel panel-ringio">
   <div class="panel-heading">Phone Numbers<a href="phone-numbers.php" class="btn ringio-icon right-side icon-phone"></a></div>
   <div class="panel-body white-bg">
     <div class="col-md-12">
      <ul>
        <li class="option">
          <label>Toll Free Number</label>
          <span class="phone-number">888-727-5776<span class="ringio-icon icon-settings"></span></span>
        </li>
        <li class="option">
          <label>Toll Free Number</label>
          <span class="phone-number">888-727-5776 <span class="ringio-icon icon-settings"></span></span>
        </li>
        <li class="btn option btn-add-new-number">Add New Number</li>
      </ul>
    </div>
  </div>
</div>
</div>
</div>
<div class="row no-margin">
  <div class="col-md-8">
    <div class="row no-margin">
     <div id="dashboard-crm-integrations" class="panel panel-ringio">
       <div class="panel-heading">
         <span class="ringio-icon icon-crm"></span>
         CRM Integrations<a href="crm-integrations.php" class="btn ringio-icon right-side btn-text">View All</a></div>
         <div class="panel-body data-container">
           <div class="col-md-6">
            <div class="thumbnail btn">
              <a class="logo">
                <img src="images/company_logos/google-contacts.png" alt="highrise">
              </a>
            </div>
            <div class="thumbnail btn">
              <a class="logo">
                <img src="images/company_logos/highrise.png" alt="highrise">
              </a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="thumbnail btn">
              <a class="logo">
                <img src="images/company_logos/batchbook-long.png" alt="highrise">
              </a>
            </div>
            <div class="thumbnail btn">
              <a class="logo">
                <img src="images/company_logos/zendesk.png" alt="highrise">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row no-margin">
      <div id="dashboard-get-the-most" class="panel panel-ringio">
       <div class="panel-heading">
         <span class="ringio-icon icon-get-the-most"></span>
         Getting the most out of Ringio</div>
         <div class="col-md-12 panel-body data-container">
           <div class="col-md-6">
            <div class="thumbnail">
              <div class="thumbnail-header">
                Video Tutorial Series
                <span class="ringio-icon icon-caret btn"></span>
              </div>
              <p>Learn how to add users, add Personal Numbers, configure teha uto-attendant, set your business hours and more.</p>
            </div>
            <div class="thumbnail">
              <div class="thumbnail-header">
                Sync with Gmail Contacts
                <span class="ringio-icon icon-caret btn"></span>
              </div>
              <p>
                Learn how to add users, add Personal Numbers, configure the auto-attendant, set your business hours and more.  
              </p>
            </div>
            <div class="thumbnail">
              <div class="thumbnail-header">
                Sync with CRM system
                <span class="ringio-icon icon-caret btn"></span>
              </div>
              <p>
                Learn how to add users, add Personal Numbers, configure the auto-attendant, set your business hours and more.
              </p>
            </div>
            <div class="thumbnail">
              <div class="thumbnail-header">
                Make or Order an Audio Greeting
                <span class="ringio-icon icon-caret btn"></span>
              </div>
              <p>
                Learn how to add users, add Personal Numbers, configure the auto-attendant, set your business hours and more.
              </p>
            </div>
          </div>
          <div class="col-md-6">
           <div class="thumbnail">
            <div class="thumbnail-header">
              Greeting and Routing Explained
              <span class="ringio-icon icon-caret btn"></span>
            </div>
            <p>
              Learn options to configure how to greet callers and route them to the right person or department.
            </p>
          </div>
          <div class="thumbnail">
            <div class="thumbnail-header">
              Call Somebody wtih Ringio
              <span class="ringio-icon icon-caret btn"></span>
            </div>
            <p>
              Learn options to configure how to greet callersa nd route them to the right person or department.
            </p>
          </div>
          <div class="thumbnail">
            <div class="thumbnail-header">
              VOIP Phone Configuration
              <span class="ringio-icon icon-caret btn"></span>
            </div>
            <p>
              Learn options to configure how to greet callers and route them to the right perosn or department.
            </p>
          </div>
          <div class="thumbnail">
            <div class="thumbnail-header">
              Record Personal Voicemail Greeting
              <span class="ringio-icon icon-caret btn"></span>
            </div>
            <p>
              Learn options to configure how to greet callers and route them to the right perosn or department.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-md-4">
<div class="row no-margin">
 <div id="dashboard-settings" class="panel panel-ringio">
   <div class="panel-heading">
     <span class="ringio-icon icon-settings"></span>
     Settings<span class="btn ringio-icon right-side btn-text">View All</span>
   </div>
   <ul class="panel-body">
    <li>
      <span class="ringio-icon icon-call-recording"></span>
      Call Recording
      <?php $text="On"; include("php_templates/dropdown.php"); ?>
    </li>
    <li>
      <span class="ringio-icon icon-screen-pop"></span>
      Screen Pop
      <?php $text="Parallel"; include("php_templates/dropdown.php"); ?>
    </li>
    <li>
      <span class="ringio-icon icon-call-whisper"></span>
      Call Whisper
      <?php $text="Off"; include("php_templates/dropdown.php"); ?>
    </li>
    <li>
      <span class="ringio-icon icon-email-notifications"></span>
      Email Notifications
      <?php $text="On"; include("php_templates/dropdown.php"); ?>
    </li>
    <li>
      <span class="ringio-icon icon-back-up-number"></span>
      Back Up Number
      <span class="phone-number">703-405-0068</span>
    </li>
  </ul>
</div>
</div>
<div class="row no-margin">
<div id="dashboard-support" class="panel panel-side">
 <div class="panel-heading">
   <img src="images/247support.png">
 </div>
 <div class="panel-body">
 <div class="col-md-12">
<a class="btn btn-contact-support">Contact Support</a>
</div>
 </div>
 </div>
</div>
</div>
</div>
</div>
</div> <!-- /container -->


<?php $page_title = "Users"; include_once("php_templates/footer.php"); ?>
