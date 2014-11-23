<!DOCTYPE html>

<?php $page_title = "Premium Features"; include_once("php_templates/header.php"); ?>

<?php include("php_templates/page-header.php"); ?>

<div class="row no-margin">
  <div class="col-md-9">
    <div class="row no-margin">
      <div class="panel">
        <div class="panel-heading solo">
          <span class="ringio-icon icon-call-queueing"></span>Call Queueing
          <div class="make-switch">
            <input type="checkbox">
          </div>
        </div>
      </div>
    </div>
    <div class="row no-margin">
      <div class="panel">
        <div class="panel-heading">
          <span class="ringio-icon icon-call-recording"></span>Call Recording
        </div>
        <div class="panel-body">
          <div class="row outer-container no-margin">
            <div class="col-md-12 data-container" option-container>
             <div class="row" option>
               <div class="col-md-8">
                 <div class="input-group option-input-group input-group-sm">
                  <span class="input-group-addon">
                    <input type="radio" option-controller>
                  </span>
                  <div class="form-control"><label>User selects which calls to record</label></div>
                </div><!-- /input-group -->
              </div>
            </div>
            <div class="row" option>
             <div class="col-md-3">
               <div class="input-group option-input-group input-group-sm">
                <span class="input-group-addon">
                  <input type="radio" option-controller>
                </span>
                <div class="form-control"><label>Automatic</label></div>
              </div><!-- /input-group -->
            </div>
            <div class="col-md-1 separator">
            </div>
            <div class="col-md-6">
              <div class="input-group option-input-group input-group-sm option">
                <span class="input-group-addon">
                  <input type="checkbox" checked>
                </span>
                <div class="form-control"><label>All incoming company calls</label></div>
              </div><!-- /input-group -->
              <div class="input-group option-input-group input-group-sm option">
                <span class="input-group-addon">
                  <input type="checkbox" checked>
                </span>
                <div class="form-control"><label>All incoming personal calls</label></div>
              </div><!-- /input-group -->
              <div class="input-group option-input-group input-group-sm option">
                <span class="input-group-addon">
                  <input type="checkbox" checked>
                </span>
                <div class="form-control"><label>All outgoing calls</label></div>
              </div><!-- /input-group -->
            </div>
          </div>
        </div>
        <div class="col-md-12 data-container" option-container>
          <h1>Disclosure</h1>
          <div class="row">
            <div class="col-md-12">
              You are responsible for ensuring that yoru users comply with all applicable call recording laws. At your discretion, the system may automatically disclose that a call is being recorded, or you may disable automatic disclosure and train your users to disclose that the call is being recorded as part of the conversation whenever appropriate.
            </div>
          </div>
          <div class="row" option>
            <div class="col-md-8">
             <div class="input-group option-input-group input-group-sm">
              <span class="input-group-addon">
                <input type="checkbox">
              </span>
              <div class="form-control"><label>Do not play any call recording warnings.</label></div>
            </div><!-- /input-group -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="row no-margin">
  <div class="panel">
    <div class="panel-heading">
      <span class="ringio-icon icon-other-settings"></span>Other Settings</div>
      <div class="panel-body">
        <div class="row outer-container no-margin">
          <div class="col-md-12 data-container" option-container>
           <h1>Call Whisper</h1>
           <div class="row" option>
             <div class="col-md-8">
               <div class="input-group option-input-group input-group-sm">
                <span class="input-group-addon">
                  <input type="radio" option-controller>
                </span>
                <div class="form-control"><label>Allow users to accept/reject incoming calls.</label></div>
              </div><!-- /input-group -->
            </div>
          </div>
          <div class="row" option>
            <div class="col-md-8">
             <div class="input-group option-input-group input-group-sm">
              <span class="input-group-addon">
                <input type="radio" option-controller>
              </span>
              <div class="form-control"><label>Connect users to caller on hold.</label></div>
            </div><!-- /input-group -->
          </div>
        </div>
      </div>
      <div class="col-md-12 data-container" option-container>
       <h1>Email Notification</h1>
       <div class="row" option>
        <div class="col-md-10">
         <div class="input-group option-input-group input-group-sm">
          <span class="input-group-addon">
            <input type="checkbox">
          </span>
          <div class="form-control"><label>Email users when they receive a voicemail or callback request.</label></div>
        </div><!-- /input-group -->
      </div>
    </div>
    <div class="row" option>
     <div class="col-md-10">
       <div class="input-group option-input-group input-group-sm">
        <span class="input-group-addon">
          <input type="checkbox">
        </span>
        <div class="form-control"><label>Connect users to caller on hold.</label></div>
      </div><!-- /input-group -->
    </div>
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
