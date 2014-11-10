  <?php 
  $key; 
  $email;
  ?>

  <tr>
  	<td>
  		<div class="row option no-margin">
  			<div class="col-md-6 right-half-padding">
  					<input type="text" placeholder="<?php echo $key; ?>">
  				</div>
  				<div class="col-md-4 right-half-padding">
  					<div class="dropdown">
  						<button class="btn btn-dropdown dropdown-toggle" type="button" id="greetingDropdown" data-toggle="dropdown">
  							<span class="icon-user ringio-icon"></span><?php echo $email; ?>
  							<span class="icon-toggle ringio-icon"></span>
  						</button>
  						<ul class="dropdown-menu" role="menu" aria-labelledby="greetingDropdown">
  							<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
  							<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
  							<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
  						</ul>
  					</div>
  				</div>
  				<div class="col-md-1 right-half-padding">
  					<span class="btn icon-refresh ringio-icon"></span>
  				</div>
  				<div class="col-md-1 border-left">
  					<span class="btn icon-delete ringio-icon"></span>
  				</div>
  		
  		</div>
  	</td>
  </tr>