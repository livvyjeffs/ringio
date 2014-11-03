<!-- variables are $opened, $first_name, $last_name, $phone_number, $row_number -->

<?php 

if($opened){
  $opened = "opened";
  $in_or_out = "in";
}else{
  $opened = "closed";
  $in_or_out = "";
}

if($checked){
  $checked="checked";
}else{
  $checked="";
}

if($img_src === undefined){
  $img_src="";
}

?>

<tr class="<?php echo $opened; ?>">
<td class="col-1"><input type="checkbox" <?php echo $checked; ?>></td>
  <td data-toggle="collapse" data-target="#demo<?php echo $row_number; ?>" class="accordion-toggle col-2"><img class="icon" src="<?php echo $img_src; ?>"><?php echo $first_name." ".$last_name ?></td>
  <td class="col-3"><span><?php echo $phone_number; ?></span></td>
  <td class="col-4">
    <span><?php echo $departments; ?></span>
    <div class="edit-options"> <button type="button" class="btn btn-ringio btn-cancel">Cancel</button>
      <button type="button" class="btn btn-ringio btn-save">Save</button></div>
    </td>
  </tr>
  <tr>
    <td colspan="4" class="hiddenRow">
      <div id="demo<?php echo $row_number; ?>" class="accordian-body collapse <?php echo $in_or_out; ?>">

        <div class="row data-container">

          <div class="row" data-label="personal-ringio-number">
            <label>Personal Ringio Number</label>
            <div data-type="phone-number"><?php echo $phone_number; ?></div>
          </div>

          <div class="row" data-label="data-rows">
            <div class="col-md-4"> 
              <label>First Name</label>
              <input type="text" placeholder="<?php echo $first_name; ?>">
            </div>
            <div class="col-md-4">
              <label>Last Name</label>
              <input type="text" placeholder="<?php echo $last_name; ?>">
            </div>
            <div class="col-md-4"> 
              <label>Email</label>
              <input type="text" placeholder="<?php echo $first_name; ?>@ringio.com">
            </div>
          </div>

          <div class="row" data-label="data-rows">
            <div class="col-md-4"> 
              <label>Departments</label>
              <input type="text" placeholder="Reseller Programs">
            </div>
            <div class="col-md-8">
              <label>Receive Calls At</label>
              <div class="row" data-label="data-rows">
                <div class="col-md-3">
                  <div class="dropdown">
                    <button class="btn btn-dropdown dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                      SIP
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-9">
                  <input type="text" placeholder="<?php echo $first_name; ?>@ringio.onsip.com">
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

    </td>
  </tr>