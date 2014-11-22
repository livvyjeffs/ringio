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
           <div class="col-md-8">
            <div class="option option-input-group">
              <input type="radio" name="recording" value="custom" option-controller>
              <label>User selects which calls to record</label>
            </div><!-- /input-group -->
          </div>
        </div>
        <div class="row" option>
          <div class="col-md-3">
            <div class="option option-input-group">
              <input type="radio" name="recording" value="automatic" checked option-controller>
              <label>Automatic</label>
            </div><!-- /input-group -->
          </div>
          <div class="col-md-1 separator ringio-icon">
          </div>
          <div class="col-md-6">
            <div class="option option-input-group">
              <input type="checkbox" checked><label>All incoming company calls</label>
            </div>
            <div class="option option-input-group">
              <input type="checkbox" checked><label>All incoming personal calls</label>
            </div>
            <div class="option option-input-group">
              <input type="checkbox" checked><label>All outgoing calls</label>
            </div>

          </div>
        </div>
      </div>
      <div class="col-md-12 data-container" option-container>
        <h1>Disclosure</h1>
        <div class="row">
          <div class="col-md-12">
            You are responsible for ensuring that yoru users comply with all applicable call recording laws. At your descrtion, the system may automatically disclose that a call is being recorded, or you may disable automatic disclosure and train your users to disclose that the call is being recorded as part of the conversation whenever appropriate.
          </div>
        </div>
        <div class="row" option>
         <div class="col-md-8">
          <div class="option option-input-group">
            <input type="checkbox">
            <label>Do not play any call recording warnings.</label>
          </div><!-- /input-group -->
        </div>
      </div>

    </div>
  </div>
</div>
<div class="panel panel-ringio">
  <div class="panel-heading">Other Settings</div>
  <div class="panel-body">
   <div class="col-md-12 data-container" option-container>
     <h1>Call Whisper</h1>
     <div class="row" option>
       <div class="col-md-8">
        <div class="option">
          <input type="radio" name="whisper" value="accept" option-controller>
          <label>Allow users to accept/reject incoming calls.</label>
        </div><!-- /input-group -->
      </div>
    </div>
    <div class="row" option>
     <div class="col-md-8">
      <div class="option">
        <input type="radio" name="whisper" value="hold" option-controller>
        <label>Connect users to caller on hold.</label>
      </div><!-- /input-group -->
    </div>
  </div>

</div>
<div class="col-md-12 data-container" option-container>
 <h1>Email Notification</h1>
 <div class="row" option>
   <div class="col-md-10">
    <div class="option">
      <input type="checkbox">
      <label>Email users when they receive a voicemail or callback request.</label>
    </div><!-- /input-group -->
  </div>
</div>
<div class="row" option>
 <div class="col-md-10">
  <div class="option">
    <input type="checkbox">
    <label>Connect users to caller on hold.</label>
  </div><!-- /input-group -->
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
