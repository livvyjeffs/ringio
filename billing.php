<!DOCTYPE html>

<?php $page_title = "Billing"; include_once("php_templates/external-header.php"); ?>

<?php include("php_templates/page-header.php"); ?>

<div class="row no-margin">
  <div class="col-md-8">
    <div class="row no-margin">
      <div id="billing-front-and-center" class="panel panel-body">
        <div data-label="personal-ringio-number">
          <label>Account Type</label>
          <div data-type="phone-number">Premium Account</div>
        </div>
        <div class="col-md-6">
          <ul>
            <li><span class="ringio-icon icon-check"></span>Access to all the features</li>
            <li><span class="ringio-icon icon-check"></span>Technical Support by phone</li>
            <li><span class="ringio-icon icon-check"></span>Another Feature</li>
          </ul>
        </div>
        <div class="col-md-6">
          <ul>
            <li><span class="ringio-icon icon-caret"></span>Ringio Pricing Explained</li>
            <li><span class="ringio-icon icon-caret"></span>Next Payment 03/27/2013</li>
            <li><span class="ringio-icon icon-caret"></span>Paid for 12 Users</li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div id="billing-monthly-fees" class="panel panel-ringio">
           <div class="panel-heading">
             <span class="ringio-icon icon-monthly-fees"></span>
             Monthly Fees</div>
             <div class="panel-body">
              <ul>
                <li>
                  <h1>Ringio Base</h1>
                  <p>4 Users / 1 Number<span class="price">$99.00</span></p>
                  <p>4 Lines / 2000 Minutes</p>
                </li>
                <li>
                  <p>8 Extra Users<span class="price">$200.00</span></p>
                </li>
                <li>
                  <p>Call Recording<span class="price">$200.00</span></p>
                </li>
                <li class="no-border">
                  <p>7 Extra Phone Numbers<span class="price">$70.00</span></p>
                </li>
                <li class="total">
                  <p><b>Total</b> on 03/27/2013<span class="price">$489.00</span></p>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div id="billing-billing-details" class="panel panel-ringio">
           <div class="panel-heading">
             <span class="ringio-icon icon-billing-details"></span>
             Billing Details</div>
             <div class="panel-body">
              <ul>
                <li>
                  <p>Customer Since<span class="date">03/27/2012</span></p>
                </li>
                <li>
                  <p>Card #<span class="card-number">XXXX-XXXX-XXXX-7732</span></p>
                </li>
                <li class="no-border">
                  <p>Expiration Date<span class="date">11/2015</span></p>
                </li>
                <li class="last-row">
                  <div class="row no-margin">
                    <div class="col-md-6">
                      <a class="btn">Update Details</a>
                    </div>
                    <div class="col-md-6">
                      <a href="billing-history.php" class="btn">Account History</a>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="authorization-container center">
            <img src="images/authorize.png">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="panel panel-side">
      <div class="panel-heading">
        Information
      </div>
      <div class="panel-body" style="height: 400px">
      </div>
    </div>
  </div>
</div>

</div>

</div> <!-- /container -->


<?php $page_title = "Users"; include_once("php_templates/footer.php"); ?>
