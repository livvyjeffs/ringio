<!DOCTYPE html>

<?php $page_title = "Phone Numbers"; include_once("php_templates/header.php"); ?>

<?php include("php_templates/page-header.php"); ?>

<div class="row no-margin">
  <div class="col-md-8">
    <table id="phone-numbers-table" class="table table-condensed panel panel-default">
      <thead>
        <tr>
          <th class="col-1" style="width: 130px">Phone Number</th>
          <th class="col-2" style="width: 45px">Main</th>
          <th class="col-3" style="width: 230px">Label</th>
          <th class="col-4" style="width: 100px">Audio</th>
          <th class="col-5">Routing</th>
        </tr>
      </thead>
      <tbody>

        <?php $opened = false; $phone_number = "888-256-3845"; $row_number = 1; $main = "Yes"; $label="Ringio Toll Free Number"; $audio="Standard"; $routing = "normal"; include("php_templates/table_rows/row-phone-numbers.php"); ?>
        <?php $opened = true; $phone_number = "202-123-1234"; $row_number = 2; $main = "Yes"; $label="Ringio Toll Free Number"; $audio="Standard"; $routing = "normal"; include("php_templates/table_rows/row-phone-numbers.php"); ?>
        <?php $opened = false; $phone_number = "571-278-2504"; $row_number = 3; $main = "Yes"; $label="Marketing Campaign Verio"; $audio="Standard"; $routing = "normal"; include("php_templates/table_rows/row-phone-numbers.php"); ?>
        <?php $opened = false; $phone_number = "202-278-2504"; $row_number = 4; $main = "Yes"; $label="August Radio"; $audio="Standard"; $routing = "normal"; include("php_templates/table_rows/row-phone-numbers.php"); ?>
        <?php $opened = false; $phone_number = "571-278-2504"; $row_number = 5; $main = "Yes"; $label="Radio Campaign San Fran August"; $audio="Standard"; $routing = "normal"; include("php_templates/table_rows/row-phone-numbers.php"); ?>
        <?php $opened = false; $phone_number = "202-123-1234"; $row_number = 6; $main = "Yes"; $label="202-480-9944"; $audio="Standard"; $routing = "normal"; include("php_templates/table_rows/row-phone-numbers.php"); ?>

      </tbody>
    </table>
  </div>
  <div class="col-md-4">
    <div class="panel">
      <div class="panel-heading">
        Greeting & Routing Help
      </div>
      <div class="panel-body">
        <table>
          <tr>
            <td class="table-image">
              <span class="ringio-icon bulb"></span>
            </td>
            <td class="table-text">
             These settings determine how calls get routed and how the system greets your callers.
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
            <b>Automatic Greeting &ndash;</b> A series of audio prompts from the Departments and Extensions you have entered in to the system.
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
           <b>Custom Greeting &ndash;</b> Upload an audio faile that greets your callers. Make sure to include all the choices the caller should know about.
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
         <b>Routing &ndash;</b> By default, Ringio uses the info you entered on Departments and Users to route the call based on input from the caller.
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
       <b>After Hours &ndash;</b> If you'd rather not answer live phone calls after business hours, activate the after hours option.
     </td>
   </tr>
 </table>
</div>
</div>
</div>
</div>

</div> <!-- /container -->


<?php $page_title = "Users"; include_once("php_templates/footer.php"); ?>
