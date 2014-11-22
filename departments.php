<!DOCTYPE html>

<?php $page_title = "Departments"; include_once("php_templates/header.php"); ?>

<?php include("php_templates/page-header.php"); ?>

<!-- Begin Main Content Container -->
 
 <div class="row no-margin">
  <div class="col-md-8">
    <table id="departments-table" class="table table-condensed panel panel-default">
      <thead>
        <tr>
          <th style="width: 230px">Name</th>
          <th style="width: 180px">Callers</th>
          <th>Routing Method</th>
        </tr>
      </thead>
      <tbody>

        <?php $name = "Sales"; $callers = "703-405-0068"; $routing_method = "Escalating"; $user_number = "2"; $row_number = 1; $opened=false; include("php_templates/table_rows/row-departments.php"); ?>
        <?php $name = "Technical Support"; $callers = "703-405-0068"; $routing_method = "Escalating"; $user_number = "1"; $row_number = 2; $opened=true; include("php_templates/table_rows/row-departments.php"); ?>
        <?php $name = "Customer Support"; $callers = "703-405-0068"; $routing_method = "Escalating"; $user_number = "9"; $row_number = 3; $opened=false; include("php_templates/table_rows/row-departments.php"); ?>
      
      </tbody>
    </table>

  </div>
  
  <div class="col-md-4">
  <div class="row no-margin">
    <div class="panel panel-side">
      <div class="panel-heading">
        Departments Help
        <span class="icon-close ringio-icon btn"></span>
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
 <div class="row no-margin">
  <div class="panel panel-side">
      <div class="panel-heading">
        Routing Help
         <span class="icon-close ringio-icon btn"></span>
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
</div>

</div> <!-- /container -->

<?php $page_title = "Users"; include_once("php_templates/footer.php"); ?>
