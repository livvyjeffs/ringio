<?php 

if($opened){
  $collapsed = "";
  $opened = "true";
  $in_or_out = "in";
}else{
  $collapsed = "collapsed";
  $opened= "false";
  $in_or_out = "";
}

?>

<tr data-toggle="collapse" data-target="#demo<?php echo $row_number; ?>" class="accordion-toggle <?php echo $collapsed; ?>" aria-expanded="<?php echo $opened; ?>">
  <td class="col-1 stay-visible"><?php echo $name; ?><span class="span-container"><span class="ringio-icon icon-users"></span><span class="user-number"><?php echo $user_number; ?></span></span></td>
  <td class="col-2 center"><?php echo $callers; ?></td>
  <td class="col-3"><?php echo $routing_method; ?></td>
  <td class="row edit-options stay-visible">
    <button type="button" class="btn btn-ringio btn-cancel stay-visible">Cancel</button>
    <button type="button" class="btn btn-ringio btn-save stay-visible">Save Changes</button>
  </td>
</tr>
<tr>
  <td colspan="5" class="hiddenRow">
    <div id="demo<?php echo $row_number; ?>" class="accordion-body collapse <?php echo $in_or_out; ?>">
      <div class="row data-container no-margin">
        <div class="col-md-12 data-container">
          <h1>General</h1>
          <div class="row">
            <div class="col-md-2">
              <label>Department Name</label>
            </div>
            <div class="col-md-10">
             <input type="text" placeholder="<?php echo $name; ?>">
           </div>
         </div>
       </div>
       <div class="col-md-12 data-container">
        <h1>Routing</h1>
        <div class="row">
          <div class="col-md-2">
            <label>Routing</label>
          </div>
          <div class="col-md-4">
           <?php $text="Smart Auto"; include("php_templates/dropdown.php"); ?>
         </div>
         <div class="col-md-6">
          <table>
            <thead>
              <tr>
                <th style="width: 180px">User</th>
                <th style="width: 80px">Order</th>
                <th></th>       
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <img>Sam Aparicio
                </td>
                <td>
                  <?php $text="1"; include("php_templates/dropdown.php"); ?>
                </td>
                <td>
                  <div class="close"></div>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="btn">Add User</div>
        </div>
      </div>
    </div>
    <div class="col-md-12 data-container">
      <h1>Audio</h1>
      <div class="row">
        <div class="col-md-3">
          <label>Before finding a User</label>
        </div>
        <div class="col-md-4">
          <?php $text="Technical Support"; include("php_templates/dropdown.php"); ?>
        </div>
        <div class="col-md-2 separator">
        </div>
        <div class="col-md-3">
          <div class="btn">Upload Sound File</div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <label>No one Available</label>
        </div>
        <div class="col-md-4">
          <?php $text="unavailable21.wav"; $left_icon = "icon-sound"; include("php_templates/dropdown.php"); ?>
        </div>
        <div class="col-md-2 separator">
        </div>
        <div class="col-md-3">
          <div class="btn">Upload Sound File</div>
        </div>
      </div>
    </div>
    <div class="col-md-12 data-container" option-container>
      <h1>Out of Hours</h1>
      <div class="row">
        <div class="col-md-2">
          <label>Business Hours</label>
        </div>
        <div class="col-md-3">
          <?php $text="Custom Hours"; include("php_templates/dropdown.php"); ?>
        </div>
        <div class="col-md-1">
          <label>Start</label>
        </div>
        <div class="col-md-2">
         <?php $text="09:00"; include("php_templates/dropdown.php"); ?> 
       </div>
       <div class="col-md-1">
        <label>Finish</label>
      </div>
      <div class="col-md-2">
       <?php $text="15:20"; include("php_templates/dropdown.php"); ?> 
     </div>
   </div>
 </div>

</div>

</td>
</tr>