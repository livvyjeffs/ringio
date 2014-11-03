<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>Ringio</title>

  <!-- Bootstrap core CSS -->
  <link href="style/main.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="js/ie-emulation-modes-warning.js"></script>

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="js/ie10-viewport-bug-workaround.js"></script>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>

    <body>

     <!-- Static navbar -->
     <?php include_once("php_templates/header.php"); ?>
     <!-- End Navigation Bar -->

     <!-- Begin Main Content Container -->

     <div class="container">
      <div class="row ringio-header">
        <ul class="media-list">
          <li class="media">
            <span class="pull-right glyphicon glyphicon-user large"></span>
            <div class="media-body">
              <h1 class="media-heading">Users</h1>
              <h2 class="media-heading">& Personal Numbers</h2>
            </div>
          </li>
        </ul>
      </div>
      <div class="row ringio-container">
        <div class="col-md-8">
          <table id="users_table" class="table table-condensed panel panel-default table-ringio">
            <thead>
              <tr>
                <th class="col-1" style="width: 40px">
                  <input type="checkbox"> 
                </th>
                <th style="width: 190px">Full Name</th>
                <th style="width: 180px">Receive Calls At</th>
                <th>Departments</th>
              </tr>
            </thead>
            <tbody>

              <?php $opened = false; $first_name = "Admin"; $last_name = ""; $phone_number = ""; $row_number = 1; $checked=true; $departments = ""; $img_src=""; include("php_templates/table_users_row.php"); ?>
              <?php $opened = true; $first_name = "Sam"; $last_name = "Aparacio"; $phone_number = "202-123-1234"; $row_number = 2; $checked=false; $departments = ""; $img_src="images/sam.png"; include("php_templates/table_users_row.php"); ?>
              <?php $opened = false; $first_name = "Ashish"; $last_name = "Soni"; $phone_number = "571-278-2504"; $row_number = 3; $checked=true; $departments = ""; $img_src=""; include("php_templates/table_users_row.php"); ?>
              <?php $opened = false; $first_name = "Michael"; $last_name = "Zirngibl"; $phone_number = "202-278-2504"; $row_number = 4; $checked=false; $departments = "Reseller Programs"; $img_src=""; include("php_templates/table_users_row.php"); ?>
              <?php $opened = false; $first_name = "Jon"; $last_name = "Yu"; $phone_number = "jon@ringio.onsip.com"; $row_number = 5; $checked=true; $departments = ""; $img_src=""; include("php_templates/table_users_row.php"); ?>
              <?php $opened = false; $first_name = "Nick"; $last_name = "Kleinschmidt"; $phone_number = "danny@ringio.onsip.com"; $row_number = 6; $checked=false; $departments = "Sales - Reseller Programs"; $img_src=""; include("php_templates/table_users_row.php"); ?>

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


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
    <script src="js/ringio.js"></script>

    <!-- <script src="tooltip-viewport.js"></script> -->

    <!-- Latest compiled and minified JavaScript -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->

  </body>
  </html>
