<!DOCTYPE html>

<?php $page_title = "Departments"; include_once("php_templates/header.php"); ?>

<!-- Begin Main Content Container -->

<div class="container">
  <div class="row">
    <div class="page-header">
     <ul class="media-list">
      <li class="media">
        <span class="pull-right glyphicon glyphicon-user large"></span>
        <div class="media-body">
          <h1 class="media-heading">Phone Numbers</h1>
          <h2 class="media-heading">& Routing</h2>
        </div>
      </li>
    </ul>
    <h1>Example page header <small>Subtext for header</small></h1>
  </div>
</div>
<div class="row ringio-container">
  <div class="col-md-8">
    <table id="users_table" class="table table-condensed panel panel-default table-ringio">
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

        <?php $opened = false; $phone_number = "888-256-3845"; $row_number = 1; $main = "Yes"; $label="Ringio Toll Free Number"; $audio="Standard"; $routing = "normal"; include("php_templates/table_rows/departments.php"); ?>
        <?php $opened = true; $phone_number = "202-123-1234"; $row_number = 2; $main = "Yes"; $label="Ringio Toll Free Number"; $audio="Standard"; $routing = "normal"; include("php_templates/table_rows/departments.php"); ?>
        <?php $opened = false; $phone_number = "571-278-2504"; $row_number = 3; $main = "Yes"; $label="Marketing Campaign Verio"; $audio="Standard"; $routing = "normal"; include("php_templates/table_rows/departments.php"); ?>
        <?php $opened = false; $phone_number = "202-278-2504"; $row_number = 4; $main = "Yes"; $label="August Radio"; $audio="Standard"; $routing = "normal"; include("php_templates/table_rows/departments.php"); ?>
        <?php $opened = false; $phone_number = "571-278-2504"; $row_number = 5; $main = "Yes"; $label="Radio Campaign San Fran August"; $audio="Standard"; $routing = "normal"; include("php_templates/table_rows/departments.php"); ?>
        <?php $opened = false; $phone_number = "202-123-1234"; $row_number = 6; $main = "Yes"; $label="202-480-9944"; $audio="Standard"; $routing = "normal"; include("php_templates/table_rows/departments.php"); ?>

      </tbody>
    </table>

  </div>
  <div class="col-md-4">
    <div class="panel panel-ringio">
      <span class="ringio-icon tip"></span>
      <div class="panel-heading">
        Users Help
        <div class="close">x</div>
      </div>
      <div class="panel-body">

        <table>
          <tr>
            <td class="table-image">
              <span class="ringio-icon bulb"></span>
            </td>
            <td class="table-text">
              <p>The first user in the list is the Administrator. You can edit the profiles of each user, add or remove users, or change where they receive their calls.</p>
              <p><a href="#">Set up more Administrators.</a></p>
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
            <p>Want to see a picture for each user? Ask them to register for a <a href="#">Gravatar</a> with their sign in email.</p>
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
           <p>Have a PBX or want extensions?</p>
           <p><a href="#">Configure Ringio Extensions.</a></p>
         </td>
       </tr>
     </table>
   </div>
 </div>
</div>
</div>

</div> <!-- /container -->


<?php $page_title = "Users"; include_once("php_templates/footer.php"); ?>
