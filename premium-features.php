<!DOCTYPE html>

<?php $page_title = "Premium Features"; include_once("php_templates/header.php"); ?>

<?php include("php_templates/page-header.php"); ?>

<div class="row no-margin">
  <div class="col-md-9">
    <div class="panel panel-ringio">
      <div class="panel-heading">Call Queueing</div>
    </div>
    <div class="panel panel-ringio">
      <div class="panel-heading">Call Recording</div>
      <div class="panel-body">
       <div class="col-md-12 data-container" option-container>
         <h1>Recording</h1>
         <div class="row" option>
          <div class="col-md-3">
            <div class="option">
              <input type="radio" name="greeting" value="automatic" checked option-controller>
              <label>Automatic</label>
            </div><!-- /input-group -->
          </div>
          <div class="col-md-1 separator ringio-icon">
          </div>
          <div class="col-md-6">
            <div class="option">
              <input type="checkbox" checked><label>All incoming company calls</label>
            </div>
            <div class="option">
              <input type="checkbox" checked><label>All incoming personal calls</label>
            </div>
            <div class="option">
              <input type="checkbox" checked><label>All outgoing calls</label>
            </div>
           
          </div>
        </div>
        <div class="row" option>
          <div class="col-md-3">
           <div class="option">
            <input type="radio" name="greeting" value="custom" option-controller>
            <label>Custom</label>
          </div><!-- /input-group -->
        </div>
        <div class="col-md-1 separator ringio-icon">
        </div>
        <div class="col-md-6">
          <div class="option no-padding">
            <?php $text="file212.wav"; include("php_templates/dropdown.php"); ?>
          </div>
          <button class="btn btn-ringio btn-upload">Upload Sound File</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="panel panel-ringio">
  <div class="panel-heading">Call Settings</div>
  <div class="panel-body">
    <div class="data-container">
      <h1>Recording</h1>
      <div class="row">
        <div class="col-md-6">
         <div class="option">
          <input type="radio"><label>User selects which calls to record</label>
        </div>
      </div>
    </div>

  </div>
</div>
</div>
</div>
<div class="col-md-3">
  <div class="panel panel-side">
    <div class="panel-heading">Information</div>
    <div class="panel-body" style="height: 400px"></div>
  </div>
</div>
</div>

</div>

</div> <!-- /container -->


<?php $page_title = "Users"; include_once("php_templates/footer.php"); ?>
