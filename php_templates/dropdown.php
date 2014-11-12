<?php 

$classes="";

if($left_icon===null){
	$left_icon="";
}else{
	$left = "<span class='".$left_icon." ringio-icon'></span>";
}

?>

<div class="dropdown <?php echo $classes; ?>">
	<button class="btn btn-dropdown dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown">
		<?php echo $left; ?>
		<?php echo $text; ?>
		<span class="icon-toggle ringio-icon"></span>
	</button>
	<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu2">
		<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
		<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
		<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
	</ul>
</div>